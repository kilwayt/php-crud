<?php
include 'connect.php';
if (isset($_GET['iddelete'])) {
    $id=$_GET['iddelete'];
    $sql="delete from info2 where id=$id";
    $result=mysqli_query($con,$sql);
    if ($result) {
        // echo " Deleted successfull  ";
        header('location:show.php');
    }
    else{
        die(mysql_error($con)); 

    }
}
?>