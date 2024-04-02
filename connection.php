<?php
 // Connect to the database
 $servername = "localhost";
 $username = "root"; 
 $password = ""; 
 $dbname = "colos"; 
 $conn = new mysqli($servername, $username, $password, $dbname);


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $firstName = $_POST["fname"];
   $lastName = $_POST["lname"];
    $email = $_POST["Email"];
    $address = $_POST["add"];

   

    // Prepare and execute the SQL query to insert data into the table
    $sql = "INSERT INTO users (firstname, lastName, Email, Address)
            VALUES ('$firstName', '$lastName', '$email', '$address')";


    if ($conn->query($sql) === TRUE) {
        // Redirect to the welcome page
        header("Location: welcome.php?fname=" . urlencode($firstName) . "&lname=" . urlencode($lastName));
        exit();
    }
    

    // Close the database connection
    $conn->close();
}
?>
