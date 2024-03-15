<div class="main">

    <!--page header section start-->
    <section class=""
        style="background: url('<?=base_url();?>assets/img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="section-lg bg-gradient-primary text-white section-header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-center">
                            <h1>About Us</h1>
                            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                    <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page header section end-->

    <!--work process section start-->
    <!-- <section class="section section-lg  ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>How Does it Work?</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and enthusiastically disseminate outsourcing customer service.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="feature-widget text-center p-4">
                        <div class="p-3 p-md-4 rounded bg-primary text-white icon icon-shape icon-lg mb-4">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="widget-text">
                            <h3 class="h5">Generate Ideas</h3>
                            <p class="mb-0">Appropriately restore mission-critical strategic theme areas rather than visionary ideas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="feature-widget text-center p-4">
                        <div class="p-3 p-md-4 rounded bg-secondary text-white icon icon-shape icon-lg mb-4">
                            <i class="fab fa-confluence"></i>
                        </div>
                        <div class="widget-text">
                            <h3 class="h5">Create Design</h3>
                            <p class="mb-0">Quickly redefine granular schemas after top-line total linkage. Appropriately foster team driven.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="feature-widget text-center p-4">
                        <div class="p-3 p-md-4 rounded bg-default text-white icon icon-shape icon-lg mb-4">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="widget-text">
                            <h3 class="h5">Launch Project</h3>
                            <p class="mb-0">Seamlessly deploy impactful schemas without initiatives. Interactively utilize scalable initiatives.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--work process section end-->

    <!--about section start-->
    <section class="section section-lg  ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="card bg-primary position-relative  shadow-lg fancy-radius p-3">
                        <div class="dot-shape-top position-absolute">
                            <img src="<?= base_url(); ?>assets/img/color-shape.svg" alt="dot" class="img-fluid">
                        </div>
                        <img class="fancy-radius img-fluid" src="<?= base_url(); ?>uploads/about/<?=$about[0]->image;?> " alt="modern desk">
                        <div class="dot-shape position-absolute bottom-0">
                            <img src="<?= base_url(); ?>assets/img/dot-shape.png" alt="dot">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="video-promo-content">
                        <h2><?=$about[0]->heading;?></h2>
                        <p class="lead"><?=$about[0]->description;?></p>
                 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg  ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                
                <div class="col-md-12 col-lg-5">
                    <div class="video-promo-content">
                        <h2><?=$about[0]->mission_heading;?></h2>
                        <p class="lead"><?=$about[0]->mission;?></p>
                 
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="card bg-primary position-relative  shadow-lg fancy-radius p-3">
                        <div class="dot-shape-top position-absolute">
                            <img src="<?= base_url(); ?>assets/img/color-shape.svg" alt="dot" class="img-fluid">
                        </div>
                        <img class="fancy-radius img-fluid" src="<?= base_url(); ?>uploads/about/<?=$about[0]->mission_image;?> " alt="modern desk">
                        <div class="dot-shape position-absolute bottom-0">
                            <img src="<?= base_url(); ?>assets/img/dot-shape.png" alt="dot">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg  ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="card bg-primary position-relative  shadow-lg fancy-radius p-3">
                        <div class="dot-shape-top position-absolute">
                            <img src="<?= base_url(); ?>assets/img/color-shape.svg" alt="dot" class="img-fluid">
                        </div>
                        <img class="fancy-radius img-fluid" src="<?= base_url(); ?>uploads/about/<?=$about[0]->vision_image;?> " alt="modern desk">
                        <div class="dot-shape position-absolute bottom-0">
                            <img src="<?= base_url(); ?>assets/img/dot-shape.png" alt="dot">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="video-promo-content">
                        <h2><?=$about[0]->vision;?></h2>
                        <p class="lead"><?=$about[0]->vision_description;?></p>
                 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->

    <!--cta section start-->
    <!-- <section class="section py-0"
        style="background: url('<?=base_url();?>assets/img/hero-bg11.jpg')no-repeat center fixed">
        <div class="section-lg section bg-gradient-primary text-white  ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9 col-md-10 col-lg-9">
                        <div class="section-title text-center mb-5">
                            <h2>Download Our Business Apps</h2>
                            <p class="lead">Building your Apps helps attract more potential clients. Our integrated
                                marketing team will promote enabled internal or work high-impact convergence.</p>
                        </div>
                        <div class="download-btn-wrap text-center">
                            <a class="btn btn-pill border border-variant-light  text-white  shadow-hover mr-md-3 mb-4 mb-md-3 mb-lg-0"
                                href="#">
                                <div class="d-flex align-items-center">
                                    <span class="icon icon-md mr-3 h-auto"><i class="fab fa-apple"></i></span>
                                    <div class="d-block text-left">
                                        <small class="font-small ">Download on the</small>
                                        <div class="h6 mb-0">App Store</div>
                                    </div>
                                </div>
                            </a>
                            <a class="btn btn-pill border border-variant-light  text-white  shadow-hover mr-md-3 mb-4 mb-md-3 mb-lg-0"
                                href="#">
                                <div class="d-flex align-items-center">
                                    <span class="icon icon-md mr-3 h-auto"><i class="fab fa-google-play"></i></span>
                                    <div class="d-block text-left">
                                        <small class="font-small ">Download on the</small>
                                        <div class="h6 mb-0">Google Play</div>
                                    </div>
                                </div>
                            </a>
                            <a class="btn btn-pill border border-variant-light  text-white  shadow-hover" href="#">
                                <div class="d-flex align-items-center">
                                    <span class="icon icon-md mr-3 h-auto"><i class="fab fa-windows"></i></span>
                                    <div class="d-block text-left">
                                        <small class="font-small ">Download on the</small>
                                        <div class="h6 mb-0">Windows</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--cta section end-->

    <!--team section start-->
    <!-- <section class="section section-lg ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Meet our lovely team</h2>
                        <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements
                            develop end-to-end customer service.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mb-md-4 mb-4">
                    <div class="profile-card">
                        <div class="card bg-white shadow animate-hover border-variant-soft">
                            <div class="bg-soft p-2 mb-4">
                                <img src="<?=base_url();?>assets/img/team/team-8.jpg" class="card-img-top"
                                    alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-4 pb-4 pt-0">
                                <h3 class="h6">John Q. Public</h3>
                                <span class="font-small font-weight-normal text-gray mb-3">Developer</span>
                                <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link"
                                            class="icon icon-shape icon-xs bg-facebook-alt rounded-circle icon-facebook brand-facebook mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link"
                                            class="icon icon-shape icon-xs bg-twitch-alt rounded-circle brand-twitter icon-twitter mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="40k Followers" aria-describedby="tooltip927904">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link"
                                            class="icon icon-shape icon-xs bg-youtube-alt rounded-circle brand-youtube icon-youtube mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link"
                                            class="icon icon-shape icon-xs bg-dribbble-alt rounded-circle brand-dribbble icon-dribbble mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-md-4 mb-4">
                    <div class="profile-card">
                        <div class="card bg-white shadow animate-hover border-variant-soft">
                            <div class="bg-soft p-2 mb-4">
                                <img src="<?=base_url();?>assets/img/team/team-7.jpg" class="card-img-top"
                                    alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-4 pb-4 pt-0">
                                <h3 class="h6">Madurai Mani Iyer</h3>
                                <span class="font-small font-weight-normal text-gray mb-3">Lead Developer</span>
                                <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link"
                                            class="icon icon-shape icon-xs bg-facebook-alt rounded-circle icon-facebook brand-facebook mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link"
                                            class="icon icon-shape icon-xs bg-twitch-alt rounded-circle brand-twitter icon-twitter mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="40k Followers" aria-describedby="tooltip927904">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link"
                                            class="icon icon-shape icon-xs bg-youtube-alt rounded-circle brand-youtube icon-youtube mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link"
                                            class="icon icon-shape icon-xs bg-dribbble-alt rounded-circle brand-dribbble icon-dribbble mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-md-4 mb-4">
                    <div class="profile-card">
                        <div class="card bg-white shadow animate-hover border-variant-soft">
                            <div class="bg-soft p-2 mb-4">
                                <img src="<?=base_url();?>assets/img/team/team-6.jpg" class="card-img-top"
                                    alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-4 pb-4 pt-0">
                                <h3 class="h6">Maria J. Go</h3>
                                <span class="font-small font-weight-normal text-gray mb-3">Support Engineer</span>
                                <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link"
                                            class="icon icon-shape icon-xs bg-facebook-alt rounded-circle icon-facebook brand-facebook mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link"
                                            class="icon icon-shape icon-xs bg-twitch-alt rounded-circle brand-twitter icon-twitter mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="40k Followers" aria-describedby="tooltip927904">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link"
                                            class="icon icon-shape icon-xs bg-youtube-alt rounded-circle brand-youtube icon-youtube mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link"
                                            class="icon icon-shape icon-xs bg-dribbble-alt rounded-circle brand-dribbble icon-dribbble mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-md-4 mb-4">
                    <div class="profile-card">
                        <div class="card bg-white shadow animate-hover border-variant-soft">
                            <div class="bg-soft p-2 mb-4">
                                <img src="<?=base_url();?>assets/img/team/team-5.jpg" class="card-img-top"
                                    alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-4 pb-4 pt-0">
                                <h3 class="h6">John Q. Public</h3>
                                <span class="font-small font-weight-normal text-gray mb-3">Developer</span>
                                <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link"
                                            class="icon icon-shape icon-xs bg-facebook-alt rounded-circle icon-facebook brand-facebook mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link"
                                            class="icon icon-shape icon-xs bg-twitch-alt rounded-circle brand-twitter icon-twitter mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="40k Followers" aria-describedby="tooltip927904">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link"
                                            class="icon icon-shape icon-xs bg-youtube-alt rounded-circle brand-youtube icon-youtube mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link"
                                            class="icon icon-shape icon-xs bg-dribbble-alt rounded-circle brand-dribbble icon-dribbble mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-md-4 mb-4">
                    <div class="profile-card">
                        <div class="card bg-white shadow animate-hover border-variant-soft">
                            <div class="bg-soft p-2 mb-4">
                                <img src="<?=base_url();?>assets/img/team/team-4.jpg" class="card-img-top"
                                    alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-4 pb-4 pt-0">
                                <h3 class="h6">Madurai Mani Iyer</h3>
                                <span class="font-small font-weight-normal text-gray mb-3">Lead Developer</span>
                                <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link"
                                            class="icon icon-shape icon-xs bg-facebook-alt rounded-circle icon-facebook brand-facebook mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link"
                                            class="icon icon-shape icon-xs bg-twitch-alt rounded-circle brand-twitter icon-twitter mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="40k Followers" aria-describedby="tooltip927904">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link"
                                            class="icon icon-shape icon-xs bg-youtube-alt rounded-circle brand-youtube icon-youtube mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link"
                                            class="icon icon-shape icon-xs bg-dribbble-alt rounded-circle brand-dribbble icon-dribbble mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-md-4 mb-4">
                    <div class="profile-card">
                        <div class="card bg-white shadow animate-hover border-variant-soft">
                            <div class="bg-soft p-2 mb-4">
                                <img src="<?=base_url();?>assets/img/team/team-3.jpg" class="card-img-top"
                                    alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-4 pb-4 pt-0">
                                <h3 class="h6">Maria J. Go</h3>
                                <span class="font-small font-weight-normal text-gray mb-3">Support Engineer</span>
                                <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link"
                                            class="icon icon-shape icon-xs bg-facebook-alt rounded-circle icon-facebook brand-facebook mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link"
                                            class="icon icon-shape icon-xs bg-twitch-alt rounded-circle brand-twitter icon-twitter mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="40k Followers" aria-describedby="tooltip927904">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link"
                                            class="icon icon-shape icon-xs bg-youtube-alt rounded-circle brand-youtube icon-youtube mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link"
                                            class="icon icon-shape icon-xs bg-dribbble-alt rounded-circle brand-dribbble icon-dribbble mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-md-4 mb-4">
                    <div class="profile-card">
                        <div class="card bg-white shadow animate-hover border-variant-soft">
                            <div class="bg-soft p-2 mb-4">
                                <img src="<?=base_url();?>assets/img/team/team-2.jpg" class="card-img-top"
                                    alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-4 pb-4 pt-0">
                                <h3 class="h6">John Q. Public</h3>
                                <span class="font-small font-weight-normal text-gray mb-3">Developer</span>
                                <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link"
                                            class="icon icon-shape icon-xs bg-facebook-alt rounded-circle icon-facebook brand-facebook mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link"
                                            class="icon icon-shape icon-xs bg-twitch-alt rounded-circle brand-twitter icon-twitter mrx-1data-toggle="
                                            tooltip" data-placement="top" title="" data-original-title="40k Followers"
                                            aria-describedby="tooltip927904">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link"
                                            class="icon icon-shape icon-xs bg-youtube-alt rounded-circle brand-youtube icon-youtube mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link"
                                            class="icon icon-shape icon-xs bg-dribbble-alt rounded-circle brand-dribbble icon-dribbble mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-md-4 mb-4">
                    <div class="profile-card">
                        <div class="card bg-white shadow animate-hover border-variant-soft">
                            <div class="bg-soft p-2 mb-4">
                                <img src="<?=base_url();?>assets/img/team/team-1.jpg" class="card-img-top"
                                    alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-4 pb-4 pt-0">
                                <h3 class="h6">Madurai Mani Iyer</h3>
                                <span class="font-small font-weight-normal text-gray mb-3">Lead Developer</span>
                                <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link"
                                            class="icon icon-shape icon-xs bg-facebook-alt rounded-circle icon-facebook brand-facebook mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link"
                                            class="icon icon-shape icon-xs bg-twitch-alt rounded-circle brand-twitter icon-twitter mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="40k Followers" aria-describedby="tooltip927904">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link"
                                            class="icon icon-shape icon-xs bg-youtube-alt rounded-circle brand-youtube icon-youtube mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link"
                                            class="icon icon-shape icon-xs bg-dribbble-alt rounded-circle brand-dribbble icon-dribbble mx-1"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--team section end-->

    <!--testimonial section start-->
    <section class="section section-lg bg-soft">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2><?=$cms5[0]->cms_heading; ?></h2>
                        <p class="lead">
                        <?=$cms5[0]->sub_heading; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach($testimonial as $t ){?>
                <div class="col-12 col-lg-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="testimonial-single shadow-sm bg-white rounded-custom p-5">
                        <div class="quotation mb-4">
                            <span class="icon icon-md icon-lg icon-light"><i class="fas fa-quote-left"></i></span>
                        </div>
                        <blockquote class="blockquote">
                            <?=$t->description;?>
                        </blockquote>
                        <div class="d-flex justify-content-md-between justify-content-lg-between align-items-center pt-3">
                            <div class="media align-items-center">
                                <img src="<?= base_url(); ?>assets/img/team/team-4.jpg" alt="team" class="avatar avatar-sm mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0"><?=$t->name;?></h6>
                                    <small><?=$t->designation;?></small>
                                </div>
                            </div>
                            <!-- <div class="client-ratting d-none d-md-block d-lg-block">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                    <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                    <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                    <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                    <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                </ul>
                                <span class="font-weight-bold small">5.0 <span class="font-weight-lighter">Out of
                                        5</span></span>
                            </div> -->
                        </div>
                    </div>
                </div>
                <?php }?>
                
            </div>
        </div>
    </section>
    <!--testimonial section end-->

    <!--blog section start-->
    <!-- <section class="section section-lg ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Our Latest News</h2>
                        <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements
                            develop end-to-end customer service.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="card bg-white border-variant-soft shadow-soft">
                        <div class="blog-img position-relative">
                            <img src="<?=base_url();?>assets/img/blog/4.jpg" class="card-img-top rounded-top"
                                alt="themetags office">
                            <a href="#" class="position-absolute category-text small badge badge-secondary">SEO,
                                Analytics</a>
                        </div>
                        <div class="card-body">
                            <div class="media d-flex align-items-center justify-content-between">
                                <div class="post-group">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="23k followers">
                                        <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1"
                                            src="<?=base_url();?>assets/img/clients/client-1.jpg" alt="admin"> <span
                                            class="small">Admin</span>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="small"><span class="far fa-calendar-alt mr-2"></span>15 March
                                        2020</span>
                                </div>
                            </div>
                            <h3 class="h5 card-title mt-3"><a href="#">Holisticly promote enabled</a></h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="services-details.html"
                                class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="card bg-white border-variant-soft shadow-soft">
                        <div class="blog-img position-relative">
                            <img src="<?=base_url();?>assets/img/blog/2.jpg" class="card-img-top rounded-top"
                                alt="themetags office">
                            <a href="#"
                                class="position-absolute category-text small badge badge-secondary">Marketing</a>
                        </div>
                        <div class="card-body">
                            <div class="media d-flex align-items-center justify-content-between">
                                <div class="post-group">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="23k followers">
                                        <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1"
                                            src="<?=base_url();?>assets/img/clients/client-2.jpg" alt="admin"> <span
                                            class="small">Writer</span>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="small"><span class="far fa-calendar-alt mr-2"></span>15 March
                                        2020</span>
                                </div>
                            </div>
                            <h3 class="h5 card-title mt-3"><a href="#">Authoritatively unleash fully</a></h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="services-details.html"
                                class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="card bg-white border-variant-soft shadow-soft">
                        <div class="blog-img position-relative">
                            <img src="<?=base_url();?>assets/img/blog/1.jpg" class="card-img-top rounded-top"
                                alt="themetags office">
                            <a href="#" class="position-absolute category-text small badge badge-secondary">Business</a>
                        </div>
                        <div class="card-body">
                            <div class="media d-flex align-items-center justify-content-between">
                                <div class="post-group">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="23k followers">
                                        <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1"
                                            src="<?=base_url();?>assets/img/clients/client-5.jpg" alt="admin"> <span
                                            class="small">Joe B</span>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="small"><span class="far fa-calendar-alt mr-2"></span>15 March
                                        2020</span>
                                </div>
                            </div>
                            <h3 class="h5 card-title mt-3"><a href="#">We partnered up with Google</a></h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="services-details.html"
                                class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--blog section end-->

    <!--customer logo section start-->
    <!-- <div class="section section-sm bg-soft">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel">
                        <div class="item single-client">
                            <img src="<?=base_url();?>assets/img/client-logos/logo1.png" alt="client logo"
                                class="img-fluid">
                        </div>
                        <div class="item single-client">
                            <img src="<?=base_url();?>assets/img/client-logos/logo5.png" alt="client logo"
                                class="img-fluid">
                        </div>
                        <div class="item single-client">
                            <img src="<?=base_url();?>assets/img/client-logos/logo6.png" alt="client logo"
                                class="img-fluid">
                        </div>
                        <div class="item single-client">
                            <img src="<?=base_url();?>assets/img/client-logos/logo4.png" alt="client logo"
                                class="img-fluid">
                        </div>
                        <div class="item single-client">
                            <img src="<?=base_url();?>assets/img/client-logos/logo2.png" alt="client logo"
                                class="img-fluid">
                        </div>
                        <div class="item single-client">
                            <img src="<?=base_url();?>assets/img/client-logos/logo6.png" alt="client logo"
                                class="img-fluid">
                        </div>
                        <div class="item single-client">
                            <img src="<?=base_url();?>assets/img/client-logos/logo3.png" alt="client logo"
                                class="img-fluid">
                        </div>
                        <div class="item single-client">
                            <img src="<?=base_url();?>assets/img/client-logos/logo8.png" alt="client logo"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--customer logo section end-->

</div>