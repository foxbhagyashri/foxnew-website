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
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
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



    <div id="smooth-wrapper">
        <div id="smooth-content">

            <main>




                <!-- service area start -->
                <div class="creative-service-area pb-70 pt-160">
                    <div class="container container-1580" style="margin-top:100px">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12">
                                <div class="creative-service-title-box" style="text-align: center;">
                                    <h4 class="tp-section-title fs-44 mb-4">
                                        Thank You
                                    </h4>
                                    <p>Your submission has been received successfully. Our team will review your details
                                        and get back to you shortly.</p>
                                    <p>We appreciate you reaching out to us and look forward to assisting you.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- service area end -->

                <!-- funfact area start -->

                <!-- funfact area end -->


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