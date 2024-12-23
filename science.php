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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
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
                <source src="img/science.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2 id="breadcrumb-science" class="typing-text" data-text="Science"></h2>
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
                                <li class="breadcrumb-item active" aria-current="page">Science</li>
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
                                    <figure class="image"><img src="img/ak.jpg" alt=""></figure>
                                </div>
                            </div>
                            <div class="inner-column">
                                <div class="course-meta2 review style2 clearfix mb-30">
                                    <ul class="left">
                                        <li>
                                            <div class="author">
                                                <div class="thumb">
                                                    <img src="img/abb.png" alt="image">
                                                </div>

                                                <div class="text">
                                                    <a href="#">Raman Purewal </a>
                                                    <p>Science Teacher</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- <li class="categories">
                                            <div class="author">
                                                <div class="text">
                                                    <a href="#" class="course-name">Photoshop</a>
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
                                <h4>GCSE & A-Level Science Tutoring – Excel in Biology, Chemistry, and Physics :</h4>

                                <h4>Expert Science Tutors for GCSE & A-Level Students -</h4>

                                <p style="text-align:justify;">Struggling with GCSE or A-Level Science? Whether it’s Biology, Chemistry, or Physics, Prime Teaching Group offers tailored Science tutoring to
                                    help you master the curriculum and achieve your academic goals.
                                    Our experienced tutors provide personalized guidance to ensure you excel in exams and develop a deep understanding of scientific concepts.</p>


                                <h4>GCSE Science Tutoring – Build a Strong Scientific Foundation :</h4>

                                <p>Our GCSE Science program covers Combined Science and Triple Science options, focusing on core topics and exam techniques.</p>

                                <h4 style="color:#125875;">• What You’ll Learn in GCSE Science:</h4>

                                <ul>

                                    <li><b style="color:black;">o Biology :<br> </b> Cell biology, genetics, ecosystems, and human physiology.</li>

                                    <li><b style="color:black;">o Chemistry : <br></b> Atomic structure, chemical reactions, periodic table, and quantitative chemistry.</li>
                                    <li><b style="color:black;">o Physics : <br></b> Forces, energy, waves, electricity, and particle theory.</li>

                                    </li>
                                </ul>

                                <br>
                                <h4 style="color:#125875;">• How We Help GCSE Science Students:</h4>
                                <ul>

                                    <li>o Simplify complex topics with clear explanations</li>

                                    <li>o Develop scientific reasoning and practical skills.</li>
                                    <li>o Prepare for exams with topic-focused revision sessions.</li>

                                    </li>

                                </ul>

                                <br>
                                <h4 style="color:#125875;">• Who It’s For:</h4>

                                <ul>

                                    <li>o Students struggling with science concepts or aiming for top grades.</li>

                                    <li>o Learners preparing for <b>GCSE Combined Science</b> or <b>Triple Science</b> exams.</li>

                                    </li>

                                </ul>

                                <br>
                                <h4>A-Level Science Tutoring–Advance Your Scientific Knowledge :</h4>

                                <p>Our A-Level Science tutoring focuses on in-depth understanding and advanced exam preparation in Biology, Chemistry, and Physics.</p>

                                <h4 style="color:#125875;">• What You’ll Learn in A-Level Science:</h4>

                                <ul>

                                    <li><b style="color:black;">o Biology :<br> </b>Advanced genetics, biochemistry, ecology, and physiology.</li>

                                    <li><b style="color:black;">o Chemistry : <br></b>Organic chemistry, thermodynamics, equilibria, and spectroscopy.</li>
                                    <li><b style="color:black;">o Physics : <br></b>Quantum physics, mechanics, thermodynamics, and electromagnetism.</li>

                                    </li>
                                </ul>

                                <br>
                                <h4 style="color:#125875;">• How We Help A-Level Science Students:</h4>
                                <ul>

                                    <li>o Clarify challenging concepts with expert guidance.</li>

                                    <li>o Improve practical and analytical skills for coursework and exams.</li>
                                    <li>o Prepare for STEM-related university courses or careers.</li>

                                    </li>

                                </ul>

                                <br>
                                <h4 style="color:#125875;">• Who It’s For:</h4>

                                <ul>

                                    <li>o Students aiming for A/A* grades in Biology, Chemistry, or Physics.</li>

                                    <li>o Learners preparing for university admissions in medicine, engineering, or natural sciences.</li>

                                    </li>

                                </ul>

                                <br>

                                <h4>How Our Science Tutoring Works :</h4>

                                <ul>

                                    <li><b style="color:black;">1. Initial Assessment : <br></b>Identify strengths and areas for improvement.</li>

                                    <li><b style="color:black;">2. Personalised Lesson Plans : <br></b>Tailored to your syllabus and goals.</li>
                                    <li><b style="color:black;">3. Interactive Learning : <br></b>Engage in experiments, problem-solving, and exam-style questions.</li>
                                    <li><b style="color:black;">4. Regular Feedback : <br></b>Stay on track with detailed progress reports.</li>

                                    </li>
                                </ul>

                                <br>

                                <h4>Why Parents & Students Choose Prime Teaching Group for Science Tutoring :</h4>

                                <ul>

                                    <li><b style="color:black;">• Experienced Tutors : <br></b>Fully qualified teachers with years of experience in Science.</li>

                                    <li><b style="color:black;">• One-on-One Focus : <br></b>Personalized attention to address individual needs.</li>
                                    <li><b style="color:black;">• Comprehensive Support : <br></b>Help with both theory and practical skills.</li>
                                    <li><b style="color:black;">• Proven Success : <br></b>Students consistently achieve high grades and excel in exams.</li>

                                    </li>
                                </ul>

                                <style>
                                    .trial-section {
                                        background-color: #f8f9fa;
                                        padding: 30px 20px;
                                        text-align: center;
                                        border-radius: 10px;
                                    }

                                    .trial-btn {
                                        background-color: orange;
                                        color: #fff;
                                        font-weight: bold;
                                        padding: 10px 25px;
                                        border-radius: 5px;
                                        text-decoration: none;
                                    }

                                    .trial-btn:hover {
                                        background-color: #125875;
                                        color: #fff;
                                    }
                                </style>

                                <div class="container mt-5">
                                    <div class="trial-section">
                                        <h4 style="color:#125875;">Book Your Free Science Trial Lesson Today</h4>
                                        <p>
                                            Take the first step toward success in GCSE or A-Level Science. Book your free trial session today and experience the difference expert tutoring can make.
                                        </p>
                                        <a href="student.php" class="trial-btn">Book a Free Trial Now</a>
                                    </div>
                                </div>


                                <br>

                                <style>
                                    .faq-section {
                                        padding: 30px 20px;
                                        background-color: rgb(206, 211, 216);
                                        border-radius: 10px;
                                    }

                                    .faq-header {
                                        background-color: rgb(111, 111, 112);
                                        color: #fff;
                                        font-weight: bold;
                                        cursor: pointer;
                                    }

                                    .faq-header:hover {
                                        background-color: #4793b3;
                                    }

                                    .faq-body {
                                        background-color: #fff;
                                    }
                                </style>


                                <div class="container mt-5">
                                    <div class="faq-section">
                                        <h4>FAQs About GCSE & A-Level Science Tutoring :</h4>
                                        <div class="accordion" id="faqAccordion">
                                            <!-- Question 1 -->
                                            <div class="card">
                                                <div class="card-header faq-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Q.1. Do you cover all three sciences – Biology, Chemistry, and Physics?
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                                    <div class="card-body faq-body">
                                                        A: Yes! We offer specialized tutoring for all three sciences at both GCSE and A-Level.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Question 2 -->
                                            <div class="card">
                                                <div class="card-header faq-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Q.2. Which exam boards do you support?
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                                    <div class="card-body faq-body">
                                                        A: We cover all major UK exam boards, including AQA, Edexcel, OCR, and WJEC.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Question 3 -->
                                            <div class="card">
                                                <div class="card-header faq-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Q.3. Do you offer online Science tutoring?
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                                    <div class="card-body faq-body">
                                                        A: Yes, our tutors deliver interactive online lessons via secure platforms.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Question 4 -->
                                            <div class="card">
                                                <div class="card-header faq-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Q.4. Can you help with practical skills and coursework?
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                                                    <div class="card-body faq-body">
                                                        A: Absolutely! We provide support for practical assessments and coursework.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header faq-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Q.5. Are group sessions available?
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                                                    <div class="card-body faq-body">
                                                        A: Yes, we offer both one-on-one and small group sessions.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                        <!-- Bootstrap JS (including Popper.js for tooltips and popovers) -->
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <aside class="sidebar-widget info-column">
                                <div class="inner-column3 p-3" style="background-color: #f9f9f9; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                                    <h3 style="font-size: 17px; margin-bottom: 15px;">
                                        Why Choose Our GCSE & A-Level Science Tutors?
                                    </h3>
                                    <ul class="list-unstyled" style="line-height: 1.8; font-size: 15px;">
                                        <li>
                                            <strong style="color:black;">• Subject Specialists :</strong>
                                            <span> Tutors with expertise in Biology, Chemistry, and Physics for all major exam boards <br><b>(AQA, Edexcel, OCR, WJEC)</b>.</span>
                                        </li><br>
                                        <li>
                                            <strong style="color:black;">• Tailored to Your Needs :</strong>
                                            <span> Personalized support to suit individual learning styles and goals.</span>
                                        </li><br>
                                        <li>
                                            <strong style="color:black;">• Focus on Exam Success :</strong>
                                            <span> Targeted strategies and tips to excel in GCSE & A-Level exams.</span>
                                        </li><br>
                                        <li>
                                            <strong style="color:black;">• Flexible Learning :</strong>
                                            <span> Online and in-person tutoring options to fit your schedule.</span>
                                        </li><br>
                                        <li>
                                            <strong style="color:black;">• Proven Results :</strong>
                                            <span> Consistent improvement and high grades for our students.</span>
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