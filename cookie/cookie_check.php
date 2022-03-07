<?php
// Checking whether a cookie is set or not
if(isset($_COOKIE["hobby"])){
    echo "Cookie has been set.";
} else{
    echo "The cookie isn't set.";
}
?>