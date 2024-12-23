<?php
session_start();
if (empty($_SESSION['admin_session'])) {
    header('Location:../index.php');
}

$userid = $_SESSION['admin_session']['id'];

include_once '../conn.php';

$sql = "SELECT * FROM admin WHERE id=$userid";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$ooldpass = $row["password"];

if (isset($_POST['pass']) && isset($_POST['cpass'])) {
    $getoldpass = $_POST['oldpass'];
    if ($ooldpass == $getoldpass) {
        if (empty($_POST['pass'])) {
            echo " <script>alert('Passowrd can not be empty...!');location.replace('')</script> ";
        } else {
            $password = $_POST['pass'];
            $cpassword = $_POST['cpass'];
            if ($password == $cpassword) {
                $passUQ = mysqli_query($conn, "UPDATE admin SET password='$password' WHERE id=$userid");
                if ($passUQ) {
                    echo " <script>alert('password has been changed...!');location.replace('index.php')</script> ";
                } else {
                    echo " <script>alert('something went wrong please try again later...!');location.replace('changepassword.php')</script> ";
                }
            } else {
                echo " <script>alert('passwords are not matching...!');location.replace('')</script> ";
            }
        }
    } else {
        echo " <script>alert('Please Enter Correct Old Passowrd');location.replace('')</script> ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Shiv Dashboard</title>

    <link rel="shortcut icon" href="../assets/images/logo/logo.jpg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">
        <?php include 'top.php'; ?>
        <?php include 'sidebar.php'; ?>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll" style="background-color:#000 ;">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="active">
                            <a href="index.php"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="gallery.php"><i class="fas fa-book"></i> <span>Gallery</span></a>
                        </li>
                        <!-- <li>
                            <a href="coursesdesc.php"><i class="fas fa-book"></i> <span>Course Description</span></a>
                        </li>
                         <li>
                            <a href="coursecurriculum.php"><i class="fas fa-user-graduate"></i> <span>Course Curriculum</span></a>
                        </li>  -->
                        <!-- <li>
                            <a href="testimonial.php"><i class="fas fa-user-graduate"></i> <span>Testimonial</span></a>
                        </li> -->
                        <li>
                            <a href="services.php"><i class="fas fa-user-graduate"></i><span> Services<span></a>
                        </li>
                        <!-- <li>
                            <a href="paiduser.php"><i class="fas fa-user-graduate"></i><span class="badge badge-success" style="margin-left: 0px;">Paid User</span></a>
                        </li> -->
                        <!-- <li>
                            <a href=""><i class="fas fa-user-graduate"></i> <span>Classes</span></a>
                        </li> -->
                        <!-- <li>
                            <a href="studentlist.php"><i class="fas fa-user-graduate"></i> <span>Student</span></a>
                        </li>  -->
                        <li class="menu-title">
                            <span>Management</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="changepassword.php">Change Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper" style="padding-top: 60px;">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome Admin!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h1 style="color: #18aefa;font-weight:bold;text-align: center;">Change Password</h1>
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <input type="password" required name="oldpass" placeholder="Old Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required name="pass" placeholder="Create New Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required name="cpass" placeholder="Repeat New Password" class="form-control">
                                    </div>

                                    <button type="submit" class="btn text-white btn-success w-100">Change Password</button>
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


    <!-- Scripts  -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/js/script.js"></script>

</body>

</html>