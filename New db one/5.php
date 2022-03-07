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

$sql = "SELECT FIRST_NAME, LAST_NAME, SALARY FROM employees
WHERE SALARY BETWEEN 5000 AND 10000 ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "First name: " . $row["FIRST_NAME"]. " - Last name: " . $row["LAST_NAME"]. "- Salary: " . $row["SALARY"].  "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
