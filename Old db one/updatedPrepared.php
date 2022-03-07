<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = 'myDB';

//create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$firstName = 'Sameer';
$id = 1;

$updateQry = "update MyGuests set firstname = ? where id = ?";

$updateStatement = mysqli_prepare($conn,$updateQry);

mysqli_stmt_bind_param($updateStatement,'si',$firstName, $id);

if (mysqli_stmt_execute($updateStatement))
{
    echo mysqli_affected_rows($conn);
} else {
    echo "Error updating value: " . mysqli_error($conn);
}

mysqli_close($conn);
?>