<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT FIRST_NAME FROM employees 
WHERE FIRST_NAME LIKE '%a%' AND FIRST_NAME LIKE '%n%' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "First name: " . $row["FIRST_NAME"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>