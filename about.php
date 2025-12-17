<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fox Aircomm Pvt Ltd</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/fox Logo.png">

    <!-- CSS here -->
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/atropos.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- CSS here -->
    <!-- CSS here -->

</head>

<body class="tp-magic-cursor" data-bg-color="#fff">

    <!-- Begin magic cursor -->
    <div id="magic-cursor" class="cursor-bg-red-2">
        <div id="ball"></div>
    </div>
    <!-- End magic cursor -->

    <!-- preloader -->

    <!-- preloader -->
    <!-- <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div> -->
    <!-- preloader end  -->
    <!-- preloader end  -->

    <!-- back to top start -->
    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->
    <!-- back to top end -->

    <!-- header area start -->

    <!-- header area start -->
    <?php include 'header.php' ?>
    <!-- header area end -->
    <!-- header area end -->


    <!-- tp-offcanvus-area-start -->
    <!-- tp-offcanvus-area-start -->

    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->
    <!-- tp-offcanvus-area-end -->


    <style>
    .modal .modal-dialog {
        width: 50%;
        max-width: 50%;
        margin-top: 0;
        margin-bottom: 0;
    }

    .btn-close {

        top: 8px;
        right: 8px;
        height: 38px;
        width: 41px;
        border: none;
    }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="tp-contact-us-form-wrapper" style="background-color:#fff">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="tp-contact-us-wrap" style="padding: 34px;">
                                                <h4 class="tp-contact-us-title mb-20"
                                                    style="color:#00009c;font-size:26px">Enquire Now
                                                </h4>
                                                <form action="send.php" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="tp-contact-form-input mb-20">
                                                                <label style="color:#000">Full name*</label>
                                                                <input name="name" type="text" required
                                                                    style=" background: #fff;    height: 38px;    color: #000000;">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="tp-contact-form-input mb-20">
                                                                <label style="color:#000">Email address*</label>
                                                                <input name="email" type="email" required
                                                                    style=" background: #fff;    height: 38px;    color: #000000;">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="tp-contact-form-input mb-20">
                                                                <label style="color:#000">Business Name</label>
                                                                <input name="business_name" type="text" required
                                                                    style=" background: #fff;    height: 38px;    color: #000000;">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="tp-contact-form-input mb-20">
                                                                <label style="color:#000">Contact Number</label>

                                                                <input type="tel" name="phone"
                                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                                                    class="form-control" maxlength="10"
                                                                    pattern="[0-9]{10}" required
                                                                    style=" background: #fff;    height: 38px;    color: #000000;">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tp-contact-form-input mb-20">
                                                                <label style="color:#000">Type Of Service</label>
                                                                <select name="service_name" class="form-control"
                                                                    required>
                                                                    <option value="Social Media Marketing">Social Media
                                                                        Marketing</option>
                                                                    <option value="Search Engine Optimization">Search
                                                                        Engine Optimization</option>
                                                                    <option value="Google Adwards">Google Adwards
                                                                    </option>
                                                                    <option value="Graphic and Brochure Design">Graphic
                                                                        and Brochure Design</option>
                                                                    <option value="Website design & development">Website
                                                                        design & development</option>
                                                                    <option value="Data Extractor Software">Data
                                                                        Extractor Software</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                          <style>
input[type="checkbox"] {
  width: 25px;
  height: 25px;
  accent-color: #007bff; /* Optional: change checkbox color */
}
</style>

                                                         <div class="col-lg-12">
                                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="RCS" required>
<label for="vehicle1"> I authorize company representatives to Call, SMS, RCS, Email or WhatsApp me about its products and offers. This consent overrides any registration for DNC/NDNC.</label><br>
</div>
                                                        
                                                        <div class="g-recaptcha"
                                                            data-sitekey="6LfendMrAAAAAPjqDt8Kah3GsfNxpXPTpY0rh1aY">
                                                        </div>
                                                        <br>

                                                        <div class="col-lg-12">

                                                            <div class="tp-contact-form-btn">
                                                                <button class="w-100" type="submit"><span>
                                                                        <span class="text-1">Send Message</span>
                                                                        <span class="text-2">Send Message</span>
                                                                    </span>
                                                                </button>
                                                                <p class="ajax-response mt-5"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                   <!-- Load Google reCAPTCHA script -->
                                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
    </div>

    <style>
    @media only screen and (min-width: 768px) and (max-width: 991px),
    (max-width: 767px) {
        .ar-about-us-4-title {

            font-size: 58px !important;
        }
    }
    </style>

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <main>

                <!-- hero area start -->
                <div class="ar-hero-area p-relative" data-background="assets/img/about-us/about-us-4/about-us-4-bg.png">
                    <div class="ar-about-us-4-shape">
                        <img src="assets/img/about-us/about-us-4/about-us-4-shape-1.png" alt="">
                    </div>
                    <div class="container container-1230">
                        <div class="ar-about-us-4-hero-ptb">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="ar-hero-title-box tp_fade_anim" data-delay=".3">
                                        <h3 class="ar-about-us-4-title" style="        font-size: 80px;">Your Best
                                            Digital <br>
                                            Growth Partner..</h3>
                                        <div class="ar-about-us-4-title-box d-flex justify-content-end">
                                            <span class="tp-section-subtitle pre">About Us</span>
                                            <div class="ar-about-us-4-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9"
                                                    viewBox="0 0 81 9" fill="none">
                                                    <rect y="4" width="80" height="1" fill="#111013" />
                                                    <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#111013"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <p>Fox Aircomm Private Limited is a leading Best Digital Marketing
                                                Agency<br> based in Pune, with over 9 years of experience and 500+
                                                satisfied clients.<br> We specialize in delivering high-performance
                                                marketing solutions<br> that drive brand awareness, lead generation, and
                                                conversion optimization.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hero area end -->

                <!-- about us 4 area start -->
                <section class="ar-about-us-4-text-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ar-about-us-4-text-warp title-black-color">
                                    <div class="swiper-container tp-brand-active">
                                        <div class="swiper-wrapper slide-transtion">
                                            <div class="swiper-slide">
                                                <h2 class="ar-about-us-4-text-title" style="font-size: 95px;">
                                                    About Us
                                                </h2>
                                            </div>
                                            <div class="swiper-slide">
                                                <h2 class="ar-about-us-4-text-title" style="font-size: 95px;">
                                                    About Us
                                                </h2>
                                            </div>
                                            <div class="swiper-slide">
                                                <h2 class="ar-about-us-4-text-title" style="font-size: 95px;">
                                                    About Us
                                                </h2>
                                            </div>
                                            <div class="swiper-slide">
                                                <h2 class="ar-about-us-4-text-title" style="font-size: 95px;">
                                                    About Us
                                                </h2>
                                            </div>
                                            <div class="swiper-slide">
                                                <h2 class="ar-about-us-4-text-title" style="font-size: 95px;">
                                                    About Us
                                                </h2>
                                            </div>
                                            <div class="swiper-slide">
                                                <h2 class="ar-about-us-4-text-title" style="font-size: 95px;">
                                                    About Us
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- about us 4 area end -->

                <!-- banner area start -->
                <div class="ar-banner-area">
                    <div class="ar-banner-wrap ar-about-us-4">
                        <img class="w-100" src="assets/img/471907.jpg" alt="" data-speed=".8">
                    </div>
                </div>
                <!-- banner area end -->

                <!-- about area start -->
                <div class="tp-about-area pt-140 pb-140 tp-bounce-trigger" data-bg-color="#F6F6F9">
                    <div class="container">
                        <div class="tp-about-box p-relative">
                            <div class="tp-about-shape-1 tp-bounce d-none d-md-block">
                                <img src="assets/img/home-01/about/about-shape-1.png" alt="">
                            </div>
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="tp-about-title-box">
                                        <span class="tp-section-subtitle pre tp_fade_anim">WHO WE ARE</span>
                                    </div>
                                </div>
                                <div class="col-xl-9">
                                    <div class="tp-about-wrap">
                                        <div class="tp-about-text tp_fade_anim">
                                            <p style="        font-size: 21px;">
                                                Fox Aircomm Private Limited is a top Digital Marketing Agency in Pune
                                                with 9+ years of experience. We specialize in data-driven strategies
                                                that boost brand visibility, generate leads, and deliver measurable
                                                growth.
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-4 col-md-5">
                                                <div class="tp-about-thumb">
                                                    <img data-speed=".8" src="assets/img/13217.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-8 col-md-7">
                                                <div class="tp-about-funcact-wrap">
                                                    <div class="tp-about-avater-info">
                                                        <!-- <img class="tp_fade_anim" data-delay=".3" data-fade-from="right"
                                                            src="assets/img/home-01/about/about-avater.webp" alt=""> -->
                                                        <div class="tp_text_anim">
                                                            <p>You have tried everything, from boosting Instagram posts,
                                                                pay-per-click, and the assistance of a digital marketing
                                                                firm, yet leads don’t come.
                                                            </p>
                                                            <p>After reading this, you also feel this is my business
                                                                story!
                                                            </p>
                                                            <p>At Foxaircomm, the best digital marketing agency in Pune,
                                                                PCMC, we are here to change that story.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="tp-about-funcact-item tp_fade_anim mb-30"
                                                                data-delay=".3">
                                                                <span><i data-purecounter-duration="1"
                                                                        data-purecounter-end="90"
                                                                        class="purecounter">0</i>%</span>
                                                                <p>Clients Satisfied and <br> Repeating</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="tp-about-funcact-item tp_fade_anim mb-30"
                                                                data-delay=".5">
                                                                <span><i data-purecounter-duration="1"
                                                                        data-purecounter-end="125"
                                                                        class="purecounter">0</i>+</span>
                                                                <p>Projects Completed </p>
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
                    </div>
                </div>
                <!-- about area end -->

                <!-- service area start -->
                <div class="creative-service-area pb-70 pt-160">
                    <div class="container container-1580">
                        <div class="row mb-50">
                            <div class="col-xl-3">
                                <div class="creative-service-subtitle-box about-us-4">
                                    <span class="tp-section-subtitle mb-20 fs-17 pre-circle">Our Services</span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="creative-service-title-box">
                                    <h4 class="tp-section-title fs-44">How we take your <br> business to the next level
                                    </h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-5">
                                <div class="creative-service-top-content">
                                    <p>We are a digital marketing agency with expertise, and we’re on a mission to help
                                        you take the next step in your business.</p>
                                    <a href="#" class="tp-btn-black btn-red-bg pr-15">
                                        <span class="tp-btn-black-filter-blur">
                                            <svg width="0" height="0">
                                                <defs>
                                                    <filter id="buttonFilter5">
                                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5"
                                                            result="blur"></feGaussianBlur>
                                                        <feColorMatrix in="blur"
                                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9">
                                                        </feColorMatrix>
                                                        <feComposite in="SourceGraphic" in2="buttonFilter5"
                                                            operator="atop"></feComposite>
                                                        <feBlend in="SourceGraphic" in2="buttonFilter5"></feBlend>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </span>
                                        <!-- <span class="tp-btn-black-filter d-inline-flex align-items-center"
                                            style="filter: url(#buttonFilter5)">
                                            <span class="tp-btn-black-text">See all Articles</span>
                                            <span class="tp-btn-black-circle">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </span> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="creative-service-wrap">
                            <div class="row">
                                <div class="offset-xl-3 col-xl-9">
                                    <div
                                        class="creative-service-item about-us-4 d-flex align-items-start justify-content-between tp_fade_anim">
                                        <div class="creative-service-content d-flex align-items-start">
                                            <span>(01)</span>
                                            <div class="creative-service-title-info">
                                                <h4 class="creative-service-title" style="font-size: 76px;"><a
                                                        href="graphic-and-brochure-design-service.php">Branding</a></h4>
                                                <div class="creative-service-category">
                                                    <span>Logo design</span>
                                                    <span>Brand Guidelines</span>
                                                    <span>Visual Identity</span>
                                                    <span>Custom Emails</span>
                                                    <span>Presentations</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="creative-service-link">
                                            <a href="graphic-and-brochure-design-service.php">
                                                <span>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentcolor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="creative-service-item about-us-4 d-flex align-items-start justify-content-between tp_fade_anim">
                                        <div class="creative-service-content d-flex align-items-start">
                                            <span>(02)</span>
                                            <div class="creative-service-title-info">
                                                <h4 class="creative-service-title" style="font-size: 76px;"><a
                                                        href="google-ads-services.php">Google Ads</a></h4>
                                                <div class="creative-service-category">
                                                    <span>Business Analysis</span>
                                                    <span>PPC</span>
                                                    <span>optimize ads</span>
                                                    <span>create engaging content</span>
                                                    <span>analyze data</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="creative-service-link">
                                            <a href="google-ads-services.php">
                                                <span>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentcolor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="creative-service-item about-us-4 d-flex align-items-start justify-content-between tp_fade_anim">
                                        <div class="creative-service-content d-flex align-items-start">
                                            <span>(03)</span>
                                            <div class="creative-service-title-info">
                                                <h4 class="creative-service-title" style="font-size: 76px;"><a
                                                        href="website-design-and-developement-service.php">Web
                                                        Development</a></h4>
                                                <div class="creative-service-category">
                                                    <span>Web Design</span>
                                                    <span>HTML</span>
                                                    <span>PHP</span>
                                                    <span>REACT</span>
                                                    <span>MYSQL</span>
                                                    <span>CSS</span>
                                                    <span>Javascript</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="creative-service-link">
                                            <a href="website-design-and-developement-service.php">
                                                <span>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentcolor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="creative-service-item about-us-4 d-flex align-items-start justify-content-between tp_fade_anim">
                                        <div class="creative-service-content d-flex align-items-start">
                                            <span>(04)</span>
                                            <div class="creative-service-title-info">
                                                <h4 class="creative-service-title" style="font-size: 76px;"><a
                                                        href="social-media-service-in-pune.php">Social Media</a></h4>
                                                <div class="creative-service-category">
                                                    <span>Facebook</span>
                                                    <span>Instagram</span>
                                                    <span>Linkedin</span>
                                                    <span>Youtube</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="creative-service-link">
                                            <a href="social-media-service-in-pune.php">
                                                <span>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentcolor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- service area end -->

                <!-- funfact area start -->

                <!-- funfact area end -->

                <!-- work area start -->
                <div class="tp-work-area pt-70 pb-145 tp-panel-pin-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tp-work-title-box tp-panel-pin">
                                    <span class="tp-section-subtitle pre mb-20">How we Work</span>
                                    <h2 class="tp-section-title fs-140" style="    font-size: 60px;
    line-height: 63px;
    word-spacing: 9px;">Why To Choose Fox Aircomm?</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tp-work-wrapper">
                                    <div class="tp-work-item tp-panel-pin mb-15">
                                        <div class="tp-work-number p-relative">
                                            <span></span>
                                            <i>01</i>
                                        </div>
                                        <div class="tp-work-content">
                                            <h4 class="tp-work-title">9+ Years of Expertise</h4>
                                            <p>A decade of experience in delivering impactful marketing solutions.</p>
                                        </div>
                                    </div>
                                    <div class="tp-work-item tp-panel-pin mb-15">
                                        <div class="tp-work-number p-relative">
                                            <span></span>
                                            <i>02</i>
                                        </div>
                                        <div class="tp-work-content">
                                            <h4 class="tp-work-title">500+ Clients Served </h4>
                                            <p>Proven track record of helping businesses grow across multiple
                                                industries.</p>
                                        </div>
                                    </div>
                                    <div class="tp-work-item tp-panel-pin mb-15">
                                        <div class="tp-work-number p-relative">
                                            <span></span>
                                            <i>03</i>
                                        </div>
                                        <div class="tp-work-content">
                                            <h4 class="tp-work-title">Expert Team</h4>
                                            <p>Our professionals bring years of experience in digital marketing,
                                                ensuring effective strategies and successful campaigns.</p>
                                        </div>
                                    </div>
                                    <div class="tp-work-item tp-panel-pin mb-15">
                                        <div class="tp-work-number p-relative">
                                            <span></span>
                                            <i>04</i>
                                        </div>
                                        <div class="tp-work-content">
                                            <h4 class="tp-work-title">Customized Solutions</h4>
                                            <p>We create tailored strategies to meet the specific needs of every
                                                business and industry.</p>
                                        </div>
                                    </div>
                                    <div class="tp-work-item tp-panel-pin mb-15">
                                        <div class="tp-work-number p-relative">
                                            <span></span>
                                            <i>05</i>
                                        </div>
                                        <div class="tp-work-content">
                                            <h4 class="tp-work-title">Data-Driven Approach</h4>
                                            <p>Every decision we make is backed by analytics and insights to maximize
                                                ROI.</p>
                                        </div>
                                    </div>
                                    <div class="tp-work-item tp-panel-pin mb-15">
                                        <div class="tp-work-number p-relative">
                                            <span></span>
                                            <i>06</i>
                                        </div>
                                        <div class="tp-work-content">
                                            <h4 class="tp-work-title">Affordable & Transparent Pricing</h4>
                                            <p>Get high-quality services at competitive rates without hidden costs.</p>
                                        </div>
                                    </div>
                                    <div class="tp-work-item tp-panel-pin mb-15">
                                        <div class="tp-work-number p-relative">
                                            <span></span>
                                            <i>07</i>
                                        </div>
                                        <div class="tp-work-content">
                                            <h4 class="tp-work-title">Continuous Optimization</h4>
                                            <p>We continuously monitor and refine our campaigns for optimal performance
                                                and long-term success.</p>
                                        </div>
                                    </div>
                                    <div class="tp-work-item tp-panel-pin mb-15">
                                        <div class="tp-work-number p-relative">
                                            <span></span>
                                            <i>08</i>
                                        </div>
                                        <div class="tp-work-content">
                                            <h4 class="tp-work-title">Cutting-Edge Tools & Techniques</h4>
                                            <p>We leverage the latest tools, trends, and technologies to give you a
                                                competitive edge.</p>
                                        </div>
                                    </div>
                                    <div class="tp-work-item tp-panel-pin mb-15">
                                        <div class="tp-work-number p-relative">
                                            <span></span>
                                            <i>09</i>
                                        </div>
                                        <div class="tp-work-content">
                                            <h4 class="tp-work-title">Proven Track Record</h4>
                                            <p>We have helped multiple businesses achieve remarkable digital growth.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- work area end -->

                <!-- testimonial area start -->
                <div class="tp-testimonial-area tp-team-bg black-bg-3 p-relative fix"
                    data-background="assets/img/home-01/testimonial/noise.png">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="tp-testimonial-title-wrap z-index-3">
                                    <div class="tp-testimonial-title-box mb-75 text-center">
                                        <h4 class="tp-section-title text-white fs-140">meet <br>
                                            our team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-team-slider-wrap">
                        <div class="tp-team-slider-active swiper-container">
                            <div class="swiper-wrapper slide-transtion">
                                <div class="swiper-slide">
                                    <div class="tp-team-item">
                                        <div class="tp-team-item-thumb">
                                            <a href="#"><img src="assets/img/about-us/about-us-4/team/team-1.webp"
                                                    alt=""></a>
                                            <div class="studio-team-content text-center">
                                                <h4 class="studio-team-title-sm"><a href="#">Firoz Shaikh</a></h4>
                                                <span>Social Media Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-team-item">
                                        <div class="tp-team-item-thumb">
                                            <a href="#"><img src="assets/img/about-us/about-us-4/team/team-2.webp"
                                                    alt=""></a>
                                            <div class="studio-team-content text-center">
                                                <h4 class="studio-team-title-sm"><a href="#">Dhiraj Bhosale</a></h4>
                                                <span>Assistant Social Media Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-team-item">
                                        <div class="tp-team-item-thumb">
                                            <a href="#"><img src="assets/img/about-us/about-us-4/team/team-3.webp"
                                                    alt=""></a>
                                            <div class="studio-team-content text-center">
                                                <h4 class="studio-team-title-sm"><a href="#">Anil Patharde</a></h4>
                                                <span>IT Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-team-item">
                                        <div class="tp-team-item-thumb">
                                            <a href="#"><img src="assets/img/about-us/about-us-4/team/team-4.webp"
                                                    alt=""></a>
                                            <div class="studio-team-content text-center">
                                                <h4 class="studio-team-title-sm"><a href="#">Prasanna Sonawane</a></h4>
                                                <span>Senior Graphic Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-team-item">
                                        <div class="tp-team-item-thumb">
                                            <a href="#"><img src="assets/img/about-us/about-us-4/team/team-5.webp"
                                                    alt=""></a>
                                            <div class="studio-team-content text-center">
                                                <h4 class="studio-team-title-sm"><a href="#">Manali Patil</a></h4>
                                                <span>Graphic Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-team-item">
                                        <div class="tp-team-item-thumb">
                                            <a href="#"><img src="assets/img/about-us/about-us-4/team/team-5.webp"
                                                    alt=""></a>
                                            <div class="studio-team-content text-center">
                                                <h4 class="studio-team-title-sm"><a href="#">Bhagyashri Deshmukh</a>
                                                </h4>
                                                <span>Website Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-team-item">
                                        <div class="tp-team-item-thumb">
                                            <a href="#"><img src="assets/img/about-us/about-us-4/team/team-5.webp"
                                                    alt=""></a>
                                            <div class="studio-team-content text-center">
                                                <h4 class="studio-team-title-sm"><a href="#">Aditi Arya</a></h4>
                                                <span>Digital Marketing Associate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-team-item">
                                        <div class="tp-team-item-thumb">
                                            <a href="#"><img src="assets/img/about-us/about-us-4/team/team-5.webp"
                                                    alt=""></a>
                                            <div class="studio-team-content text-center">
                                                <h4 class="studio-team-title-sm"><a href="#">Shraddha Bhosale</a></h4>
                                                <span>Social Media Associate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-team-item">
                                        <div class="tp-team-item-thumb">
                                            <a href="#"><img src="assets/img/about-us/about-us-4/team/team-5.webp"
                                                    alt=""></a>
                                            <div class="studio-team-content text-center">
                                                <h4 class="studio-team-title-sm"><a href="#">Swapnil Shinge</a></h4>
                                                <span>SEO Executive</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimonial area end -->

                <!-- award area start -->
                <!-- <div class="tp-award-area tp-award-bg black-bg-3"
                    data-background="assets/img/home-01/testimonial/noise.png">
                    <div class="container container-1230">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="tp-award-subtitle-box mb-30">
                                    <span class="tp-award-subtitle">( Awards! )</span>
                                </div>
                            </div>
                            <div class="tp-award-item-wrap p-relative">
                                <div class="tp-award-item hover-reveal-item p-relative mb-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="tp-award-box-left z-index-3">
                                                <span class="tp-award-year">2008</span>
                                                <span class="tp-award-text">1x agency of the year</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div
                                                class="tp-award-box-right z-index-3 d-flex justify-content-between align-items-center">
                                                <span class="tp-award-position">Winner</span>
                                                <span class="tp-award-icon">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-award-reveal-img"
                                        data-background="assets/img/home-01/award/award-1.jpg"></div>
                                </div>
                                <div class="tp-award-item hover-reveal-item p-relative mb-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="tp-award-box-left z-index-3">
                                                <span class="tp-award-year">2009</span>
                                                <span class="tp-award-text">3x creative agency of the day</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div
                                                class="tp-award-box-right z-index-3 d-flex justify-content-between align-items-center">
                                                <span class="tp-award-position">Awarded</span>
                                                <span class="tp-award-icon">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-award-reveal-img"
                                        data-background="assets/img/home-01/award/award-2.jpg"></div>
                                </div>
                                <div class="tp-award-item hover-reveal-item p-relative mb-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="tp-award-box-left z-index-3">
                                                <span class="tp-award-year">2011</span>
                                                <span class="tp-award-text">2x Featured design of the week</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div
                                                class="tp-award-box-right z-index-3 d-flex justify-content-between align-items-center">
                                                <span class="tp-award-position">Mentioned</span>
                                                <span class="tp-award-icon">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-award-reveal-img"
                                        data-background="assets/img/home-01/award/award-3.jpg"></div>
                                </div>
                                <div class="tp-award-item hover-reveal-item p-relative mb-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="tp-award-box-left z-index-3">
                                                <span class="tp-award-year">2016</span>
                                                <span class="tp-award-text">5x honorable mentioned</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div
                                                class="tp-award-box-right z-index-3 d-flex justify-content-between align-items-center">
                                                <span class="tp-award-position">Mentioned</span>
                                                <span class="tp-award-icon">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-award-reveal-img"
                                        data-background="assets/img/home-01/award/award-4.jpg"></div>
                                </div>
                                <div class="tp-award-item hover-reveal-item p-relative mb-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="tp-award-box-left z-index-3">
                                                <span class="tp-award-year">2022</span>
                                                <span class="tp-award-text">8x Best design of the day</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div
                                                class="tp-award-box-right z-index-3 d-flex justify-content-between align-items-center">
                                                <span class="tp-award-position">Winner</span>
                                                <span class="tp-award-icon">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-award-reveal-img"
                                        data-background="assets/img/home-01/award/award-5.jpg"></div>
                                </div>
                                <div class="tp-award-item hover-reveal-item p-relative mb-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="tp-award-box-left z-index-3">
                                                <span class="tp-award-year">2025</span>
                                                <span class="tp-award-text">3x Mobile Excellence Award</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div
                                                class="tp-award-box-right z-index-3 d-flex justify-content-between align-items-center">
                                                <span class="tp-award-position">Awarded</span>
                                                <span class="tp-award-icon">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-award-reveal-img"
                                        data-background="assets/img/home-01/award/award-6.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- award area end -->

            </main>

            <?php include_once "footer.php"; ?>

        </div>
    </div>



    <!-- JS here -->


    <!-- JS here -->


    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/three.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/scroll-magic.js"></script>
    <script src="assets/js/hover-effect.umd.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/parallax-slider.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/Observer.min.js"></script>
    <script src="assets/js/splitting.min.js"></script>
    <script src="assets/js/webgl.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/atropos.js"></script>
    <script src="assets/js/slider-active.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/tp-cursor.js"></script>
    <script src="assets/js/portfolio-slider-1.js"></script>
    <script type="module" src="assets/js/distortion-img.js"></script>
    <script type="module" src="assets/js/skew-slider/index.js"></script>
    <script type="module" src="assets/js/img-revel/index.js"></script>


    <!-- JS here -->

    <!-- JS here -->

</body>

</html>