<?php
$conn = mysqli_connect("localhost", "root", "");

// Check connection
if ($conn == false ) {
    die ("ERROR: Could not connect." . mysqli_connect_error());
}

// Atte,pt create database query execution
$sql = "CREATE DATABASE demo";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "ERROR: Could not able to execute $sql." . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>