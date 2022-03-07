<?php
/* Attempt Mysql server connection. Assuming you are running MySQL
server with default setting  (user 'root' with no password)*/
$link=mysqli_connect("localhost","root", "", "demo");
if($link===false){
    die("ERROR: could not connect". mysqli_connect_error());
}

$sql="SELECT * FROM persons";
if($result=mysqli_query($link,$sql)){
    if(mysqli_num_rows($result)>0){
        echo"<table border='1'>";
        echo"<tr>";
        echo"<th>id</th>";
        echo"<th>name</th>";
        echo"<th>address</th>";
        echo"<th>contact</th>";
        echo"</tr>";
        while($row=mysqli_fetch_array($result)){
            echo"<tr>";
            echo"<td>".$row['id']."</td>";
            echo"<td>".$row['first_name']."</td>";
            echo"<td>".$row['last_name']."</td>";
            echo"<td>".$row['email']."</td>";
            echo"</tr>";

        }
        echo"</table>";
        //Free Result Set

        mysqli_free_result($result);
    }else{
        echo"ERROR:Could not able to execute $sql.".mysqli_error($link);
    }
mysqli_close($link);

}
?>