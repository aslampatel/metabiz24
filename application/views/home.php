<div class="main">

    <!--hero section start-->
    <?php foreach($banner as $b) {?>
    <section class="section pt-9 pb-9 section-header text-white gradient-overly-right-color" style="background: url('<?= base_url(); ?>uploads/banner/<?=$b->image;?>')no-repeat center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-slider-content">
                        <span class="text-uppercase"><?=$b->title;?>    </span>
                        <h1 class="display-2"><?=$b->second_title;?> </h1>
                        <p class="lead"><?=$b->third_title;?> </p>
                        <!-- <a href="#" class="btn btn-secondary mt-4">Get Start Now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!--hero section end-->

    <!--promo section start-->
    <!-- <section class="section section-sm pb-0 mt-n8 z-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-md-4 mb-4 mb-lg-0">
                    <div class="single-promo-block promo-hover-bg-1 hover-image shadow p-5 rounded-custom bg-white">
                        <div class="icon icon-lg text-primary"><i class="fab fa-confluence"></i></div>
                        <div class="promo-block-content">
                            <h5>Creative Design</h5>
                            <p class="mb-0">Compellingly promote collaborative products without synergistic schemas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-md-4 mb-4 mb-lg-0">
                    <div class="single-promo-block promo-hover-bg-2 hover-image shadow p-5 rounded-custom bg-white">
                        <div class="icon icon-lg text-primary"><i class="fas fa-bug"></i></div>
                        <div class="promo-block-content">
                            <h5>Cyber Security</h5>
                            <p class="mb-0">Enthusiastically scale mission-critical imperatives rather than an expanded
                                array.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-md-4 mb-4 mb-lg-0">
                    <div class="single-promo-block promo-hover-bg-3 hover-image shadow p-5 rounded-custom bg-white">
                        <div class="icon icon-lg text-primary"><i class="fas fa-cloud-moon"></i></div>
                        <div class="promo-block-content">
                            <h5>Cloud Services</h5>
                            <p class="mb-0">Rapidiously create cooperative resources rather than client-based leadership
                                skills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--promo section end-->

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
                        <!-- <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Creative</strong> Websites Design
                            </li>
                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Accounting</strong> Procedures
                                Guidebook</li>
                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Cost</strong> Accounting
                                Fundamentals</li>
                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>SEO</strong> Optimization Services
                            </li>
                        </ul> -->
                        <a href="<?=base_url();?>about" class="btn btn-primary  mt-3">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->

    <!--services section start-->
    <!-- <section class="section services-section ptb-100 bg-soft">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>We Provide Quality Services</h2>
                        <p class="lead">Efficiently aggregate end-to-end core competencies without maintainable.
                            Dynamically
                            foster tactical solutions without enabled value.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                    <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                        <div class="icon icon-lg mr-4 text-secondary">
                            <i class="ti-announcement"></i>
                        </div>
                        <div class="services-content-wrap">
                            <h3 class="h6">Marketing Services</h3>
                            <p>Progressively empower business "outside the box" thinking with resource-leveling
                                partnerships.</p>
                            <a href="services-details.html"
                                class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                    <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                        <div class="icon icon-lg mr-4 text-secondary">
                            <i class="ti-light-bulb"></i>
                        </div>
                        <div class="services-content-wrap">
                            <h3 class="h6">Web App Development</h3>
                            <p>Quickly pontificate holistic e-commerce rather than goal web-readiness enhance
                                inexpensive.</p>
                            <a href="services-details.html"
                                class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                    <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                        <div class="icon icon-lg mr-4 text-secondary">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <div class="services-content-wrap">
                            <h3 class="h6">24/7 Call Center Service</h3>
                            <p>Authoritatively reinvent multimedia based niches with global portals orchestrate
                                client-centered .</p>
                            <a href="services-details.html"
                                class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                    <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                        <div class="icon icon-lg mr-4 text-secondary">
                            <i class="ti-bell"></i>
                        </div>
                        <div class="services-content-wrap">
                            <h3 class="h6">Social Media Marketing</h3>
                            <p>Assertively leverage other's standardized e-services with fully tested e-commerce
                                synergistic. </p>
                            <a href="services-details.html"
                                class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                    <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                        <div class="icon icon-lg mr-4 text-secondary">
                            <i class="ti-briefcase"></i>
                        </div>
                        <div class="services-content-wrap">
                            <h3 class="h6">Corporate Business</h3>
                            <p>Enthusiastically scale client-centric supply chains vis-a-vis enabled benefits empower
                                global core.</p>
                            <a href="services-details.html"
                                class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                    <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                        <div class="icon icon-lg mr-4 text-secondary">
                            <i class="ti-vector"></i>
                        </div>
                        <div class="services-content-wrap">
                            <h3 class="h6">Creative Consultancy</h3>
                            <p>Conveniently productize corporate imperatives for innovative best practices ideas ethical
                                change.</p>
                            <a href="services-details.html"
                                class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--services section end-->

    <!--cta section start-->
    <!-- <section class="section py-0" style="background: url('<?= base_url(); ?>assets/img/hero-bg11.jpg')no-repeat center fixed">
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

    <!--portfolio section start-->
    
    <!--portfolio section end-->

    <!--blog section start-->
    <!-- <section class="section section-lg bg-soft">
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
                            <img src="<?= base_url(); ?>assets/img/blog/4.jpg" class="card-img-top rounded-top" alt="themetags office">
                            <a href="#" class="position-absolute category-text small badge badge-secondary">SEO,
                                Analytics</a>
                        </div>
                        <div class="card-body">
                            <div class="media d-flex align-items-center justify-content-between">
                                <div class="post-group">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="23k followers">
                                        <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1" src="<?= base_url(); ?>assets/img/clients/client-1.jpg" alt="admin"> <span class="small">Admin</span>
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
                            <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="card bg-white border-variant-soft shadow-soft">
                        <div class="blog-img position-relative">
                            <img src="<?= base_url(); ?>assets/img/blog/2.jpg" class="card-img-top rounded-top" alt="themetags office">
                            <a href="#" class="position-absolute category-text small badge badge-secondary">Marketing</a>
                        </div>
                        <div class="card-body">
                            <div class="media d-flex align-items-center justify-content-between">
                                <div class="post-group">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="23k followers">
                                        <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1" src="<?= base_url(); ?>assets/img/clients/client-2.jpg" alt="admin"> <span class="small">Writer</span>
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
                            <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="card bg-white border-variant-soft shadow-soft">
                        <div class="blog-img position-relative">
                            <img src="<?= base_url(); ?>assets/img/blog/1.jpg" class="card-img-top rounded-top" alt="themetags office">
                            <a href="#" class="position-absolute category-text small badge badge-secondary">Business</a>
                        </div>
                        <div class="card-body">
                            <div class="media d-flex align-items-center justify-content-between">
                                <div class="post-group">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="23k followers">
                                        <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1" src="<?= base_url(); ?>assets/img/clients/client-5.jpg" alt="admin"> <span class="small">Joe
                                            B</span>
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
                            <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read
                                more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--blog section end-->

    <!--team section start-->
    <!-- <section class="section section-lg ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Our Team</h2>
                        <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements
                            develop end-to-end customer service.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="profile-card">
                        <div class="card bg-soft  shadow-sm animate-hover border-variant-soft">
                            <div class="profile-image-small  bg-white  shadow-inset shadow border border-light rounded-circle p-1 mt-5 mb-4">
                                <img src="<?= base_url(); ?>assets/img/team/team-6.jpg" class="card-img-top rounded-circle" alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-5 pb-5 pt-0">
                                <h3 class="h5 mb-2">John Q. Public</h3>
                                <span class="h6 font-weight-normal text-gray mb-3">Developer</span>
                                <ul class="list-unstyled d-flex my-3 justify-content-center">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="profile-card">
                        <div class="card bg-soft  shadow-sm animate-hover border-variant-soft">
                            <div class="profile-image-small  bg-white  shadow-inset shadow border border-light rounded-circle p-1 mt-5 mb-4">
                                <img src="<?= base_url(); ?>assets/img/team/team-1.jpg" class="card-img-top rounded-circle" alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-5 pb-5 pt-0">
                                <h3 class="h5 mb-2">Madurai Mani Iyer</h3>
                                <span class="h6 font-weight-normal text-gray mb-3">Developer</span>
                                <ul class="list-unstyled d-flex my-3 justify-content-center">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="profile-card">
                        <div class="card bg-soft  shadow-sm animate-hover border-variant-soft">
                            <div class="profile-image-small  bg-white  shadow-inset shadow border border-light rounded-circle p-1 mt-5 mb-4">
                                <img src="<?= base_url(); ?>assets/img/team/team-4.jpg" class="card-img-top rounded-circle" alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-5 pb-5 pt-0">
                                <h3 class="h5 mb-2">Maria J. Go</h3>
                                <span class="h6 font-weight-normal text-gray mb-3">Developer</span>
                                <ul class="list-unstyled d-flex my-3 justify-content-center">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
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
         <div class="col-md-12">
            <div class="subscribe-content">
                <h3 class="text-center">Business Plan</h3>
                <!--<p class="mb-lg-0 mb-md-0"><?=$cms6[0]->sub_heading; ?></p>-->
            </div>
        </div>
        <iframe width="100%" height="500" src="<?=$cms5[0]->url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <!--<video width="320" height="240" autoplay>-->
        <!--  <source src="movie.mp4" type="video/mp4">-->
        <!--  <source src="movie.ogg" type="video/ogg">-->
        <!--Your browser does not support the video tag.-->
        <!--</video>-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="col-md-9 col-lg-8">-->
    <!--                <div class="section-heading mb-5 text-center">-->
    <!--                    <h2><?=$cms5[0]->cms_heading; ?></h2>-->
    <!--                    <p class="lead">-->
    <!--                    <?=$cms5[0]->sub_heading; ?>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="row">-->
    <!--            <?php foreach($testimonial as $t ){?>-->
    <!--            <div class="col-12 col-lg-6 mb-4 mb-md-4 mb-lg-0">-->
    <!--                <div class="testimonial-single shadow-sm bg-white rounded-custom p-5">-->
    <!--                    <div class="quotation mb-4">-->
    <!--                        <span class="icon icon-md icon-lg icon-light"><i class="fas fa-quote-left"></i></span>-->
    <!--                    </div>-->
    <!--                    <blockquote class="blockquote">-->
    <!--                        <?=$t->description;?>-->
    <!--                    </blockquote>-->
    <!--                    <div class="d-flex justify-content-md-between justify-content-lg-between align-items-center pt-3">-->
    <!--                        <div class="media align-items-center">-->
    <!--                            <img src="<?= base_url(); ?>assets/img/team/team-4.jpg" alt="team" class="avatar avatar-sm mr-3">-->
    <!--                            <div class="media-body">-->
    <!--                                <h6 class="mb-0"><?=$t->name;?></h6>-->
    <!--                                <small><?=$t->designation;?></small>-->
    <!--                            </div>-->
    <!--                        </div>-->
                            
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <?php }?>-->
                
    <!--        </div>-->
    <!--    </div>-->
    </section>
    <!--testimonial section end-->
    <!--cta section start-->
    <section class="section section-sm py-5 ">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-12">
                    <div class="subscribe-content">
                        <h3 class="text-center">Join Us</h3>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container">
    <div class="registration-form">
        <!-- <h2>User Registration</h2> -->
        <?php if ($this->session->flashdata('successmss') != '') { ?>
            <center class="mt-2">
                <div class="alert alert-success">
                    <strong><?php echo @$this->session->flashdata('successmss');
                            $this->session->set_flashdata("successmss", ""); ?></strong>
                </div>
            </center>
        <?php } ?>
        <form method="post" action="<?= base_url(); ?>page/user_registration" id="registrationForm" onsubmit="return validateForm()">
    <div class="form-group">
        <label for="firstName">Name:<span class="text-danger">*</span></label>
        <input type="text" name="name" class="form-control" id="firstName" placeholder="Enter your name">
        <small id="nameError" class="text-danger"></small>
    </div>
    <div class="form-group">
        <label for="email">Email:<span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        <small id="emailError" class="text-danger"></small>
    </div>
    <div class="form-group">
        <label for="password">Phone:<span class="text-danger">*</span></label>
        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter your Phone Number"  required="" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
        <small id="phoneError" class="text-danger"></small>
    </div>
    <div class="form-group">
        <label for="password">Password:<span class="text-danger">*</span></label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
        <small id="passwordError" class="text-danger"></small>
    </div>
    <div class="form-group">
        <label for="signupConfirmPassword">Confirm Password<span class="text-danger">*</span></label>
        <input type="password" class="form-control" id="signupConfirmPassword" name="confirm_password" placeholder="Confirm Password">
        <small id="confirmPasswordError" class="text-danger"></small>
        <small id="successMessage" class="text-success"></small>
    </div>
    <div class="form-group ">
        <label for="password">Sponsored Code: <span class="text-danger">*</span></label>
        <input type="<?= empty($url) ? 'text' : 'text'; ?>" <?= empty($url) ? '' : 'readonly'; ?> value="<?= $url; ?>" class="form-control" id="refCode" name="ref_code" placeholder="Enter your Sponsored Code">
        <!-- <input type="hidden" class="form-control" id="refurl" name="ref_url" placeholder="Enter your Reference Url" value=""> -->

        <small id="refCodeError" class="text-danger"></small>
        <small id="refCodeSuccess" class="text-success"></small>
    </div>
    <input type="hidden" name="userCount" id="userCount">
    <div class="form-group">
        <label for="password">Placement Code:<span class="text-danger"></span></label>
        <input type="text" class="form-control" id="sponCode" name="spon_code" placeholder="Enter your Placement Code">
        <small id="sponCodeError" class="text-danger"></small>
        <small id="sponCodeSuccess" class="text-success"></small>
    </div>
    <p>Already register? <a href="<?= base_url(); ?>login">Log In</a></p>
    <button type="submit"  class="btn btn-primary btn-block">Register</button>
</form>

    </div>
</div>
    </section>
    <!--cta section start-->
    <!--<section class="section section-sm py-5 ">-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-around align-items-center">-->
    <!--            <div class="col-md-7">-->
    <!--                <div class="subscribe-content">-->
    <!--                    <h3><?=$cms6[0]->cms_heading; ?></h3>-->
    <!--                    <p class="mb-lg-0 mb-md-0"><?=$cms6[0]->sub_heading; ?></p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-4">-->
    <!--                <div class="action-btn text-lg-right text-sm-left">-->
    <!--                    <a href="<?=base_url();?>contact" class="btn btn-primary">Contact With Us</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--cta section end-->

</div>