<?php
$con=new mysqli('localhost','root','','db1');
 if ($con) {
    echo"";
 } else{
    die(mysql_error($con)); 
 }

?>