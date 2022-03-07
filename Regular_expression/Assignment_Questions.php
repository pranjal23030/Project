<?php
$string = 'My name is pranjal, code is 02003$/A3,';
$exp = preg_match_all("/[a-z0-9]/", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";
?>


