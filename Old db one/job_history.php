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
$sql = "CREATE TABLE job_history ( 
    employee_id decimal(12,0) NOT NULL PRIMARY KEY,
    start_date date NOT NULL, 
    end_date date NOT NULL, 
    job_id varchar(255) NOT NULL, 
    department_id decimal(12,0) DEFAULT NULL, 
    FOREIGN KEY (job_id) REFERENCES jobs(job_id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table job_history created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
