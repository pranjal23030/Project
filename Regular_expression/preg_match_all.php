<?php
$string = "PHP is a web scripting language of Php my choice.";
$exp = preg_match_all("/Php|web/i", $string, $array);
$exp = preg_match_all("/w|o|t/i", $string, $array);
$exp = preg_match_all("/[^wot]/i", $string, $array); //carrot = ^
$exp = preg_match_all("/[a-jA-J0-5]/", $string, $array); //range

if ($exp) {
    echo "Match found";
}
else {
    echo "Match not found";
}
echo "<pre>";
print_r($array);
echo "</pre>";
echo $array[0][1];
?>