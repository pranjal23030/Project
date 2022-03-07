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

$sql = "SELECT concat(FIRST_NAME, ' ', LAST_NAME) AS 'name', SALARY as 'reward' FROM employees LIMIT 3";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"]. " - Reward: " . $row["reward"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>