<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect("localhost", "root", "", "demo");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// Prepare an insert statement
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);

        // Set parameters
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $email = trim($_POST['email']);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Records inserted successfully." . "<br>";
        } else {
            echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
        }
    } else {
        echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
    }

// Close statement
    mysqli_stmt_close($stmt);

// Close connection
    mysqli_close($conn);
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<form action="person_test.php" method="post">
    First name: <input type="text" placeholder="Enter First name here" name="first_name"> <br>
    Last Name: <input type="text" placeholder="Enter Last name here" name="last_name"> <br>
    Email: <input type="email" placeholder="Enter email here" name="email"> <br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
