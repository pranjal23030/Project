<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// to change a session variable, just overwrite it
echo"The nickname is: ". $_SESSION["username"] = "Lucky" ."<br>";
print_r($_SESSION);
?>
</body>
</html>


