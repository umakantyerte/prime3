<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

    /* Responsive styles for smaller screens */
    @media (min-width: 280px) and (max-width: 780px) {
        #match {
            background: #000;
            width: 27% !important;
        }
    }

    /* Menu background */
    .menu-area {
        background: linear-gradient(172deg, #000000, #000000e8) !important;
    }

    /* Second header styling */
    .header-three .second-header {
        background: linear-gradient(-141deg, #0087bf, #776378eb) !important;
    }
</style>

<header class="header-area header-three">
    <div class="header-top second-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 d-none d-lg-block">
                    <div class="header-social">
                        <span>Follow us
                            <a href="https://www.facebook.com/profile.php?id=61560558293843" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="YouTube" target="_blank"><i class="fab fa-youtube"></i></a>
                        </span>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 d-none d-lg-block text-right">
                    <div class="header-cta">
                        <ul>
                            <li>
                                <div class="call-box">
                                    <div class="icon">
                                        <img src="img/icon/phone-call.png" alt="phone icon">
                                    </div>
                                    <div class="text">
                                        <span>Call Now!</span>
                                        <strong><a style="font-weight: 100;" href="tel:+44 7923 006717">+44 7923 006717</a></strong>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="call-box">
                                    <div class="icon">
                                        <img src="img/icon/mailing.png" alt="email icon">
                                    </div>
                                    <div class="text">
                                        <span>Email Now</span>
                                        <strong><a style="font-weight: 100;" href="mailto:primeteaching24@gmail.com">primeteaching24@gmail.com</a></strong>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main menu -->
    <div class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="#"><img id="match" src="img/tm-removebg-preview.png" style="width: 92%;" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-8">
                        <div class="main-menu text-right text-xl-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-sub"><a href="index.php">Home</a></li>
                                    <li class="has-sub">
                                        <a href="#">Tutors</a>
                                        <ul>
                                            <li><a href="tutors.php">Tutors</a></li>
                                            <li><a href="tutor.php">Mathematics Teacher</a></li>
                                            <li><a href="tutor2.php">Ashish Gupta</a></li>
                                            <li><a href="tutor3.php">Sandeep Singh</a></li>
                                            <li><a href="tutor4.php">Raman Purewal</a></li>
                                            <li><a href="tutor5.php">Harleen Kaur</a></li>
                                            <li><a href="tutor6.php">Oliver Davies</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><a href="addmison.php">Tutor Registration</a></li>
                                    <li class="has-sub"><a href="student.php">Student Registration</a></li>
                                    <li class="has-sub"><a href="maths.php">Maths</a></li>
                                    <li class="has-sub"><a href="english.php">English</a></li>
                                    <li class="has-sub"><a href="science.php">Science</a></li>
                                    <li class="has-sub"><a href="testimonial.php">Testimonial</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Offcanvas Menu -->
<div class="offcanvas-menu">
    <span class="menu-close"><i class="fas fa-times"></i></span>
    <form role="search" method="get" id="searchform" class="searchform" action="http://wordpress.zcube.in/xconsulta/">
        <input type="text" name="s" id="search" placeholder="Search" />
        <button><i class="fa fa-search"></i></button>
    </form>
    <div id="cssmenu3" class="menu-one-page-menu-container">
        <ul class="menu">
            <li class="menu-item"><a href="#">Home</a></li>
            <li class="menu-item"><a href="#">About Us</a></li>
            <li class="menu-item"><a href="#">Maths</a></li>
            <li class="menu-item"><a href="#">English</a></li>
            <li class="menu-item"><a href="#">Science</a></li>
            <li class="menu-item"><a href="#">Testimonial</a></li>
            <li class="menu-item"><a href="#">Contact Us</a></li>
        </ul>
    </div>
    <div id="cssmenu2" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-12" class="menu">
            <li class="menu-item"><a href="#home"><span>+91 999 999 9999</span></a></li>
            <li class="menu-item"><a href="#howitwork"><span>info@gmail.com</span></a></li>
        </ul>
    </div>
</div>
<div class="offcanvas-overly"></div>
