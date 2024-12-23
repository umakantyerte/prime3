<?php
// Include your database connection file
include '../conn.php';

// Check if form is submitted
if(isset($_POST['upload'])) {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $area = $_POST['area'];
    $bedroom = $_POST['bedroom'];
    $bathroom = $_POST['bathroom'];
    $parking = $_POST['parking'];
    $Kitchen = $_POST['Kitchen'];
    $Description = $_POST['Description'];
    $location = $_POST['location'];

    // Update query using prepared statement
    $sql = "UPDATE properties SET name=?, area=?, bedroom=?, bathroom=?, parking=?, Kitchen=?, Description=?, location=? WHERE id=?";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssssssssi", $name, $area, $bedroom, $bathroom, $parking, $Kitchen, $Description, $location, $id);

    // Execute the statement
    if ($stmt->execute()) {
        // Properties updated successfully
        echo "<script type='text/javascript'>
            alert('Properties Updated successfully!!');
            window.location.replace('properties.php');
            </script>";
    } else {
        // Error in query execution
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
