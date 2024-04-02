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

// Execute a query to retrieve the data
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if (!$result) {
    echo "Failed to retrieve data from the database: " . mysqli_error($connection);
    exit();
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="table.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data from database</title>
</head>

<body>
    <table align="center" border="7px" border-radius="2cm" style="width:600px;line-height:40px;">
        <style>
            background-color: black;
        </style>
        <br><br><br><br>
        <tr>
            <th colspan="7">
                <h2>PHONE BOOK RECORD</h2>
            </th>
        </tr>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>Last_name</th>
            <th>Email</th>

            <th>Address</th>
            <th>Actions</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstName']; ?></td>
                <td><?php echo $row['lastName']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['S/N']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['S/N']; ?>">Delete</a>
                </td>
            </tr>
        <?php
    }
    ?>

    </table>
</body>
<center ><a href="index.php">Back to phonebook</a></center>

</html>