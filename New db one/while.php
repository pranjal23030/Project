<?php
$loop = 5;
$index = 1;
$check = true;

while ($check)
{
    echo '<div>Current Index is : ' . $index . '</div>';
    $index = $index + 1;
    if ($index == 5)
    {
        $check = false;
    }
}
echo 'loop completed';
?>
