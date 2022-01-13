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
    <link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/plugins/datepicker/datepicker3.css'); ?>">
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
                                        <li><a href="tournaments.html">Pembagian Grup</a></li>
                                        <li><a href="tournaments.html">Jadwal Pertandingan</a></li>
                                        <li><a href="tournaments.html">Hasil Pertandingan</a></li>
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
                            </ul>
                        </div>
                    </nav>
                    <div class="right-area header-action d-flex align-items-center">
                        <a href="<?php echo base_url("login/")?>" class="login-btn">Login</a>
                        <a href="<?php echo base_url("login/register")?>" class="cmn-btn">Daftar!</a>
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
                                <h3>Mobile Legends</h3>
                                <h1>Tournaments</h1>
                                <p>Website Turnamen Mobile Legend</p>
                                <div class="btn-play d-flex justify-content-center align-items-center">
                                    <a href="<?php echo base_url("login/register")?>" class="cmn-btn">Get Started</a>
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


    <!-- How Works start -->
    
    <!-- How Works end -->

    <!-- Browse Tournaments start -->
    <section id="tournaments-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="title">Cari Turnamen</h2>
                            <p>Temukan turnamen yang sempurna untuk Team Anda, dan dapatkan Hadiahnya.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-40 mp-none">
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Status</span>
                            <select name="STATUS">
                                <option value="">ALL</option>
                                <option value="BUKA">AKTIF</option>
                                <option value="TUTUP">SELESAI</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Tanggal Dari</span>
                            <input type="text" class="datepicker" name="TGL_MULAI" placeholder="Tanggal">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Sampai</span>
                            <input type="text" class="datepicker" name="TGL_SAMPAI" placeholder="Tanggal">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                        <button type="button" style="margin-top: 40px;" class="cmn-btn" id="BTN_CARI">Cari</button>
                        </div>
                    </div>
                </div>
                <span id="LIST_EVENT"></span>
            </div>
        </div>
    </section>
    <!-- Browse Tournaments end -->


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
                            <h2 class="title">MOBA GAMES</h2>
                            <p>Turnamen esports Mobile Legend Terbaik kapan saja, di mana saja</p>
                        </div>
                    </div>
                </div>
                <div class="row pm-none">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/features-icon-1.png'); ?>" alt="image">
                            </div>
                            <h5>Daftarkan Team Anda</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/features-icon-6.png'); ?>" alt="image">
                            </div>
                            <h5>Ikuti Turnamennya</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="<?php echo base_url('/assets/begam/images/features-icon-5.png'); ?>" alt="image">
                            </div>
                            <h5>Menangkan Hadiahnya</h5>
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
                                <h4>Undang Teman dan Menangkan Hadiah. Bergabunglah dengan kami sekarang juga.</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center justify-content-sm-end align-items-center">
                            <div class="btn-area d-flex justify-content-center justify-content-sm-end align-items-center">
                                <a href="<?php echo base_url("login/register")?>" class="cmn-btn">Daftar Sekarang</a>
                            </div>
                            <img src="<?php echo base_url('/assets/begam/images/call-to-action-right.png'); ?>" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action In end -->


    <!-- footer-section start -->
    <footer id="footer-section">
        
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
    <script src="<?php echo base_url('/assets/adminlte/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
    <script>
        $(".datepicker").datepicker({
            autoclose: true,
            format: 'dd-M-yyyy'
        });

        $("#BTN_CARI").click(function(){
            var rowData = '';
            $.ajax({
                url: "<?php echo site_url('front/showEvent') ?>",
                type: "POST",
                data: {
                    status: $("[name='STATUS']").val(),
                    tanggal_mulai: $("[name='TGL_MULAI']").val(),
                    tanggal_sampai: $("[name='TGL_SAMPAI']").val(),
                },
                dataType: "JSON",
                success: function(data){
                    console.log(data)
                    $.each(data, function(index, value){
                        rowData += '<div class="single-item">'+
                                        '<div class="row">'+
                                            '<div class="col-lg-3 col-md-3 d-flex align-items-center">'+
                                                '<img class="top-img" src="<?php echo base_url('/assets/begam/images/game-img-1.png'); ?>" alt="image">'+
                                            '</div>'+
                                            '<div class="col-lg-6 col-md-9 d-flex align-items-center">'+
                                                '<div class="mid-area">'+
                                                    '<h4>'+value['nm_event']+'</h4>'+
                                                    '<div class="title-bottom d-flex">'+
                                                       '<div class="time-area bg">'+
                                                            '<img src="<?php echo base_url('/assets/begam/images/waitng-icon.png'); ?>" alt="image">'+
                                                            '<span>Tanggal Event</span>'+
                                                        '</div>'+
                                                        '<div class="date-area bg">'+
                                                            '<span class="date">'+value['tgl_event']+'</span>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="single-box d-flex">'+
                                                        '<div class="box-item">'+
                                                            '<span class="head">Pendaftaran</span></br>'+
                                                            '<span class="sub" style="padding: 0px 10px;">'+value['tgl_pendaftaran']+'</span>'+
                                                        '</div>'+
                                                        '<div class="box-item">'+
                                                            '<span class="head">Pertempuran</span></br>'+
                                                            '<span class="sub" style="padding: 0px 10px;">Antar Team</span>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-3 d-flex align-items-center">'+
                                                '<div class="prize-area text-center">'+
                                                    '<div class="contain-area">'+
                                                        '<span class="prize"><img src="<?php echo base_url('/assets/begam/images/price-coin.png'); ?>" alt="image">Biaya</span>'+
                                                        '<h4 class="dollar">Rp. '+value['biaya_pendaftaran']+'</h4>'+
                                                        '<a href="<?php echo base_url("front/dtlEvent/")?>'+value['id_event']+'" class="cmn-btn">View Tournament</a>'+
                                                        '<p>Top 3 Players Win</p>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'
                    })

                    $("#LIST_EVENT").html(rowData);
                }
            })
        })
    </script>
</body>

</html>