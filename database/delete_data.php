<?php
$conn = mysqli_connect("localhost", "root", "", "demo");

//Check connection
if ($conn == false) {
    die ("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM persons WHERE first_name = 'Chota'";

if (mysqli_query($conn, $sql)) {
    echo "Data deleted successfully";
} else{
    echo "ERROR: Could not delete the data $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
