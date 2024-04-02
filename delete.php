<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "colos";

// Establish a connection to the database
$connection = mysqli_connect($hostname, $username, $password, $database);



// Check if the ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record from the database
    $query = "DELETE FROM users WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Redirect to the main page after successful deletion
        header('Location:table.php');
        exit();
    } else {
        echo "Failed to delete the record: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request.";
}
?>