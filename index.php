<?php
require_once('Member.php');
$Member = new Member();
if ($_GET['updateMembers']) {
  $Member->updateCache();
}
$membersStr = $Member->get();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stodge Podge</title>
  <link media="all" rel="stylesheet" href="assets/css/vendor.min.css">
  <link media="all" rel="stylesheet" href="assets/css/styles.min.css">
  <link rel="preload" as="image" href="assets/images/loader-bg-min.jpg">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

  <link rel="icon" type="image/png" href="assets/images/group-213.png">
</head>

<body>
    <div class="loader">
    <img src="assets/images/loader-bg-min.jpg" alt="" class="loader-image">
    <div class="loader-wrap">
      <div class="loader-logo">
        <img src="assets/images/podge-logo-green.svg" alt="">
      </div>
      <p>Please fasten your seatbelts and enable sound, Podge Airways is preparing for take-off</p>
      <div class="loading hidden">
        <span>Loading...</span>
        <div class="loading-bar">
          <div class="bar-fill"></div>
        </div>
      </div>
      <button class="btn secondary" id="loader-btn">
        Click to enter
      </button>
      <p class="disclaimer"><strong>Disclaimer:</strong> In the event of an evacuation a prize will be awarded for the best emergency slide performance</p>
    </div>
  </div>
  <div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="header-nav">
          <div class="header-control">
            <div class="buttons desktop">
              <button class="flight-mode-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16.576" height="16.322" viewBox="0 0 16.576 16.322">
                  <path id="Path_18877" data-name="Path 18877" d="M152.128,186.572H150.88l2.823,7.377c-1.8.117-3.6.283-5.042.432l-2.092-2.428h-1.019l.882,2.674c-.552.064-.882.107-.882.107s.331.041.882.106l-.882,2.672h1.019l2.092-2.427c1.445.15,3.239.315,5.042.433l-2.823,7.376h1.248l1.287-1.663a4.678,4.678,0,0,0,.524.031,4,4,0,0,0,1.122-.145v-.826a3.843,3.843,0,0,0-.82-.126l1.084-1.4c.151.015.308.025.476.025a4,4,0,0,0,1.123-.145v-.827a3.833,3.833,0,0,0-.773-.121l1.565-2.021h.112c2.456,0,4.3-.235,4.3-.94s-1.842-.941-4.3-.941h-.112l-1.565-2.022a3.8,3.8,0,0,0,.773-.121v-.827a4.006,4.006,0,0,0-1.123-.145,4.756,4.756,0,0,0-.476.025l-1.084-1.4a3.847,3.847,0,0,0,.82-.125v-.827a4.024,4.024,0,0,0-1.122-.145,4.941,4.941,0,0,0-.524.03Z" transform="translate(-145.549 -186.572)" fill="#fff" />
                </svg>
              </button>
              <button class="wifi-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16.576" height="12.389" viewBox="0 0 16.576 12.389">
                  <path id="Path_9851" data-name="Path 9851" d="M.267,4.714A.837.837,0,0,1,.22,3.535a10.968,10.968,0,0,1,16.136,0,.834.834,0,0,1-1.226,1.131,9.306,9.306,0,0,0-13.683,0A.837.837,0,0,1,.267,4.714Zm8.02,4.849a1.413,1.413,0,1,1-1.413,1.414A1.415,1.415,0,0,1,8.288,9.562Zm2.287-.422A2.932,2.932,0,0,0,6,9.141.834.834,0,1,1,4.7,8.1a4.6,4.6,0,0,1,7.175,0,.834.834,0,1,1-1.3,1.045Zm2.288-2.229A.834.834,0,0,0,14.109,5.8a7.787,7.787,0,0,0-11.643,0A.834.834,0,0,0,3.713,6.911a6.119,6.119,0,0,1,9.15,0Z" transform="translate(0)" fill="#fff" />
                </svg>
              </button>
              <button class="sound-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="9.65" height="15" viewBox="0 0 9.65 15">
                  <path id="Sound" d="M.9,11.958H4.367l3.842,2.859a.9.9,0,0,0,1.441-.711V.892A.9.9,0,0,0,8.209.18L4.367,3.04H.9a.9.9,0,0,0-.9.889v7.155a.9.9,0,0,0,.9.874" transform="translate(0 0)" fill="#fff" />
                </svg>
              </button>
            </div>
            <div class="logo">
              <a href="index.html">
                <svg data-name="Group 1789" xmlns="http://www.w3.org/2000/svg" width="235.198" height="20.556" viewBox="0 0 235.198 20.556">
                  <defs>
                    <clipPath id="a">
                      <path data-name="Rectangle 3737" fill="none" d="M0 0h235.198v20.556H0z" />
                    </clipPath>
                  </defs>
                  <g data-name="Group 1786" clip-path="url(#a)" fill="#fff">
                    <path data-name="Path 9926" d="M9.272 20.239l1.022-4.888h3.956a8.912 8.912 0 006.171-2.01 9.585 9.585 0 002.929-5.477 8.369 8.369 0 00.186-1.7 6.372 6.372 0 00-.7-3 4.964 4.964 0 00-2.1-2.09 7.412 7.412 0 00-3.544-.758H6.827L2.621 20.239zm3.125-14.757h2.537a1.833 1.833 0 011.33.4A1.507 1.507 0 0116.666 7a4.406 4.406 0 01-.093.867 3.365 3.365 0 01-.823 1.683 2.567 2.567 0 01-1.934.634h-2.409zm25.414 14.045a9.14 9.14 0 004.114-3.279 15.913 15.913 0 002.367-5.94 13.742 13.742 0 00.263-1.594 14.21 14.21 0 00.078-1.438q0-3.745-2.305-5.507A10.076 10.076 0 0036.063.006a16.279 16.279 0 00-6.113 1.021 9.147 9.147 0 00-4.114 3.279 16.293 16.293 0 00-2.4 6 13.658 13.658 0 00-.341 3.032 7.22 7.22 0 001.068 4.1 6.239 6.239 0 003 2.351 12.287 12.287 0 004.5.758 16.384 16.384 0 006.142-1.022m-7.177-5.2a2.377 2.377 0 01-.7-1.917 9.849 9.849 0 01.278-2.1 6.875 6.875 0 011.609-3.6A4.207 4.207 0 0134.85 5.67a3.53 3.53 0 012.227.557 2.357 2.357 0 01.68 1.919 10.687 10.687 0 01-.278 2.166 7.04 7.04 0 01-1.607 3.524 4.056 4.056 0 01-3 1.081 3.447 3.447 0 01-2.242-.588m22.936 5.91a12.262 12.262 0 007.842-2.32q2.923-2.32 3.914-7.518a14.349 14.349 0 00.277-2.692 6.787 6.787 0 00-2.227-5.552A8.98 8.98 0 0057.469.316h-9.187l-4.207 19.923zm.246-14.633h1.738a4.727 4.727 0 012.459.51 2.24 2.24 0 01.823 2.057 11.63 11.63 0 01-.278 2.228 9.356 9.356 0 01-1.034 3 3.261 3.261 0 01-1.608 1.393 6.787 6.787 0 01-2.4.371h-1.734zm26.667 14.4a13.467 13.467 0 003.434-1.344l2.173-10.148h-9.157l-.866 4.053h3.619l-.432 2.041a8.566 8.566 0 01-2.413.31 5.47 5.47 0 01-2.846-.557 2.173 2.173 0 01-.866-1.98 7.62 7.62 0 01.062-.927c.042-.329.1-.691.186-1.083a5.464 5.464 0 012.148-3.651 7.55 7.55 0 014.254-1.083 20.375 20.375 0 013.078.217 10.442 10.442 0 012.552.711L86.612.9a18.187 18.187 0 00-6.095-.9q-5.879 0-9.357 2.661a12.629 12.629 0 00-4.563 7.7 13.151 13.151 0 00-.278 2.568 6.714 6.714 0 002.521 5.676 10.941 10.941 0 006.824 1.934 19.231 19.231 0 004.826-.541m20.479.232l1.022-4.919H93.14l.557-2.506h7.7l1.053-5.032h-7.7l.557-2.537h8.843l1.024-4.919h-15.5L85.469 20.24zm12.467 0l2.846-4.8h7.332l.9 4.8h4.177L125.314.316h-4.579l-11.817 19.923zm8.914-16.015l1.361 8.013h-6.1zm13.457 16.026L140.01.318h-4.176l-4.208 19.923zm7.734 0l1.391-6.59h3.28a1.8 1.8 0 011.176.279 1.822 1.822 0 01.465.959l1.237 5.352h4.332l-1.237-5.569a6.353 6.353 0 00-.356-1.237 2.808 2.808 0 00-.6-.866 6.939 6.939 0 003.411-2.069 7.345 7.345 0 001.716-3.5 5.7 5.7 0 00-.7-4.872q-1.371-1.81-4.528-1.81h-9.563l-4.208 19.923zm3.5-16.459h4.549q1.887 0 2.4.775A3.241 3.241 0 01154.118 7a3.643 3.643 0 01-1.426 2.458 4.78 4.78 0 01-2.722.727h-4.3zm18.654 16.459l6.619-12.749.959 12.746h3.836L185.918.315h-4.084l-5.94 13.485-.989-13.484h-3.4l-.525 2.6-5.568 10.859L165.25.316h-4.113l.434 19.923zm19.861 0l2.846-4.8h7.329l.9 4.8h4.176L197.424.318h-4.574l-11.821 19.923zm8.91-16.026l1.361 8.013h-6.095zm15.5 16.026l1.548-7.363L221.311.316h-4.455l-6.777 9-3-9h-4.239l4.486 12.562-1.547 7.363zm19.227-.4a6.182 6.182 0 002.877-2.01 7.667 7.667 0 001.344-3.032 5.715 5.715 0 00.03-2.568 3.753 3.753 0 00-1.408-2.041 9.925 9.925 0 00-3.449-1.547 25.409 25.409 0 01-2.552-.836 2.5 2.5 0 01-1.207-.835 1.659 1.659 0 01-.139-1.241 2.187 2.187 0 011.485-1.747 9.863 9.863 0 013.153-.417 13.015 13.015 0 015.073.959l.8-3.681a12.03 12.03 0 00-2.366-.588 20.21 20.21 0 00-3.3-.248q-4.207 0-6.359 1.485a6.608 6.608 0 00-2.74 4.239 4.2 4.2 0 00.511 3.589 7.7 7.7 0 003.944 2.166 25.405 25.405 0 012.8.942 2.759 2.759 0 011.3.943 1.924 1.924 0 01.139 1.424 2.275 2.275 0 01-1.408 1.825 10.052 10.052 0 01-3.264.4 13.789 13.789 0 01-3.032-.341 14.354 14.354 0 01-2.753-.9l-.775 3.681a10.132 10.132 0 002.676.8 20.494 20.494 0 003.512.278 14.886 14.886 0 005.088-.712" />
                    <path data-name="Path 9927" d="M0 .324l9.569 9.569V.324z" />
                  </g>
                </svg>
              </a>
            </div>
          </div>
          <nav id="nav" class="js-nav">
            <ul class="menu main-menu nav-list">
              <li class="main-menu-item"><a class="menu-link js-smooth-scroll" href="#welcome">About</a></li>
              <li class="main-menu-item"><a class="menu-link js-smooth-scroll" href="#destination">Location</a></li>
              <li class="main-menu-item"><a class="menu-link js-smooth-scroll" href="#cabin">Crew</a></li>
              <li class="main-menu-item"><a class="menu-link js-smooth-scroll" href="#meal">Menu</a></li>
              <li class="main-menu-item"><a class="menu-link js-smooth-scroll" href="#sponsors">First Class</a></li>
            </ul>
          </nav>
          <div class="burger js-burger" id="burger"><span></span></div>
        </div>
      </div>
    </header>


    <main class="main">
      <section class="board">
        <div class="departure-board">
          <div class="board-info">
            <span class="time">Time</span>
            <span class="dest">Destination</span>
            <span class="flight">Flight</span>
            <span class="gate">Gate</span>
            <span class="status">Status</span>
          </div>
          <div class="board-data">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="row first">
              <span class="letter green letter-1"></span>
              <span class="letter green letter-2"></span>
              <span class="letter green letter-colon"></span>
              <span class="letter green letter-3"></span>
              <span class="letter green letter-0"></span>
              <span class="letter letter-none"></span>
              <span class="letter green letter-M"></span>
              <span class="letter green letter-A"></span>
              <span class="letter green letter-N"></span>
              <span class="letter green letter-C"></span>
              <span class="letter green letter-H"></span>
              <span class="letter green letter-E"></span>
              <span class="letter green letter-S"></span>
              <span class="letter green letter-T"></span>
              <span class="letter green letter-E"></span>
              <span class="letter green letter-R"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-none"></span>
              <span class="letter green letter-S"></span>
              <span class="letter green letter-P"></span>
              <span class="letter letter-blank"></span>
              <span class="letter green letter-9"></span>
              <span class="letter green letter-0"></span>
              <span class="letter green letter-6"></span>
              <span class="letter letter-none"></span>
              <span class="letter green letter-M"></span>
              <span class="letter green letter-0"></span>
              <span class="letter green letter-1"></span>
              <span class="letter letter-none"></span>
              <span class="letter green old-letter-O letter-B"></span>
              <span class="letter green old-letter-N letter-O"></span>
              <span class="letter green old-letter-blank letter-A"></span>
              <span class="letter green old-letter-T letter-R"></span>
              <span class="letter green old-letter-I letter-D"></span>
              <span class="letter green old-letter-M letter-I"></span>
              <span class="letter green old-letter-E letter-N"></span>
              <span class="letter green old-letter-blank letter-G"></span>
              <span class="letter green letter-blank"></span>
              <span class="letter last green letter-blank"></span>
            </div>
            <div class="row second">
              <span class="letter letter-1"></span>
              <span class="letter letter-2"></span>
              <span class="letter letter-colon"></span>
              <span class="letter letter-5"></span>
              <span class="letter letter-0"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-H"></span>
              <span class="letter letter-A"></span>
              <span class="letter letter-W"></span>
              <span class="letter letter-A"></span>
              <span class="letter letter-I"></span>
              <span class="letter letter-I"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-L"></span>
              <span class="letter letter-N"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-2"></span>
              <span class="letter letter-7"></span>
              <span class="letter letter-7"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-C"></span>
              <span class="letter letter-0"></span>
              <span class="letter letter-2"></span>
              <span class="letter letter-none"></span>
              <span class="letter pink old-letter-O letter-D"></span>
              <span class="letter pink old-letter-N letter-E"></span>
              <span class="letter pink old-letter-blank letter-L"></span>
              <span class="letter pink old-letter-T letter-A"></span>
              <span class="letter pink old-letter-I letter-Y"></span>
              <span class="letter pink old-letter-M letter-E"></span>
              <span class="letter pink old-letter-E letter-D"></span>
              <span class="letter pink letter-blank"></span>
              <span class="letter pink letter-blank"></span>
              <span class="letter pink letter-blank"></span>
            </div>
            <div class="row third">
              <span class="letter letter-1"></span>
              <span class="letter letter-3"></span>
              <span class="letter letter-colon"></span>
              <span class="letter letter-2"></span>
              <span class="letter letter-0"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-P"></span>
              <span class="letter letter-A"></span>
              <span class="letter letter-R"></span>
              <span class="letter letter-I"></span>
              <span class="letter letter-S"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-E"></span>
              <span class="letter letter-V"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-0"></span>
              <span class="letter letter-3"></span>
              <span class="letter letter-7"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-E"></span>
              <span class="letter letter-0"></span>
              <span class="letter letter-1"></span>
              <span class="letter letter-none"></span>
              <span class="letter pink old-letter-O letter-D"></span>
              <span class="letter pink old-letter-N letter-E"></span>
              <span class="letter pink old-letter-blank letter-L"></span>
              <span class="letter pink old-letter-T letter-A"></span>
              <span class="letter pink old-letter-I letter-Y"></span>
              <span class="letter pink old-letter-M letter-E"></span>
              <span class="letter pink old-letter-E letter-D"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
            </div>
            <div class="row fourth">
              <span class="letter letter-1"></span>
              <span class="letter letter-3"></span>
              <span class="letter letter-colon"></span>
              <span class="letter letter-5"></span>
              <span class="letter letter-5"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-L"></span>
              <span class="letter letter-O"></span>
              <span class="letter letter-S"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-A"></span>
              <span class="letter letter-N"></span>
              <span class="letter letter-G"></span>
              <span class="letter letter-E"></span>
              <span class="letter letter-L"></span>
              <span class="letter letter-E"></span>
              <span class="letter letter-S"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-A"></span>
              <span class="letter letter-S"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-1"></span>
              <span class="letter letter-0"></span>
              <span class="letter letter-4"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-B"></span>
              <span class="letter letter-0"></span>
              <span class="letter letter-4"></span>
              <span class="letter letter-none"></span>
              <span class="letter pink old-letter-O letter-C"></span>
              <span class="letter pink old-letter-N letter-A"></span>
              <span class="letter pink old-letter-blank letter-N"></span>
              <span class="letter pink old-letter-T letter-C"></span>
              <span class="letter pink old-letter-I letter-E"></span>
              <span class="letter pink old-letter-M letter-L"></span>
              <span class="letter pink old-letter-E letter-L"></span>
              <span class="letter pink old-letter-blank letter-E"></span>
              <span class="letter pink old-letter-blank letter-D"></span>
              <span class="letter letter-blank"></span>
            </div>
            <div class="row fifth">
              <span class="letter letter-1"></span>
              <span class="letter letter-4"></span>
              <span class="letter letter-colon"></span>
              <span class="letter letter-3"></span>
              <span class="letter letter-0"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-T"></span>
              <span class="letter letter-O"></span>
              <span class="letter letter-K"></span>
              <span class="letter letter-Y"></span>
              <span class="letter letter-O"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-O"></span>
              <span class="letter letter-G"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-0"></span>
              <span class="letter letter-3"></span>
              <span class="letter letter-4"></span>
              <span class="letter letter-none"></span>
              <span class="letter letter-D"></span>
              <span class="letter letter-0"></span>
              <span class="letter letter-1"></span>
              <span class="letter letter-none"></span>
              <span class="letter pink old-letter-O letter-D"></span>
              <span class="letter pink old-letter-N letter-E"></span>
              <span class="letter pink old-letter-blank letter-L"></span>
              <span class="letter pink old-letter-T letter-A"></span>
              <span class="letter pink old-letter-I letter-Y"></span>
              <span class="letter pink old-letter-M letter-E"></span>
              <span class="letter pink old-letter-E letter-D"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
              <span class="letter letter-blank"></span>
            </div>
          </div>
        </div>
      </section>
      <section class="welcome" id="welcome">
        <div class="container">
          <div class="title">
            <h1 data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">Welcome to</h1>
            <img src="assets/images/podge-logo-blue.svg" alt="" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
          </div>
          <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">Ladies and gentleman, please fasten your seat belts. Podge Airways Flight SP906 to Manchester is ready for departure.</p>
          <!-- <img src="assets/images/welcome-img.png" alt="" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"> -->
        </div>
      </section>
      <section class="ticket">
        <div class="container">
          <div class="ticket-wrap">
            <div class="ticket-info">
              <h2>Prepare for Take-Off...</h2>
              <p>Welcome aboard Podge Airways Flight SP906 to Manchester. Our flight time to Stodge Podge will be approximately four hours. Please sit back, relax and enjoy the flight.</p>
            </div>
            <div class="ticket-img mobile">
              <img src="assets/images/ticket-mobile.png" alt="">
            </div>
            <div class="ticket-img desktop" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="1000">
              <img src="assets/images/ticket.png" alt="">
            </div>
          </div>
          <div class="plane-img">
            <img src="assets/images/plane.png" alt="">
          </div>
        </div>
      </section>
      <section class="destination" id="destination">
        <div class="container">
          <div class="destination-desc">
            <h2 data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">Destination Stodge</h2>
            <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
              With stylish surroundings and expansive views over Manchester, Harvey Nichols is the premier luxury destination
              for your creative getaway. <br><br>
              Drinks reception, 3 course meal with unlimited wine. Evening bar with healthy
              tab to keep us going until the fish and chips arrive. <br><br>
              <strong>Invitation only.</strong>
            </p>
            <div class="stamps desktop" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
              <img src="assets/images/stamps.png" alt="">
            </div>
          </div>
          <div class="destination-info">
            <div class="map-panel" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
              <div class="map">
                <img class="off" src="assets/images/map.png" alt="">
                <iframe class=""
                  src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d4639.445019535652!2d-2.2545825456261746!3d53.480537363282515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x487bb1c33ccfffff%3A0x34b39db03bd1bba7!2smanchester%20hall!3m2!1d53.48106!2d-2.250056!5e0!3m2!1sen!2suk!4v1648055358864!5m2!1sen!2suk"
                  width=" auto" height="260" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <a href="https://goo.gl/maps/3C7pDCGrriFa4Uzv9" target="blank" class="map-link btn primary">Open in Google
                Maps &nbsp <span>➞</span></a>
              <!-- <button class="map-link btn primary">Open in Google Maps &nbsp <span>➞</span></button> -->
              <div class="map-control">
                <div class="buttons">
                  <button class="blue"></button>
                  <button class="green"></button>
                  <button class="pink"></button>
                </div>
                <input class="range" type="range" min="0" max="100" value="10" step="1">
              </div>
              <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
              </div>
              <div class="side-buttons">
                <button class="nav"><img src="assets/images/lr-arrow.svg" alt=""></button>
                <button class="com"><img src="assets/images/lr-arrow.svg" alt=""></button>
              </div>
              <div class="arrow-buttons">
                <button><img src="assets/images/arrow-up.svg" alt=""></button>
                <button><img src="assets/images/arrow-up.svg" alt=""></button>
                <button><img src="assets/images/arrow-up.svg" alt=""></button>
                <button><img src="assets/images/arrow-up.svg" alt=""></button>
              </div>
            </div>
            <div class="schedule">
              <div class="date">
                <h3 class="h1" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">Date & Time</h3>
                <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
                <strong>Thursday 9th June 2022</strong> <br><br>
                  <strong>12.30pm - </strong> Drinks reception<br>
                  <strong>1.15pm - 4.30pm</strong> Long lunch <br>
                  <strong>4.30pm until late -</strong> Drinks and light bites in the bar
                </p>
              </div>
              <div class="address">
                <h3 class="h1" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">Address</h3>
                <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
                  <strong>Roof Terrace,</strong> <br>
                  Manchester Hall, <br>
                  36 Bridge St, <br>
                  Greater Manchester, <br>
                  M3 3BT
                </p>
              </div>
              <div class="stamps mob">
                <img src="assets/images/stamps.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="cabin" id="cabin">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">Cabin Crew</h2>
          <div class="form" id="cabin-search-form" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
            <div class="btn primary search">
              <button type="button"><svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                  <path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z" />
                </svg>
              </button>
              <input type="search" id="search" placeholder="Search cabin crew">
            </div>
          </div>
          <div class="cabin-crew">
            <div class="crew-wrap">
              <div class="content" id="inmates">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="meal" id="meal">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">Your Inflight Meal</h2>
          <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">Once we reach cruising altitude, our flight attendants will serve hot dinner and beverages in the cabin.</p>
          <div class="meal-img" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
            <img src="assets/images/meal.png" alt="">
          </div>
        </div>
        <div class="meal-img-mob">
          <img src="assets/images/meal-mobile.png" alt="">
        </div>
      </section>
      <section class="requirements">
        <div class="container">
          <div class="info-img" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
            <img src="assets/images/info-img.png" alt="">
          </div>
          <ul class="requirements-list">
            <li data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
              <div class="item-img">
                <img src="assets/images/coffee.png" alt="">
              </div>
              <h3>Posh Tea & Coffee</h3>
              <p>Builders brews only</p>
            </li>
            <li data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
              <div class="item-img">
                <img src="assets/images/beer.png" alt="">
              </div>
              <h3>Expensive Pints</h3>
              <p>Nobody should be paying a fiver for a pint.</p>
            </li>
            <li data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
              <div class="item-img">
                <img src="assets/images/roll.png" alt="">
              </div>
              <h3>Greggs Pasties</h3>
              <p>Sausage rolls are top tier.</p>
            </li>
            <li data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
              <div class="item-img">
                <img src="assets/images/gravy.png" alt="">
              </div>
              <h3>Proper Gravy</h3>
              <p>Watery gravy just won’t do.</p>
            </li>
          </ul>
        </div>
      </section>
      <section class="postcards">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">Wish You Were Here…</h2>
          <div class="postcards-slider swiper">
            <div class="swiper-wrapper">
              <div class="postcard swiper-slide" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
                <div class="card-face front"><img src="assets/images/stockport.png" alt=""></div>
                <div class="card-face back">
                  <div class="content">
                    <img src="assets/images/postcard-backside.png" alt="">
                  </div>
                </div>
              </div>
              <div class="postcard swiper-slide" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
                <div class="card-face front"><img src="assets/images/manchester.png" alt=""></div>
                <div class="card-face back">
                  <div class="content">
                    <img src="assets/images/postcard-backside.png" alt="">
                  </div>
                </div>
              </div>
              <div class="postcard swiper-slide" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
                <div class="card-face front"><img src="assets/images/wigan.png" alt=""></div>
                <div class="card-face back">
                  <div class="content">
                    <img src="assets/images/postcard-backside.png" alt="">
                  </div>
                </div>
              </div>
              <div class="postcard swiper-slide" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
                <div class="card-face front"><img src="assets/images/stockport.png" alt=""></div>
                <div class="card-face back">
                  <div class="content">
                    <img src="assets/images/postcard-backside.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </section>
      <section class="sponsors" id="sponsors">
        <div class="frame">
          <div class="container">
            <img src="assets/images/crown-icon.svg" alt="" class="crown-icon" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
            <h2 class="h1" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">First Class Lounge</h2>
            <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">No riff raff here. Please raise
              a glass to our incredible supporters</p>
              <div class="sponsors-wrap">
              <a href="https://www.accenture.com/gb-en/about/accenture-interactive-index" target="_blank"> <img
                  src="assets/images/logos/accenture.svg" data-aos="fade-up" data-aos-easing="ease-in-out"
                  data-aos-duration="1000" style="transform: scale(1.4);"> </a>
              <a href="https://www.weareadam.com/" target="_blank"> <img src="assets/images/logos/adam.svg"
                  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"> </a>
              <a href="https://www.theagencyworks.co.uk/" target="_blank"> <img src="assets/images/logos/agency.svg"
                  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"> </a>
              <a href="https://www.gettyimages.co.uk/" target="_blank"> <img src="assets/images/logos/getty.svg"
                  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"> </a>
              <a href="https://www.cact.us/" target="_blank"> <img src="assets/images/logos/cactus.svg"
                  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"> </a>
              <a href="https://www.jupitervc.com/" target="_blank"> <img src="assets/images/logos/jupiter.svg"
                  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"> </a>
              <a href="https://www.justfix.app/" target="_blank"> <img src="assets/images/logos/justfix.svg"
                  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"> </a>
              <a href="https://www.thedrum.com/" target="_blank"> <img style="filter: invert(1);"
                  src="assets/images/logos/drum.png" data-aos="fade-up" data-aos-easing="ease-in-out"
                  data-aos-duration="1000"> </a>
              <a href="https://www.mallardandclaret.com/" target="_blank"> <img src="assets/images/logos/mandc.svg"
                  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"> </a>
              <a href="https://storystream.ai/" target="_blank"> <img src="assets/images/logos/story.svg"
                  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"> </a>
              <a href="https://theloft.agency/" target="_blank"> <img src="assets/images/logos/loft.svg"
                  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"> </a>
            </div>
            <img src="assets/images/stars.svg" alt="" class="stars-icon" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
          </div>
        </div>
      </section>
      <audio src="uploads/departure-board.mp3" id="audio-board"></audio>
      <audio src="uploads/tannoy.mp3" id="audio-tannoy"></audio>
      <!-- <audio src="uploads/zapsplat_vehicles_airplane_airbus_a320_cruising_int_amb_people_chat_constant_engine_drone_australia_32752.mp3" id="audio-chatter" loop></audio> -->
    </main>

  </div>

  <script src="assets/js/vendor.min.js" defer></script>
  <script src="assets/js/app.js" defer></script>
  <script>
    let jsonStr = JSON.parse('<?php echo $membersStr; ?>');

    const inmatesEl = document.getElementById('inmates');

    let inmatesHtml = '';

    for (let key in jsonStr) {
      console.log(jsonStr, key)
      // if (jsonStr.result.hasOwnProperty(key)) {
      let inmate = jsonStr[key];
      let name = inmate.First_Name + ' ' + inmate.Last_Name;
      let company = inmate.Company_Name;
      let jobTitle = inmate.Job_Title;
      inmatesHtml += '<div class="crew-member"><div class="member-img">'
      if (inmate.photoCache) {
        inmatesHtml += '<img src="' + inmate.photoCache + '">'
      }
      inmatesHtml += '<div class="curtain"><a href="google.com"><img src="assets/images/linkedin.png" alt=""></a><div class="handle"></div></div></div><div class="member-info"><span class="name name-js">' + name + '</span><span class="position position-js">' + jobTitle + '</span><span class="office office-js">' + company + '</span></div></div>'
      // }
    }

    inmatesEl.innerHTML = inmatesHtml;

    const searchInput = document.getElementById('search');
    const inmateEls = document.querySelectorAll('.crew-member');

    searchInput.addEventListener('keyup', function() {
      for (let i = 0; i < inmateEls.length; i++) {
        const inmateName = inmateEls[i].querySelector('.name-js')
        const inmateCompany = inmateEls[i].querySelector('.office-js')
        const inmateJob = inmateEls[i].querySelector('.position-js')

        checkInmate(inmateEls[i], searchInput.value, inmateName.textContent.toLowerCase(), inmateCompany.textContent.toLowerCase(), inmateJob.textContent.toLowerCase());
      }
    });

    function checkInmate(inmate, term, name, company, job) {
      if (name.toLowerCase().indexOf(term.toLowerCase()) !== -1 || company.toLowerCase().indexOf(term.toLowerCase()) !== -1 || job.toLowerCase().indexOf(term.toLowerCase()) !== -1) {
        inmate.classList.remove('hidden');
      } else {
        inmate.classList.add('hidden');
      }
    }
  </script>
</body>

</html>