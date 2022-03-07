<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST['myName'])) {
        $le = "Total length is 0 letters. It cannot be empty";
        echo $le;
    }
    else {
        echo "Total length is ";
        echo strlen($_POST['myName']);
        echo "\tletters";
    }
}
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="myName" placeholder="Name here"  >
<input type="submit" value="Calculate">
</form>

</body>
</html>