<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["username"] = "Pranjal";
$_SESSION["roll_number"] = "23030";
echo "Session variables are set.";
?>
</body>
</html>

<?php
