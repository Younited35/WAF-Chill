<?php
    $apikey = "1c19385e3a064070d36df768c570062b";
    $selectedZone = array_key_exists('zone', $_GET) ? $_GET['zone'] : null;
    $selectedExample = array_key_exists('example', $_GET) ? $_GET['example'] : null;

    include('../php/tmdb_v3-PHP-API--master/tmdb-api.php');
    $tmdb = new TMDB();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- ===== Mobile viewport optimized ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- ===== Meta Tags - Description for Search Engine purposes ===== -->
    <meta name="description" content="Movify - Movies, Series & Cinema HTML Template">
    <meta name="keywords" content="movies, series, online streaming, html template, cinema html template">
    <meta name="author" content="GnoDesign">

    <!-- ===== Website Title ===== -->
    <title>Movify - Movies, Series & Cinema HTML Template</title>

    <!-- ===== Favicon & Different size apple touch icons ===== -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/apple-touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/apple-touch-icon-ipad-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/images/apple-touch-icon-ipad-pro.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon-iphone-6-plus.png">
    <link rel="icon" sizes="192x192" href="assets/images/icon-hd.png">
    <link rel="icon" sizes="128x128" href="assets/images/icon.png">

    <!-- ===== Google Fonts ===== -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- ===== CSS links ===== -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mmenu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>


    <!-- =============== START OF PRELOADER =============== -->
    <div class="loading">
        <div class="loading-inner">
            <div class="loading-effect">
                <div class="object"></div>
            </div>
        </div>
    </div>
    <!-- =============== END OF PRELOADER =============== -->



    <!-- =============== START OF RESPONSIVE - MAIN NAV =============== -->
    <nav id="main-mobile-nav"></nav>
    <!-- =============== END OF RESPONSIVE - MAIN NAV =============== -->



    <!-- =============== START OF WRAPPER =============== -->
    <div class="wrapper">


        <!-- =============== START OF HEADER NAVIGATION =============== -->
        <!-- Insert the class "sticky" in the header if you want a sticky header -->
        <header class="header header-fixed header-transparent text-white">
            <div class="container-fluid">

                <!-- ====== Start of Navbar ====== -->
                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="index.html">
                        <!-- INSERT YOUR LOGO HERE -->
                        <img src="assets/images/logo.svg" alt="logo" width="150" class="logo">
                        <!-- INSERT YOUR WHITE LOGO HERE -->
                        <img src="assets/images/logo-white.svg" alt="white logo" width="150" class="logo-white">
                    </a>

                    <button id="mobile-nav-toggler" class="hamburger hamburger--collapse" type="button">
                       <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                       </span>
                    </button>

                    <!-- ====== Start of #main-nav ====== -->
                    <div class="navbar-collapse" id="main-nav">

                        <!-- ====== Start of Main Menu ====== -->
                        <ul class="navbar-nav mx-auto" id="main-menu">
                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="index.html">Home Version 1</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="index2.html">Home Version 2</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="index3.html">Home Version 3</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="index4.html">Home Version 4</a>
                                    </li>

                                </ul>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="404.html">404 Page</a>
                                    </li>

                                    <!-- Divider -->
                                    <li class="divider" role="separator"></li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="celebrities-list.html">celebrities list</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="celebrities-grid.html">celebrities grid</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="celebrity-detail.html">celebrity detail</a>
                                    </li>

                                    <!-- Divider -->
                                    <li class="divider" role="separator"></li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="contact-us.html">Contact us</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="coming-soon.html">Coming soon</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="pricing.html">Pricing Plan</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="login-register.html">Login - Register</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movies & TV Shows</a>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-list.html">Movie List 1</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-list2.html">Movie List 2</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-grid.html">Movie Grid 1</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-grid2.html">Movie Grid 2</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-grid3.html">Movie Grid 3</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-grid4.html">Movie Grid 4</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-detail.html">Movie Detail</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-detail2.html">Movie Detail 2</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="watch-later.html">Watch Later</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="blog-list-fullwidth.html">Blog List Fullwidth</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="blog-post-detail.html">Blog Detail</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="blog-post-detail-fullwidth.html">Blog Detail Fullwidth</a>
                                    </li>

                                </ul>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.html">Contact us</a>
                            </li>

                        </ul>
                        <!-- ====== End of Main Menu ====== -->


                        <!-- ====== Start of Extra Nav ====== -->
                        <ul class="navbar-nav extra-nav">

                            <!-- Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link toggle-search" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item notification-wrapper">
                                <a class="nav-link notification" href="#">
                                    <i class="fa fa-globe"></i>
                                    <span class="notification-count">2</span>
                                </a>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item m-auto">
                                <a href="#login-register-popup" class="btn btn-main btn-effect login-btn popup-with-zoom-anim">
                                    <i class="icon-user"></i>login
                                </a>
                            </li>
                        </ul>
                        <!-- ====== End of Extra Nav ====== -->

                    </div>
                    <!-- ====== End of #main-nav ====== -->
                </nav>
                <!-- ====== End of Navbar ====== -->

            </div>
        </header>
        <!-- =============== END OF HEADER NAVIGATION =============== -->




        <!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->
        <section id="slider" class="hero-slider">
            <div class="rev-slider-wrapper fullwidthbanner-container overlay-gradient">
                <!-- Start REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                <div id="hero-slider" class="rev_slider fullwidthabanner" style="display:none" data-version="5.4.1">
                    <ul>

                        <!-- ===== SLIDE NR. 1 ===== -->
                        <li data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img src="https://www.hdwallpapers.in/download/stranger_things_netflix_series_5k-HD.jpg"
                                 alt="Image"
                                 title="slider-bg"
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 class="rev-slidebg"
                                 data-no-retina="">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['-80','-80','-80','-80']"
                                 data-responsive_offset="on"
                                 data-fontsize="['60','50','40','30']"
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">WELCOME TO WAF
                            </div>


                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="[0]"
                                 data-width="[1200, 992, 768, 98%]"
                                 data-responsive_offset="on"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">

                                <!-- ===== START OF SEARCH FORM ===== -->
                                <form id="search-form-1">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8 col-sm-10 col-12">
                                            <div class="form-group">
                                                <input name="search-keyword" type="text" id="search-keyword" value="" class="form-control" placeholder="Enter Movies or Series Title">
                                                <button type="submit" class="btn btn-main btn-effect"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- ===== END OF SEARCH FORM ===== -->

                            </div>


                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-center"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['100','100','80','80']"
                                 data-responsive_offset="on"
                                 data-fontsize="['16']"
                                 data-lineheight="['22']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 400;">
                                Have a look at our top rated <br/>Movies and TV Shows!
                            </div>


                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="[730, 630, 520, 370]"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['115','115','90','500']"
                                 data-responsive_offset="on"
                                 data-fontsize="['16']"
                                 data-lineheight="['22']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 400;">
                                <img src="assets/images/other/banner-arrow.png" alt="">
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- End REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            </div>
            <!-- ===== END OF REV SLIDER WRAPPER ===== -->

        </section>
        <!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->




        <!-- =============== START OF TOP MOVIES SECTION =============== -->
        <section class="top-movies2">
            <div class="container">
                <div class="row">


                  <?php

                  $movieName1 = "col-lg-3 col-md-6 col-sm-6 col-xs-12";
                  $movieName2 = "col-lg-3 col-md-6 col-sm-6 d-none d-sm-block";
                  $movieName3 = "col-lg-3 col-md-6 d-none d-lg-block";
                  $movieName4 = "col-lg-3 col-md-6 d-none d-lg-block";
                  $filmName = "";
                  $tvShows = $tmdb->getOnTheAirTVShows();
                  $i = 1;

                  foreach($tvShows as $tvShow){
                      if($i == 1){
                        $filmName = $movieName1;
                      }
                      if ($i == 2) {
                        $filmName = $movieName2;
                      }
                      if ($i == 3) {
                        $filmName = $movieName3;
                      }
                      if ($i == 4) {
                        $filmName = $movieName4;
                      }
                      if ($i == 5) {
                        break;
                      }
                      $i++;
                  echo "<!-- Movie List Item -->
                    <div class=".$filmName.">
                        <div class='movie-box-4'>
                            <div class='listing-container'>

                                <!-- Movie List Image -->
                                <div class='listing-image'>

                                    <!-- Buttons -->
                                    <div class='buttons'>
                                        <a href='#' data-original-title='Rate' data-toggle='tooltip' data-placement='bottom' class='like'>
                                            <i class='icon-heart'></i>
                                        </a>

                                        <a href='#' data-original-title='Share' data-toggle='tooltip' data-placement='bottom' class='share'>
                                            <i class='icon-share'></i>
                                        </a>
                                    </div>

                                    <!-- Rating -->
                                    <div class='stars'>
                                        <div class='rating'>
                                            <i class='fa fa-star'></i>
                                            <i class='fa fa-star'></i>
                                            <i class='fa fa-star'></i>
                                            <i class='fa fa-star'></i>
                                            <i class='fa fa-star-o'></i>
                                        </div>
                                    </div>

                                    <!-- Image -->
                                    <img src='". $tmdb->getImageURL('w300_and_h450_bestv2') . $tvShow->getPoster() ."' alt=''>
                                </div>

                                <!-- Movie List Content -->
                                <div class='listing-content'>
                                    <div class='inner'>
                                        <h2 class='title'>". $tvShow->getName() ."</h2>

                                        <a href='movie-detail.html' class='btn btn-main btn-effect'>details</a>
                                    </div>
                                </div>
                              </div>
                          </div>
                    </div>";
                  }
                  ?>


                </div>
            </div>
        </section>
        <!-- =============== END OF TOP MOVIES SECTION =============== -->



        <!-- =============== START OF LATEST RELEASES SECTION =============== -->
        <section class="latest-releases bg-light ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title">Latest Movies & TV Shows</h2>
                        <h6 class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy consectetuer adipiscing.</h6>
                    </div>
                </div>
                <!-- End of row -->
            </div>
            <!-- End of Container -->

            <!-- Start of Latest Releases Slider -->
            <div class="owl-carousel latest-releases-slider">






<?php

$tvShows = $tmdb->getTopRatedTVShows();
$i = 1;

foreach($tvShows as $tvShow){
  $i++;

echo "<!-- === Start of Sliding Item 1 === -->
<div class='item'>
    <div class='movie-box-3'>
        <div class='listing-container'>

            <!-- Movie List Image -->
            <div class='listing-image'>
                <!-- Image -->
                <img src='". $tmdb->getImageURL('w300_and_h450_bestv2') . $tvShow->getPoster() ."' alt=''>
            </div>

            <!-- Movie List Content -->
            <div class='listing-content'>
                <div class='inner'>

                    <!-- Play Button -->
                    <div class='play-btn'>
                        <a href='https://www.youtube.com/watch?v=Q0CbN8sfihY' class='play-video'>
                            <i class='fa fa-play'></i>
                        </a>
                    </div>

                    <h2 class='title'>". $tvShow->getName() ."</h2>

                    <!-- Rating -->
                    <div class='stars'>
                        <div class='rating'>
                            <i class='fa fa-star'></i>
                            <span>7.5/10</span>
                            <span class='category'>Action, Fantasy</span>
                        </div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                    <a href='movie-detail.html' class='btn btn-main btn-effect'>details</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- === End of Sliding Item 1 === -->";
if($i == 6){
  break;
}

}
 ?>










                <!-- === Start of Sliding Item 1 === -->
                <div class="item">
                    <div class="movie-box-3">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-1.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">Star Wars</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>7.5/10</span>
                                            <span class="category">Action, Fantasy</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- === End of Sliding Item 1 === -->

                <!-- === Start of Sliding Item 2 === -->
                <div class="item">
                    <div class="movie-box-3">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-2.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">The Brain</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>7.2/10</span>
                                            <span class="category">Action, Comendy</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- === End of Sliding Item 2 === -->

                <!-- === Start of Sliding Item 3 === -->
                <div class="item">
                    <div class="movie-box-3">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-3.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">The Mummy</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>5.5/10</span>
                                            <span class="category">Action, Fantasy</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- === End of Sliding Item 3 === -->

                <!-- === Start of Sliding Item 4 === -->
                <div class="item">
                    <div class="movie-box-3">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-5.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">Daredevil</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>8.7/10</span>
                                            <span class="category">Action, Crime</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- === End of Sliding Item 4 === -->

                <!-- === Start of Sliding Item 5 === -->
                <div class="item">
                    <div class="movie-box-3">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-6.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">Stranger Things</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>9.0/10</span>
                                            <span class="category">Fantasy, Horror</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- === End of Sliding Item 5 === -->

                <!-- === Start of Sliding Item 6 === -->
                <div class="item">
                    <div class="movie-box-3">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-8.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">The Flash</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>8.0/10</span>
                                            <span class="category">Action, Drama</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- === End of Sliding Item 6 === -->

            </div>
            <!-- End of Latest Releases Slider -->

        </section>
        <!-- =============== END OF LATEST RELEASES SECTION =============== -->




        <!-- =============== START OF UPCOMING MOVIES SECTION =============== -->
        <section class="upcoming-movies parallax ptb100" data-background="assets/images/posters/movie-collection.jpg" data-color="#3e4555" data-color-opacity="0.95" >
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title text-white">Upcoming Movies & TV Shows</h2>
                    </div>
                </div>
                <!-- End of row -->



                <!-- Start of row -->
                <div class="row mt50">

                    <!-- === Start of Upcoming Featured Movies & TV Shows === -->
                    <div class="col-md-8">

                        <!-- Start of Upcoming Featured Item -->
                        <div class="movie-box-1 upcoming-featured-item">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/movies/upcoming-featured-item.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Tomb Raider</a>
                                </h4>
                                <span class="released">Release Date: 15 Mar 2018</span>
                            </div>
                            <!-- End of Movie Details -->
                        </div>
                        <!-- End of Upcoming Featured Item -->

                    </div>
                    <!-- === End of Upcoming Featured Movies & TV Shows === -->


                    <!-- === Start of Upcoming Movies & TV Shows === -->
                    <div class="col-md-4">

                        <!-- Start of Upcoming Item 1 -->
                        <div class="movie-box-1 upcoming-item">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/movies/upcoming-item-1.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">The Jungle</a>
                                </h4>
                            </div>
                            <!-- End of Movie Details -->

                        </div>
                        <!-- End of Upcoming Item 1 -->

                        <!-- Start of Upcoming Item 2 -->
                        <div class="movie-box-1 upcoming-item mt20">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/movies/upcoming-item-2.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Fast and Furious</a>
                                </h4>
                            </div>
                            <!-- End of Movie Details -->

                        </div>
                        <!-- End of Upcoming Item 2 -->

                    </div>
                    <!-- === End of Upcoming Movies & TV Shows === -->

                </div>
                <!-- End of row -->

            </div>
        </section>
        <!-- =============== END OF UPCOMING MOVIES SECTION =============== -->




        <!-- =============== END OF BECOME PREMIUM SECTION =============== -->
        <section class="become-premium3 ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title">Become a Premium Member</h2>
                        <h6 class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h6>
                    </div>
                </div>
                <!-- End of row -->

                <!-- Start of row -->
                <div class="row mt80">
                    <div class="col-md-12">

                        <!-- Start of Pricing Table -->
                        <div class="pricing-table-2">

                            <!-- Pricing Plan 1 -->
                            <div class="plan">

                                <!-- Price -->
                                <div class="plan-price">
                                    <h3>Basic</h3>
                                    <span class="value">Free</span>
                                    <span class="period">Try Movify for FREE for the first 7 days, you can upgrade anytime.</span>
                                </div>

                                <!-- Features -->
                                <div class="plan-features">
                                    <ul>
                                        <li>7 days</li>
                                        <li>720p Resolution</li>
                                        <li>Desktop Only</li>
                                        <li>Limited Support</li>
                                    </ul>
                                    <a class="btn btn-main btn-effect mt30" href="#">Get Started</a>
                                </div>

                            </div>

                            <!-- Featured - Pricing Plan 2 -->
                            <div class="plan featured">

                                <!-- Price -->
                                <div class="plan-price">
                                    <h3>Premium</h3>
                                    <span class="value">$19</span>
                                    <span class="period">Most wanted subscription package by our Movifiers.</span>
                                </div>

                                <!-- Features -->
                                <div class="plan-features">
                                    <ul>
                                        <li>1 Month</li>
                                        <li>Full HD</li>
                                        <li>Lifetime Availability</li>
                                        <li>TV & Desktop</li>
                                        <li>24/7 Support</li>
                                    </ul>
                                    <a class="btn btn-main btn-effect mt30" href="#">Get Started</a>
                                </div>
                            </div>

                            <!-- Pricing Plan 3 -->
                            <div class="plan">

                                <!-- Price -->
                                <div class="plan-price">
                                    <h3>Cinematic</h3>
                                    <span class="value">$39</span>
                                    <span class="period">Watch your favorite movies anywhere and anytime.</span>
                                </div>

                                <!-- Features -->
                                <div class="plan-features">
                                    <ul>
                                        <li>2 Months</li>
                                        <li>Ultra HD</li>
                                        <li>Any Device</li>
                                        <li>24/7 Support</li>
                                    </ul>
                                    <a class="btn btn-main btn-effect mt30" href="#">Get Started</a>
                                </div>
                            </div>

                        </div>
                        <!-- End of Pricing Table -->

                    </div>
                </div>
                <!-- End of row -->

            </div>
        </section>
        <!-- =============== END OF BECOME PREMIUM SECTION =============== -->




        <!-- =============== END OF BLOG SECTION =============== -->
        <section class="blog bg-light ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title">Latest News</h2>
                        <h6 class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy consectetuer adipiscing.</h6>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of row -->
                <div class="row mt50">

                    <!-- 1st Blog Item -->
                    <div class="col-md-4">
                        <div class="bloglist-post-holder shadow-hover">

                            <!-- Blog Post Thumbnail -->
                            <a href="blog-post-detail.html" class="bloglist-thumb-link hover-link">
                                <div class="bloglist-post-thumbnail" style="background: url(assets/images/blog/bloglist-1.jpg)"></div>
                            </a>

                            <!-- Blog Post Text Wrapper -->
                            <div class="bloglist-text-wrapper">
                                <!-- Author Avatar -->
                                <span class="circle-img bloglist-avatar">
                                    <img src="assets/images/user.png" width="50" height="50" alt="author img">
                                </span>

                                <h4 class="bloglist-title">
                                    <a href="blog-post-detail.html">Top 10 Action Movies</a>
                                </h4>

                                <div class="bloglist-meta">
                                    <i class="fa fa-calendar"></i> 01/02/2018
                                </div>

                                <div class="bloglist-excerpt">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis...</p>
                                    <a href="#" class="btn btn-main btn-effect">read more</a>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- 2nd Blog Item -->
                    <div class="col-md-4">
                        <div class="bloglist-post-holder shadow-hover">

                            <!-- Blog Post Thumbnail -->
                            <a href="blog-post-detail.html" class="bloglist-thumb-link hover-link">
                                <div class="bloglist-post-thumbnail" style="background: url(assets/images/blog/bloglist-2.jpg)"></div>
                            </a>

                            <!-- Blog Post Text Wrapper -->
                            <div class="bloglist-text-wrapper">
                                <!-- Author Avatar -->
                                <span class="circle-img bloglist-avatar">
                                    <img src="assets/images/user.png" width="50" height="50" alt="author img">
                                </span>

                                <h4 class="bloglist-title">
                                    <a href="blog-post-detail.html">Oscar Awards</a>
                                </h4>

                                <div class="bloglist-meta">
                                    <i class="fa fa-calendar"></i> 01/02/2018
                                </div>

                                <div class="bloglist-excerpt">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis...</p>
                                    <a href="#" class="btn btn-main btn-effect">read more</a>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- 3rd Blog Item -->
                    <div class="col-md-4">
                        <div class="bloglist-post-holder shadow-hover">

                            <!-- Blog Post Thumbnail -->
                            <a href="blog-post-detail.html" class="bloglist-thumb-link hover-link">
                                <div class="bloglist-post-thumbnail" style="background: url(assets/images/blog/bloglist-3.jpg)"></div>
                            </a>

                            <!-- Blog Post Text Wrapper -->
                            <div class="bloglist-text-wrapper">
                                <!-- Author Avatar -->
                                <span class="circle-img bloglist-avatar">
                                    <img src="assets/images/user.png" width="50" height="50" alt="author img">
                                </span>

                                <h4 class="bloglist-title">
                                    <a href="blog-post-detail.html">Top Upcoming Movies</a>
                                </h4>

                                <div class="bloglist-meta">
                                    <i class="fa fa-calendar"></i> 01/02/2018
                                </div>

                                <div class="bloglist-excerpt">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis...</p>
                                    <a href="#" class="btn btn-main btn-effect">read more</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- End of row -->

            </div>
        </section>
        <!-- =============== END OF BLOG SECTION =============== -->





        <!-- =============== END OF SUBSCRIBE SECTION =============== -->
        <section class="subscribe bg-light2 ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row">

                    <div class="col-md-6 col-12">
                        <div class="img-box overlay-gradient mr30">
                            <img src="assets/images/other/landscape.jpg" alt="" class="img-resonsive img-shadow">
                        </div>
                    </div>

                    <div class="col-md-6 col-12 mt50">
                        <h2 class="title">Join Movify Now!</h2>
                        <h6 class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy consectetuer adipiscing.</h6>

                        <!-- Subscribe Form -->
                        <form action="#" class="mailchimp mt50" novalidate>

                            <!-- Form -->
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="EMAIL" class="form-control" id="mc-email" placeholder="Your Email" autocomplete="off">
                                    <label for="mc-email"></label>
                                    <button type="submit" class="btn btn-main btn-effect">Subscribe</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- End of row -->

            </div>
        </section>
        <!-- =============== END OF SUBSCRIBE SECTION =============== -->




        <!-- =============== START OF FOOTER =============== -->
        <footer class="footer1 bg-dark">

            <!-- ===== START OF FOOTER WIDGET AREA ===== -->
            <div class="footer-widget-area ptb100">
                <div class="container">
                    <div class="row">

                        <!-- Start of Widget 1 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget-about">

                                <!-- INSERT YOUR LOGO HERE -->
                                <img src="assets/images/logo.svg" alt="logo" class="logo">
                                <!-- INSERT YOUR WHITE LOGO HERE -->
                                <img src="assets/images/logo-white.svg" alt="white logo" class="logo-white">
                                <p class="nomargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque. Praesentium suscipit provident explicabo dignissimos nostrum numquam deserunt earum accusantium et fugit.</p>
                            </div>
                        </div>
                        <!-- End of Widget 1 -->

                        <!-- Start of Widget 2 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget-links">
                                <h4 class="widget-title">Useful links</h4>

                                <ul class="general-listing">
                                    <li><a href="#">about movify</a></li>
                                    <li><a href="#">blog</a></li>
                                    <li><a href="#">forum</a></li>
                                    <li><a href="#">my account</a></li>
                                    <li><a href="#">watch list</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- End of Widget 2 -->

                        <!-- Start of Widget 3 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget-blog">
                                <h4 class="widget-title">latest news</h4>

                                <ul class="blog-posts">
                                    <li><a href="#">blog post 1</a><small>januar 13, 2018</small></li>
                                    <li><a href="#">blog post 2</a><small>januar 13, 2018</small></li>
                                    <li><a href="#">blog post 3</a><small>januar 13, 2018</small></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of Widget 3 -->

                        <!-- Start of Widget 4 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget-social">
                                <h4 class="widget-title">follow us</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque.</p>

                                <!-- Start of Social Buttons -->
                                <ul class="social-btns">
                                    <!-- Social Media -->
                                    <li>
                                        <a href="#" class="social-btn-roll facebook">
                                            <div class="social-btn-roll-icons">
                                                <i class="social-btn-roll-icon fa fa-facebook"></i>
                                                <i class="social-btn-roll-icon fa fa-facebook"></i>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Social Media -->
                                    <li>
                                        <a href="#" class="social-btn-roll twitter">
                                            <div class="social-btn-roll-icons">
                                                <i class="social-btn-roll-icon fa fa-twitter"></i>
                                                <i class="social-btn-roll-icon fa fa-twitter"></i>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Social Media -->
                                    <li>
                                        <a href="#" class="social-btn-roll google-plus">
                                            <div class="social-btn-roll-icons">
                                                <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                                <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Social Media -->
                                    <li>
                                        <a href="#" class="social-btn-roll instagram">
                                            <div class="social-btn-roll-icons">
                                                <i class="social-btn-roll-icon fa fa-instagram"></i>
                                                <i class="social-btn-roll-icon fa fa-instagram"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End of Social Buttons -->

                            </div>
                        </div>
                        <!-- End of Widget 4 -->

                    </div>
                </div>
            </div>
            <!-- ===== END OF FOOTER WIDGET AREA ===== -->


            <!-- ===== START OF FOOTER COPYRIGHT AREA ===== -->
            <div class="footer-copyright-area ptb30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex">
                                <div class="links">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#">Privacy & Cookies</a></li>
                                        <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                                        <li class="list-inline-item"><a href="#">Legal Disclaimer</a></li>
                                        <li class="list-inline-item"><a href="#">Community</a></li>
                                    </ul>
                                </div>

                                <div class="copyright ml-auto">All Rights Reserved by <a href="#">Movify</a>.</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== END OF FOOTER COPYRIGHT AREA ===== -->

        </footer>
        <!-- =============== END OF FOOTER =============== -->

    </div>
    <!-- =============== END OF WRAPPER =============== -->




    <!-- =============== START OF GENERAL SEARCH WRAPPER =============== -->
    <div class="general-search-wrapper">
        <form class="general-search" role="search" method="get" action="#">
            <input type="text" placeholder="Type and hit enter...">
            <span id="general-search-close" class="ti-close toggle-search"></span>
        </form>
    </div>
    <!-- =============== END OF GENERAL SEARCH WRAPPER =============== -->



    <!-- =============== START OF LOGIN & REGISTER POPUP =============== -->
    <div id="login-register-popup" class="small-dialog zoom-anim-dialog mfp-hide">

        <!-- ===== Start of Signin wrapper ===== -->
        <div class="signin-wrapper">
            <div class="small-dialog-headline">
                <h4 class="text-center">Sign in</h4>
            </div>


            <div class="small-dialog-content">

                <!-- Start of Login form -->
                <form id="cariera_login" method="post">
                    <p class="status"></p>

                    <div class="form-group">
                        <label for="username">Username or Email *</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Your Username or Email *" />
                    </div>

                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your Password *" />
                    </div>

                    <div class="form-group">
                        <div class="checkbox pad-bottom-10">
                            <input id="check1" type="checkbox" name="remember" value="yes">
                            <label for="check1">Keep me signed in</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Sign in" class="btn btn-main btn-effect nomargin" />
                    </div>
                </form>
                <!-- End of Login form -->

                <div class="bottom-links">
                    <span>
                        Not a member?
                        <a  class="signUpClick">Sign up</a>
                    </span>
                    <a  class="forgetPasswordClick pull-right">Forgot Password</a>
                </div>
            </div>

        </div>
        <!-- ===== End of Signin wrapper ===== -->



        <!-- ===== Start of Signup wrapper ===== -->
        <div class="signup-wrapper">
            <div class="small-dialog-headline">
                <h4 class="text-center">Sign Up</h4>
            </div>

            <div class="small-dialog-content">

                <!-- Start of Registration form -->
                <form id="cariera_registration" action="#" method="POST">
                    <p class="status"></p>

                    <div class="form-group">
                        <label for="movify_user_login">Username</label>
                        <input name="movify_user_login" id="movify_user_login" class="form-control" type="text"/>
                    </div>

                    <div class="form-group">
                        <label for="movify_user_email">Email</label>
                        <input name="movify_user_email" id="movify_user_email" class="form-control" type="email"/>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="movify_user_pass" id="movify_password" class="form-control" type="password"/>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-main btn-effect nomargin" value="Register"/>
                    </div>
                </form>
                <!-- End of Registration form -->

                <div class="bottom-links">
                    <span>
                        Already have an account?
                        <a class="signInClick">Sign in</a>
                    </span>

                    <a class="forgetPasswordClick pull-right">Forgot Password</a>
                </div>

            </div> <!-- .small-dialog-content -->

        </div>
        <!-- ===== End of Signup wrapper ===== -->



        <!-- ===== Start of Forget Password wrapper ===== -->
        <div class="forgetpassword-wrapper">
            <div class="small-dialog-headline">
                <h4 class="text-center">Forgotten Password</h4>
            </div>

            <div class="small-dialog-content">

                <!-- Start of Forger Password form -->
                <form id="forget_pass_form" action="#"  method="post">
                    <p class="status"></p>

                    <div class="form-group">
                        <label for="password">Email Address *</label>
                        <input type="email" name="user_login" class="form-control" id="email3" placeholder="Email Address *" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Get New Password" class="btn btn-main btn-effect nomargin" />
                    </div>
                </form>
                <!-- End of Forger Password form -->

                <div class="bottom-links">
                    <a class="cancelClick">Cancel</a>
                </div>

            </div><!-- .small-dialog-content -->

        </div>
        <!-- ===== End of Forget Password wrapper ===== -->

    </div>
    <!-- =============== END OF LOGIN & REGISTER POPUP =============== -->



    <!-- ===== Start of Back to Top Button ===== -->
    <div id="backtotop">
        <a href="#"></a>
    </div>
    <!-- ===== End of Back to Top Button ===== -->



    <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.mmenu.js"></script>
    <script src="assets/js/jquery.inview.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/headroom.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- ===== Slider Revolution core JavaScript files ===== -->
    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- ===== Slider Revolution extension scripts ===== -->
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>
