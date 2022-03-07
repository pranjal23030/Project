<?php
$conn = mysqli_connect("localhost", "root", "", "demo");

//Check connection
if ($conn == false) {
    die ("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@gmail.com')";

if (mysqli_query($conn, $sql)) {
    echo "Data added successfully";
} else{
    echo "ERROR: Could not add the data $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>