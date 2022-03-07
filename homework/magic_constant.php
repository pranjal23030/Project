<?php
//echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 2
//echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 3
//echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 4
//?><!-- -->
<!-- -->

<?php
//// Displays the absolute path of this file
//echo "The full path of this file is: " . __FILE__;
//?>
<!---->
<?php
//// Displays the directory of this file
//echo "The directory of this file is: " . __DIR__;
//?>

<?php
function myFunction(){
    echo  "The function name is - " . __FUNCTION__;
}
myFunction(); // Displays: The function name is - myFunction
?>


