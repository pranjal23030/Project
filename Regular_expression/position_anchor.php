<?php
$pattern = "/^D/";
$names = array("Kunjal Shrestha", "Ojeshwi Guruna", "Diya Bajracharya", "Sambridhi Neupane");
$matches = preg_grep($pattern, $names);

foreach($matches as $match) {
    echo $match . "</br>";
}