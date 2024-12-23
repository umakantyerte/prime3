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
                <source src="img/english.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2 id="breadcrumb-science" class="typing-text" data-text="English"></h2>
                            </div>
                        </div>
                        <style>
                            .typing-text {
                                overflow: hidden;
                                white-space: nowrap;
                                /* border-right: 2px solid #000; */
                                font-family: 'Arial', sans-serif;
                                display: inline-block;
                                width: fit-content;
                            }
                        </style>
                        <script>
                            const scienceEl = document.querySelector('#breadcrumb-science');
                            const scienceText = scienceEl.getAttribute('data-text');
                            scienceEl.textContent = ''; // Clear initial text
                            let k = 0;

                            function scienceTypeWriter() {
                                if (k < scienceText.length) {
                                    scienceEl.textContent += scienceText.charAt(k);
                                    k++;
                                    setTimeout(scienceTypeWriter, 100); // Typing speed
                                } else {
                                    // Reset after completing the text
                                    setTimeout(() => {
                                        scienceEl.textContent = ''; // Clear the text
                                        k = 0; // Reset index
                                        scienceTypeWriter(); // Restart animation
                                    }, 2000); // Pause before restarting
                                }
                            }

                            scienceTypeWriter();
                        </script>

                    </div>
                    <div class="breadcrumb-wrap2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">English</li>
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
                                    <figure class="image"><img src="img/teach.webp" alt=""></figure>
                                </div>
                            </div>
                            <div class="inner-column">
                                <div class="course-meta2 review style2 clearfix mb-30">
                                    <ul class="left">
                                        <li>
                                            <div class="author">
                                                <div class="thumb">
                                                    <img src="img/about5.png" alt="image">
                                                </div>
                                                <div class="text">
                                                    <a href="#">Harleen Kaur </a>
                                                    <p>English Teacher</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- <li class="categories">
                                            <div class="author">
                                                <div class="text">
                                                    <a href="#" class="course-name">English Teacher</a>
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
                                <h4>GCSE & A-Level English Tutoring – Achieve Top Grades in English
                                    Expert Online & In-Person English Tutors
                                </h4>
                                <p>Are you aiming for top grades in GCSE or A-Level English? At Prime Teaching Group, we
                                    provide special-ized English tutoring designed to help students excel. From
                                    mastering essay writing to analysing texts, our expert tutors provide personalized
                                    guidance tailored to the UK curriculum.</p><br>

                                <!-- <p>The world of search engine optimization is complex and ever-changing, but you can
                                    easily understand the basics, and even a small amount of SEO knowledge can make a
                                    big difference. Free SEO education is also widely available on the web, including in
                                    guides like this! (Woohoo!) This guide is designed to describe all major aspects of
                                    SEO, from finding the terms and phrases (keywords) that can generate qualified
                                    traffic to your website, to making your site friendly to search engines, to building
                                    links and marketing the unique value of your site.Etiam pharetra erat sed fermentum
                                    feugiat velit mauris egestas quam ut erat justo.</p> -->
                                <h4>Why Choose Our GCSE and A-Level English Tutors?</h4>
                                <ul>
                                    <li><strong>1.Highly Qualified Tutors:</strong> English specialists with expertise
                                        in
                                        GCSE and A-Level syllabuses.</li>
                                    <li><strong>2.Exam Board Expertise:</strong> Covering AQA, Edexcel, OCR, WJEC, and
                                        more.</li>
                                    <li><strong>3.Personalized Lesson Plans:</strong> Tailored to individual needs,
                                        focusing on areas like essay structure, literary analysis, and creative writing.
                                    </li>
                                    <li><strong>4.Proven Results:</strong> 85% of our students achieve a Grade 8/9 in
                                        GCSE
                                        English and A/A* in A-Level English.</li>
                                    <li><strong>5.Flexible Learning Options:</strong> Online and in-person tutoring,
                                        scheduled to fit your busy life.</li>
                                </ul><br>
                                <h4>GCSE English Tutoring – Build Confidence and Skills</h4>
                                <p>Our GCSE English tutoring program covers both English Language and English
                                    Literature, helping students develop critical skills for success.</p>
                                <h5>• Key Focus Areas for GCSE English:</h5>

                                <div class="container mt-4">
                                    <ul class="list-unstyled">
                                        <!-- English Language Section -->
                                        <li class="mb-4 d-flex align-items-start">
                                            <div class="me-3">
                                                <span class="badge bg-success rounded-circle p-3">
                                                    <i class="fas fa-check text-white"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <h5 class="mb-2"><strong>English Language</strong></h5>
                                                <ul class="list-unstyled ps-3">
                                                    <li><i class="far fa-dot-circle text-primary me-2"></i> Reading
                                                        comprehension and analysis.</li>
                                                    <li><i class="far fa-dot-circle text-primary me-2"></i> Writing for
                                                        purpose (descriptive, persuasive, and narrative writing).</li>
                                                    <li><i class="far fa-dot-circle text-primary me-2"></i> Mastering
                                                        spelling, punctuation, and grammar (SPaG).</li>
                                                </ul>
                                            </div>
                                        </li>


                                        <!-- English Literature Section -->
                                        <li class="d-flex align-items-start">
                                            <div class="me-3">
                                                <span class="badge bg-success rounded-circle p-3">
                                                    <i class="fas fa-check text-white"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <h5 class="mb-2"><strong>English Literature</strong></h5>
                                                <ul class="list-unstyled ps-3">
                                                    <li><i class="far fa-dot-circle text-primary me-2"></i> Detailed
                                                        study of set texts (novels, plays, and poetry).</li>
                                                    <li><i class="far fa-dot-circle text-primary me-2"></i>
                                                        Understanding themes, characters, and literary devices.</li>
                                                    <li><i class="far fa-dot-circle text-primary me-2"></i> Exam-focused
                                                        essay writing techniques.</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div><br>


                                <h5>• Who Benefits from GCSE English Tutoring?</h5>
                                <ul class="list-unstyled ps-3">
                                    <li><i class="far fa-dot-circle text-primary me-2"></i>Students preparing for exams
                                        with AQA, Edexcel, or other exam boards.</li>
                                    <li><i class="far fa-dot-circle text-primary me-2"></i>
                                        Learners aiming to improve writing skills and analytical ability</li>

                                </ul><br>

                                <h4>A-Level English Tutoring – Master Advanced Concepts</h4>
                                <p>Our A-Level English tutoring program is designed to help students develop
                                    sophisticated analyti-cal and writing skills.</p>
                                <h5>• Key Focus Areas for A-Level English:</h5>
                                <table class="table table-bordered mb-40">
                                    <thead>
                                        <tr>
                                            <th>English Literature:</th>
                                            <th>English Language:</th>
                                            <th>English Combined:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> In-depth study of prose, poetry, and drama</td>
                                            <td> Language change and diversity.</td>
                                            <td> Integrated skills for Language and Literature.</td>
                                        </tr>
                                        <tr>
                                            <td> Critical theories and comparative analysis </td>
                                            <td> Discourse analysis and sociolinguistics.</td>
                                        </tr>
                                        <tr>
                                            <td> Structuring high-quality essays for top marks. </td>
                                            <td> Creative writing and investigation projects.</td>
                                        </tr>
                                    </tbody>

                                </table>



                                <h5>• Who Benefits from A-Level English Tutoring?</h5>
                                <ul class="list-unstyled ps-3">
                                    <li><i class="far fa-dot-circle text-primary me-2"></i>Students aiming for top
                                        grades to secure university placements.</li>
                                    <li><i class="far fa-dot-circle text-primary me-2"></i>
                                        Learners preparing for careers in journalism, media, law, or academia.</li>

                                </ul><br>


                                <h5>•Success Stories from Our Students</h5>
                                <ul class="list-unstyled ps-3">
                                    <li><i class="far fa-dot-circle text-primary me-2"></i>"With my tutor's help, I went
                                        from a Grade 6 to a Grade 9 in GCSE English Literature!" – Seerit</li>
                                    <li><i class="far fa-dot-circle text-primary me-2"></i>
                                        "The A-Level English tutoring sessions were invaluable. I achieved an A and got
                                        into my dream university!"* </li>

                                </ul><br>




                                <h4>Why Choose Prime Teaching Group for English Tutoring?</h4>
                                <div class="faq-wrap faq-wrap2 pt-30 wow fadeInUp animated" data-animation="fadeInUp"
                                    data-delay=".4s">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h2 class="mb-0">
                                                    <button class="faq-btn" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseThree">
                                                        Specialist English Tutors:
                                                        <span></span>
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
                                                                        Focused on GCSE and A-Level success.</div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Learn More</div>
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
                                                    <button class="faq-btn collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                                        One-on-One Attention:
                                                        <span> </span>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="leactures">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-edit"></i>
                                                                        Personalized help to meet your unique needs.
                                                                    </div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Help </div>
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
                                                    <button class="faq-btn collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                                        Proven Techniques:
                                                        <span> </span>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="leactures">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-edit"></i>
                                                                        Exam-focused strategies and expert tips.</div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Experts Tips </div>
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
                                                    <button class="faq-btn collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                                        Affordable Rates:
                                                        <span> </span>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="leactures">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="text"><i class="fal fa-edit"></i>
                                                                        High-quality tutoring at a price you can afford.
                                                                    </div>
                                                                    <div class="time"><i class="fal fa-clock"></i>
                                                                        Affordable Price </div>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><br>





                            <h4>Book Your Free Trial Lesson Today
                            </h4>
                            <p>Ready to excel in GCSE or A-Level English? Book a free trial session and see how our
                                expert tutors can help you succeed.</p>



                            <ul class="right">
                                <li class="price">
                                    <a href="#" class="btn btn-primary">Student
                                        Registration Form</a>
                                </li>
                            </ul><br><br>





                            <h4> FAQs About GCSE and A-Level English Tutoring</h4>
                            <div class="faq-wrap faq-wrap2 pt-30 wow fadeInUp animated" data-animation="fadeInUp"
                                data-delay=".4s">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="faq-btn" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree">
                                                    Q: Which exam boards do you cover?
                                                    <span></span>
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
                                                                    A: We support all major UK exam boards, including
                                                                    AQA, Edexcel, OCR, WJEC, and others.</div>

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
                                                <button class="faq-btn collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                                    Q: Do you offer online English tutoring?
                                                    <span> </span>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="leactures">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <div class="text"><i class="fal fa-edit"></i>
                                                                    A: Yes, our online English tutoring sessions are
                                                                    delivered via secure and interactive platforms.
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
                                                <button class="faq-btn collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                                    Q: Can you help with coursework?
                                                    <span> </span>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="leactures">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <div class="text"><i class="fal fa-edit"></i>
                                                                    A: Yes, we provide guidance on coursework for both
                                                                    GCSE and A-Level English.
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
                                                <button class="faq-btn collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                                    Q: Do you offer group tutoring?
                                                    <span> </span>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="leactures">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <div class="text"><i class="fal fa-edit"></i>
                                                                    A: Yes, we offer both one-on-one and small group
                                                                    sessions for GCSE and A-Level students.
                                                                </div>

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

                        <div class="col-lg-5">
                            <aside class="sidebar-widget info-column">
                                <div class="inner-column3">
                                    <h3>How We Help You Excel in English</h3>
                                    <ul class="project-info clearfix">

                                        <li>
                                            <strong>1. Initial Assessment:</strong>
                                            <span>Identify strengths and areas for improvement.</span>
                                        </li>

                                        <li>
                                            <strong>2. Customised Lesson Plans:</strong>
                                            <span>Aligned to your syllabus and goals.</span>
                                        </li>

                                        <li>
                                            <strong>3. Interactive Learning:</strong>
                                            <span>Practice through real-world examples and past papers.</span>
                                        </li>

                                        <li>
                                            <strong>4. Regular Feedback:</strong>
                                            <span>Track your progress and refine your skills.</span>
                                        </li>

                                        <li>
                                            <div class="slider-btn">
                                                <a href="contact.php" class="btn ss-btn smoth-scroll">GET IN TOUCH <i
                                                        class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>




                    </div>


                </div>


            </div>
        </section>
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
            <i class="fas fa-comment-dots"></i>
        </button>


        <div id="feedbackForm">
            <span class="close-btn">&times;</span>
            <h3>Feedback Form</h3>
            <form>
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required placeholder="Enter your name"><br><br>

                <label for="feedback">Feedback:</label><br>
                <textarea id="feedback" name="feedback" rows="4" placeholder="Write your feedback here..."
                    required></textarea><br><br>

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