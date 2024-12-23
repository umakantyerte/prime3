<?php
include_once '../conn.php';

$name = $_POST['name'];
$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "image/".$filename;
if(move_uploaded_file($tempname,$folder)){
     $sql = "INSERT INTO `newproject`(`name`,`image`) VALUES ('$name','$filename')";
//       //echo "<br>-=-=-=-=-=-<br>".$sql;
         }   if ($conn->query($sql)) {
          echo "<SCRIPT type='text/javascript'> //not showing me this
                                          alert('Added successfully!!');
                                          window.location.replace('newproject.php');
                                          </SCRIPT>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }


?>    