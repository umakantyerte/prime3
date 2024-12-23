<?php
session_start();
if (empty($_SESSION['admin_session'])) {
    header('Location:login.php');
}
include '../conn.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Shiv Dashboard</title>

    <link rel="shortcut icon" href="../img/logop.png">
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

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Edit properties</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit properties</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                $id = $_GET['id'];
                $sql1 = "SELECT * FROM properties WHERE id= $id";
                $result = $conn->query($sql1);
                $row = $result->fetch_assoc()

                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="updateproperties.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>update properties</span></h5>
                                        </div>
                                        <!---div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>Service Name</label>
                                                    <input type="text" name="ser_name" class="form-control" required>
                                                </div>
                                            </div-->
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Area</label>
                                                <input type="text" class="form-control" name="area" value="<?php echo $row['area']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>bedroom</label>
                                                <input type="text" class="form-control" name="bedroom" value="<?php echo $row['bedroom']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>bathroom</label>
                                                <input type="text" class="form-control" name="bathroom" value="<?php echo $row['bathroom']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>parking</label>
                                                <input type="text" class="form-control" name="parking" value="<?php echo $row['parking']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Kitchen</label>
                                                <input type="text" class="form-control" name="Kitchen" value="<?php echo $row['Kitchen']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="Description" value="<?php echo $row['Description']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <textarea type="text" style="height:222px;" class="form-control" name="location" required><?php echo $row['location']; ?></textarea>
                                            </div>
                                        </div>
                                       

                                        <div class="col-12">
                                            <button type="submit" name="upload" class="btn btn-primary">Submit</button>
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




    <footer>
        <p>Copyright © 2023 SSQUAREIT.</p>
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