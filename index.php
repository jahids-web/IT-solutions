<?php
include 'config.php';
?>

<?php 
$banner_select = "SELECT * FROM banner";
$banner_result = mysqli_query($conn, $banner_select);
$after_assoc_banner = mysqli_fetch_assoc($banner_result);
?>




<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/mitech-preview/index-cybersecurity.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Oct 2020 07:10:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>jahid IT Solutions Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- CSS
        ============================================ -->

    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--====================  header area ====================-->
    <div class="header-area bg-white header-sticky only-mobile-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="index.html">
                               <h3>Jahid</h3>
                            </a>
                        </div>

                        <div class="header-right flexible-image-slider-wrap">

                            <div class="header-right-inner" id="hidden-icon-wrapper">
                                <!-- Header Search Form -->
                                <div class="header-search-form d-md-none d-block">
                                    <form action="#" class="search-form-top">
                                        <input class="search-field" type="text" placeholder="Search…">
                                        <button class="search-submit">
                                            <i class="search-btn-icon fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>

                                <!-- Header Top Info -->
                                <div class="swiper-container header-top-info-slider-werap top-info-slider__container">
                                    <div class="swiper-wrapper header-top-info-inner">
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">0122 8899900</h6>
                                                    <div class="info-sub-title">Info@example.com</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-map-marker-alt"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">219 Amara Fort Apt. 394</h6>
                                                    <div class="info-sub-title">New York, NY 941</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-clock"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">8:00AM - 6:00PM</h6>
                                                    <div class="info-sub-title">Monday to Saturday</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-comment-alt-lines"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">Online 24/7</h6>
                                                    <div class="info-sub-title">+122 123 4567</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Header Social Networks -->
                                <div class="header-social-networks style-icons">
                                    <div class="inner">
                                        <a class=" social-link hint--bounce hint--bottom-left" aria-label="Twitter" href="https://twitter.com/" data-hover="Twitter" target="_blank">
                                            <i class="social-icon fab fa-twitter"></i>
                                        </a>
                                        <a class=" social-link hint--bounce hint--bottom-left" aria-label="Facebook" href="https://facebook.com/" data-hover="Facebook" target="_blank">
                                            <i class="social-icon fab fa-facebook-f"></i>
                                        </a>
                                        <a class=" social-link hint--bounce hint--bottom-left" aria-label="Instagram" href="https://instagram.com/" data-hover="Instagram" target="_blank">
                                            <i class="social-icon fab fa-instagram"></i>
                                        </a>
                                        <a class=" social-link hint--bounce hint--bottom-left" aria-label="Linkedin" href="https://linkedin.com/" data-hover="Linkedin" target="_blank">
                                            <i class="social-icon fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                            <!-- hidden icons menu -->
                            <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                <a href="javascript:void(0)">
                                    <i class="far fa-ellipsis-h-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-wrap border-top d-md-block d-none header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-bottom-inner">
                            <div class="header-bottom-left-wrap">
                                <!-- navigation menu -->
                                <div class="header__navigation d-none d-xl-block">
                                    <nav class="navigation-menu">
                                        <ul>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>Home</span></a>
                                               
                                            </li>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>Company</span></a>
                                                <ul class="submenu">
                                                    <li class="has-children">
                                                        <a href="about-us-01.html"><span>About us</span></a>
                                                        <ul class="submenu">
                                                            <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                                            <li><a href="about-us-02.html"><span>About us 02</span></a></li>
                                                        
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                                   
                                                </ul>
                                            </li>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>IT solutions</span></a>
                                            
                                            </li>
                                            <li class="has-children">
                                                <a href="#"><span>Elements</span></a>
                                                <!-- mega menu -->
                                                <ul class="megamenu megamenu--mega">
                                                    <li>
                                                        <h2 class="page-list-title">ELEMENT GROUP 01</h2>
                                                   
                                                    </li>
                                                    <li>
                                                        <h2 class="page-list-title">ELEMENT GROUP 02</h2>
                                                  
                                                    </li>
                                                    <li>
                                                        <h2 class="page-list-title">ELEMENT GROUP 03</h2>
                                                     
                                                    </li>
                                                    <li>
                                                        <h2 class="page-list-title">ELEMENT GROUP 04</h2>
                                                
                                                    </li>

                                                  
                                                </ul>
                                            </li>
                                        
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="header-search-form">
                                <form action="#" class="search-form-top style-02">
                                    <input class="search-field" type="text" placeholder="Search…">
                                    <button class="search-submit">
                                        <i class="search-btn-icon fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--====================  End of header area  ====================-->
    <div class="site-wrapper-reveal">
        <!--============ Cybersecurity Hero Start ============-->
        <div class="cybersecurity-hero processing-hero-bg__color ">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!--baseline-->
                    <div class="col-lg-6 col-md-7">
                        <div class="cybersecurity-hero-text wow move-up">
                            <h6>figure plans out </h6>
                            <h3><?php echo $after_assoc_banner['banner_title'] ?></h3>
                            <P><?php echo $after_assoc_banner['banner_desp'] ?></P>
                            <div class="hero-button mt-30">
                                <a href="#" class="ht-btn ht-btn-md"><?php echo $after_assoc_banner['banner_btn'] ?> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="cybersecurity-hero-images-wrap wow move-up">
                            <div class="cybersecurity-hero-images section-space--mt_80">
                                <!-- <div class="inner-img-one">
                                    <img class="img-fluid worldRotate" src="assets/images/hero/mitech-slider-cybersecurity-global-image.png" alt="">
                                </div> -->
                                <div class="inner-img-two" style=" background: url(uploads/banner/<?php echo $after_assoc_banner['banner_img'] ?>);">
                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============ Cybersecurity Hero End ============-->
        <!--===========  feature-large-images-wrapper  Start =============-->
        <div class="feature-large-images-wrapper section-space--ptb_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_60">
                            <h6 class="section-sub-title mb-20">Our company</h6>
                            <h3 class="heading">We run all kinds of IT services that <br> vow your <span class="text-color-primary"> success</span></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

                <div class="cybersecurity-about-box section-space--pb_100">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-1">
                            <div class="modern-number-01">
                                <h2 class="heading  mr-5"><span class="mark-text">38</span>Years’ Experience in IT</h2>
                                <h6 class="heading mt-30">Learn more about our Success Stories</h6>
                            </div>
                        </div>

                        <div class="col-lg-5 offset-lg-1">
                            <div class="cybersecurity-about-text">
                                <div class="text">Mitech specializes in technological and IT-related services such as product engineering, warranty management, building cloud, infrastructure, network, etc. We put a strong focus on the needs of your business to figure out solutions that best fits your demand and nail it.</div>
                                <div class="button-text">
                                    <a href="#" class="btn-text">
                                        Discover now
                                        <span class="button-icon ml-1">
                                    <i class="far fa-long-arrow-right"></i>
                                </span>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="row">

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <a href="#" class="ht-large-box-images style-03">
                                    <div class="large-image-box">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img class="img-fluid" src="assets/images/box-image/blog-01-480x298.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Quality Assurance System</h5>
                                            <div class="text">At Mitech, we have a holistic and integrated approach towards core modernization to experience technological evolution.
                                            </div>
                                            <div class="box-images-arrow">
                                                <span class="button-text">Discover now</span>
                                                <i class="far fa-long-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <a href="#" class="ht-large-box-images style-03">
                                    <div class="large-image-box">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img class="img-fluid" src="assets/images/box-image/mitech-home-infotechno-box-large-image-03-480x298.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Highly Professional Staffs</h5>
                                            <div class="text">Having obtained the official & formal training in IT technology and technical fields, our staffs know best.
                                            </div>
                                            <div class="box-images-arrow">
                                                <span class="button-text">Discover now</span>
                                                <i class="far fa-long-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <a href="#" class="ht-large-box-images style-03">
                                    <div class="large-image-box">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img class="img-fluid" src="assets/images/box-image/mitech-home-infotechno-box-large-image-02-480x298.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Info Security Management</h5>
                                            <div class="text">At Mitech, we have a holistic and integrated approach towards core modernization to experience technological evolution.
                                            </div>
                                            <div class="box-images-arrow">
                                                <span class="button-text">Discover now</span>
                                                <i class="far fa-long-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- ht-box-icon End -->
                            </div>


                        </div>

                        <div class="section-under-heading text-center section-space--mt_20">Challenges are just opportunities in disguise <a href="#">Take the challenge!</a></div>


                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-large-images-wrapper  End =============-->
        <!--===========  feature-icon-wrapper  Start =============-->
        <div class="feature-icon-wrapper bg-gray section-space--ptb_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h6 class="section-sub-title mb-20">Optimal Technology Solutions</h6>
                            <h3 class="heading">Reach out to the world’s most <br><span class="text-color-primary"> reliable IT services.</span></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="feature-list__two">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-1" data-svg-icon="assets/images/svg/linea-basic-heart.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">IT Design </h5>
                                                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-2" data-svg-icon="assets/images/svg/linea-basic-case.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">IT Management</h5>
                                                <div class="text">It’s possible to simultaneously manage and transform information from one server to another.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-3" data-svg-icon="assets/images/svg/linea-basic-alarm.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Data Security</h5>
                                                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-4" data-svg-icon="assets/images/svg/linea-basic-geolocalize-05.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Business Reform</h5>
                                                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-5" data-svg-icon="assets/images/svg/linea-ecommerce-money.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Infrastructure Plan</h5>
                                                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-6" data-svg-icon="assets/images/svg/linea-basic-spread-text-bookmark.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Firewall Advance</h5>
                                                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-icon-wrapper  End =============-->
        <!--=========== fun fact Wrapper Start ==========-->
        <div class="fun-fact-wrapper bg-theme-default section-space--pb_30 section-space--pt_60">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow move-up">
                        <div class="fun-fact--two text-center">
                            <div class="fun-fact__count counter">120</div>
                            <h6 class="fun-fact__text">Happy clients</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow move-up">
                        <div class="fun-fact--two text-center">
                            <div class="fun-fact__count counter">32</div>
                            <h6 class="fun-fact__text">Finished projects</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow move-up">
                        <div class="fun-fact--two text-center">
                            <div class="fun-fact__count counter">73</div>
                            <h6 class="fun-fact__text">Skilled Experts</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow move-up">
                        <div class="fun-fact--two text-center">
                            <div class="fun-fact__count counter">318</div>
                            <h6 class="fun-fact__text">Media Posts</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== fun fact Wrapper End ==========-->
        <!--=========== Service Projects Wrapper Start =============-->
        <div class="service-projects-wrapper section-space--pt_100 mb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_60">
                            <h6 class="section-sub-title mb-20">Case studies</h6>
                            <h3 class="heading">Proud projects that <span class="text-color-primary">make us stand out</span></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-container service-slider__project-active">
                    <div class="swiper-wrapper service-slider__project">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="slide-content col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <div class="service-project-slide-info">
                                        <h4 class="heading font-weight--reguler mb-10">Aqua Technology Case Studies</h4>
                                        <p class="sub-text text-color-primary">Cyber Security</p>
                                        <div class="text">ARM Holdings is the world's leading semiconductor Intellectual Property (IP) supplier. A semiconductor is the electronic controller at the heart of many devices that we use every day.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                                    <div class="slide-image">
                                        <div class="image-wrap">
                                            <div class="image">
                                                <img class="img-fluid" src="assets/images/features/home-services-case-study-slide-image-01.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="slide-content col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <div class="service-project-slide-info">
                                        <h4 class="heading font-weight--reguler mb-10">Aqua Technology Case Studies</h4>
                                        <p class="sub-text text-color-primary">Cyber Security</p>
                                        <div class="text">ARM Holdings is the world's leading semiconductor Intellectual Property (IP) supplier. A semiconductor is the electronic controller at the heart of many devices that we use every day.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                                    <div class="slide-image">
                                        <div class="image-wrap">
                                            <div class="image">
                                                <img class="img-fluid" src="assets/images/features/home-services-case-study-slide-image-02.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== Service Projects Wrapper End =============-->

        <!--========= Pricing Table Area Start ==========-->
        <div class="pricing-table-area section-space--pb_100 bg-gradient">
            <div class="pricing-table-title-area position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                                <h6 class="section-sub-title mb-20">Pricing and plan</h6>
                                <h3 class="section-title">1 monthly fee for <span class="text-color-primary">all IT services.</span> </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing-table-content-area">
                <div class="container">
                    <div class="row pricing-table-one">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up">
                            <div class="pricing-table__inner">
                                <div class="pricing-table__header">
                                    <h6 class="sub-title">Basic</h6>
                                    <div class="pricing-table__image">
                                        <img src="assets/images/icons/mitech-pricing-box-icon-01-90x90.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="pricing-table__price-wrap">
                                        <h6 class="currency">$</h6>
                                        <h6 class="price">19</h6>
                                        <h6 class="period">/mo</h6>
                                    </div>
                                </div>
                                <div class="pricing-table__body">
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                    </div>
                                    <ul class="pricing-table__list text-left">
                                        <li>03 projects</li>
                                        <li>Quality &amp; Customer Experience</li>
                                        <li><span class="featured">Try for free, forever!</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table pricing-table--popular wow move-up">
                            <div class="pricing-table__inner">
                                <div class="pricing-table__feature-mark">
                                    <span>Popular Choice</span>
                                </div>
                                <div class="pricing-table__header">
                                    <h6 class="sub-title">Professional</h6>
                                    <div class="pricing-table__image">
                                        <img src="assets/images/icons/mitech-pricing-box-icon-02-88x88.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="pricing-table__price-wrap">
                                        <h6 class="currency">$</h6>
                                        <h6 class="price">59</h6>
                                        <h6 class="period">/mo</h6>
                                    </div>
                                </div>
                                <div class="pricing-table__body">
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn  ht-btn-md ">Get started</a>
                                    </div>
                                    <ul class="pricing-table__list text-left">
                                        <li>Unlimited project</li>
                                        <li>Power And Predictive Dialing</li>
                                        <li>Quality &amp; Customer Experience</li>
                                        <li>24/7 phone and email support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up">
                            <div class="pricing-table__inner">
                                <div class="pricing-table__header">
                                    <h6 class="sub-title">Professional</h6>
                                    <div class="pricing-table__image">
                                        <img src="assets/images/icons/mitech-pricing-box-icon-03-90x90.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="pricing-table__price-wrap">
                                        <h6 class="currency">$</h6>
                                        <h6 class="price">29</h6>
                                        <h6 class="period">/mo</h6>
                                    </div>
                                </div>
                                <div class="pricing-table__body">
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                    </div>
                                    <ul class="pricing-table__list text-left">
                                        <li>10 projects</li>
                                        <li>Power And Predictive Dialing </li>
                                        <li>Quality &amp; Customer Experience </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========= Pricing Table Area End ==========-->
        <!--====================  Blog Section Start ====================-->
        <div class="blog-section-wrapper section-space--pt_100  section-space--pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 wow move-up">

                        <div class="section-title section-title tablet-mb__60 section-space--mb_30 tablet-mt__0 small-mt__0 small-mb__60 mt-30">
                            <h6 class="section-sub-title mb-20">Blogs & news</h6>
                            <h3 class="heading">Interesting articles<span class="text-color-primary"> updated daily</span></h3>
                            <ul class="infotechno-blog-list mt-30">
                                <li>
                                    <a href="#">Ideas for High Returns on Investment</a>
                                </li>
                                <li>
                                    <a href="#">How Technology Made Businesses More Efficient</a>
                                </li>
                                <li>
                                    <a href="#">Data Secure on Transitioning to a New Office</a>
                                </li>
                                <li>
                                    <a href="#">The Keys to Persuading Customers Nowadays</a>
                                </li>
                                <li>
                                    <a href="#">Blockchain Technology Effects on Logistics Sector?</a>
                                </li>
                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 wow move-up">
                        <!--======= Single Blog Item Start ========-->
                        <div class="single-blog-item blog-grid">
                            <!-- Post Feature Start -->
                            <div class="post-feature blog-thumbnail">
                                <a href="blog-post-layout-one.html">
                                    <img class="img-fluid" src="assets/images/blog/blog-03-370x230.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <!-- Post Feature End -->

                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info">
                                <div class="post-meta">
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        February 28, 2019
                                    </div>
                                </div>

                                <h5 class="post-title font-weight--bold">
                                    <a href="#">5 Ways Technology Has Improved Business Today</a>
                                </h5>

                                <div class="post-excerpt mt-15">
                                    <p>They play a role in making operations more seamless, bridging the gap between authorities, consumers and businesses. …</p>
                                </div>
                                <div class="btn-text">
                                    <a href="#">Read more <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- Post info End -->
                        </div>
                        <!--===== Single Blog Item End =========-->

                    </div>

                    <div class="col-lg-4 col-md-6 wow move-up">
                        <!--======= Single Blog Item Start ========-->
                        <div class="single-blog-item blog-grid">
                            <!-- Post Feature Start -->
                            <div class="post-feature blog-thumbnail">
                                <a href="blog-post-layout-one.html">
                                    <img class="img-fluid" src="assets/images/blog/blog-02-370x230.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <!-- Post Feature End -->

                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info">
                                <div class="post-meta">
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        February 28, 2019
                                    </div>
                                </div>

                                <h5 class="post-title font-weight--bold">
                                    <a href="#">How Wireless Technology is Changing Business</a>
                                </h5>

                                <div class="post-excerpt mt-15">
                                    <p>It is far wiser to do your own installations and ensure that all data flowing through the organization has end-to-end encryption. …</p>
                                </div>
                                <div class="btn-text">
                                    <a href="#">Read more <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- Post info End -->
                        </div>
                        <!--===== Single Blog Item End =========-->

                    </div>


                </div>
            </div>
        </div>
        <!--====================  Blog Section End  ====================-->
        <!--===========  rev_redraw-wrapper  Start =============-->
        <div class="rev_redraw-wrapper ">
            <div class="rev_redraw-inner-box  bg-gray-2  section-space--mt_40 section-space--mb_40  rev_redraw-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="redraw-content text-center">
                                <h3 class="font-weight--reguler">Qualified methods <span class="text-color-primary">at its best</span></h3>
                                <p class="redwaw-dec">How IT services change people's life for the better </p>
                                <div class="bedraw-button">
                                    <a href="#" class="ht-btn ht-btn-md">Download free proposal sample <i class="far fa-long-arrow-right ml-2"></i></a>
                                </div>
                            </div>

                            <div class="redraw-images">
                                <img class="img-fluid redrow-1 animate wow fadeInLeft" data-wow-delay="0.1s" src="assets/images/other/mitech-slider-client-logos-logo-02.png" alt="">

                                <img class="img-fluid redrow-2 animate wow fadeInLeft" data-wow-delay="0.2s" src="assets/images/other/mitech-slider-client-logos-logo-03.png" alt="">

                                <img class="img-fluid redrow-3 animate wow fadeInLeft" data-wow-delay="0.3s" src="assets/images/other/mitech-slider-client-logos-logo-04.png" alt="">

                                <img class="img-fluid redrow-4 animate wow fadeInLeft" data-wow-delay="0.4s" src="assets/images/other/mitech-slider-client-logos-logo-05.png" alt="">

                                <img class="img-fluid redrow-5  animate wow fadeInLeft" data-wow-delay="0.1s" src="assets/images/other/mitech-slider-client-logos-logo-01.png" alt="">

                                <img class="img-fluid redrow-6 animate wow fadeInLeft" data-wow-delay="0.3s" src="assets/images/other/mitech-slider-client-logos-logo-06.png" alt="">

                                <img class="img-fluid redrow-7 animate wow fadeInLeft" data-wow-delay="0.4s" src="assets/images/other/mitech-slider-client-logos-logo-07.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  rev_redraw-wrapper  End =============-->


        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--ptb_100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-lg-6">
                        <div class="conact-us-wrap-one">
                            <h3 class="heading">Obtaining further information by <span class="text-color-primary">make a contact</span> with our experienced IT staffs. </h3>

                            <div class="sub-heading">We’re available for 8 hours a day!<br>Contact to require a detailed analysis and assessment of your plan.</div>

                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-form-wrap">
                                <form id="contact-form" action="https://hasthemes.com/file/mail.php" method="post">
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Name *">
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_email" type="email" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="contact-select">
                                            <div class="form-item contact-inner">
                                                <span class="inquiry">
                                        <select name="inquiry" class="select-item">
                                            <option value="Your inquiry about">Your inquiry about</option>
                                            <option value="General Information Request">General Information Request</option>
                                            <option value="Partner Relations">Partner Relations</option>
                                            <option value="Careers">Careers</option>
                                            <option value="Software Licencing">Software Licencing</option>
                                        </select>
                                    </span>
                                            </div>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="con_message" placeholder="Please describe what you need."></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Get a free consultation</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->
            <!--============ Contact Us Area Start =================-->
            <div class="contact-us-area infotechno-contact-us-bg section-space--pt_100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="image">
                                <img class="img-fluid" src="assets/images/banners/home-cybersecurity-contact-bg-image.png" alt="">
                            </div>
                        </div>

                        <div class="col-lg-4 ml-auto">
                            <div class="contact-info style-two text-left">

                                <div class="contact-info-title-wrap text-center">
                                    <h3 class="heading  mb-10">4.9/5.0</h3>
                                    <div class="ht-star-rating lg-style">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p class="sub-text">by 700+ customers for 3200+ clients</p>
                                </div>

                                <div class="contact-list-item">
                                    <a href="tel:190068668" class="single-contact-list">
                                        <div class="content-wrap">
                                            <div class="content">
                                                <div class="icon">
                                                    <span class="fal fa-phone"></span>
                                                </div>
                                                <div class="main-content">
                                                    <h6 class="heading">Call for advice now!</h6>
                                                    <div class="text">1900 68668</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="mailto:hello@mitech.com" class="single-contact-list">
                                        <div class="content-wrap">
                                            <div class="content">
                                                <div class="icon">
                                                    <span class="fal fa-envelope"></span>
                                                </div>
                                                <div class="main-content">
                                                    <h6 class="heading">Say hello</h6>
                                                    <div class="text">hello@mitech.com</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--============ Contact Us Area End =================-->
        </div>




        <!--====================  footer area ====================-->
        <div class="footer-area-wrapper reveal-footer bg-gray">
            <div class="footer-area section-space--ptb_80">
                <div class="container">
                    <div class="row footer-widget-wrapper">
                        <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                            <div class="footer-widget__logo mb-30">
                                <img src="assets/images/logo/dark-logo-160x48.png" class="img-fluid" alt="">
                            </div>
                            <ul class="footer-widget__list">
                                <li>58 Howard Street #2 San Francisco, CA 941</li>
                                <li><a href="mailto:contact@aeroland.com" class="hover-style-link">contact@aeroland.com</a></li>
                                <li><a href="tel:123344556" class="hover-style-link text-black font-weight--bold">(+68)1221 09876</a></li>
                                <li><a href="https://hasthemes.com/" class="hover-style-link text-color-primary">www.mitech.xperts.com</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">IT Services</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Managed IT</a></li>
                                <li><a href="#" class="hover-style-link">IT Support</a></li>
                                <li><a href="#" class="hover-style-link">IT Consultancy</a></li>
                                <li><a href="#" class="hover-style-link">Cloud Computing</a></li>
                                <li><a href="#" class="hover-style-link">Cyber Security</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Quick links</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Pick up locations</a></li>
                                <li><a href="#" class="hover-style-link">Terms of Payment</a></li>
                                <li><a href="#" class="hover-style-link">Privacy Policy</a></li>
                                <li><a href="#" class="hover-style-link">Where to Find Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Support</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Forum Support</a></li>
                                <li><a href="#" class="hover-style-link">Help & FAQ</a></li>
                                <li><a href="#" class="hover-style-link">Contact Us</a></li>
                                <li><a href="#" class="hover-style-link">Pricing and plans</a></li>
                                <li><a href="#" class="hover-style-link">Cookies Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <div class="footer-widget__title section-space--mb_50"></div>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="image_btn"><img class="img-fluid" src="assets/images/icons/aeroland-button-google-play.jpg" alt=""></a></li>
                                <li><a href="#" class="image_btn"><img class="img-fluid" src="assets/images/icons/aeroland-button-app-store.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area section-space--pb_30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left">
                            <span class="copyright-text">&copy; 2019 Mitech. <a href="https://hasthemes.com/">All Rights Reserved.</a></span>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <ul class="list ht-social-networks solid-rounded-icon">

                                <li class="item">
                                    <a href="https://twitter.com/" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-twitter link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://facebook.com/" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-facebook-f link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://instagram.com/" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-instagram link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://linkedin.com/" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-linkedin link-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of footer area  ====================-->





        <!--====================  scroll top ====================-->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!--====================  End of scroll top  ====================-->
        <!-- Start Toolbar -->
        <div class="demo-option-container">
            <!-- Start Toolbar -->
            <div class="aeroland__toolbar">
                <div class="inner">
                    <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Quick Options">
                        <i class="fal fa-project-diagram"></i>
                    </a>
                    <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://hasthemes.com/contact-us/" aria-label="Support Center">
                        <i class="fal fa-life-ring"></i>
                    </a>
                    <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://themeforest.net/item/mitech-it-solutions-html-template/24906742?ref=AslamHasib" aria-label="Purchase Mitech">
                        <i class="fal fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
            <!-- End Toolbar -->
            <!-- Start Quick Link -->
            <div class="demo-option-wrapper">
                <div class="demo-panel-header">
                    <div class="title">
                        <h6 class="heading mt-30">IT Solutions Mitech - Technology, IT Solutions & Services Html5 Template</h6>
                    </div>

                    <div class="panel-btn mt-20">
                        <a class="ht-btn ht-btn-md" href="https://themeforest.net/item/mitech-it-solutions-html-template/24906742?ref=AslamHasib"><i class="far fa-shopping-cart mr-2"></i> Buy Now </a>
                    </div>
                </div>
                <div class="demo-quick-option-list">
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-appointment.html" aria-label="Appointment">
                        <img class="img-fluid" src="assets/images/demo-images/home-01.jpg" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-infotechno.html" aria-label="Infotechno">
                        <img class="img-fluid" src="assets/images/demo-images/home-02.jpg" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-processing.html" aria-label="Processing">
                        <img class="img-fluid" src="assets/images/demo-images/home-03.jpg" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-services.html" aria-label="Services">
                        <img class="img-fluid" src="assets/images/demo-images/home-04.jpg" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-resolutions.html" aria-label="Resolutions">
                        <img class="img-fluid" src="assets/images/demo-images/home-05.jpg" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-cybersecurity.html" aria-label="Cybersecurity">
                        <img class="img-fluid" src="assets/images/demo-images/home-06.jpg" alt="Images">
                    </a>
                </div>
            </div>
            <!-- End Quick Link -->
        </div>
        <!-- End Toolbar -->

        <!--====================  mobile menu overlay ====================-->
        <div class="mobile-menu-overlay" id="mobile-menu-overlay">
            <div class="mobile-menu-overlay__inner">
                <div class="mobile-menu-overlay__header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-4">
                                <!-- mobile menu content -->
                                <div class="mobile-menu-content text-right">
                                    <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-overlay__body">
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="has-children">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index-infotechno.html"><span>Infotechno</span></a></li>
                                    <li><a href="index-processing.html"><span>Processing</span></a></li>
                                    <li><a href="index-appointment.html"><span>Appointment</span></a></li>
                                    <li><a href="index-services.html"><span>Services</span></a></li>
                                    <li><a href="index-resolutions.html"><span>Resolutions</span></a></li>
                                    <li><a href="index-cybersecurity.html"><span>cybersecurity</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Company</a>
                                <ul class="sub-menu">
                                    <li class="has-children">
                                        <a href="about-us-01.html"><span>About us</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                            <li><a href="about-us-02.html"><span>About us 02</span></a></li>
                                            <li class="has-children">
                                                <a href="#"><span>Submenu Level Two</span></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                    <li><a href="leadership.html"><span>Leadership</span></a></li>
                                    <li><a href="why-choose-us.html"><span>Why choose us</span></a></li>
                                    <li><a href="our-history.html"><span>Our history</span></a></li>
                                    <li><a href="faqs.html"><span>FAQs</span></a></li>
                                    <li><a href="careers.html"><span>Careers</span></a></li>
                                    <li><a href="pricing-plans.html"><span>Pricing plans</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">IT solutions</a>
                                <ul class="sub-menu">
                                    <li><a href="it-services.html"><span>IT Services</span></a></li>
                                    <li><a href="managed-it-services.html"><span>Managed IT Services</span></a></li>
                                    <li><a href="industries.html"><span>Industries</span></a></li>
                                    <li><a href="business-solution.html"><span>Business solution</span></a></li>
                                    <li><a href="it-services-details.html"><span>IT Services Details</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Elements</a>
                                <ul class="sub-menu">
                                    <li class="has-children">
                                        <a href="#">Element Group 01</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-accordion.html"><span>Accordions & Toggles</span></a></li>
                                            <li><a href="element-box-icon.html"><span>Box Icon</span></a></li>
                                            <li><a href="element-box-image.html"><span>Box Image</span></a></li>
                                            <li><a href="element-box-large-image.html"><span>Box Large Image</span></a></li>
                                            <li><a href="element-buttons.html"><span>Buttons</span></a></li>
                                            <li><a href="element-cta.html"><span>Call to action</span></a></li>
                                            <li><a href="element-client-logo.html"><span>Client Logo</span></a></li>
                                            <li><a href="element-countdown.html"><span>Countdown</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Element Group 02</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-counters.html"><span>Counters</span></a></li>
                                            <li><a href="element-dividers.html"><span>Dividers</span></a></li>
                                            <li><a href="element-flexible-image-slider.html"><span>Flexible image slider</span></a></li>
                                            <li><a href="element-google-map.html"><span>Google Map</span></a></li>
                                            <li><a href="element-gradation.html"><span>Gradation</span></a></li>
                                            <li><a href="element-instagram.html"><span>Instagram</span></a></li>
                                            <li><a href="element-lists.html"><span>Lists</span></a></li>
                                            <li><a href="element-message-box.html"><span>Message box</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Element Group 03</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-popup-video.html"><span>Popup Video</span></a></li>
                                            <li><a href="element-pricing-box.html"><span>Pricing Box</span></a></li>
                                            <li><a href="element-progress-bar.html"><span>Progress Bar</span></a></li>
                                            <li><a href="element-progress-circle.html"><span>Progress Circle</span></a></li>
                                            <li><a href="element-rows-columns.html"><span>Rows & Columns</span></a></li>
                                            <li><a href="element-social-networks.html"><span>Social Networks</span></a></li>
                                            <li><a href="element-tabs.html"><span>Tabs</span></a></li>
                                            <li><a href="element-team-member.html"><span>Team member</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Element Group 04</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-testimonials.html"><span>Testimonials</span></a></li>
                                            <li><a href="element-timeline.html"><span>Timeline</span></a></li>
                                            <li><a href="element-carousel-sliders.html"><span>Carousel Sliders</span></a></li>
                                            <li><a href="element-typed-text.html"><span>Typed Text</span></a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="javascript:void(0)">Case Studies</a>
                                <ul class="sub-menu">
                                    <li><a href="case-studies.html"><span>Case Studies 01</span></a></li>
                                    <li><a href="case-studies-02.html"><span>Case Studies 02</span></a></li>
                                    <li><a href="single-smart-vision.html"><span>Single Layout</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="javascript:void(0)">Blogs</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-large-image.html"><span>List Large Image</span></a></li>
                                    <li><a href="blog-list-left-large-image.html"><span>Left Large Image</span></a></li>
                                    <li><a href="blog-grid-classic.html"><span>Grid Classic</span></a></li>
                                    <li><a href="blog-grid-masonry.html"><span>Grid Masonry</span></a></li>
                                    <li class="has-children">
                                        <a href="blog-post-layout-one.html"><span>Single Layouts</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-post-layout-one.html"><span>Left Sidebar</span></a></li>
                                            <li><a href="blog-post-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                            <li><a href="blog-post-no-sidebar.html"><span>No Sidebar</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--====================  End of mobile menu overlay  ====================-->







        <!--====================  search overlay ====================-->
        <div class="search-overlay" id="search-overlay">

            <div class="search-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 ml-auto col-4">
                            <!-- search content -->
                            <div class="search-content text-right">
                                <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-overlay__inner">
                <div class="search-overlay__body">
                    <div class="search-overlay__form">
                        <form action="#">
                            <input type="text" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of search overlay  ====================-->

        <!-- JS
    ============================================ -->
        <!-- Modernizer JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- jQuery JS -->
        <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <!-- Swiper Slider JS -->
        <script src="assets/js/plugins/swiper.min.js"></script>

        <!-- Light gallery JS -->
        <script src="assets/js/plugins/lightgallery.min.js"></script>

        <!-- Waypoints JS -->
        <script src="assets/js/plugins/waypoints.min.js"></script>

        <!-- Counter down JS -->
        <script src="assets/js/plugins/countdown.min.js"></script>

        <!-- Isotope JS -->
        <script src="assets/js/plugins/isotope.min.js"></script>

        <!-- Masonry JS -->
        <script src="assets/js/plugins/masonry.min.js"></script>

        <!-- ImagesLoaded JS -->
        <script src="assets/js/plugins/images-loaded.min.js"></script>

        <!-- Wavify JS -->
        <script src="assets/js/plugins/wavify.js"></script>

        <!-- jQuery Wavify JS -->
        <script src="assets/js/plugins/jquery.wavify.js"></script>

        <!-- circle progress JS -->
        <script src="assets/js/plugins/circle-progress.min.js"></script>

        <!-- counterup JS -->
        <script src="assets/js/plugins/counterup.min.js"></script>

        <!-- wow JS -->
        <script src="assets/js/plugins/wow.min.js"></script>

        <!-- animation text JS -->
        <script src="assets/js/plugins/animation-text.min.js"></script>

        <!-- Vivus JS -->
        <script src="assets/js/plugins/vivus.min.js"></script>

        <!-- Some plugins JS -->
        <script src="assets/js/plugins/some-plugins.js"></script>


        <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

        <!--
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

        <!-- Main JS -->
        <script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from demo.hasthemes.com/mitech-preview/index-cybersecurity.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Oct 2020 07:10:33 GMT -->
</html>