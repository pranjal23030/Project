<?php
$conn = mysqli_connect("localhost", "root", "", "demo");

//Check connection
if ($conn == false) {
    die ("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO persons (first_name, last_name, email) 
VALUES
('Chota', 'Chatri', 'chotachatri@gmail,com'),
('Yedha', 'Anna', 'yedhaanna@gmail,com'),
('Boss', 'DK', 'bossdk@gmail,com'),
('Pappu', 'Supari', 'pappusupari@gmail,com')";

if (mysqli_query($conn, $sql)) {
    echo "Multiple data inserted successfully";
} else{
    echo "ERROR: Could not add the data $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
