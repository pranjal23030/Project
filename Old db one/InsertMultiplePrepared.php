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

$firstName = 'Roo';
$lastName = 'Karti';
$email = 'roo@gmail.com';
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

$firstName = 'Cassandry';
$lastName = 'Croxon';
$email = 'ccroxon0@ustream.tv';
$age = 25;

if (mysqli_stmt_execute($insertStatement))
{
    echo "Value is inserted successfully";
} else {
    echo "Error inserting value: " . mysqli_error($conn);
}

$firstName = 'Ariela';
$lastName = 'Fuge';
$email = 'afuge1@rediff.com';
$age  = 50;
if (mysqli_stmt_execute($insertStatement))
{
    echo "Value is inserted successfully";
} else {
    echo "Error inserting value: " . mysqli_error($conn);
}

$firstName = 'Yolande';
$lastName = 'Gillbey';
$email = 'ygillbey2@npr.org';
$age  = 32;
if (mysqli_stmt_execute($insertStatement))
{
    echo "Value is inserted successfully";
} else {
    echo "Error inserting value: " . mysqli_error($conn);
}

mysqli_close($conn);
?>