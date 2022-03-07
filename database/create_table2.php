<?php
$conn = mysqli_connect("localhost", "root", "", "demo");

//Check connection
if ($conn == false) {
    die ("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE TABLE persons (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>