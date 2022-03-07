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

$sql = "SELECT e.employee_id 'Emp_Id', e.last_name 'Employee', 
m.employee_id 'Mgr_Id', m.last_name 'Manager' 
FROM employees e 
join employees m 
ON (e.manager_id = m.employee_id)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "e.employee_id: " . $row["Emp_Id"].
            " - e.last_name: " . $row["Employee"].
            " - m.employee_id: " . $row["Mgr_Id"].
            " - m.last_name: " . $row["Manager"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>


