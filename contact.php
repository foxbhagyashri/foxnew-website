<!doctype html>
<html class="no-js agntix-light" lang="zxx">

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

<body class="tp-magic-cursor">

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
    <?php include 'header.php';
 ?>
    <!-- header area end -->
    <!-- header area end -->


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

                <!-- hero area start -->
                <div class="tp-contact-us-ptb p-relative">
                    <div class="tp-career-shape-1">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="123" height="130" viewBox="0 0 123 130"
                                fill="none">
                                <path
                                    d="M58.2803 1.15449C63.3023 14.3017 71.049 54.3533 48.1082 67.0973C36.1831 73.4283 11.7107 77.3064 2.37778 43.9355C-1.14293 31.3468 9.61622 20.8908 32.0893 28.8395C45.055 33.4255 76.4207 44.0467 90.5787 70.0771C98.0511 83.8154 104.166 111.84 99.1745 129.671M99.1745 129.671C100.942 121.014 108.128 104.495 122.737 107.673M99.1745 129.671C100.181 123.978 97.0522 110.014 76.485 99.698M75.3644 33.2431C80.479 35.6688 96.6446 46.4742 101.81 64.2891"
                                    stroke="black" stroke-width="1.5" />
                            </svg></span>
                    </div>
                    <div class="container container-1230">
                        <div class="ar-about-us-4-hero-ptb" style="    padding-bottom: 49px;">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="tp-contact-us-heading tp_fade_anim" data-delay=".3">
                                        <div class="ar-about-us-4-title-box d-flex align-items-center mb-20">
                                            <span class="tp-section-subtitle pre tp_fade_anim">contact us</span>
                                            <div class="ar-about-us-4-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9"
                                                    viewBox="0 0 81 9" fill="none">
                                                    <rect y="4" width="80" height="1" fill="#000" />
                                                    <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#000"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <h3 class="tp-career-title pb-30" style="font-size: 53px;">Let’s Connect and
                                            Make
                                            <span class="shape-1"><img
                                                    src="assets/img/about-us/about-us-4/about-us-4-shape-1.png"
                                                    alt=""></span> <br>Things Happen!
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <div class="tp-faq-text tp_fade_anim">
                                        <p class="m-0">Agntix is a beacon of best innovation and the dynamic <br> parent
                                            a company of wealcoder and many other subsidiaries.</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="tp-contact-us-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tp-contact-us-text smooth">
                                        <a href="#down">
                                            <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21"
                                                    viewBox="0 0 15 21" fill="none">
                                                    <rect x="6.25781" width="1.5" height="21" fill="#000" />
                                                    <path d="M14.1641 13.6257C10.28 13.6257 7.13714 16.9239 7.13714 21"
                                                        stroke="#000" stroke-width="1.5" stroke-miterlimit="10" />
                                                    <path
                                                        d="M7.13672 21C7.13672 16.9239 3.99384 13.6257 0.109797 13.6257"
                                                        stroke="#000" stroke-width="1.5" stroke-miterlimit="10" />
                                                </svg> Scroll to explore</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tp-contact-us-text d-none d-md-block text-md-end">
                                        <p>See in Map our Office</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hero area end -->

                <!-- contact us form area start -->
                <div id="down" class="tp-contact-us-form-ptb pt-60 pb-120">
                    <div class="container container-1750">
                        <div class="tp-contact-us-form-wrapper">
                            <div class="row">

                                <div class="col-lg-7">
                                    <div class="tp-contact-us-wrap" style="padding: 23px;">
                                        <h4 class="tp-contact-us-title mb-55">Send a Message</h4>
                                        <form action="mail.php" method="POST">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="tp-contact-form-input mb-20">
                                                        <label>Full name*</label>
                                                        <input name="name" type="text" required style="height: 43px;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="tp-contact-form-input mb-20">
                                                        <label>Email address*</label>
                                                        <input name="email" type="email" required style="height: 43px;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="tp-contact-form-input mb-20">
                                                        <label>Subject</label>
                                                        <input name="subject" type="text" required
                                                            style="height: 43px;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="tp-contact-form-input mb-20">
                                                        <label>Contact Number</label>
                                                        <input type="tel" name="phone"
                                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                                            class="form-control" maxlength="10" pattern="[0-9]{10}"
                                                            required style="height: 43px;">

                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tp-contact-form-input mb-20">
                                                        <label>How Can We Help You*
                                                        </label>
                                                        <textarea name="message" style="height: 73px;"
                                                            required></textarea>
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
                                                        data-sitekey="6LfendMrAAAAAPjqDt8Kah3GsfNxpXPTpY0rh1aY"></div>
                                                    <br>


                                                    <div class="tp-contact-form-btn mt-3">
                                                        <button class="w-100" type="submit"><span>
                                                                <span class="text-1">Submit</span>
                                                                <span class="text-2">Submit</span>
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
                                <div class="col-lg-5">
                                    <div class="tp-contact-us-map p-relative">
                                        <div class="tp-contact-map-icon-box">
                                            <div class="tp-contact-map-icon">
                                                <span><img src="assets/img/contact/map-icon.svg" alt=""></span>
                                            </div>
                                        </div>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.3460525487435!2d73.78222397372407!3d18.64846096525807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9cfbe86d6f1%3A0xbceef5272c9be55c!2sINOX%20Jai%20Ganesh%20Vision%20Mall!5e0!3m2!1sen!2sin!4v1757932665788!5m2!1sen!2sin"
                                            width="100%" height="50" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact us form area end -->

                <!-- about area start -->
                <div class="cn-contactform-support-area mb-50">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="cn-contactform-support-bg d-flex align-items-center justify-content-center"
                                    data-background="assets/img/contact/contact-us/contact-us-shape.png">
                                    <div class="cn-contactform-support-text text-center">
                                        <span>Or, you can contact one of our studios
                                            directly below. We aim to respond
                                            within 24 hours.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about area end -->

                <!-- contact area start -->
                <div class="tp-contact-us-info-area pb-120">
                    <div class="container container-1230">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                <div class="tp-contact-us-content text-center" data-speed="1.2">
                                    <div class="tp-contact-us-thumb d-flex justify-content-center">
                                        <img src="assets/img/41847427_pune_outline_bold_mini_color.jpg" alt="">
                                    </div>
                                    <div class="tp-contact-us-bottom">
                                        <div class="tp-contact-us-info-details">
                                            <h4 class="tp-contact-us-info-title">Head Office</h4>
                                            <a href="#">Office No. BR-1-412/413, 4th Floor, B-Wing, Jai Ganesh Vision, Akurdi Pune-411035</a>
                                            <!-- <a href="tel:(+91)76001726">(+91) 76001726</a> -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                <div class="tp-contact-us-content text-center mt-60" data-speed=".9">
                                    <div class="tp-contact-us-thumb d-flex justify-content-center">
                                        <img src="assets/img/28929607_7380145.jpg" alt="">
                                    </div>
                                    <div class="tp-contact-us-bottom">
                                        <div class="tp-contact-us-info-details">
                                            <h4 class="tp-contact-us-info-title">Sub Branch </h4>
                                            <a href="#">Office No. A 105,Siddhgiri Business Center,Swami Vivekananda Rd,
                                                Jijamata Colony, Borivali West, Mumbai, Maharashtra 400092</a>
                                            <!-- <a href="tel:(+91)76001726">(+91) 76001726</a> -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                <div class="tp-contact-us-content text-center" data-speed="1.2">
                                    <div class="tp-contact-us-thumb d-flex justify-content-center">
                                        <img src="assets/img/9753566_4257857.jpg" alt="">
                                    </div>
                                    <div class="tp-contact-us-bottom">
                                        <div class="tp-contact-us-info-details">
                                            <h4 class="tp-contact-us-info-title">Sub Branch</h4>
                                            <a href="#">Office No. A-420,Shiv Cinema, Sunwest bank Complex, Nr. Mukta
                                                A-2, Ashram Rd, opp. City Gold Cinema, Ahmedabad, Gujarat 380009</a>
                                            <!-- <a href="tel:(+91)76001726">(+91) 76001726</a> -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact area end -->

            </main>

            <?php include 'footer.php';
 ?>

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