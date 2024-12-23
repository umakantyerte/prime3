<?php
// Include your database connection file
include '../conn.php';

$id = $_POST['id']; // Assuming id is passed via form or some other method
$name = $_POST['name'];



  // Update record with existing image
  $sql = "UPDATE newproject SET `name`='$name' WHERE id=$id";


// Execute SQL query
if ($conn->query($sql) === TRUE) {
  // If SQL query executed successfully
  echo "<script type='text/javascript'>
          alert('new project updated successfully!!');
          window.location.replace('newproject.php');
        </script>";
} else {
  // If there was an error with the SQL query
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
