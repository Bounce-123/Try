<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "colos";

// Establish a connection to the database
$connection = mysqli_connect($hostname, $username, $password, $database);
// Check if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $id = $_POST['id'];
    $firstname = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Update the record in the database
    $query = "UPDATE users SET firstname = '$firstName', lastName = '$lastName', Email = '$email', Address = '$address' WHERE id = '$id'" ;
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Redirect to the main page after successful update
        header('Location: table.php');
        exit();
    } else {
        echo "Failed to update the record: " . mysqli_error($connection);
    }
} else {
    // Retrieve the ID from the query parameter
    $id = $_GET['id'];

    // Retrieve the record with the provided ID from the database
    $query = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    // Check if the query was successful and if the record exists
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $firstname = $row['firstName'];
        $last_name = $row['lastName'];
        $email = $row['email'];
        $address = $row['address'];
    } else {
        echo "Record not found please check again";
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="edit.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>

<body>
 <!-- <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>  -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="container">
                     <h2>     Edit Record</h2>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" value="<?php echo $firstname; ?>"><br><br><br><br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" value="<?php echo $last_name; ?>"><br><br><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>"><br><br><br><br>
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" value="<?php echo $phone_number; ?>"><br><br><br><br>
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $address; ?>"><br><br><br><br>
       <a href="table.php "> <input type="submit" value="Update"></div></a>
    </form>
</body>

</html>