<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $password1 = $_POST['password'];
    $password2 = $_POST['confirm_password'];

    if(empty($password1)){
        echo "IT cannot be empty" ;
    }

    if($password1 == $password2){
        echo "Password match";
    }
    else{
        echo "What the hell bro";
    }
}
?>

<html>
<head>
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="password" placeholder="Password">
    <input type="text" name="confirm_password" placeholder="Confirm Password">
    <input type="submit" value="Check Password">
</form>
</body>
</html>