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

$countryId = 2;
$countryName = 'India';
$regionId = 1;
// sql to create table
$sql = "INSERT INTO country_new (country_id, country_name, region_id) VALUES (?,?,?)";
$insertStatement = mysqli_prepare($conn,$sql);

mysqli_stmt_bind_param($insertStatement,'isi',$countryId, $countryName, $regionId);

if (mysqli_stmt_execute($insertStatement)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>