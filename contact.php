<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Prime Teaching Group</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <link rel="stylesheet" href="css/dripicons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- header -->

    <?php
    include_once "header.php"
    ?>


    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex  p-relative align-items-center"
            style="background-image: linear-gradient(#0000008a, #00000087), url(img/base.jpg);background-position: center;">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="breadcrumb-wrap2">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- services-area -->
        <section id="services" class="services-area pt-120 pb-90 fix">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-12">
                        <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown"
                            data-delay=".4s">
                            <h5><i class="fal fa-graduation-cap"></i> Contact Info</h5>
                            <h2>
                                Get In Touch
                            </h2>

                        </div>

                    </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">

                        <div class="services-box text-center">
                            <div class="services-icon">
                                <img src="img/bg/contact-icon01.png" alt="image">
                            </div>
                            <div class="services-content2">
                                <h5><a href="tel:+44 7923 006717 ">+44 7923 006717 </a></h5>
                                <p>Phone Support</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4 col-md-4">

                        <div class="services-box text-center active">
                            <div class="services-icon">
                                <img src="img/bg/contact-icon02.png" alt="image">
                            </div>
                            <div class="services-content2">
                                <h5><a href="mailto:primeteaching24@gmail.com">primeteaching24@gmail.com</a></h5>
                                <p>Email Address</p>

                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4 col-md-4">

                        <div class="services-box text-center">
                            <div class="services-icon">
                                <img src="img/bg/contact-icon03.png" alt="image">
                            </div>
                            <div class="services-content2">
                                <h5>157 Boyn Valley Road
                                    Maidenhead
                                    Berkshire
                                    SL6 4GB
                                </h5>
                                <p> Address</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
        <!-- services-area-end -->
        <!-- map-area-end -->

        <!-- map-area-end -->
        <!-- contact-area -->
        <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix"
            style="background: #e7f0f8;">

            <div class="container">

                <div class="row">


                    <div class="col-lg-12 order-2">
                        <div class="contact-bg">
                            <div class="section-title center-align text-center mb-50">
                                <h2>
                                    Contact Us Form
                                </h2>

                            </div>

                            <form action="mail.php" method="post" class="contact-form mt-30 text-center">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="contact-field p-relative c-name mb-30">
                                            <input type="text" id="firstn" name="firstn" placeholder="First Name" required onkeypress="return onlyLetters(event)">
                                            <i class="icon fal fa-user"></i>
                                        </div>

                                        <script>
                                            function onlyLetters(event) {
                                                const char = String.fromCharCode(event.which);
                                                if (!/[a-zA-Z]/.test(char) && event.which !== 8) { // Allow letters and backspace
                                                    event.preventDefault();
                                                }
                                            }
                                        </script>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="contact-field p-relative c-subject mb-30">
                                            <input type="text" id="email" name="email" placeholder="Email" required>
                                            <i class="icon fal fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="contact-field p-relative c-subject mb-30">
                                            <input type="text" id="phone" name="phone" maxlength="13" minlength="13" placeholder="Phone No." required pattern="[0-9]*" inputmode="numeric" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                            <i class="icon fal fa-phone"></i>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-message mb-30">
                                            <textarea name="message" id="message" cols="30" rows="50"
                                                placeholder="Write comments"></textarea>
                                            <i class="icon fal fa-edit"></i>
                                        </div>
                                        <div class="slider-btn  text-center">
                                            <button class="btn ss-btn" data-animation="fadeInRight"
                                                data-delay=".8s">Submit <i class="fal fa-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>

            </div>

        </section>
        <!-- contact-area-end -->
        <div class="map fix" style="background: #f5f5f5;">
            <div class="container-flud">

                <div class="row">
                    <div class="col-lg-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212867.83634504632!2d-112.24455686962897!3d33.52582710700138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b743829374b03%3A0xabaac255b1e43fbe!2sPlexus%20Worldwide!5e0!3m2!1sen!2sin!4v1618567685329!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area -->

        <!-- brand-area-end -->
    </main>
    <!-- main-area-end -->
    <!-- footer -->
    <?php
    include_once "footer.php"
    ?>
    <!-- footer-end -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/paroller.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/js_isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/parallax-scroll.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/element-in-view.js"></script>
    <script src="js/main.js"></script>
</body>

</html>