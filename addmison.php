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
<style>
    @media (min-width:280px) and (max-width:780px) {
        #max {
            background: #000 !important;
            padding: 17px !important;
            border-radius: 22px !important;
        }

        #years {
            padding: 48px 0px !important;
            border-radius: 28px !important;
        }

        #minn {
            margin-top: 10px !important;
        }
    }
</style>

<body>
    <!-- header -->

    <?php
    include_once "header.php"
    ?>


    <main>

        <!-- breadcrumb-area -->

        <!-- breadcrumb-area-end -->

        <!-- services-area -->
        <section class="breadcrumb-area d-flex  p-relative align-items-center"
            style="background-image: linear-gradient(#2f29298a, #1b1818), url(img/live-removebg-preview.png);background-position: center;">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Tutor Registration
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="breadcrumb-wrap2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Registration</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->
        <!-- map-area-end -->

        <!-- map-area-end -->
            <style>
                /* Overall section background */
                .faq-area {
                    padding-top: 60px;
                    padding-bottom: 60px;
                    position: relative;
                    background: linear-gradient(212deg, #1b1b1b, #000000);
                    /* Gradient with black */
                }

                /* Contact section background */
                .contact-bg02 {
                    background: rgb(40, 40, 40);
                    /* Dark background for the form area */
                    padding: 48px;
                    border-radius: 45px;
                    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.5);
                }

                /* Heading text centered with white color */
                .section-title h2 {
                    text-align: center;
                    color: #fff;
                    font-size: 33px;
                    font-weight: 400;
                    font-family: auto;                }

                .small,
                small {
                    font-size: .875em !important;
                    font-family: 'Poppins' !important;
                    color: #ffffffb3 !important;
                }

                .select2-container--default .select2-selection--multiple {
                    background-color: #101010 !important;
                    border: 1px solid #333333 !important;
                    border-radius: 17px !important;
                    cursor: text;
                }

                /* Label for input fields */
                .contact-field label {
                    display: block;
                    font-size: 16px;
                    font-weight: 300;
                    text-transform: capitalize;
                    color: #fbfdff;
                    /* Light text color for labels */
                    font-family: 'Poppins', sans-serif;
                    margin-bottom: 9px;
                    cursor: unset;
                }

                /* Form styling */
                .contact-form {
                    margin-top: 46px;
                }

                /* Input, select, and textarea styles */
                .contact-field {
                    margin-bottom: 20px;
                }

                .contact-field input,
                .contact-field select,
                .contact-field textarea {
                    background: rgba(0, 0, 0, 0.6);
                    /* Dark background for form fields */
                    color: #fff;
                    /* White text */
                    border: 2px solid #333;
                    /* Slight border for better definition */
                    padding: 14px 20px;
                    border-radius: 30px;
                    outline: none;
                    width: 100%;
                    font-family: 'Poppins', sans-serif;
                    font-size: 16px;
                }

                .contact-field select {
                    background: rgba(0, 0, 0, 0.8);
                    /* Darker background for select inputs */
                    color: #fff;
                }

                /* Submit button styling */
                .slider-btn button {
                    color: #fff;
                    padding: 17px 23px;
                    background: #ff7f32;
                    /* Accent color: Orange */
                    border: none;
                    border-radius: 50px;
                    cursor: pointer;
                    transition: background 0.3s ease;
                    font-family: 'Poppins', sans-serif;
                }

                .slider-btn button:hover {
                    background: #e88d00;
                    /* Darker orange on hover */
                }

                /* Label styling */
                label {
                    color: #fff;
                    text-align: center;
                    display: block;
                    font-family: 'Poppins', sans-serif;
                }

                /* Experience title */
                h4 {
                    color: #fff;
                    font-family: 'Poppins', sans-serif;
                    font-weight: 400;
                    text-align: center;
                    font-size: 27px;
                }

                /* Style for multi-select dropdowns */
                .select2-container .select2-selection--multiple {
                    background-color: rgba(0, 0, 0, 0.6);
                    /* Background for multi-select dropdown */
                    border-radius: 30px;
                    color: #fff;
                    /* Text color for options */
                    padding: 5px;
                }

                .select2-container .select2-selection__rendered {
                    color: #fff;
                    font-family: 'Poppins', sans-serif;
                }

                .select2-container--default .select2-selection__arrow {
                    border: none;
                }

                /* Remove button styling (for cut) */
                .remove-btn {
                    background-color: #ff4d4d;
                    /* Red background */
                    color: #fff;
                    padding: 5px;
                    border-radius: 5px;
                    cursor: pointer;
                    margin-top: 5px;
                    font-family: 'Poppins', sans-serif;
                }

                .remove-btn:hover {
                    background-color: #cc0000;
                    /* Darker red on hover */
                }
            </style>

        <section class="faq-area pt-60 pb-60 p-relative fix">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div id="years" class="contact-bg02">
                            <div class="section-title">
                                <h2 id="trip" class="trip">Tutor Application Form</h2>
                            </div>
                            <form action="" method="post" class="contact-form mt-30">
                                <div class="row">
                                    <!-- Personal Information -->
                                    <div class="col-lg-6">
                                        <div class="contact-field">
                                            <input type="text" id="full_name" name="full_name" placeholder="Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-field">
                                            <input type="email" id="email" name="email" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-field">
                                            <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-field">
                                            <input type="text" id="postcode" name="postcode" placeholder="Postcode" required>
                                        </div>
                                    </div>

                                    <!-- Academic Qualifications -->
                                    <div class="col-lg-12">
                                        <div class="contact-field">
                                            <label for="qualification">Highest Qualification Achieved:</label>
                                            <select id="qualification" name="qualification[]" multiple required>
                                                <option value="PGCE">Postgraduate Certificate in Education (PGCE)</option>
                                                <option value="QTS">Qualified Teacher Status (QTS)</option>
                                                <option value="Bachelors">Bachelor's Degree</option>
                                                <option value="Masters">Master's Degree</option>
                                            </select>
                                            <small>Select all that apply. (Use Ctrl/Command to select multiple)</small>
                                        </div>
                                    </div>

                                    <!-- Subjects You Can Tutor -->
                                    <div class="col-lg-12">
                                        <div class="contact-field">
                                            <label for="subjects">Subjects You Can Tutor:</label>
                                            <select id="subjects" name="subjects[]" multiple required>
                                                <option value="Mathematics">Mathematics</option>
                                                <option value="English">English</option>
                                                <option value="Science">Science</option>
                                                <option value="Physics">Physics</option>
                                                <option value="Chemistry">Chemistry</option>
                                                <option value="Biology">Biology</option>
                                                <option value="History">History</option>
                                                <option value="Geography">Geography</option>
                                                <option value="Spanish">Spanish</option>
                                                <option value="French">French</option>
                                                <option value="Music">Music</option>
                                                <option value="Languages">Languages (specify)</option>
                                                <option value="Other">Other (please specify)</option>
                                            </select>
                                            <small>Select all that apply. (Use Ctrl/Command to select multiple)</small>
                                        </div>
                                        <div class="contact-field">
                                            <input type="text" id="languages_specify" name="languages_specify" placeholder="Languages (please specify)">
                                        </div>
                                    </div>

                                    <!-- Experience -->
                                    <div class="col-lg-12">
                                        <!-- <h4>Experience</h4> -->
                                        <div class="contact-field">
                                            <input type="number" id="experience_years" name="experience_years" placeholder="Teaching/Tutoring Experience (Years)" required>
                                        </div>
                                        <div class="contact-field">
                                            <label for="work_experience">Relevant Work Experience or Achievements:</label>
                                            <select id="work_experience" name="work_experience[]" multiple required>
                                                <option value="Classroom teacher">Classroom teacher</option>
                                                <option value="Private tutor">Private tutor</option>
                                                <option value="Teaching assistant">Teaching assistant</option>
                                                <option value="Volunteer Tutor">Volunteer Tutor</option>
                                                <option value="Other">Other (please specify)</option>
                                            </select>
                                            <small>Select all that apply. (Use Ctrl/Command to select multiple)</small>
                                        </div>
                                        <div class="contact-field">
                                            <input type="text" id="work_experience_other" name="work_experience_other" placeholder="Other (please specify)">
                                        </div>
                                    </div>

                                    <!-- DBS Certificate -->
                                    <div class="col-lg-12">
                                        <div class="contact-field">
                                            <label for="dbs_certificate">Do you have a valid background check (DBS certificate)?</label>
                                            <select id="dbs_certificate" name="dbs_certificate" required>
                                                <option value="" disabled selected>Select one</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Reference -->
                                    <div class="col-lg-12">
                                        <div class="contact-field">
                                            <label for="reference_details">Reference Details:</label>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" id="reference_name" style="margin-bottom: 6px;" name="reference_name" placeholder="Reference Name" required>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="email" id="reference_email" style="margin-bottom: 6px;" name="reference_email" placeholder="Reference  Email" required>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" id="reference_position" style="margin-bottom: 6px;" name="reference_position" placeholder="Reference Position" required>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" id="reference_phone" style="margin-bottom: 6px;" name="reference_phone" placeholder="Reference Contact Number" required>
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="text" id="reference_address"  name="reference_address" placeholder="Reference Work Address" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Submit Button -->
                                    <div class="col-lg-12">
                                        <div class="slider-btn" style="text-align: center;">
                                            <button type="submit">
                                                <span>Submit Now</span> <i class="fal fa-long-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>





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
    <!-- Include Select2 CSS & JS in your HTML head -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Select2 for all select fields with multiple selections
            $('select[multiple]').select2({
                placeholder: 'Select an option',
                allowClear: true,
                closeOnSelect: false, // Keep the dropdown open after selecting
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Remove selected items from the dropdown using a "remove" button
            $(".contact-field select[multiple]").on("select2:unselect", function(e) {
                // Optionally: Update the UI after removing an item
                let removedValue = e.params.data.id;
                alert("Removed: " + removedValue); // Example alert to show removed item
            });

            // Handle dynamically added "cut" button to remove selections
            $("select").on("select2:select", function(e) {
                let selectedItem = e.params.data.text;
                // Example: Allow users to cut the selection directly.
                $("<button>").text("Remove " + selectedItem)
                    .addClass("remove-btn")
                    .on("click", function() {
                        $(this).parent().remove(); // Remove button and option text
                        let option = $('option', this).filter(function() {
                            return $(this).text() === selectedItem;
                        });
                        option.prop('selected', false); // Unselect option in the dropdown
                    })
                    .appendTo($(this).parent());
            });
        });
    </script>

</body>

</html>