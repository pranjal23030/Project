<?php

$conn = mysqli_connect("localhost", "root", "", "demo");

// Check connection
if($conn == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Prepare an insert statement
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";

if($stmt = mysqli_prepare($conn, $sql)){
    mysqli_stmt_bind_param($stmt, "sss", $first_name,
        $last_name, $email);

    $first_name = "KP";
    $last_name = "Oli";
    $email = "kpoli@mail.com";
    mysqli_stmt_execute($stmt);
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
}

// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($conn);
?>
