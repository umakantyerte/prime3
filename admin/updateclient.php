<?php
// Include your database connection file
include '../conn.php';

$id = $_POST['id']; // Assuming id is passed via form or some other method
$name = $_POST['name'];
$count = $_POST['count'];



  // Update record with existing image
  $sql = "UPDATE client SET `name`='$name', `count`='$count' WHERE id=$id";


// Execute SQL query
if ($conn->query($sql) === TRUE) {
  // If SQL query executed successfully
  echo "<script type='text/javascript'>
          alert('Client updated successfully!!');
          window.location.replace('Client.php');
        </script>";
} else {
  // If there was an error with the SQL query
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
