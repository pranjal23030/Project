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

$id = 3;

$deleteQry = "delete from MyGuests where id = ?";

$deleteStatement = mysqli_prepare($conn,$deleteQry);

mysqli_stmt_bind_param($deleteStatement, 'i',$id);

if (mysqli_stmt_execute($deleteStatement))
{
    echo mysqli_affected_rows($conn);
} else {
    echo "Error deleting value: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
