<?php
include 'connect.php';
$id=$_GET['idupdate'];
$sql="select * from `info2`where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name =$row['name'] ;
 $email= $row['email'] ;
 $phone= $row['phone'] ;
 $password= $row['password'] ;

if(isset($_POST['submit'])){
    $name=$_POST ['name'];
    $email=$_POST['email'];   
    $phone=$_POST['phone'];  
    $password=$_POST['password'];
    $sql="update `info2` set id=$id,name='$name',email='$email',phone='$phone',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if ($result) {
        // echo"update done";
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
    <form id="registrationForm"   method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value=<?php echo $name;?> required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value=<?php echo $email;?> required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" value=<?php echo $phone;?> required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" value=<?php echo $password;?> name="password" required>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">UPDATE</button>
    </form>
</body>
</html>
