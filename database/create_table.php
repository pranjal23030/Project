<?php
$conn = mysqli_connect("localhost", "root", "", "demo");

$sql = "CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>