<?php include 'atas.php'; ?>
<?php include 'menu.php'; ?>


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

<script src="<?php echo base_url('/assets/begam/js/jquery-3.5.1.min.js'); ?>"></script>
<script>
    
</script>
<?php include 'footer.php'; ?>