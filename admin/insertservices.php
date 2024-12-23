<?php
include_once '../conn.php';

$name = $_POST['name'];
$description = $_POST['description'];
$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "image/".$filename;
if(move_uploaded_file($tempname,$folder)){
     $sql = "INSERT INTO `services`(`name`,`description`,`image`) VALUES ('$name','$description','$filename')";
//       //echo "<br>-=-=-=-=-=-<br>".$sql;
         }   if ($conn->query($sql)) {
          echo "<SCRIPT type='text/javascript'> //not showing me this
                                          alert('Added successfully!!');
                                          window.location.replace('service.php');
                                          </SCRIPT>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }


?>    