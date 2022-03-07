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
$sql = "CREATE TABLE jobs ( 
    job_id varchar(255) NOT NULL PRIMARY KEY, 
    job_title varchar(255) NOT NULL DEFAULT ' ', 
    min_salary decimal(12,0) DEFAULT 8000, 
    max_salary decimal(12,0) DEFAULT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table jobs created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
