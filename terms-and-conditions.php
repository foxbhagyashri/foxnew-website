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
                <div class="creative-service-area pt-160">
                    <div class="container container-1580" style="margin-top:100px">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12">
                                <div class="creative-service-title-box" style="text-align: center;">
                                    <h4 class="tp-section-title fs-44 mb-4">
                                        Terms And Conditions
                                    </h4>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- service area end -->
                <div class="creative-service-area pb-70 pt-60">
                    <div class="container container-1580">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12">
                                <div class="creative-service-title-box">
                                    <p>The terms “you,” “your,” and “yours” refer to the customer. Fox AirComm Pvt Ltd,
                                        incorporated under the provisions of the Companies Act, 1956, hereinafter
                                        referred to as “Fox AirComm Pvt Ltd”, “we,” “us,” and “our.” These General Terms
                                        and Conditions are governed by our Terms of Service. Our Terms of Service take
                                        precedence over any conflicting General Terms and Conditions provision. BY USING
                                        Fox AirComm Pvt Ltd SERVICES AND WEBSITE, YOU CONSENT TO THE TERMS AND
                                        CONDITIONS OF THESE General Terms and Conditions. IF YOU DO NOT AGREE TO THESE
                                        General Terms and Conditions, PLEASE DO NOT USE THE WEBSITE AND/OR SERVICES.</p>
                                    <p>We may modify these General Terms and Conditions at any time by posting the
                                        revised terms on our website. Your continued use of the website and/or services
                                        after such changes constitutes your acceptance of the new General Terms and
                                        Conditions.</p>

                                    <h2>Account ethics and confidentiality-</h2>
                                    <p>You are entitled to withhold all the account confidentiality standards and shall
                                        not engage in partial or complete disclosure of “Account” information to any
                                        third-party resources. You are entitled to keep all the information regarding
                                        invoices, recent transactions, payments, application fields, and other panel
                                        details confidential.</p>

                                    <h2>Accuracy and Completeness of Information-</h2>
                                    <p>While Fox AirComm Pvt Ltd strives to ensure that the information contained on
                                        this Website is accurate and reliable, Fox AirComm Pvt Ltd makes no warranties
                                        as to the accuracy, correctness, or completeness of any such information and
                                        assumes no liability or responsibility for any omissions or errors in the
                                        content of this Website. Fox AirComm Pvt Ltd reserves the right to revise the
                                        information contained on this Website at any time in its sole discretion without
                                        any obligation to notify past, current or prospective visitors.</p>

                                    <h2>Your Use of This Website</h2>
                                    <p>You may download certain content that appears on this Website for your personal
                                        use, provided you do not remove or modify any copyright, trademark, or other
                                        proprietary notices. You expressly agree that no right, title, or interest in
                                        any downloaded materials is transferred to you as a result of such downloading
                                        or copying. There are inherent dangers in downloading materials and information
                                        from the Internet, and Fox AirComm Pvt Ltd cautions you to make sure that you
                                        completely understand the potential risks before downloading any such content.
                                        You are solely responsible for adequate protection and backup of the data and
                                        equipment used in connection with any information downloaded from this Website,
                                        and Fox AirComm Pvt Ltd will not be liable for any damages that you may suffer
                                        as a result of such download.</p>
                                    <h3>Changes To The General Terms and Conditions</h3>
                                    <p>We reserve the right to change these General Terms and Conditions from time to
                                        time without notice by posting the changes to Fox AirComm Pvt Ltd’s Website.
                                        When we do, we will also revise the “last updated” date of these General Terms
                                        and Conditions.
                                    </p>

                                    <h3>Privacy Policy</h3>
                                    <p>Fox AirComm Pvt Ltd’s use of any personally identifiable information you submit
                                        to the Website is governed by the Website’s Privacy Policy.</p>

                                    <h3>Registration</h3>
                                    <p>The User has to get registered with us as per the service acceptance contract by
                                        providing relevant details including your contact number, mailing address,
                                        office address, and so on. The User should provide the current and true
                                        information as per the requirement of the registration form without fail. If in
                                        any scenario the information provided by the User stands untrue or incomplete,
                                        Fox AirComm Pvt Ltd holds the right to deny, suspend, or terminate the services
                                        at any instance without giving any prior notice. The User is liable to submit
                                        identification documents necessary as per the regulations of the Department of
                                        Telecommunications, Government of India. The account shall be set for
                                        deactivation in case the required documents are not submitted within 10 days of
                                        account activation, and we shall not be liable for any refunds.</p>
                                    <h3>Services Activation Delay</h3>
                                    <p>We are set to activate the user account within 7 working days of payment
                                        confirmation with a positive effect. However, the time may vary based on a
                                        certain set of limitations:</p>
                                    <ul>
                                        <li> The setting up of the accounting period may vary based on the changes in
                                            customer requirements.</li>
                                        <li> Holidays or Non-working days are not considered as a part of the timeline
                                            for the account activation period.</li>
                                    </ul>

                                    <h4>Exit Policy for Voice Services</h4>
                                    <p>If the customer is not willing to extend/renew the contract upon contract
                                        expiration,we can transfer the ownership of the number upon request to the User
                                        as per the</p>

                                    <h5>following policies:</h5>
                                    <ul>
                                        <li> Only Virtual mobile numbers can be transferred.</li>
                                        <li>Landline/Toll-Free/PSTN numbers are not transferable.</li>
                                        <li>The user is liable to pay a transfer fee of INR 5000 to facilitate the
                                            transfer of ownership.</li>
                                        <li> The user has an option to continue with the services until the number
                                            porting process is complete by paying the rental and usage charges.</li>
                                        <li> We reserve the right to charge the User up to INR 7500 as a security
                                            deposit against the aforementioned charges. Any part of the unused amount
                                            will be refunded back to the User after the transfer of ownership is
                                            complete.</li>
                                    </ul>

                                    <h2>Communication</h2>
                                    <p>The User shall give their consent to receive communications from Fox AirComm Pvt
                                        Ltd through emails, calls, and SMS for the services and transactions on our
                                        portal. The users are entitled to register their valid e-mail ids and contact
                                        numbers for the same. The User shall also be entitled to receive promotions,
                                        service updates, and such other sorts of communications from our end.</p>

                                    <p>Contact In case you have any queries or suggestions about this Terms of Use
                                        Policy, please reach out to us at info@foxaircomm.com</p>
                                    <p>Termination The User may, as per their best interests, deactivate their account
                                        at any point in time. Fox AirComm Pvt Ltd reserves the right to suspend or
                                        terminate access to our services without giving any prior notice or specific
                                        reason, and also in case of any possible violation of the terms of use. Fox
                                        AirComm Pvt Ltd shall not be held liable for any instances of termination of
                                        services on account of non-renewal or non- payment of dues on time.</p>

                                    <h4>Plans</h4>
                                    <p>Pre-Paid: The User can renew the services contract anytime post expiration of the
                                        services within two months from the date of contract expiration as per the
                                        following guidelines:</p>

                                    <ul>
                                        <li> The User can renew the service contract with the services of the previous
                                            number and the service plan only if the display number is available with us.
                                        </li>
                                        <li>The User can renew the service contract beyond one month from the date of
                                            expiration and before two months from the date of expiration without a
                                            guarantee of a previous service plan.</li>
                                    </ul>


                                    <p>Use of Content The diverse content available on the Website is to be used by the
                                        User solely for non-commercial purposes or the purpose of the services offered
                                        by Fox AirComm Pvt Ltd. The user is not entitled to the ownership of any type of
                                        content available on the Website. It is strictly not allowed to copy or
                                        reproduce the content for any purpose except as per the guidelines of this Terms
                                        of Use. Fox AirComm Pvt Ltd grants a temporary permit to users to view the
                                        content available on the Website provided there is no violation of copyright and
                                        trademark rules mentioned regarding the content. The content should not be used
                                        for any other purpose without prior written permission from the concerned
                                        authorities of Fox AirComm Pvt Ltd. We hold the right to modify, alter, renew,
                                        or change the content of the Website at any point in time without providing any
                                        prior notice to the User.</p>

                                    <p>Fair Usage Policy (FUP)We strive to provide the best-in-class services to our
                                        customers with relentless dedication. There are some scenarios wherein the
                                        credits added in the user accounts are not utilized for a very long time, or the
                                        account is not used for a very long time. This non-utilization creates an
                                        imbalance for the other users as non-operational accounts have to be handled on
                                        the backend, equally consuming time and causing work constraints. As there are
                                        very minimal validity impositions on SMS services, we intend to build a fair
                                        usage scheme to ensure adequate utilization of credits within a reasonable time
                                        frame (6 months – 1 year). Thus, to ensure that the services remain smooth for
                                        all our customers, we are introducing a Fair Usage Policy with the intention of
                                        service betterment.</p>

                                    <h4>FUPs for SMS and Voice</h4>
                                    <p>The credits in the user account shall no longer remain valid, followed by account
                                        deactivation and approved sender id and template de-listings if the criteria
                                        fall in any of the following scenarios:</p>

                                    <ul>
                                        <li>a. If there is no account usage for six consecutive months and the User has
                                            not logged into his account for the last three months.</li>
                                        <li>b. If there has been account usage in the last six months, but the User has
                                            not logged into the account for the past 3 months, the account will be kept
                                            on hold for deactivation as per the policy (ref. a).</li>
                                        <li>c. If there has been no usage of the accounts in the past six months, but
                                            the User has logged into his account in the last three months, then the
                                            account will be kept on hold for deactivation as per the policy (ref. a).
                                        </li>
                                        <li>d. Under no circumstances shall there be a refund for credits used against
                                            respective telecom regulations. The User is expected to maintain regulations
                                            compliant usage of SMS credits throughout the account tenure.</li>
                                        <li>e. The User is expected to have a minimum of 10% usage of credits within the
                                            first month from the date of credit addition to the user account.</li>
                                        <li>f. The User is expected to have a minimum of 50 % usage of credits within
                                            the first two months from the date of credit addition to the user account.
                                        </li>
                                        <li>g. The effective credit balance on the voice platform shall be forfeited in
                                            case the account validity of the User has lapsed. The users are expected to
                                            utilize their balance within the validity period or to get their validity
                                            extended for the same.</li>
                                    </ul>

                                    <h4>Scope</h4>
                                    <p>The User is entitled to use the services in context with cloud communications for
                                        business purposes, providing Inbound and outbound solutions in context with IT
                                        support solutions.</p>

                                    <h5>Payment</h5>
                                    <p>The User shall be on agreeable terms with any forms of electronic payment modes
                                        available with Fox AirComm Pvt Ltd for service payments against the services
                                        offered. We therefore, in full terms, are authorized to process any type of
                                        payment electronically by the User against the services. The invoice for the
                                        charged services shall be generated and shared with the User at fixed periodic
                                        intervals. The User is responsible and required to cross-check and verify the
                                        invoice. If any discrepancies are to be found, the same shall be notified to Fox
                                        AirComm Pvt Ltd within 7 days of the date of invoice generation. Invoice
                                        reminders shall be sent to the User at regular intervals.</p>
                                    <p>Regulatory Guidelines Fox AirComm Pvt Ltd works under regulations formulated by
                                        the Department of Telecommunications, Government of India (DOT), and Telecom
                                        Regulatory Authority of India (TRAI). Fox AirComm Pvt Ltd reserves the right for
                                        modification, alteration, or removal of specific features or offerings based on
                                        the law and regulations without any prior notice. Fox AirComm Pvt Ltd holds no
                                        abiding policy to fulfil any type of service request demanded by the User. The
                                        provision of service request fulfilment shall be at the sole discretion of Fox
                                        AirComm Pvt Ltd depending on priority parameters.</p>

                                    <h6>Support</h6>
                                    <ul>
                                        <li> Fox AirComm Pvt Ltd extends service support from 8.00 am to 8.00 pm over
                                            email at info@foxaircomm.com</li>
                                        <li>The general response time for any query or issue reported is 24 hours which
                                            may extend depending on the severity of the issue reported.</li>
                                        <li>Fox AirComm Pvt Ltd strives to resolve any type of issue reported in the
                                            minimum time possible with regards to the service provided but holds no
                                            guarantee that the issue will be resolved.</li>
                                    </ul>

                                    <h3>Governing Law and Jurisdiction</h3>
                                    <p>The services agreement of Fox AirComm Pvt Ltd falls strictly under the Laws of
                                        the Republic of India, and any disputes, disagreements (including questionable
                                        parameters regarding services) shall be taken to the relevant court, i.e. courts
                                        in New Delhi. This agreement stands firm, in compliance with the Telecom
                                        Resources Undertaking, the DND Undertaking, and the privacy policy in
                                        correspondence with the terms of usage of services and is above any other
                                        agreement or understanding between a user and Fox AirComm Pvt Ltd. If you have
                                        any concerns or queries with the agreement, please feel free to contact us at
                                        Info@foxaircomm.com or call us</p>

                                    <h6>Disclaimers</h6>
                                    <p>THE INFORMATION ON THIS SITE IS PROVIDED “AS IS” WITHOUT WARRANTY OF ANY KIND,
                                        EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
                                        WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
                                        PARTICULAR PURPOSE AND NON-INFRINGEMENT. No advice or information, whether oral
                                        or written, obtained by a user from Fox AirComm Pvt Ltd, shall create any
                                        warranty not expressly made herein. If you download or copy any material from
                                        this Website, you do so at your sole discretion and risk, and consequently, you
                                        will be responsible for any damage to your computer system or loss of data that
                                        results from the download or copying of any material or software. Some of Fox
                                        AirComm Pvt Ltd’s Services require the use of third-party services, products, or
                                        networks. Fox AirComm Pvt Ltd will make commercially reasonable efforts to
                                        communicate any policies, requirements, or guidelines of those third parties to
                                        You. You agree to follow those policies, requirements, or guidelines. ANY ACTUAL
                                        OR ALLEGED VIOLATION OF A THIRD-PARTY POLICY, REQUIREMENT, OR GUIDELINE BY YOU
                                        IS YOUR RESPONSIBILITY. Fox AirComm Pvt Ltd MAKES NO WARRANTY OR REPRESENTATION
                                        THAT ITS WEBSITE OR SERVICES WILL BE UNINTERRUPTED, TIMELY, SECURE, OR
                                        ERROR-FREE IF ANY VIOLATION OF A THIRD-PARTY POLICY, REQUIREMENT, OR GUIDELINE
                                        BY YOU IS ALLEGED BY A THIRD PARTY.</p>

                                    <h5>Products and Services</h5>
                                    <p>All products (including software) and services of Fox AirComm Pvt Ltd may only be
                                        accessed and used according to a separate product or service agreement. If you
                                        have accessed such products or services before entering into a separate product
                                        or service agreement, such access violates Fox AirComm Pvt Ltd’s General Terms
                                        and Conditions. You shall immediately cease using such services or delete any
                                        such products from your computer or server until you become an authorized user
                                        of such products or services.</p>

                                    <h5>Limitation of Liability</h5>
                                    <p>IN NO EVENT WILL Fox AirComm Pvt Ltd BE LIABLE FOR ANY DIRECT, INDIRECT,
                                        PUNITIVE, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE,
                                        WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR TERMS OTHER TORTIOUS ACTION,
                                        ARISING OUT OF OR IN CONNECTION WITH THE:</p>
                                    <p>(i) USE OF THE INFORMATION CONTAINED ON THIS WEBSITE; (ii) USE OF SOFTWARE
                                        DOWNLOADED OR LINKED TO FROM THIS WEBSITE; OR (iii) FOR THE FAILURE TO PROVIDE
                                        SERVICES OR INFORMATION AVAILABLE FROM THIS WEBSITE, EVEN IF Fox AirComm Pvt Ltd
                                        HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. IN THE EVENT YOU
                                        HAVE ANY DISPUTE WITH ONE OR MORE THIRD PARTIES AS A RESULT OF YOUR USE OF THE
                                        WEBSITE, CONTENT OR SERVICES, OR ARE IN ANY WAY DAMAGED AS A RESULT OF ANY THIRD
                                        PARTY IN CONNECTION THEREWITH, YOU HEREBY RELEASE AND COVENANT NOT TO SUE OR
                                        OTHERWISE MAKE A CLAIM, DEMAND OR FILE ANY LEGAL ACTION OR INSTITUTE ANY LEGAL
                                        OR REGULATORY PROCEEDINGS AGAINST Fox AirComm Pvt Ltd, ITS AFFILIATES, OFFICERS,
                                        DIRECTORS, EMPLOYEES, AGENTS, REPRESENTATIVES, AND SUPPLIERS FROM, FOR ANY
                                        CLAIMS, ACTIONS, DEMANDS OR DAMAGES (WHETHER DIRECT, INDIRECT, SPECIAL,
                                        INCIDENTAL OR CONSEQUENTIAL), OF WHATEVER KIND OR NATURE, KNOWN OR UNKNOWN,
                                        SUSPECTED OR UNSUSPECTED, WHETHER FORESEEABLE OR NOT, DISCLOSED OR UNDISCLOSED.
                                    </p>

                                    <h6>Indemnification</h6>
                                    <p>You agree to defend, indemnify and hold Fox AirComm Pvt Ltd harmless from and
                                        against any third-party claims, damages, costs, and expenses, including
                                        reasonable attorney’s fees, arising from or related to your use of this Website.
                                    </p>
                                    <h4>Links to Third-Party Websites</h4>
                                    <p>Any links to third party sites are provided as a convenience to you, and such
                                        sites are neither owned nor operated by Fox AirComm Pvt Ltd. Fox AirComm Pvt Ltd
                                        has no control over these linked sites, is not responsible for the contents of
                                        these sites, makes no representations or warranties concerning these linked
                                        sites, and shall not be liable for any damages or injury arising from the
                                        content of these linked sites. Your viewing and use of any third-party sites are
                                        at your sole discretion and risk.</p>

                                    <h4>Copyright Notice</h4>
                                    <p>Unless otherwise noted, the graphic images, buttons, and text contained in this
                                        Website are the exclusive property of Fox AirComm Pvt Ltd and are Copyright
                                        2014-2020 of Fox AirComm Pvt Ltd. All rights reserved. Except for your personal
                                        use as permitted herein, these items may not be copied, displayed, transmitted,
                                        or reproduced in any form without the express written permission of Fox AirComm
                                        Pvt Ltd.
                                    </p>

                                    <h3>Submissions, Suggestions, and Community Participation</h3>
                                    <p>In the event you elect to communicate suggestions for improvements to the Website
                                        or any of Fox AirComm Pvt Ltd’s services or properties (collectively,
                                        “Feedback”), we shall own all right, title, and interest in and to the same,
                                        even if you have designated the Feedback as confidential, and we shall be
                                        entitled to use the Feedback without restriction. Furthermore, any other content
                                        or information you post or provide to Fox AirComm Pvt Ltd via comments, forums,
                                        e-mails, and the like (collectively, “Communications”) shall be considered the
                                        property of Fox AirComm Pvt Ltd. You hereby irrevocably assign all right, title,
                                        and interest in and to the Feedback and Communications to us and agree to
                                        provide us such assistance as we may require to document, perfect, and maintain
                                        our rights to the Feedback and Communications.</p>
                                    <h4>Trademark Notice​</h4>
                                    <ul>
                                        <li>The Fox AirComm Pvt Ltd logo is a trademark of Fox AirComm Pvt Ltd Media
                                            Private Limited.</li>
                                        <li>Other product and service names mentioned in these documents may be
                                            trademarks and/or service marks of others.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- funfact area start -->

                <!-- funfact area end -->


                <!-- testimonial area end -->


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