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
$sql = "ALTER TABLE job_history DROP FOREIGN KEY fk_job_id";

if (mysqli_query($conn, $sql)) {
    echo "Dropped foreign key successfully";
} else {
    echo "Error dropping: " . mysqli_error($conn);
}

mysqli_close($conn);
?>