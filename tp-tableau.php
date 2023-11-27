<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">libelle</th>
      <th scope="col">prix</th>
      <th scope="col">qte</th>
      <th scope="col">stock</th>

    </tr>
</thead>
<?php



for ($i=1; $i <10 ; $i++) { 
    $prix=random_int(100,1000);
    $qte=random_int(0,20);

    if ($qte==0) {
        $etat="mab9aach";
        $stock="danger";
    } else if ($qte>3){
        $etat="9riib isali";
        $stock="primary";
        
    }
    else{
        $etat="mzl";
        $stock="success";

    }
    
    

?>
<tbody>
    <tr>
        <th scope="row"> <?= $i?></th>
        <td><?=$name?></td>
        <td><?= $prix?></td>
        <td><?= $qte?></td>
        <td class="badge text-bg-<?= $stock ?>"> <?= $etat ?></td>

        
        
    </tr>
    
</tbody>
<?php }?>
</table>

</body>
</html>

















































































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID </th>
      <th scope="col">First  </th>
      <th scope="col">prix</th>
      <th scope="col">qte</th>
    </tr>

  </thead>
  <?php 
for ($i=1; $i <= 5; $i++) { 

    

    $prix= random_int(0,20);
    $qte=random_int(0,10);

  if ($qte<10) {
    $col="danger"; 
  } else {
    $col="success";
  }
  



?>
  <tbody>
    <tr>
      <th scope="row"><?= $i ?></th> 
      <td> <div class=" bg-primary text-white">.bg-primary</div> </td>

      <td>Mark <?= $i ?> </td>
      <td> <?= $prix ?></td>
      <td class="badge text-bg-<?= $col ?>"> <?= $qte ?></td>
    </tr>
  <?php }?> 

  </tbody>
</table>


</body>
</html> -->