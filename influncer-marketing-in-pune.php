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


    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->
    <!-- offcanvas end -->

    <!-- header area start -->

    <!-- header area start -->
    <?php include_once 'header.php'; ?>
    <!-- header area end -->
    <!-- header area end -->
    <style>
    .pp-service-details-overview-wrapper p {
        margin-bottom: 16px;
    }
    </style>


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

    <style>
    @media only screen and (min-width: 768px) and (max-width: 991px),
    (max-width: 767px) {
        .pp-service-details-about-wrap {

            padding-left: 0px !important;
        }

        .pp-service-details-title {
            font-size: 66px !important;
        }
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
                                                <script src="https://www.google.com/recaptcha/api.js" async defer>
                                                </script>

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

                <!-- about area start -->
                <div class="pp-about-area pp-service-details-ptb p-relative pb-10">
                    <div class="pp-about-shape">
                        <img data-speed=".8" src="assets/img/home-14/about/about-shape.png" alt="">
                    </div>
                    <!-- <div class="pp-service-shape service-details-shape">
                        <img data-speed="1.1" src="assets/img/home-14/about/about-shape-2.png" alt="">
                    </div> -->
                    <div class="pp-service-details-top pb-50">
                        <div class="container container-1230">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pp-service-details-heading pb-55 tp_fade_anim" data-delay=".3">
                                        <h3 class="pp-service-details-title" style="font-size: 100px;">
                                            Influencer Marketing
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="123" height="130"
                                                    viewBox="0 0 123 130" fill="none">
                                                    <g transform="rotate(180 61.5 65)">
                                                        <path
                                                            d="M58.2803 1.15449C63.3023 14.3017 71.049 54.3533 48.1082 67.0973C36.1831 73.4283 11.7107 77.3064 2.37778 43.9355C-1.14293 31.3468 9.61622 20.8908 32.0893 28.8395C45.055 33.4255 76.4207 44.0467 90.5787 70.0771C98.0511 83.8154 104.166 111.84 99.1745 129.671M99.1745 129.671C100.942 121.014 108.128 104.495 122.737 107.673M99.1745 129.671C100.181 123.978 97.0522 110.014 76.485 99.698M75.3644 33.2431C80.479 35.6688 96.6446 46.4742 101.81 64.2891"
                                                            stroke="black" stroke-width="1.5" />
                                                    </g>
                                                </svg>
                                            </i>
                                            <br>
                                            <span>Influencer Marketing <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="22" height="21" viewBox="0 0 22 21" fill="none">
                                                    <path
                                                        d="M1.95047 15.9635C0.349769 15.5874 0.171812 13.4796 1.68557 12.8255L1.93099 12.7195C6.64382 10.6828 10.2834 6.75878 11.9603 1.90627C12.481 0.397291 14.6914 0.346013 15.2509 1.82979L21.2703 17.8126C21.3776 18.0967 21.4017 18.4043 21.34 18.7025C21.2783 19.0007 21.133 19.2781 20.9199 19.5049C20.7068 19.7317 20.4338 19.8993 20.1304 19.9897C19.827 20.0801 19.5047 20.0898 19.198 20.0178L1.95047 15.9635Z"
                                                        fill="#FFF669" />
                                                </svg></span>
                                        </h3>
                                    </div>
                                    <div class="pp-service-details-about-wrap " style="padding-left: 265px;">
                                        <div class="pp-about-content tp_text_anim">
                                            <h1 style="    font-size: 35px;">
                                                Leading Influencer Marketing Agency in India
                                            </h1>
                                        </div>
                                        <p>Unlock your brand’s true potential with Fox Aircomm Pvt Ltd, India’s premier
                                            Influencer Marketing Agency, celebrated for creating impactful strategies
                                            that bridge the gap between brands and their target audiences. Our
                                            all-inclusive influencer marketing platform leverages the creativity of
                                            leading social media influencers, content creators, artists, celebrities,
                                            vloggers, and bloggers.
                                        </p>
                                        <p>With a focus on personalized influencer marketing solutions, we ensure every
                                            campaign resonates with your audience, converting engagement into lasting
                                            loyalty. Trust Fox Aircomm Pvt Ltd to drive remarkable growth and take your
                                            brand to new heights.
                                        </p>
                                        <div class="pp-service-details-title">
                                            <span><a href="tel:8879864151">Start Your Free Consultation Today <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="22" height="21"
                                                        viewBox="0 0 22 21" fill="none">
                                                        <path
                                                            d="M1.95047 15.9635C0.349769 15.5874 0.171812 13.4796 1.68557 12.8255L1.93099 12.7195C6.64382 10.6828 10.2834 6.75878 11.9603 1.90627C12.481 0.397291 14.6914 0.346013 15.2509 1.82979L21.2703 17.8126C21.3776 18.0967 21.4017 18.4043 21.34 18.7025C21.2783 19.0007 21.133 19.2781 20.9199 19.5049C20.7068 19.7317 20.4338 19.8993 20.1304 19.9897C19.827 20.0801 19.5047 20.0898 19.198 20.0178L1.95047 15.9635Z"
                                                            fill="#FFF669" />
                                                    </svg></a></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- about area end -->




                <!-- ovareview area start -->
                <div class="pp-service-details-overview-ptb pt-40 pb-10">
                    <div class="container container-1230">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pp-service-details-overview-heading">
                                    <h2 class="pp-service-details-overview-title tp_fade_anim" data-delay=".3"
                                        style="    font-size: 46px;">Why
                                        Google Ads are Crucial For Businesses In Pune??

                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pp-service-details-overview-wrapper">
                                    <p>Why Google Ads are Important for Businesses in Pune?

                                    </p>
                                    <p>In big cities like Pune, being visible is crucial because the way people shop and
                                        find new businesses is changing fast.

                                    </p>
                                    <p>When people are searching for exactly what you sell, your business shows up
                                        first, helping you get noticed and find the right customers quickly. This is the
                                        magic of Google Ads.

                                    </p>
                                    <p>This approach helps you find new customers who are a good fit for your business.
                                    </p>
                                    <p>Here's what's happening in the digital world and how you can use these chances to
                                        grow your business.
                                    </p>

                                    <!-- <h3>1. A Big and Growing Audience :
                                    </h3>
                                    <div class="pp-service-details-overview-list">
                                        <p>India's internet base is increasing at an incredible pace.
                                        </p>
                                        <p>By 2025, it's expected that 900 million people, a huge portion of the
                                            country, will be online.
                                        </p>
                                        <p>This isn't just numbers; it's an opportunity for your business to reach an
                                            active group of people who are ready to buy from you.
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pp-service-details-overview-thumb text-lg-end">
                                    <div class="tp_img_reveal">
                                        <img src="assets/img/132688.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ovareview area end -->



            </main>

            <?php include_once 'footer.php'; ?>
            <!-- footer area end -->

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