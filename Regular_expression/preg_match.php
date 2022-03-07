<!--preg_match()-->
<?php
$string = "PHP is a web scripting language of my choice.";
$exp = preg_match("/Php/i",$string);
if ($exp) {
    echo "A match was found";
}
else {
    echo "Match not found";
}
?>