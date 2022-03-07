<?php
$conn = mysqli_connect("localhost", "root", "", "demo");

//Check connection
if ($conn == false) {
    die ("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "UPDATE persons SET email = 'peterparker_new@gmail.com' WHERE id=24;";

if (mysqli_query($conn, $sql)) {
    echo "Data updated successfully";
} else{
    echo "ERROR: Could not update the data $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
