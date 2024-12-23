<?php
session_start();
if (empty($_SESSION['admin_session'])) {
    header('Location:login.php');
}
include_once '../conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Shiv Dashboard</title>

    <link rel="shortcut icon" href="../img/logop.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <?php include 'top.php'; ?>
        <?php include 'sidebar.php'; ?>

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Add Properties</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="courses.php">Properties</a></li>
                                <li class="breadcrumb-item active">Add Properties</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="insertproperties.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Properties Information</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Upload Photo</label>
                                                <input type="file" class="form-control" name="image" required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label> Name</label>
                                                <input type="textarea" name="name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Area</label>
                                                <input type="text" name="area" class="form-control" recodnly>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Bedroom</label>
                                                <input type="text" name="bedroom" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Bathroom</label>
                                                <input type="text" name="bathroom" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Parking</label>
                                                <input type="text" name="parking" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Kitchen</label>
                                                <input type="text" name="Kitchen" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>₹ Price</label>
                                                <input type="text" name="price" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="Description" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="type">Display</label>
                                                <select name="display" class="form-control" required>
                                                    <option value="">Select Type</option>
                                                    <option value="Home">Home Page</option>
                                                    <option value="propertis">Propertis Page</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="type">Rent/sale</label>
                                                <select name="pppp" class="form-control" required>
                                                    <option value="">Select Type</option>
                                                    <option value="For Rent">For Rent</option>

                                                    <option value="For Sale">For Sale</option>
                                                    
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <textarea type="text" name="location" class="form-control" rows="6"
                                                    required></textarea>
                                            </div>
                                        </div>

                                       


                                        <!-- <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label> Description For Home Page</label>
                                                    <textarea type="text" name="descriptionhome" class="form-control" required></textarea>
                                                </div>
                                            </div> -->

                                        <!-- <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Discount Cost in Percentage</label>
                                                <input type="text" name="discountprice" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>About Class Description</label>
                                                <input type="text" name="shortdescription" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>City Name</label>
                                                <input type="text" name="cityname" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Area</label>
                                                <input type="text" name="area" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Email ID</label>
                                                <input type="text" name="emailid" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" name="password" class="form-control" required>
                                            </div>
                                        </div> -->


                                        <!-- <div class="col-12 ">
                                            <div class="form-group" style="color: red;text-align:center;padding-right:20px">

                                                <h4>Class ID :
                                                    <?php
                                                    //$aie =  "aie";
                                                    //$pppp = (rand(11110, 89999));
                                                    //echo $unicod = $aie . $pppp;
                                                    
                                                    ?>
                                                </h4>

                                                <input type="hidden" name="unicidpp" class="form-control" value="<?php //echo $unicod; 
                                                ?> ">
                                            </div>
                                        </div> -->

                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <footer>
                <p>Copyright © 2024 Shiv Properties</p>
            </footer>
        </div>
    </div>

    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- Scripts  -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <script src="assets/js/script.js"></script>

</body>

</html>