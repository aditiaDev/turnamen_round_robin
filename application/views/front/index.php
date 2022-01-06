<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOBA</title>

    <link rel="shortcut icon" href="<?php echo base_url('/assets/begam/images/fav.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('/assets/begam/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/begam/css/fontawesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/begam/css/slick.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/begam/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/begam/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/begam/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/begam/css/style.css'); ?>">
</head>

<body>

    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

    <!-- header-section start -->
    <header id="header-section">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <div class="logo-section flex-grow-1 d-flex align-items-center">
                        <a class="site-logo site-title" href="index.html"><img src="<?php echo base_url('/assets/begam/images/logo.png'); ?>" alt="site-logo"></a>
                    </div>
                    <button class="navbar-toggler ml-auto collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="navbar-collapse collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto">
                                <li><a href="index.html" class="active">Home</a></li>
                                <li class="menu_has_children"><a href="#0">Turnamen</a>
                                    <ul class="sub-menu">
                                        <li><a href="tournaments.html">Tournaments</a></li>
                                        <li><a href="tournaments-single.html">Tournaments Single</a></li>
                                    </ul>
                                </li>
                                <li class="menu_has_children"><a href="#0">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-details.html">Shop Details</a></li>
                                        <li><a href="profile.html">Profile</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="check-out.html">Check Out</a></li>
                                        <li><a href="features.html">Features</a></li>
                                        <li><a href="error.html">Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="right-area header-action d-flex align-items-center">
                        <div class="search-icon">
                            <a href="#"><img src="<?php echo base_url('/assets/begam/images/search_btn.png'); ?>" alt="icon"></a>
                        </div>
                        <div class="lang d-flex align-items-center">
                            <select>
                                <option value="1">EN</option>
                                <option value="2">BN</option>
                                <option value="3">ES</option>
                                <option value="4">NL</option>
                            </select>
                        </div>
                        <a href="login.html" class="login-btn">Login</a>
                        <a href="registration.html" class="cmn-btn">Join Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <!-- banner-section start -->
    <section id="banner-section">
        <div class="banner-content d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="main-content">
                            <div class="top-area justify-content-center text-center">
                                <h3>Play Unlimited</h3>
                                <h1>Tournaments</h1>
                                <p>Compete in Free and Paid entry Tournaments. Transform your
                                    games to real money eSports</p>
                                <div class="btn-play d-flex justify-content-center align-items-center">
                                    <a href="registration.html" class="cmn-btn">Get Started</a>
                                    <a href="../watch-2.html?v=MJ0zpsWQ_XM" class="mfp-iframe popupvideo">
                                        <img src="<?php echo base_url('/assets/begam/images/play-icon.png'); ?>" alt="play">
                                    </a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="bottom-area text-center">
                                                <img src="<?php echo base_url('/assets/begam/images/versus.png'); ?>" alt="banner-vs">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ani-illu">
                    <img class="left-1 wow fadeInUp" src="<?php echo base_url('/assets/begam/images/left-banner.png'); ?>" alt="image">
                    <img class="right-2 wow fadeInUp" src="<?php echo base_url('/assets/begam/images/right-banner.png'); ?>" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Available Game In start -->
    <section id="available-game-section">
        <div class="overlay pb-120">
            <div class="container wow fadeInUp">
                <div class="main-container">
                    <div class="row justify-content-between">
                        <div class="col-lg-10">
                            <div class="section-header">
                                <h2 class="title">Available Games</h2>
                                <p>We are constantly adding new games</p>
                            </div>
                        </div>
                    </div>
                    <div class="available-game-carousel">
                        <div class="single-item">
                            <a href="#"><img src="<?php echo base_url('/assets/begam/images/game-1.png'); ?>" alt="image"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="<?php echo base_url('/assets/begam/images/game-2.png'); ?>" alt="image"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="<?php echo base_url('/assets/begam/images/game-3.png'); ?>" alt="image"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="<?php echo base_url('/assets/begam/images/game-4.png'); ?>" alt="image"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="<?php echo base_url('/assets/begam/images/game-3.png'); ?>" alt="image"></a>
                        </div>
                    </div>
                    <div class="btn-area text-center">
                        <a href="tournaments.html" class="cmn-btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Available Game In end -->

    <!-- How Works start -->
    
    <!-- How Works end -->

    <!-- Browse Tournaments start -->
    <section id="tournaments-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="title">Browse Tournaments</h2>
                            <p>Find the perfect tournaments for you. Head to head matches
                                where you pick the game, rules and prize.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-40 mp-none">
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Status</span>
                            <select>
                                <option>Status</option>
                                <option value="1">Upcoming 1</option>
                                <option value="2">Upcoming 2</option>
                                <option value="3">Upcoming 3</option>
                                <option value="5">Upcoming 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Search</span>
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Team Size</span>
                            <select>
                                <option>Select Team Size</option>
                                <option value="1">Size 1</option>
                                <option value="2">Size 2</option>
                                <option value="3">Size 3</option>
                                <option value="4">Size 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Entry Fee</span>
                            <select>
                                <option>Select Entry Fee</option>
                                <option value="1">50</option>
                                <option value="2">60</option>
                                <option value="3">70</option>
                                <option value="4">80</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 d-flex align-items-center">
                            <img class="top-img" src="<?php echo base_url('/assets/begam/images/game-img-1.png'); ?>" alt="image">
                        </div>
                        <div class="col-lg-6 col-md-9 d-flex align-items-center">
                            <div class="mid-area">
                                <h4>Mix It Mondays - Carry Only</h4>
                                <div class="title-bottom d-flex">
                                    <div class="time-area bg">
                                        <img src="<?php echo base_url('/assets/begam/images/waitng-icon.png'); ?>" alt="image">
                                        <span>Starts in</span>
                                        <span class="time">10d 2H 18M</span>
                                    </div>
                                    <div class="date-area bg">
                                        <span class="date">Apr 21, 5:00 AM EDT</span>
                                    </div>
                                </div>
                                <div class="single-box d-flex">
                                    <div class="box-item">
                                        <span class="head">ENTRY/PLAYER</span>
                                        <span class="sub">10 Credits</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Team Size</span>
                                        <span class="sub">2 VS 2</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Max Teams</span>
                                        <span class="sub">64</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Enrolled</span>
                                        <span class="sub">11</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">skill Level</span>
                                        <span class="sub">All</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="prize-area text-center">
                                <div class="contain-area">
                                    <span class="prize"><img src="<?php echo base_url('/assets/begam/images/price-coin.png'); ?>" alt="image">prize</span>
                                    <h4 class="dollar">$739</h4>
                                    <a href="tournaments-single.html" class="cmn-btn">View Tournament</a>
                                    <p>Top 3 Players Win a Cash Prize</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 d-flex align-items-center">
                            <img class="top-img" src="<?php echo base_url('/assets/begam/images/game-img-2.png'); ?>" alt="image">
                        </div>
                        <div class="col-lg-6 col-md-9 d-flex align-items-center">
                            <div class="mid-area">
                                <h4>Head 2 Head - Weekly - Nano</h4>
                                <div class="title-bottom d-flex">
                                    <div class="time-area bg">
                                        <img src="<?php echo base_url('/assets/begam/images/waitng-icon.png'); ?>" alt="image">
                                        <span>Starts in</span>
                                        <span class="time">10d 2H 18M</span>
                                    </div>
                                    <div class="date-area bg">
                                        <span class="date">Apr 21, 5:00 AM EDT</span>
                                    </div>
                                </div>
                                <div class="single-box d-flex">
                                    <div class="box-item">
                                        <span class="head">ENTRY/PLAYER</span>
                                        <span class="sub">10 Credits</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Team Size</span>
                                        <span class="sub">2 VS 2</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Max Teams</span>
                                        <span class="sub">64</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Enrolled</span>
                                        <span class="sub">11</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">skill Level</span>
                                        <span class="sub">All</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="prize-area text-center">
                                <div class="contain-area">
                                    <span class="prize"><img src="<?php echo base_url('/assets/begam/images/price-coin.png'); ?>" alt="image">prize</span>
                                    <h4 class="dollar">$854</h4>
                                    <a href="tournaments-single.html" class="cmn-btn">View Tournament</a>
                                    <p>Top 3 Players Win a Cash Prize</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 d-flex align-items-center">
                            <img class="top-img" src="<?php echo base_url('/assets/begam/images/game-img-3.png'); ?>" alt="image">
                        </div>
                        <div class="col-lg-6 col-md-9 d-flex align-items-center">
                            <div class="mid-area">
                                <h4>marathon aim premium</h4>
                                <div class="title-bottom d-flex">
                                    <div class="time-area bg">
                                        <img src="<?php echo base_url('/assets/begam/images/waitng-icon.png'); ?>" alt="image">
                                        <span>Starts in</span>
                                        <span class="time">10d 2H 18M</span>
                                    </div>
                                    <div class="date-area bg">
                                        <span class="date">Apr 21, 5:00 AM EDT</span>
                                    </div>
                                </div>
                                <div class="single-box d-flex">
                                    <div class="box-item">
                                        <span class="head">ENTRY/PLAYER</span>
                                        <span class="sub">10 Credits</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Team Size</span>
                                        <span class="sub">2 VS 2</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Max Teams</span>
                                        <span class="sub">64</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Enrolled</span>
                                        <span class="sub">11</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">skill Level</span>
                                        <span class="sub">All</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="prize-area text-center">
                                <div class="contain-area">
                                    <span class="prize"><img src="<?php echo base_url('/assets/begam/images/price-coin.png'); ?>" alt="image">prize</span>
                                    <h4 class="dollar">$105</h4>
                                    <a href="tournaments-single.html" class="cmn-btn">View Tournament</a>
                                    <p>Top 3 Players Win a Cash Prize</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 d-flex align-items-center">
                            <img class="top-img" src="<?php echo base_url('/assets/begam/images/game-img-4.png'); ?>" alt="image">
                        </div>
                        <div class="col-lg-6 col-md-9 d-flex align-items-center">
                            <div class="mid-area">
                                <h4>Begum Fortnite Tournament 23</h4>
                                <div class="title-bottom d-flex">
                                    <div class="time-area bg">
                                        <img src="<?php echo base_url('/assets/begam/images/waitng-icon.png'); ?>" alt="image">
                                        <span>Starts in</span>
                                        <span class="time">10d 2H 18M</span>
                                    </div>
                                    <div class="date-area bg">
                                        <span class="date">Apr 21, 5:00 AM EDT</span>
                                    </div>
                                </div>
                                <div class="single-box d-flex">
                                    <div class="box-item">
                                        <span class="head">ENTRY/PLAYER</span>
                                        <span class="sub">10 Credits</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Team Size</span>
                                        <span class="sub">2 VS 2</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Max Teams</span>
                                        <span class="sub">64</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Enrolled</span>
                                        <span class="sub">11</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">skill Level</span>
                                        <span class="sub">All</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="prize-area text-center">
                                <div class="contain-area">
                                    <span class="prize"><img src="<?php echo base_url('/assets/begam/images/price-coin.png'); ?>" alt="image">prize</span>
                                    <h4 class="dollar">$473</h4>
                                    <a href="tournaments-single.html" class="cmn-btn">View Tournament</a>
                                    <p>Top 3 Players Win a Cash Prize</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item mp-none">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 d-flex align-items-center">
                            <img class="top-img" src="<?php echo base_url('/assets/begam/images/game-img-5.png'); ?>" alt="image">
                        </div>
                        <div class="col-lg-6 col-md-9 d-flex align-items-center">
                            <div class="mid-area">
                                <h4>60 Player - Weekly - Micro</h4>
                                <div class="title-bottom d-flex">
                                    <div class="time-area bg">
                                        <img src="<?php echo base_url('/assets/begam/images/waitng-icon.png'); ?>" alt="image">
                                        <span>Starts in</span>
                                        <span class="time">10d 2H 18M</span>
                                    </div>
                                    <div class="date-area bg">
                                        <span class="date">Apr 21, 5:00 AM EDT</span>
                                    </div>
                                </div>
                                <div class="single-box d-flex">
                                    <div class="box-item">
                                        <span class="head">ENTRY/PLAYER</span>
                                        <span class="sub">10 Credits</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Team Size</span>
                                        <span class="sub">2 VS 2</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Max Teams</span>
                                        <span class="sub">64</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Enrolled</span>
                                        <span class="sub">11</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">skill Level</span>
                                        <span class="sub">All</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="prize-area text-center">
                                <div class="contain-area">
                                    <span class="prize"><img src="<?php echo base_url('/assets/begam/images/price-coin.png'); ?>" alt="image">prize</span>
                                    <h4 class="dollar">$778</h4>
                                    <a href="tournaments-single.html" class="cmn-btn">View Tournament</a>
                                    <p>Top 3 Players Win a Cash Prize</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Browse Tournaments end -->

    <!-- Counter In start -->
    <section id="counter-section">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row mp-none">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/counter-icon-1.png'); ?>" alt="image">
                            </div>
                            <h3><span class="counter">84</span>K</h3>
                            <p>Matches Played</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/counter-icon-2.png'); ?>" alt="image">
                            </div>
                            <h3>$<span class="counter">96</span>m</h3>
                            <p>Winnings Paid</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/counter-icon-3.png'); ?>" alt="image">
                            </div>
                            <h3><span class="counter">180</span></h3>
                            <p>Active Ladders</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/counter-icon-4.png'); ?>" alt="image">
                            </div>
                            <h3><span class="counter">168</span>b</h3>
                            <p>XP Earned</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter In end -->

    <!-- Players of the Week In start -->
    <section id="players-week-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-7 mb-30">
                        <div class="section-header text-center">
                            <h2 class="title">Players of the Week</h2>
                            <p>We take a look at the best player of the week awarded
                                on Monday for the previous Monday to Sunday</p>
                        </div>
                    </div>
                </div>
                <div class="row mp-none">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <div class="img-wrapper">
                                    <img src="<?php echo base_url('/assets/begam/images/player-1.png'); ?>" alt="image">
                                </div>
                            </div>
                            <a href="profile.html"><h5>Barton Griggs</h5></a>
                            <p class="date">
                                <span class="text-sm earn">1970 XP Earned</span>
                                <span class="text-sm">04/05 - 04/12</span>
                            </p>
                            <p class="text-sm credit">
                                <span class="text-sm"><img src="<?php echo base_url('/assets/begam/images/credit-icon.png'); ?>" alt="image"> +20 credits</span>
                            </p>
                            <a href="profile.html" class="cmn-btn">View Profile</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item mid-area text-center">
                            <div class="top-level">
                                <img src="<?php echo base_url('/assets/begam/images/star.png'); ?>" alt="image">
                            </div>
                            <div class="img-area">
                                <div class="img-wrapper">
                                    <img src="<?php echo base_url('/assets/begam/images/player-2.png'); ?>" alt="image">
                                </div>
                            </div>
                            <a href="profile.html"><h5>Mervin Trask</h5></a>
                            <p class="date">
                                <span class="text-sm earn">1970 XP Earned</span>
                                <span class="text-sm">04/05 - 04/12</span>
                            </p>
                            <p class="text-sm credit">
                                <span class="text-sm"><img src="<?php echo base_url('/assets/begam/images/credit-icon.png'); ?>" alt="image"> +20 credits</span>
                            </p>
                            <a href="profile.html" class="cmn-btn">View Profile</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <div class="img-wrapper">
                                    <img src="<?php echo base_url('/assets/begam/images/player-3.png'); ?>" alt="image">
                                </div>
                            </div>
                            <a href="profile.html"><h5>Adria Poulin</h5></a>
                            <p class="date">
                                <span class="text-sm earn">1970 XP Earned</span>
                                <span class="text-sm">04/05 - 04/12</span>
                            </p>
                            <p class="text-sm credit">
                                <span class="text-sm"><img src="<?php echo base_url('/assets/begam/images/credit-icon.png'); ?>" alt="image"> +20 credits</span>
                            </p>
                            <a href="profile.html" class="cmn-btn">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Players of the Week In end -->

    <!-- Features In start -->
    <section id="features-section">
        <div class="overlay pt-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h2 class="title">Begam Games Features</h2>
                            <p>The biggest esports tournaments anytime, anywhere</p>
                        </div>
                    </div>
                </div>
                <div class="row pm-none">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/features-icon-1.png'); ?>" alt="image">
                            </div>
                            <h5>Premium Support</h5>
                            <p>Our dedicated admins are there to answer in no time, avg response time is 5mins.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/features-icon-2.png'); ?>" alt="image">
                            </div>
                            <h5>Instant Deposits</h5>
                            <p>Make a deposit and receive your funds instantly to your account.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/features-icon-3.png'); ?>" alt="image">
                            </div>
                            <h5>Climb the Leaderboards</h5>
                            <p>Compete in monthly leaderboard challenges for real cash and prizes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/features-icon-4.png'); ?>" alt="image">
                            </div>
                            <h5>Make 2x your $$</h5>
                            <p>Our dedicated admins are there to answer in no time, avg response time is 5mins.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/features-icon-5.png'); ?>" alt="image">
                            </div>
                            <h5>Make up to 10X your $$</h5>
                            <p>Make up to 10X your money on multiplayer tourneys. With paid and free entry.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/features-icon-6.png'); ?>" alt="image">
                            </div>
                            <h5>Play at your Level</h5>
                            <p>With ranked divisions we help you find the right level to compete.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features In end -->

    <!-- Call to Action In start -->
    <section id="call-to-action">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="main-content">
                    <div class="row d-sm-flex justify-content-sm-end">
                        <div class="col-lg-4 col-md-1">
                            <img class="left" src="<?php echo base_url('/assets/begam/images/call-to-action-left.png'); ?>" alt="image">
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-5 d-flex align-items-center">
                            <div class="section-item">
                                <h4>Invite Friends and Win Rewards.Join BEGAM Games today</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center justify-content-sm-end align-items-center">
                            <div class="btn-area d-flex justify-content-center justify-content-sm-end align-items-center">
                                <a href="registration.html" class="cmn-btn">Join Now</a>
                            </div>
                            <img src="<?php echo base_url('/assets/begam/images/call-to-action-right.png'); ?>" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action In end -->

    <!-- Testimonials In start -->
    <section id="testimonials-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h2 class="title">Our Gamers Review</h2>
                            <p>Thousands of Happy Gamers All Around the World</p>
                        </div>
                    </div>
                </div>
                <div class="row mp-none">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <p>I play Tournament every day, it's a great way to relax and win cash too!</p>
                            <div class="bottom-area d-flex justify-content-between">
                                <div class="left-area d-flex">
                                    <div class="img">
                                        <div class="img-area">
                                            <img src="<?php echo base_url('/assets/begam/images/testimonials-user-1.png'); ?>" alt="image">
                                        </div>
                                    </div>
                                    <div class="title-area">
                                        <h6>Brice Tong</h6>
                                        <span>Texas, USA</span>
                                    </div>
                                </div>
                                <div class="amount">
                                    <h6>$306</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <p>When I hang out with my friends, we play Tournament, its so much fun</p>
                            <div class="bottom-area d-flex justify-content-between">
                                <div class="left-area d-flex">
                                    <div class="img">
                                        <div class="img-area">
                                            <img src="<?php echo base_url('/assets/begam/images/testimonials-user-1.png'); ?>" alt="image">
                                        </div>
                                    </div>
                                    <div class="title-area">
                                        <h6>Alva Adair</h6>
                                        <span>Frankfurt, Germany</span>
                                    </div>
                                </div>
                                <div class="amount">
                                    <h6>$496</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <p>I joined for the community but ended up winning cash, amazing.</p>
                            <div class="bottom-area d-flex justify-content-between">
                                <div class="left-area d-flex">
                                    <div class="img">
                                        <div class="img-area">
                                            <img src="<?php echo base_url('/assets/begam/images/testimonials-user-1.png'); ?>" alt="image">
                                        </div>
                                    </div>
                                    <div class="title-area">
                                        <h6>Ray Sutton</h6>
                                        <span>Ontario, Canada</span>
                                    </div>
                                </div>
                                <div class="amount">
                                    <h6>$306</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials In end -->

    <!-- Call Action In start -->
    <section id="call-action" class="pb-120">
        <div class="overlay">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="left-area">
                            <h2 class="title">Build Your Esports Profile</h2>
                            <p>Showcase your achievements, match history and win rate while you build your reputation on Begam.</p>
                            <a href="registration.html" class="cmn-btn-second">Sign Up Free</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="right-area">
                            <img src="<?php echo base_url('/assets/begam/images/profile-info.png'); ?>" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call Action In end -->

    <!-- footer-section start -->
    <footer id="footer-section">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-top">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-8">
                                    <div class="top-area text-center">
                                        <h3>Subscribe to Our Newsletter</h3>
                                        <p>Receive news, stay updated and special offers</p>
                                    </div>
                                    <form action="#">
                                        <div class="subscribe d-flex">
                                            <input type="email" placeholder="Your Email Address">
                                            <button class="cmn-btn">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-mid pt-120">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-8 col-md-8 d-flex justify-content-md-between justify-content-center align-items-center cus-grid">
                        <div class="logo-section">
                            <a class="site-logo site-title" href="index.html"><img src="<?php echo base_url('/assets/begam/images/logo.png'); ?>" alt="site-logo"></a>
                        </div>
                        <ul class="menu-side d-flex align-items-center">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="right-area">
                            <ul class="d-flex">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="main-content">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-lg-12 col-md-6">
                            <div class="left-area text-center">
                                <p>Copyright © 2021. All Rights Reserved By
                                    <a href="#">BEGAM</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-section end -->

    <script src="<?php echo base_url('/assets/begam/js/jquery-3.5.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/begam/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/begam/js/slick.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/begam/js/jquery.nice-select.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/begam/js/fontawesome.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/begam/js/jquery.counterup.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/begam/js/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/begam/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/begam/js/wow.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/begam/js/main.js'); ?>"></script>

</body>

</html>