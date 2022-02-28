<?php

Class Member
{

//    public $apiKey = 'AIzaSyCZyFHKmSm73yX1QNAxahRWHhK5GsRvxkU';
    public $apiKey = 'zljvnbz3ys5ph9pfmfzkg0j2tz9xvprn7cmbcx';
    public $apiUrlGetMembers = 'http://cms.podgeevents.com/api2/get-members/key/';
    public $apiUrlGetPhoto = 'http://cms.podgeevents.com/api2/getphoto/key/';
    public $apiUrlGetDir = '/dir/150/photo/';
    public $xml = false;
    public $createFileMember = false;

    /* Get Data From XML */
    function get()
    {
        $fileXML = false;
        if((file_exists('members.xml'))){
            $fileXML = simplexml_load_file('members.xml');
        }

        if(empty($fileXML)){
            $this->updateCache();
        }

        $count_member_file = ($fileXML) ? count($fileXML) : 0;
        $count_member_api = ($this->xml !== false || !empty($this->xml)) ? count($this->xml) : 0;

        $file = false;
        if ($count_member_api > 0) {
            $file = $this->xml;
            if ($count_member_file == $count_member_api) {
                $file = $fileXML;
            } else {
                $this->createFileMember = true;
            }
        } else if ($count_member_file > 0) {
            $file = $fileXML;
        }

        if ($this->createFileMember) {
            $apiUrlGetPhoto = $this->apiUrlGetPhoto . $this->apiKey . $this->apiUrlGetDir;
            $xmlNew = new SimpleXMLElement('<xml/>');
            $i = 0;
            foreach ($this->xml as $item) {

                $First_Name = str_replace("'", '`', $item->First_Name);
                $Last_Name = str_replace("'", '`', $item->Last_Name);
                $Company_Name = str_replace("'", '`', $item->Company_Name);
                $Company_Name = str_replace('&', '&amp;', $Company_Name);
                $Job_Title = str_replace("'", '`', $item->Job_Title);
                $Job_Title = str_replace('&', '&amp;', $Job_Title);

                $member = $xmlNew->addChild('member');
                $member->addChild('first_name', $First_Name);
                $member->addChild('last_name', $Last_Name);
                $member->addChild('company_name', $Company_Name);
                $member->addChild('job_title', $Job_Title);
                if (!empty($item->Photo)) {
                    $result = $this->save_from_url($apiUrlGetPhoto . $item->Photo, 'members/' . $item->Photo);

                    if ($result) {
                        $member->addChild('photo', $apiUrlGetPhoto . $item->Photo);
                        $member->addChild('photoCache', 'members/' . $item->Photo);
                    } else {
                        $member->addChild('photo', false);
                        $member->addChild('photoCache', false);
                    }
                }
                $i++;
            }
            $xmlNew->saveXML('members.xml');
            $file = simplexml_load_file('members.xml');

        }

        $array = array();
        $str = false;
        if ($file !== false || !empty($file)) {
            foreach ($file as $item) {
                $arrayItem = array(
                    'First_Name' => (string)$item->first_name,
                    'Last_Name' => (string)$item->last_name,
                    'Company_Name' => (string)$item->company_name,
                    'Job_Title' => (string)$item->job_title,
                    'Photo' => false,
                    'photoCache' => false
                );
                if (!empty($item->photo)) {
                    $arrayItem['Photo'] = (string)$item->photo;
                }
                if (!empty($item->photoCache) && file_exists($item->photoCache)) {
                    $arrayItem['photoCache'] = (string)$item->photoCache;
                }
                $array[] = $arrayItem;
            }

            $str = json_encode($array);
        }

        return $str;
    }

    function updateCache()
    {
        $this->xml = simplexml_load_file($this->apiUrlGetMembers . $this->apiKey, 'SimpleXMLElement', LIBXML_NOCDATA);
        $this->createFileMember = true;
    }

    /* Save File From URL in Cache */
    function save_from_url($imgUrl, $fname)
    {
        if (!file_exists($fname)) {
            $imagetype = exif_imagetype($imgUrl);
            $im = false;
            if ($imagetype == 1) {
                $im = imagecreatefromgif($imgUrl);
                $image = imagegif($im, $fname);
            } else if ($imagetype == 2) {
                $im = imagecreatefromjpeg($imgUrl);
                $image = imagejpeg($im, $fname);
            } else if ($imagetype == 3) {
                $im = imagecreatefrompng($imgUrl);
                $image = imagepng($im, $fname);
            }
            imagedestroy($im);
            if ($image) {
                return true;
            }
            return false;
        }
        return true;
    }
}

?>