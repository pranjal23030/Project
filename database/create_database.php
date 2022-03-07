<?php
$link = mysqli_connect("localhost", "root", "");;
$sql = "CREATE DATABASE demo";
mysqli_query($link, $sql);
mysqli_close($link);
?>