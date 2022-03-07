<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Echo session variables that were set on previous page
echo "The username is " . $_SESSION["username"] . ".<br>";
echo "The roll number is " . $_SESSION["roll_number"] . ".";
?>
</body>
</html>