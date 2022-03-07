<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "DELETE FROM employees WHERE EMPLOYEE_ID=105";

if (mysqli_query($conn, $sql)) {
    echo "Data deleted successfully";
} else {
    echo "Error deleting data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
