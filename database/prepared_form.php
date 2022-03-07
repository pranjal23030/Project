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
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Records inserted successfully.";
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


<html>
<head>
    <title>Prepared form</title>
</head>
<body>
<form method="post" action="prepared_form.php">
    <input type="text" name="first_name" placeholder="Fname"><br>
    <input type="text" name="last_name" placeholder="Lname"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="submit" value="Insert">
</form>
</body>
</html>
