<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST ['name'];
    $email=$_POST['email'];   
    $phone=$_POST['phone'];  
    $password=$_POST['password'];
    $
    $sql="insert into `info2`(name,email,phone,password)
    values('$name','$email','$phone','$password')";
    $result=mysqli_query($con,$sql);
    if ($result) {
        // echo"done data";
        header('location:show.php');
        
    } else {
        die(mysql_error($con)); 

    }



    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
<div class="container mt-5">
    <form id="registrationForm"   method="post" enctype="multipart/form-data">
       
    <div class="form-group">
            <label for="name">id</label>
            <input type="text" class="form-control" name="id"  required>
        </div>

    <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" required>
        </div>
       

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <br>
            <div class="form-group">
            <label for="password">image</label>

                <input type="file" class="form-control" name="image"  required> 
            </div>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    
</body>
</html>