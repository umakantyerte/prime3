<?php
// Include your database connection file
include '../conn.php';

$id = $_POST['id']; // Assuming id is passed via form or some other method
$name = $_POST['name'];
$description = $_POST['description']; // Corrected variable name to match SQL query



  // Update record with existing image
  $sql = "UPDATE services SET `name`='$name', `description`='$description' WHERE id=$id";


// Execute SQL query
if ($conn->query($sql) === TRUE) {
  // If SQL query executed successfully
  echo "<script type='text/javascript'>
          alert('Properties updated successfully!!');
          window.location.replace('service.php');
        </script>";
} else {
  // If there was an error with the SQL query
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
