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

$sql = "SELECT FIRST_NAME, LAST_NAME, DEPARTMENT_ID, DEPARTMENT_NAME 
FROM employees 
JOIN deparments USING (DEPARTMENT_ID)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "First name: " . $row["FIRST_NAME"]. " - Last name: " . $row["LAST_NAME"]. "- Id: " . $row["DEPARTMENT_ID"]. "- Name: " . $row["DEPARTMENT_NAME"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

