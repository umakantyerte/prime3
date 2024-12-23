<?php
include_once '../conn.php';

$name = $_POST['name'];
$location = $_POST['location'];
$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "image/".$filename;
$area = $_POST['area'];
$bedroom = $_POST['bedroom'];
$bathroom = $_POST['bathroom'];
$parking = $_POST['parking'];
$Kitchen = $_POST['Kitchen'];
$Description = $_POST['Description'];
$display_name = $_POST['display'];
$price = $_POST['price'];
$rs = $_POST['pppp'];

if(move_uploaded_file($tempname,$folder)){
     $sql = "INSERT INTO `properties`(`name`, `location`, `image`, `area`, `bedroom`, `bathroom`, `parking`, `Kitchen`, `Description`, `display`, `price`, `rs`) VALUES ('$name','$location','$filename', '$area', '$bedroom', '$bathroom', '$parking', '$Kitchen', '$Description','$display_name','$price','$rs')";
//       //echo "<br>-=-=-=-=-=-<br>".$sql;
         }   if ($conn->query($sql)) {
          echo "<SCRIPT type='text/javascript'> //not showing me this
                                          alert(' Added successfully!!');
                                          window.location.replace('properties.php');
                                          </SCRIPT>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }


?>    