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

$firstName = 'Ahsan';
$lastName = 'Zameer';
$email = 'abc@gmail.com';
$age = 20;

$insertQry = 'insert into MyGuests (firstname, lastname, email, age) values(?,?,?,?)';

$insertStatement = mysqli_prepare($conn,$insertQry);

mysqli_stmt_bind_param($insertStatement,'sssi',$firstName, $lastName, $email, $age);

if (mysqli_stmt_execute($insertStatement))
{
    echo "Value is inserted successfully";
} else {
    echo "Error inserting value: " . mysqli_error($conn);
}

mysqli_close($conn);
?>