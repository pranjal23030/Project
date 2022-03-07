<?php
echo " <i>SERVER_NAME: </i> Returns the name of the host server: ";
echo $_SERVER ['SERVER_NAME']. "<br> <br>";

echo " <i> HTTP_HOST:</i> Returns the Host header from the current request: ";
echo $_SERVER ['HTTP_HOST'] . "<br> <br>";

echo "<i> HTTP_USER_AGENT: </i> characteristic string that lets servers and network peers identify the application, operating system, vendor, and/or version of the requesting user agent: ";
echo $_SERVER ['HTTP_USER_AGENT']. "<br> <br>";

echo " <i> SCRIPT_NAME:</i> Returns the path of the current script: ";
echo $_SERVER ['SCRIPT_NAME'];
?>

