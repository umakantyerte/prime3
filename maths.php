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
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="css/responsive.css">
</head>
<style>
    .btn.ss-btn {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn.ss-btn:hover {
        background-color: #0056b3;
    }
</style>

<body>



    <?php
    include_once "header.php"
    ?>

    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex p-relative align-items-center"
            style="    background: linear-gradient(#0b0a0ad6, #000000cc);position: relative;background-attachment: fixed;">

            <!-- Background Video -->
            <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
                <source src="img/maths.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2 id="breadcrumb-typing" class="typing-text" data-text="mathematics">mathematics</h2>
                            </div>
                        </div>
                        <style>
                            .typing-text {
                                overflow: hidden;
                                white-space: nowrap;
                                /* border-right: 2px solid #000; */
                                /* font-family: 'Arial', sans-serif; */
                                display: inline-block;
                                width: fit-content;
                            }
                        </style>
                        <script>
                            const breadcrumbEl = document.querySelector('#breadcrumb-typing');
                            const breadcrumbText = breadcrumbEl.getAttribute('data-text');
                            breadcrumbEl.textContent = ''; // Clear initial text
                            let j = 0;

                            function breadcrumbTypeWriter() {
                                if (j < breadcrumbText.length) {
                                    breadcrumbEl.textContent += breadcrumbText.charAt(j);
                                    j++;
                                    setTimeout(breadcrumbTypeWriter, 100); // Typing speed
                                } else {
                                    // Reset after completing the text
                                    setTimeout(() => {
                                        breadcrumbEl.textContent = ''; // Clear the text
                                        j = 0; // Reset index
                                        breadcrumbTypeWriter(); // Restart animation
                                    }, 2000); // Pause before restarting
                                }
                            }

                            breadcrumbTypeWriter();
                        </script>

                    </div>
                    <div class="breadcrumb-wrap2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Maths</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- breadcrumb-area-end -->
        <!-- Project Detail -->


        <section class="project-detail" style="margin-top: -50px;">
            <div class="container">
                <!-- Lower Content -->
                <div class="lower-content">
                    <div class="row">
                        <div class="text-column col-lg-7 col-md-9 col-sm-12">
                            <!-- <h2>MATHS</h2> -->

                            <div class="upper-box">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    <figure class="image"><img src="img/de1.jpg" alt=""></figure>
                                </div>
                            </div>
                            <div class="inner-column">
                                <div class="course-meta2 review style2 clearfix mb-30">
                                    <ul class="left">
                                        <li>
                                            <div class="author">
                                                <div class="thumb">
                                                    <img src="img/aboutme.png" alt="image">
                                                </div>

                                                <div class="text">
                                                    <a href="#">Kajal Levy</a>
                                                    <p> Maths Teacher</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- <li class="categories">
                                            <div class="author">
                                                <div class="text">
                                                    <a href="#" class="course-name">Maths Teacher</a>
                                                    <p>Categories</p>
                                                </div>
                                            </div>

                                        </li> -->

                                    </ul>
                                    <!-- <ul class="right">
                                        <li class="price">
                                            $59.00
                                        </li>

                                    </ul> -->
                                </div>
                                <h3>Course Overview</h3>
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                    dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
                                    sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                    amet finibus eros. Lorem Ipsum is simply dummy text of the printing.</p>

                                <p>The world of search engine optimization is complex and ever-changing, but you can
                                    easily understand the basics, and even a small amount of SEO knowledge can make a
                                    big difference. Free SEO education is also widely available on the web, including in
                                    guides like this! (Woohoo!) This guide is designed to describe all major aspects of
                                    SEO, from finding the terms and phrases (keywords) that can generate qualified
                                    traffic to your website, to making your site friendly to search engines, to building
                                    links and marketing the unique value of your site.Etiam pharetra erat sed fermentum
                                    feugiat velit mauris egestas quam ut erat justo.</p>
                                <h4>GCSE Maths Tutoring – Master the Basics and Beyond</h4>
                                <p>Our GCSE Maths tutoring program is designed to help you excel in every topic:</p>
                                <h4>What You Will Learn</h4>
                                <p>o Algebra, Geometry, and Trigonometry.</p>
                                <p>o Ratios, Proportions, and Number Systems.</p>
                                <p>o Probability, Statistics, and Graphs.
                                </p>
                                <!-- <p>Fusce eleifend donec sapien sed phase lusa pellentesque lacus.Vivamus lorem arcu
                                    semper duiac. Cras ornare arcu avamus nda leo Etiam ind arcu. Morbi justo mauris
                                    tempus pharetra interdum at congue semper purus. Lorem ipsum dolor sit.The world of
                                    search engine optimization is complex and ever-changing, but you can easily
                                    understand the basics.</p>
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                    dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
                                    sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                    amet finibus eros. Lorem Ipsum is simply dummy text of the printing.</p> -->
                                <h4>How We Help GCSE Students:</h4>
                                <ul class="pr-ul">
                                    <li>
                                        <div class="icon"><i class="fal fa-check"></i></div>
                                        <div class="text">
                                            Build confidence in solving Maths problems step-by-step.
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fal fa-check"></i></div>
                                        <div class="text">
                                            Improve grades with focused, personalized lessons. </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fal fa-check"></i></div>
                                        <div class="text">
                                            Get exam-ready with past paper practice and revision techniques. </div>
                                    </li>
                                    <!-- <li>
                                        <div class="icon"><i class="fal fa-check"></i></div>
                                        <div class="text">
                                            Title, URL, & description to draw high CTR
                                        </div>
                                    </li> -->

                                </ul>
                                <h4>Who It’s For:</h4>
                                <p>o Students struggling with GCSE Maths concepts.</p>
                                <p>o Learners aiming for Grade 8 or 9 in their GCSE exams.</p>
                                <!-- <h4>Study Options:</h4>
                                        <table class="table table-bordered mb-40">
                                            <thead>
                                                <tr>
                                                    <th>Qualification</th>
                                                    <th>Length</th>
                                                    <th>Code</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Bsc (Hons)</td>
                                                    <td>3 years full time</td>
                                                    <td>CDX3</td>
                                                </tr>
                                                <tr>
                                                    <td>Bsc </td>
                                                    <td>4 years full time</td>
                                                    <td>CDX4</td>   
                                                </tr>
                                            </tbody>
                                        </table> -->
                                <h4>A-Level Maths Tutoring – Advance to Excellence</h4>
                                <p>Our expert tutors specialize in helping A-Level students tackle challenging concepts and achieve exceptional results.</p>
                                <h5>Key Topics Covered:</h5>
                                <P>o Pure Mathematics: Algebra, Calculus, Trigonometry, and Vectors.</P>
                                <P>o Mechanics and Statistics: Real-world applications of maths.</P>
                                <P>o Further Maths for advanced l earners, including discrete and decision maths.</P>
                                <h5>Why A-Level Students Choose Us:</h5>
                                <P>o Clear explanations of complex ideas.</P>
                                <P>o Strategies to manage time and maximize exam performance.</P>

                                <P>o Support for students preparing for university entry, STEM careers, or apprenticeships.</P>


                                <h4>What Makes Prime Teaching Group- Maths Tuition Stand Out?</h4>
                                <p>• One-on-One Maths Tutoring: Personalized sessions to focus on individual needs.</p>
                                <p>• Group Maths Tuition: Collaborative learning for GCSE and A-Level Maths.</p>
                                <p>• Flexible Scheduling: Learn at your pace, with sessions available evenings and weekends.</p>
                                <p>• Affordable Rates: High-quality tutoring at competitive prices.</p>

                                <h4>How to Get Started – Easy Steps to Boost Your Grades</h4>
                                <p>1. Sign Up for a Free Trial: Experience a no-obligation lesson and see how we can help.</p>
                                <p>2. Choose Your Subjects: Let us know if you need GCSE Maths, A-Level Maths, or Further Maths support.</p>
                                <p>3. Start Learning: Get matched with a tutor and begin your journey to maths success!</p>


                                <h5>[Book a Free Trial Now – Link for Student Registration Form – same as GET IN TOUCH - FORM</h5>
                                <br>
                                <h4>What Our Students Say</h4>
                                <p>"I went from a Grade 5 to a Grade 9 in GCSE Maths within 6 months, thanks to my tutor!" – [Shreya- Video Attached
                                    "Thanks to the A-Level Maths tutoring, I secured an A and got into my first-choice university."* – [Ethan – Video Attached)
                                </p>





                                <div class="faq-wrap faq-wrap2 pt-30 wow fadeInUp animated" data-animation="fadeInUp"
                                    data-delay=".4s">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h2 class="mb-0">
                                                    <button class="faq-btn" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseThree">
                                                        Frequently Asked Questions <span>Answers</span>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse show"
                                                data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="leactures">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-edit"></i>
                                                                        Q: What exam boards do you support?</div>
                                                                    <div class="time">
                                                                        A: We cover all major UK exam boards, including AQA, Edexcel, OCR, and WJEC.
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-edit"></i>
                                                                        Q: Can I get online Maths tutoring?</div>
                                                                    <div class="time"></i>
                                                                        A: Yes, we offer online GCSE Maths tutoring and online A-Level Maths tutoring via secure, interactive platforms. </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-file-pdf"></i>
                                                                        Q: Do you offer group sessions?</div>
                                                                    <div class="time">
                                                                        A: Yes, we provide both one-on-one and small group tuition for GCSE and A-Level Maths. </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-book"></i>Q: How do I book a free trial?</div>
                                                                    <div class="time">
                                                                        A: Click the “Book a Free Trial Now” button and complete our quick registration form.

                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <!-- <button class="faq-btn collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                                        The Brief
                                                        <span>5 leactures . 60 min</span>
                                                    </button> -->
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="leactures">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-edit"></i>
                                                                        Robotics</div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Duration : 0Hrs 20Mins </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-edit"></i>
                                                                        Computer science</div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Duration : 2Hrs 20Mins </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-file-pdf"></i>
                                                                        Donec pulvinar magna</div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Duration : 45Mins </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-book"></i> Donec
                                                                        laoreet vestibulum</div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Duration : 0Hrs 20Mins </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <!-- <button class="faq-btn collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                                        Type, Color & Icon Introductions
                                                        <span>5 leactures . 70 min</span>
                                                    </button> -->
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="leactures">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-edit"></i>
                                                                        Robotics</div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Duration : 0Hrs 20Mins </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-edit"></i>
                                                                        Computer science</div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Duration : 2Hrs 20Mins </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-file-pdf"></i>
                                                                        Donec pulvinar magna</div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Duration : 45Mins </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-book"></i> Donec
                                                                        laoreet vestibulum</div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Duration : 0Hrs 20Mins </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5">
                            <aside class="sidebar-widget info-column">
                                <div class="inner-column3">
                                    <h5>KEEP the pic and DELETE everything else.</h5>
                                    <h3>GCSE & A-Level Maths Tutoring Online & In-Person</h3>
                                    <h4>Achieve Top Results in GCSE and A-Level Maths</h4>
                                    <p>Are you looking for expert GCSE Maths tutoring or A-Level Maths help? At Prime Teaching Group, we pro-vide tailored Maths tuition to help students achieve Grade 9 in GCSE Maths and A/A in A-Level Maths*. With a proven track record, engaging lessons, and personalized guidance, we make maths easier to under-stand and excel at.</p>
                                    <h4>Why Choose Our GCSE and A-Level Maths Tutors?</h4>
                                    <p>• Expert Maths Tutors: Our tutors are fully qualified teachers with years of experience in GCSE and A-Level Maths.</p>
                                    <p>• Tailored to Exam Boards: We cover AQA, Edexcel, OCR, and other UK syllabuses to ensure you’re exam ready.</p>
                                    <p>• Interactive Online & In-Person Sessions: Flexible, engaging, and effective learning formats to suit your needs.</p>
                                    <p>• Focus on Exam Success: Learn strategies, solve past papers, and master time management.</p>
                                    <p>• Proven Results: 90% of our students achieve top grades (Grade 8/9 for GCSE and A/A* for A-Level Maths).</p>
                                    <!-- <ul class="project-info clearfix">
                                        <li>
                                            <div class="priceing">
                                                <strong>$59.00</strong> <sub>$139.00</sub>
                                                <span class="discont">68% OFF</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="icon fal fa-home-lg-alt"></span> <strong>Instructor:</strong>
                                            <span>Eleanor Fant</span>
                                        </li>

                                        <li>
                                            <span class="icon fal fa-book"></span> <strong>Lectures:</strong>
                                            <span>14</span>
                                        </li>

                                        <li>
                                            <span class="icon fal fa-clock"></span> <strong>Duration: </strong> <span>6
                                                weeks</span>
                                        </li>
                                        <li>
                                            <span class="icon fal fa-user"></span> <strong>Enrolled: </strong> <span>20
                                                students</span>
                                        </li>
                                        <li>
                                            <span class="icon fal fa-globe"></span> <strong>Language: </strong>
                                            <span>Maths</span>
                                        </li>
                                        <li>
                                            <div class="slider-btn">
                                                <a href="contact.php" class="btn ss-btn smoth-scroll">Enroll <i
                                                        class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </li>

                                    </ul> -->
                                </div>
                            </aside>



                        </div>


                    </div>


                </div>


            </div>
        </section>



        <!-- <section id="none" class="cta-area cta-bg pt-160 pb-160"
            style="background-image: linear-gradient(#00000078, #0000008c), url(img/pending.jpg);background-attachment: fixed;padding: 80px;">
            <div class="container">
                <div class="row justify-content-center  align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="section-title cta-title video-title wow fadeInLeft animated"
                            data-animation="fadeInDown animated" data-delay=".2s">
                            <h2 style="font-size: 39px;"> We're Diffirent</h2>
                            <p style="margin-top: 39px;">Our community is being called to reimagine the future. As the
                                only university where a
                                renowned design school colleges, </p>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-2">
                    </div>
                    <div class="col-lg-4">

                        <div class="s-video-content">
                            <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="popup-video mb-50"><img
                                    src="img/bg/play-button.png" alt="circle_right"></a>

                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Feedback Form Popup -->

        <!--End Project Detail -->
        <!-- brand-area -->
        <!-- <div class="brand-area pt-60 pb-60" style="background-color:#125875">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo1.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo2.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo3.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo4.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo5.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- brand-area-end -->
    </main>
    <!-- main-area-end -->
    <!-- footer -->
    <?php
    include_once "footer.php"
    ?>
    <style>
        #myBtn1 {
            position: fixed;
            bottom: 65px;
            left: 10px;
            z-index: 99;
            font-size: 25px;
            border: none;
            background-color: #275acd;
            color: white;
            cursor: pointer;
            height: 55px;
            width: 55px;
            box-shadow: 0 0 5px #232323;
            padding: 0px;
            border-radius: 50%;
        }

        /* The popup form - hidden by default */
        #feedbackForm {
            display: none;
            position: fixed;
            bottom: 20%;
            left: 50%;
            transform: translate(-50%, 0);
            z-index: 100;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
        }

        /* Close button */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            color: #333;
            cursor: pointer;
        }
    </style>


    <body>
        <button id="myBtn1">
            <img src="img/back.jpg" alt="" style="width: 20px; height: 20px;">
        </button>



        <div id="feedbackForm">
            <span class="close-btn">&times;</span>
            <h3>Feedback Form</h3>
            <form>
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required placeholder="Enter your name"><br><br>

                <label for="feedback">Feedback:</label><br>
                <textarea id="feedback" name="feedback" rows="4" placeholder="Write your feedback here..." required></textarea><br><br>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>

        <style>
            /* Overall form styling */
            #feedbackForm {
                background-color: #f9f9f9;
                width: 400px;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin: 50px auto;
                font-family: Arial, sans-serif;
            }

            h3 {
                text-align: center;
                font-size: 1.5rem;
                color: #333;
            }

            /* Input field styling */
            input[type="text"],
            textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 1rem;
                margin-bottom: 15px;
                font-family: 'Poppins';
                box-sizing: border-box;
            }

            input[type="text"]:focus,
            textarea:focus {
                border-color: #007bff;
                outline: none;
            }

            /* Submit button styling */
            .submit-btn {
                background-color: #007bff;
                color: white;
                padding: 10px 20px;
                font-family: 'Poppins';
                margin: -55px 0px 0px 0px;
                border: none;
                border-radius: 5px;
                font-size: 1rem;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .submit-btn:hover {
                background-color: #0056b3;
            }

            /* Close button styling */
            .close-btn {
                font-size: 1.5rem;
                position: absolute;
                top: 15px;
                right: 20px;
                cursor: pointer;
                color: #888;
            }

            .close-btn:hover {
                color: #333;
            }

            /* Label styling */
            label {
                font-size: 1rem;
                color: #333;
                font-family: 'Poppins';
                font-weight: 400;
            }

            /* Styling for placeholders */
            input::placeholder,
            textarea::placeholder {
                color: #aaa;
            }
        </style>


        <script>
            // Get the button and the popup form
            const feedbackButton = document.getElementById('myBtn1');
            const feedbackForm = document.getElementById('feedbackForm');
            const closeButton = document.querySelector('.close-btn');

            // Show the popup when button is clicked
            feedbackButton.addEventListener('click', () => {
                feedbackForm.style.display = 'block';
            });

            // Close the popup when the close button is clicked
            closeButton.addEventListener('click', () => {
                feedbackForm.style.display = 'none';
            });

            // Close the popup when clicked outside of it
            window.addEventListener('click', (e) => {
                if (e.target === feedbackForm) {
                    feedbackForm.style.display = 'none';
                }
            });
        </script>

        <style>
            /* Button styling */
            #myBtn1 {
                position: fixed;
                bottom: 65px;
                left: 10px;
                z-index: 99;
                font-size: 25px;
                border: none;
                background-color: #275acd0a;
                color: white;
                cursor: pointer;
                height: 55px;
                width: 55px;
                box-shadow: 0 0 5px #232323;
                padding: 0px;
                border-radius: 50%;
            }

            /* The popup form - hidden by default */
            #feedbackForm {
                display: none;
                position: fixed;
                bottom: 20%;
                left: 50%;
                transform: translate(-50%, 0);
                z-index: 100;
                background-color: white;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                padding: 20px;
                border-radius: 10px;
                width: 80%;
                /* Percentage for better responsiveness */
                max-width: 400px;
                /* Maximum width */
            }

            /* Close button */
            .close-btn {
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 20px;
                color: #333;
                cursor: pointer;
            }

            /* Overall form styling */
            #feedbackForm {
                background-color: #f9f9f9;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin: -34px auto;
                /* font-family: Arial, sans-serif; */
            }

            h3 {
                text-align: center;
                font-size: 1.5rem;
                color: #333;
            }

            /* Input field styling */
            input[type="text"],
            textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 1rem;
                margin-bottom: 15px;
                font-family: 'Poppins';
                box-sizing: border-box;
            }

            input[type="text"]:focus,
            textarea:focus {
                border-color: #007bff;
                outline: none;
            }

            /* Submit button styling */
            .submit-btn {
                background-color: #007bff;
                color: white;
                padding: 10px 20px;
                font-family: 'Poppins';
                border: none;
                border-radius: 5px;
                font-size: 1rem;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .submit-btn:hover {
                background-color: #0056b3;
            }

            /* Close button styling */
            .close-btn {
                font-size: 1.5rem;
                position: absolute;
                top: 15px;
                right: 20px;
                cursor: pointer;
                color: #888;
            }

            .close-btn:hover {
                color: #333;
            }

            /* Label styling */
            label {
                font-size: 1rem;
                color: #333;
                font-family: 'Poppins';
                font-weight: 400;
            }

            /* Styling for placeholders */
            input::placeholder,
            textarea::placeholder {
                color: #aaa;
            }

            /* Mobile responsiveness */
            @media (max-width: 600px) {
                #feedbackForm {
                    width: 90%;
                    /* Allow the form to take up more width on small screens */
                    max-width: none;
                    /* Remove the max-width for smaller screens */
                    margin-top: 10%;
                    /* Add margin-top to create space from the top */
                }

                .submit-btn {
                    width: 100%;
                    /* Make the submit button stretch to full width */
                }
            }
        </style>

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