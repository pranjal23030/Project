<?php
$pattern = "/\s/";
$replacement = "-";
$text = "Earth revolves around the Sun";
echo preg_replace($pattern, $replacement, $text);
echo "<br>";
?>