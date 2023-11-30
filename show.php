
<?php
include 'connect.php';

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
    <div class="container">
    <a href="http://phptp.test/form2.php" class=> <button class="btn btn-success my-5">ADD</button> </a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">password</th>
      <th scope="col">action</th>
      <th scope="col">IMAGE</th>




    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from `info2`"; 
    $result=mysqli_query($con,$sql); 
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
          $id= $row[ 'id' ] ;
          $name =$row['name'] ;
          $email= $row['email'] ;
          $phone= $row['phone'] ;
          $password= $row['password'] ;
          $file= $row['file'] ;

          
          echo '  <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$phone.'</td>
          <td>'.$password.'</td>
          <td>'.$file.'</td>

          <td> <button class="btn btn-danger text-light"> <a href="delete.php?iddelete='.$id.'"class=" text-light">DELETE</button> </a>
          <button class="btn btn-primary text-light"> <a href="update.php?idupdate='.$id.'"class=" text-light">UPDATE</button> </a>
          
          
          </td>
        
        </tr>'; }}
    ?>
  </tbody>
</table>
    </div>
</body>
</html>