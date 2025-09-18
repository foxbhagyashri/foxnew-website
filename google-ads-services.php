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

                <!-- about area start -->
                <div class="pp-about-area pp-service-details-ptb p-relative pb-100">
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
                                            Google Ads
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
                                            <span>Google Ads <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    height="21" viewBox="0 0 22 21" fill="none">
                                                    <path
                                                        d="M1.95047 15.9635C0.349769 15.5874 0.171812 13.4796 1.68557 12.8255L1.93099 12.7195C6.64382 10.6828 10.2834 6.75878 11.9603 1.90627C12.481 0.397291 14.6914 0.346013 15.2509 1.82979L21.2703 17.8126C21.3776 18.0967 21.4017 18.4043 21.34 18.7025C21.2783 19.0007 21.133 19.2781 20.9199 19.5049C20.7068 19.7317 20.4338 19.8993 20.1304 19.9897C19.827 20.0801 19.5047 20.0898 19.198 20.0178L1.95047 15.9635Z"
                                                        fill="#FFF669" />
                                                </svg></span>
                                        </h3>
                                    </div>
                                    <div class="pp-service-details-about-wrap " style="padding-left: 265px;">
                                        <div class="pp-about-content tp_text_anim">
                                            <h1 style="    font-size: 35px;">
                                                Stop Wasting Your Google Ad Budget. Start Getting Clicks That Convert
                                                With Foxaircomm

                                            </h1>
                                        </div>
                                        <p>Are you tired of seeing your competitors at the top of the SERP while your
                                            ads vanish in the crowd?

                                        </p>
                                        <p>If you're facing this issue, then it's time to invest in a Google advertising
                                            strategy that delivers tangible results.
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


                <!-- banner area start -->
                <div class="tp-service-4-banner-area p-relative">
                    <div class="ar-banner-wrap ar-about-us-4">
                        <img class="w-100" src="assets/img/2151937262.jpg" alt="" data-speed=".8">
                    </div>
                </div>
                <!-- banner area end -->


                <!-- ovareview area start -->
                <div class="pp-service-details-overview-ptb pt-140 pb-110">
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


                <!-- service details solution area start -->
                <div class="pp-service-details-solution-ptb pb-90">
                    <div class="container container-1230">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-service-4-solution-item service-details mb-30 tp_fade_anim"
                                    data-delay=".3">
                                    <div class="tp-service-4-solution-item-icon">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                                viewBox="0 0 60 60" fill="none">
                                                <path
                                                    d="M59.2609 59.9944C59.167 59.9968 59.0734 59.9805 58.9858 59.9464C58.8983 59.9123 58.8183 59.861 58.7508 59.7956L43.9892 45.704L30.5338 59.7718C30.4648 59.8439 30.3819 59.9013 30.2902 59.9406C30.1984 59.9798 30.0996 60 29.9999 60C29.9001 60 29.8013 59.9798 29.7095 59.9406C29.6178 59.9013 29.5349 59.8439 29.4659 59.7718L16.0107 45.704L1.24906 59.7956C1.14439 59.8955 1.0127 59.9625 0.870324 59.9882C0.727945 60.014 0.581145 59.9973 0.448134 59.9404C0.315123 59.8834 0.201754 59.7887 0.122091 59.6679C0.0424276 59.5471 -2.49001e-05 59.4056 1.0957e-08 59.2609C1.0957e-08 59.2609 0.000443676 28.6391 0.00147816 28.6206C0.013607 28.4349 0.0951674 28.2605 0.229951 28.1322L29.4869 0.20316C29.7696 -0.0667097 30.2338 -0.0692224 30.5146 0.204638L59.7718 28.1338C59.9068 28.2629 59.9878 28.4384 59.9987 28.6249C59.9996 28.6391 60 59.22 60 59.2611C59.9999 59.6911 59.6378 59.9861 59.2609 59.9944ZM17.0796 44.6837L29.9999 58.1921L42.9201 44.6837L29.9999 32.3497L17.0796 44.6837ZM45.0106 44.6361L58.522 57.5342V30.5096L45.0106 44.6361ZM1.47768 30.5096V57.5341L14.9891 44.6361L1.47768 30.5096ZM30.7388 31.0121L43.9416 43.6156L58.2157 28.6917L30.7388 2.46203V31.0121ZM1.78404 28.6917L16.0581 43.6156L29.2609 31.0121V2.46203L1.78404 28.6917Z"
                                                    fill="black" />
                                            </svg></span>
                                    </div>
                                    <div class="tp-service-4-solution-item-content">
                                        <h3 class="tp-service-4-solution-item-title" style="    font-size: 29px;"><a
                                                class="" href="#">1. A Big and Growing Audience
                                            </a>
                                        </h3>
                                        <p style="color:#000">India's internet base is increasing at an incredible pace.
                                        </p>
                                        <p style="color:#000">By 2025, it's expected that 900 million people, a huge
                                            portion of the country, will be online.
                                        </p>
                                        <p style="color:#000">This isn't just numbers; it's an opportunity for your
                                            business to reach an active group of people who are ready to buy from you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-service-4-solution-item service-details mb-30 tp_fade_anim"
                                    data-delay=".5">
                                    <div class="tp-service-4-solution-item-icon">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                                viewBox="0 0 60 60" fill="none">
                                                <path
                                                    d="M30 60C22.5776 60 15.2905 57.1771 9.79489 52.1839C3.59971 46.5552 0 38.3611 0 30C0 17.8109 8.02482 5.58723 19.7868 1.80867C22.932 0.798217 26.6844 0 30 0C37.4349 0 44.9837 2.83865 50.3811 7.99489C56.4163 13.7604 60 21.6097 60 30C60 42.1965 51.9629 54.4269 40.1903 58.2013C37.0511 59.2077 33.3088 60 30 60ZM15.3648 54.5109C19.6473 57.0781 24.6541 58.5542 30 58.5542C35.3459 58.5542 40.3525 57.0781 44.6354 54.5109L36.5806 41.4223L30.6172 51.1959C30.5526 51.3016 30.4619 51.3889 30.3538 51.4495C30.2457 51.5101 30.1239 51.5419 30 51.5419C29.8761 51.5419 29.7543 51.51 29.6463 51.4494C29.5382 51.3888 29.4475 51.3015 29.3829 51.1958L23.4194 41.4221L15.3648 54.5109ZM37.426 40.0371L45.8565 53.7367C48.4017 52.0302 50.6582 49.9284 52.5408 47.5105L42.7034 31.388L37.426 40.0371ZM7.45937 47.5103C9.34192 49.9283 11.5985 52.0302 14.1438 53.7366L22.5743 40.0369L17.2968 31.388L7.45937 47.5103ZM24.2698 40.0402L30 49.4313L35.7302 40.0402L30.3434 31.2866C30.1358 31.3991 29.8644 31.3989 29.6566 31.2866L24.2698 40.0402ZM43.5502 30L53.4666 46.252C56.6735 41.636 58.5542 36.034 58.5542 30C58.5542 23.966 56.6735 18.364 53.4666 13.748L43.5502 30ZM6.53349 13.748C3.3266 18.364 1.44578 23.966 1.44578 30C1.44578 36.034 3.32646 41.636 6.53335 46.252L16.45 30L6.53349 13.748ZM31.2493 30L36.5754 38.655L41.8564 30L36.5754 21.345L31.2493 30ZM18.1436 30L23.4246 38.655L28.7508 30L23.4246 21.345L18.1436 30ZM30 28.6265C30.1219 28.6265 30.2396 28.6572 30.3434 28.7133L35.7302 19.9598L30 10.5687L24.2698 19.9598L29.6566 28.7133C29.7621 28.6563 29.8801 28.6265 30 28.6265ZM37.426 19.9629L42.7034 28.612L52.5408 12.4895C50.6582 10.0716 48.4017 7.96973 45.8565 6.26328L37.426 19.9629ZM7.45937 12.4897L17.2968 28.612L22.5742 19.9629L14.1437 6.26342C11.5984 7.96984 9.34187 10.0717 7.45937 12.4897ZM30 8.45783C30.252 8.45783 30.4858 8.58911 30.6172 8.80424L36.5806 18.5779L44.6354 5.48906C40.3527 2.92193 35.3461 1.44578 30 1.44578C24.6539 1.44578 19.6473 2.92193 15.3648 5.48891L23.4194 18.5777L29.3829 8.8041C29.4475 8.69834 29.5382 8.61096 29.6462 8.55032C29.7543 8.48969 29.8761 8.45784 30 8.45783Z"
                                                    fill="black" />
                                            </svg></span>
                                    </div>
                                    <div class="tp-service-4-solution-item-content">
                                        <h3 class="tp-service-4-solution-item-title" style="    font-size: 29px;"><a
                                                class="" href="#">2. Google Has the Greatest Reach

                                            </a>
                                        </h3>
                                        <p style="color:#000">When it comes to search ads in India, Google is the top
                                            choice because it consistently holds a search engine market share of over
                                            90%. This means when people are searching, they're almost certainly using
                                            Google. So putting your brand on Google is key to getting noticed.

                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-service-4-solution-item service-details mb-30 tp_fade_anim"
                                    data-delay=".7">
                                    <div class="tp-service-4-solution-item-icon">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="64" height="54"
                                                viewBox="0 0 64 54" fill="none">
                                                <path
                                                    d="M47.2674 54H16.7325C16.5998 54 16.4694 53.966 16.3538 53.9012C16.2383 53.8364 16.1415 53.743 16.0729 53.6301L0.111394 27.3972C0.0385227 27.2774 0 27.14 0 27C0 26.86 0.0385227 26.7226 0.111394 26.6028L16.0729 0.36987C16.1416 0.257003 16.2383 0.163664 16.3539 0.0988734C16.4694 0.0340825 16.5998 2.82871e-05 16.7325 0H47.2674C47.4001 1.34191e-05 47.5305 0.0340612 47.646 0.0988535C47.7616 0.163646 47.8584 0.256992 47.927 0.36987L63.8885 26.6028C63.9614 26.7226 64 26.86 64 27C64 27.14 63.9614 27.2774 63.8885 27.3972L47.927 53.6301C47.8584 53.743 47.7616 53.8364 47.646 53.9012C47.5305 53.966 47.4001 54 47.2674 54ZM17.1672 52.4659H46.8329L62.3277 27L46.8329 1.53409H17.1672L1.67238 27L17.1672 52.4659ZM43.7791 50.5485C43.6463 50.5486 43.5157 50.5146 43.4 50.4498C43.2843 50.385 43.1874 50.2915 43.1187 50.1784L29.2584 27.3984C29.1856 27.2786 29.147 27.1413 29.147 27.0012C29.147 26.8612 29.1856 26.7239 29.2584 26.6041L43.1187 3.82403C43.226 3.65289 43.3967 3.53066 43.5939 3.4838C43.7911 3.43695 43.9989 3.46923 44.1723 3.57367C44.3458 3.67811 44.4709 3.8463 44.5206 4.04183C44.5703 4.23735 44.5406 4.44449 44.4379 4.61838L30.8193 27.0012L44.4379 49.3841C44.5087 49.5004 44.5471 49.6333 44.5493 49.7692C44.5515 49.9051 44.5173 50.0392 44.4503 50.1576C44.3832 50.2761 44.2858 50.3747 44.1678 50.4434C44.0499 50.5121 43.9157 50.5483 43.7791 50.5485ZM24.3477 50.5472C24.2149 50.5474 24.0843 50.5134 23.9686 50.4485C23.8529 50.3837 23.756 50.2902 23.6873 50.1772L9.82707 27.3972C9.7542 27.2774 9.71568 27.14 9.71568 27C9.71568 26.86 9.7542 26.7226 9.82707 26.6028L23.6873 3.8228C23.7397 3.73661 23.8087 3.66154 23.8903 3.60188C23.9719 3.54222 24.0645 3.49913 24.1628 3.47508C24.2612 3.45103 24.3633 3.44649 24.4634 3.46172C24.5635 3.47696 24.6596 3.51166 24.7462 3.56385C24.8328 3.616 24.9083 3.68461 24.9682 3.76577C25.0282 3.84693 25.0715 3.93905 25.0957 4.03686C25.1199 4.13467 25.1244 4.23626 25.1091 4.33583C25.0938 4.4354 25.059 4.53099 25.0065 4.61715L11.3881 27L25.0067 49.3829C25.0775 49.4991 25.1159 49.6321 25.1181 49.768C25.1203 49.9039 25.0861 50.038 25.019 50.1565C24.952 50.2749 24.8545 50.3736 24.7365 50.4422C24.6185 50.5109 24.4844 50.5471 24.3477 50.5472ZM34.0827 50.546C33.9499 50.5462 33.8193 50.5122 33.7036 50.4473C33.5879 50.3825 33.491 50.289 33.4223 50.176L19.562 27.3959C19.4892 27.2761 19.4506 27.1388 19.4506 26.9988C19.4506 26.8587 19.4892 26.7214 19.562 26.6016L33.4223 3.82157C33.5296 3.65043 33.7003 3.52821 33.8975 3.48135C34.0947 3.43449 34.3025 3.46678 34.4759 3.57122C34.6494 3.67566 34.7745 3.84385 34.8242 4.03937C34.8739 4.2349 34.8442 4.44203 34.7415 4.61593L21.123 26.9988L34.7416 49.3816C34.8124 49.4979 34.8509 49.6308 34.853 49.7668C34.8552 49.9027 34.821 50.0368 34.754 50.1552C34.6869 50.2737 34.5894 50.3723 34.4715 50.441C34.3535 50.5096 34.2193 50.5459 34.0827 50.546Z"
                                                    fill="black" />
                                            </svg></span>
                                    </div>
                                    <div class="tp-service-4-solution-item-content">
                                        <h3 class="tp-service-4-solution-item-title" style="    font-size: 29px;"><a
                                                class="" href="#">3. Your Ads Help Make Sales

                                            </a>
                                        </h3>
                                        <p style="color:#000">Data shows that a large number — about 65% of consumers —
                                            click on an ad when they're ready to make a purchase.


                                        </p>
                                        <p style="color:#000">A well-placed ad can help you beat the competition and get
                                            the sale.
                                        </p>

                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="tp-service-4-solution-item service-details mb-30 tp_fade_anim"
                                    data-delay=".7">
                                    <div class="tp-service-4-solution-item-icon">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="64" height="54"
                                                viewBox="0 0 64 54" fill="none">
                                                <path
                                                    d="M47.2674 54H16.7325C16.5998 54 16.4694 53.966 16.3538 53.9012C16.2383 53.8364 16.1415 53.743 16.0729 53.6301L0.111394 27.3972C0.0385227 27.2774 0 27.14 0 27C0 26.86 0.0385227 26.7226 0.111394 26.6028L16.0729 0.36987C16.1416 0.257003 16.2383 0.163664 16.3539 0.0988734C16.4694 0.0340825 16.5998 2.82871e-05 16.7325 0H47.2674C47.4001 1.34191e-05 47.5305 0.0340612 47.646 0.0988535C47.7616 0.163646 47.8584 0.256992 47.927 0.36987L63.8885 26.6028C63.9614 26.7226 64 26.86 64 27C64 27.14 63.9614 27.2774 63.8885 27.3972L47.927 53.6301C47.8584 53.743 47.7616 53.8364 47.646 53.9012C47.5305 53.966 47.4001 54 47.2674 54ZM17.1672 52.4659H46.8329L62.3277 27L46.8329 1.53409H17.1672L1.67238 27L17.1672 52.4659ZM43.7791 50.5485C43.6463 50.5486 43.5157 50.5146 43.4 50.4498C43.2843 50.385 43.1874 50.2915 43.1187 50.1784L29.2584 27.3984C29.1856 27.2786 29.147 27.1413 29.147 27.0012C29.147 26.8612 29.1856 26.7239 29.2584 26.6041L43.1187 3.82403C43.226 3.65289 43.3967 3.53066 43.5939 3.4838C43.7911 3.43695 43.9989 3.46923 44.1723 3.57367C44.3458 3.67811 44.4709 3.8463 44.5206 4.04183C44.5703 4.23735 44.5406 4.44449 44.4379 4.61838L30.8193 27.0012L44.4379 49.3841C44.5087 49.5004 44.5471 49.6333 44.5493 49.7692C44.5515 49.9051 44.5173 50.0392 44.4503 50.1576C44.3832 50.2761 44.2858 50.3747 44.1678 50.4434C44.0499 50.5121 43.9157 50.5483 43.7791 50.5485ZM24.3477 50.5472C24.2149 50.5474 24.0843 50.5134 23.9686 50.4485C23.8529 50.3837 23.756 50.2902 23.6873 50.1772L9.82707 27.3972C9.7542 27.2774 9.71568 27.14 9.71568 27C9.71568 26.86 9.7542 26.7226 9.82707 26.6028L23.6873 3.8228C23.7397 3.73661 23.8087 3.66154 23.8903 3.60188C23.9719 3.54222 24.0645 3.49913 24.1628 3.47508C24.2612 3.45103 24.3633 3.44649 24.4634 3.46172C24.5635 3.47696 24.6596 3.51166 24.7462 3.56385C24.8328 3.616 24.9083 3.68461 24.9682 3.76577C25.0282 3.84693 25.0715 3.93905 25.0957 4.03686C25.1199 4.13467 25.1244 4.23626 25.1091 4.33583C25.0938 4.4354 25.059 4.53099 25.0065 4.61715L11.3881 27L25.0067 49.3829C25.0775 49.4991 25.1159 49.6321 25.1181 49.768C25.1203 49.9039 25.0861 50.038 25.019 50.1565C24.952 50.2749 24.8545 50.3736 24.7365 50.4422C24.6185 50.5109 24.4844 50.5471 24.3477 50.5472ZM34.0827 50.546C33.9499 50.5462 33.8193 50.5122 33.7036 50.4473C33.5879 50.3825 33.491 50.289 33.4223 50.176L19.562 27.3959C19.4892 27.2761 19.4506 27.1388 19.4506 26.9988C19.4506 26.8587 19.4892 26.7214 19.562 26.6016L33.4223 3.82157C33.5296 3.65043 33.7003 3.52821 33.8975 3.48135C34.0947 3.43449 34.3025 3.46678 34.4759 3.57122C34.6494 3.67566 34.7745 3.84385 34.8242 4.03937C34.8739 4.2349 34.8442 4.44203 34.7415 4.61593L21.123 26.9988L34.7416 49.3816C34.8124 49.4979 34.8509 49.6308 34.853 49.7668C34.8552 49.9027 34.821 50.0368 34.754 50.1552C34.6869 50.2737 34.5894 50.3723 34.4715 50.441C34.3535 50.5096 34.2193 50.5459 34.0827 50.546Z"
                                                    fill="black" />
                                            </svg></span>
                                    </div>
                                    <div class="tp-service-4-solution-item-content">
                                        <h3 class="tp-service-4-solution-item-title" style="    font-size: 29px;"><a
                                                class="" href="#">4. Paid Search Leads to Real Results


                                            </a>
                                        </h3>
                                        <p style="color:#000">35% of visitors from paid ads are more likely to become
                                            paying customers than those who find you through organic search, which makes
                                            paid advertising a strong tool for real business growth.



                                        </p>


                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="tp-service-4-solution-item service-details mb-30 tp_fade_anim"
                                    data-delay=".7">
                                    <div class="tp-service-4-solution-item-icon">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="64" height="54"
                                                viewBox="0 0 64 54" fill="none">
                                                <path
                                                    d="M47.2674 54H16.7325C16.5998 54 16.4694 53.966 16.3538 53.9012C16.2383 53.8364 16.1415 53.743 16.0729 53.6301L0.111394 27.3972C0.0385227 27.2774 0 27.14 0 27C0 26.86 0.0385227 26.7226 0.111394 26.6028L16.0729 0.36987C16.1416 0.257003 16.2383 0.163664 16.3539 0.0988734C16.4694 0.0340825 16.5998 2.82871e-05 16.7325 0H47.2674C47.4001 1.34191e-05 47.5305 0.0340612 47.646 0.0988535C47.7616 0.163646 47.8584 0.256992 47.927 0.36987L63.8885 26.6028C63.9614 26.7226 64 26.86 64 27C64 27.14 63.9614 27.2774 63.8885 27.3972L47.927 53.6301C47.8584 53.743 47.7616 53.8364 47.646 53.9012C47.5305 53.966 47.4001 54 47.2674 54ZM17.1672 52.4659H46.8329L62.3277 27L46.8329 1.53409H17.1672L1.67238 27L17.1672 52.4659ZM43.7791 50.5485C43.6463 50.5486 43.5157 50.5146 43.4 50.4498C43.2843 50.385 43.1874 50.2915 43.1187 50.1784L29.2584 27.3984C29.1856 27.2786 29.147 27.1413 29.147 27.0012C29.147 26.8612 29.1856 26.7239 29.2584 26.6041L43.1187 3.82403C43.226 3.65289 43.3967 3.53066 43.5939 3.4838C43.7911 3.43695 43.9989 3.46923 44.1723 3.57367C44.3458 3.67811 44.4709 3.8463 44.5206 4.04183C44.5703 4.23735 44.5406 4.44449 44.4379 4.61838L30.8193 27.0012L44.4379 49.3841C44.5087 49.5004 44.5471 49.6333 44.5493 49.7692C44.5515 49.9051 44.5173 50.0392 44.4503 50.1576C44.3832 50.2761 44.2858 50.3747 44.1678 50.4434C44.0499 50.5121 43.9157 50.5483 43.7791 50.5485ZM24.3477 50.5472C24.2149 50.5474 24.0843 50.5134 23.9686 50.4485C23.8529 50.3837 23.756 50.2902 23.6873 50.1772L9.82707 27.3972C9.7542 27.2774 9.71568 27.14 9.71568 27C9.71568 26.86 9.7542 26.7226 9.82707 26.6028L23.6873 3.8228C23.7397 3.73661 23.8087 3.66154 23.8903 3.60188C23.9719 3.54222 24.0645 3.49913 24.1628 3.47508C24.2612 3.45103 24.3633 3.44649 24.4634 3.46172C24.5635 3.47696 24.6596 3.51166 24.7462 3.56385C24.8328 3.616 24.9083 3.68461 24.9682 3.76577C25.0282 3.84693 25.0715 3.93905 25.0957 4.03686C25.1199 4.13467 25.1244 4.23626 25.1091 4.33583C25.0938 4.4354 25.059 4.53099 25.0065 4.61715L11.3881 27L25.0067 49.3829C25.0775 49.4991 25.1159 49.6321 25.1181 49.768C25.1203 49.9039 25.0861 50.038 25.019 50.1565C24.952 50.2749 24.8545 50.3736 24.7365 50.4422C24.6185 50.5109 24.4844 50.5471 24.3477 50.5472ZM34.0827 50.546C33.9499 50.5462 33.8193 50.5122 33.7036 50.4473C33.5879 50.3825 33.491 50.289 33.4223 50.176L19.562 27.3959C19.4892 27.2761 19.4506 27.1388 19.4506 26.9988C19.4506 26.8587 19.4892 26.7214 19.562 26.6016L33.4223 3.82157C33.5296 3.65043 33.7003 3.52821 33.8975 3.48135C34.0947 3.43449 34.3025 3.46678 34.4759 3.57122C34.6494 3.67566 34.7745 3.84385 34.8242 4.03937C34.8739 4.2349 34.8442 4.44203 34.7415 4.61593L21.123 26.9988L34.7416 49.3816C34.8124 49.4979 34.8509 49.6308 34.853 49.7668C34.8552 49.9027 34.821 50.0368 34.754 50.1552C34.6869 50.2737 34.5894 50.3723 34.4715 50.441C34.3535 50.5096 34.2193 50.5459 34.0827 50.546Z"
                                                    fill="black" />
                                            </svg></span>
                                    </div>
                                    <div class="tp-service-4-solution-item-content">
                                        <h3 class="tp-service-4-solution-item-title" style="    font-size: 29px;"><a
                                                class="" href="#">5. Good Return on Investment


                                            </a>
                                        </h3>
                                        <p style="color:#000">Your investment in Google Ads delivers a significant
                                            return for your business.
                                            Source



                                        </p>
                                        <p style="color:#000"><a
                                                href="https://thesocialshepherd.com/blog/google-ads-ppc-statistics">Google
                                                Ads PPC Statistics
                                            </a> </p>
                                        <p style="color:#000"><a
                                                href="https://cpluz.com/blog/the-importance-of-google-ads-for-indian-businesses-8-key-statistics/?srsltid=AfmBOor89KWFlFGF_qdWjp4R-1GG1tL0oEOdiSHBfrCcJ7XWTLqIN_Ld">(https://cpluz.com/blog/the-importance-of-google-ads-for-indian-businesses-8-key-statistics/?srsltid=AfmBOor89KWFlFGF_qdWjp4R-1GG1tL0oEOdiSHBfrCcJ7XWTLqIN_Ld)
                                            </a>
                                        </p>


                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- service details solution area end -->



                <!-- ovareview area start -->
                <div class="pp-service-details-overview-ptb pb-10">
                    <div class="container container-1230">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pp-service-details-overview-heading">
                                    <h2 class="pp-service-details-overview-title tp_fade_anim" data-delay=".3"
                                        style="    font-size: 46px;">Who should opt for the Google Ads Service from
                                        Foxaircomm?

                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="pp-service-details-overview-wrapper">
                                    <p>I tried Google Ads once, spent 15k, and got nothing. Is it even worth it?


                                    </p>
                                    <p>— A common question on Reddit, from business owners who’ve been burned.


                                    </p>
                                    <p>Our answer:<br>
                                        It's not about whether Google Ads work-it's about whether the strategy behind
                                        them is working for you or not??

                                    </p>

                                    <p>This approach helps you find new customers who are a good fit for your business.
                                    </p>
                                    <p>Here's what's happening in the digital world and how you can use these chances to
                                        grow your business.
                                    </p>

                                    <h3>Our Google Ads services are suitable for:

                                    </h3>
                                    <div class="pp-service-details-overview-list">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Businesses in Pune need local leads, not just generic
                                                website traffic.
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Founders who are feeling overwhelmed by the complexity
                                                of managing their ad campaigns.
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Companies with past campaigns that failed need an
                                                expert to figure out what went wrong.
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>E-commerce brands are looking for a smarter way to
                                                scale their businesses quickly.
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Anyone who wants a clear return on their investment,
                                                not just complicated reports.

                                            </li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="pp-service-details-overview-heading">
                                    <h2 class="pp-service-details-overview-title tp_fade_anim" data-delay=".3"
                                        style="    font-size: 46px;">Why So Many Google Ads Campaigns Failed?


                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="pp-service-details-overview-wrapper">
                                    <p>“Google keeps showing my ad to people from different cities.”

                                    </p>
                                    <p>“Why am I paying for keywords that I never chose”?
                                    </p>
                                    <p>“I am getting traffic but zero conversions.”
                                    </p>
                                    <p>After reading this, do you feel like facing the same problem?
                                    </p>
                                    <p>If yes, you are not alone. Many business owners in Pune have the same complaints,
                                        and they usually point to a single issue: running a powerful platform with
                                        guesswork.
                                    </p>
                                    <p>It's not your fault. The platform is complex, and it's very common to make
                                        mistakes.
                                    </p>
                                    <p> Here are some common reasons why a campaign might be underperforming:
                                    </p>


                                    <div class="pp-service-details-overview-list">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Wrong Audience :-<br>
                                                Your ads are reaching people in other cities because your keywords
                                                aren't specific enough.


                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Irrelevant Traffic :- <br>
                                                You're paying for clicks from users who aren't interested in what you're
                                                product/services are. It's due to the ad copy not clearly explaining
                                                what your offer is.


                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Companies with past campaigns that failed need an
                                                expert to figure out what went wrong.
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Wasted Money :- <br>
                                                Without proper tracking, you can not tell which parts of your campaign
                                                are working and which are having issues.


                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Budget Burn :- <br>
                                                Not using "negative keywords" is like throwing money away every day, as
                                                your ads will be shown for irrelevant searches.


                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pp-service-details-overview-heading">
                                        <h2 class="pp-service-details-overview-title tp_fade_anim" data-delay=".3"
                                            style="    font-size: 46px;">What is the Foxaircomm Approach To Google
                                            Ads Management?



                                        </h2>
                                    </div>

                                    <p>Effective Google Ads isn't about appearing everywhere; it’s about appearing
                                        in the right place at the right time.
                                    </p>
                                    <p>Our methodology is based on a thorough analytical understanding of your
                                        business, your ideal customer, and the competitive landscape right here in
                                        Pune.
                                    </p>


                                    <div class="pp-service-details-overview-list">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Deep-Dive Analysis
                                                :-<br>
                                                We begin our process with a thorough audit of your current online
                                                presence and your competitors.

                                                <br>
                                                This allows us to identify high-value keywords your customers are
                                                searching for and pinpoint opportunities to outperform the competition.


                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Precision Targeting :- <br>
                                                We use granular data to reach potential customers based on their
                                                location, demographics, search history, and intent.

                                                <br>
                                                This ensures your ads are seen by the people most likely to become your
                                                next client in Pune and beyond.


                                            </li>

                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Compelling Ad Copy
                                                :- <br>
                                                We don't write generic ads.
                                                <br>
                                                We craft ad copy that speaks directly to your customer's needs and pain
                                                points, using persuasive language to attract them to click and learn
                                                more about your solution.


                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Landing Page Optimization
                                                :- <br>
                                                A great ad is only half the battle.
                                                <br>
                                                We provide expert guidance on optimizing your landing pages to ensure
                                                visitors convert into leads once they arrive on your site, maximizing
                                                the value of every click.



                                            </li>
                                        </ul>
                                    </div>

                                    <div class="pp-service-details-overview-heading">
                                        <h2 class="pp-service-details-overview-title tp_fade_anim" data-delay=".3"
                                            style="    font-size: 46px;">What are the different channels we are running
                                            under Google Ads

                                        </h2>
                                        <p>We run a comprehensive set of channels inside of Google Ads to meet your
                                            business goals. Our approach is to choose the right channel for your
                                            specific needs, whether you want to build brand awareness or drive immediate
                                            sales.
                                        </p>
                                    </div>
                                    <div class="pp-service-details-overview-list">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Search Ads
                                                :-<br>
                                                Capture high-intent customers the moment they’re searching for you.




                                            </li><br>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Display Ads :- <br>
                                                Build brand recall and re-engage past visitors across the web.

                                            </li><br>

                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>YouTube Ads
                                                :- <br>
                                                Reach a massive audience with engaging video storytelling.



                                            </li><br>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Shopping Ads
                                                :- <br>
                                                Google Shopping ads enable you to showcase your products with a picture,
                                                price, and store name right in Google search results.





                                            </li><br>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M9.50631 0.886963L4.26771 6.12552L1.49369 3.35158L0 4.84527L4.26771 9.11302L11 2.38065L9.50631 0.886963Z"
                                                            fill="black" />
                                                    </svg></span>Call-Only Ads

                                                :- <br>
                                                Generate instant phone calls from customers ready to connect.

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pp-service-details-overview-heading">
                                        <h2 class="pp-service-details-overview-title tp_fade_anim" data-delay=".3"
                                            style="    font-size: 46px;">Where Do We Operate ?


                                        </h2>
                                        <p>We are based in <b>Pune,</b> where we proudly serve the local business
                                            community in areas like <b>PCMC, Hinjewadi, Wakad, Baner, Bavdhan, Moshi,
                                                and Talegaon.</b>

                                        </p>
                                        <p>Additionally, we manage campaigns for ambitious brands across <b> PAN
                                                India,</b> helping them reach their target audience no matter their
                                            location.
                                        </p>
                                        <p>Ready to run Google Ads that work?
                                        </p>
                                        <div class="tp-contact-form-btn">
                                            <button class=""><a href="tel:8879864151">Book a free 30-minute strategy
                                                    session</a></button>
                                        </div>
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