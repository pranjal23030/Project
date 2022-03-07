<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = 'first_exam';

$conn = new mysqli($servername, $username, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$rate = $_POST['rate'];
$quantity = $_POST['quantity'];

$insertQry = 'insert into product (name, rate, quantity) values (?,?,?,?)';

$insertStatement = mysqli_prepare($conn,$insertQry);

mysqli_stmt_bind_param($insertStatement,'sssi',$name, $rate, $quantity);

if (mysqli_stmt_execute($insertStatement))
{
    echo "Value has been inserted successfully";
} else {
    echo "Error in inserting the value: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
