<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<?php
$id =$_GET['ID'];
include "config.php";
$Rdata=mysqli_query($con,"select " "from tbltodo where Id = $id ");
$data =mysqli_fetch_array($Rdata);

?>

<body class="bg-info">
    <form action="update.php.php" method="POST">

    <div class="container">
  <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
    <h2 class="text-center text-primary font-monospace">
      TODO LISTS
    </h2>
    <div class="col-10">
      <input type="text" vlaue="<?php echo $data['list']?>" name ="lists" class="form-control" id="">
</div>
<div class="col-2">
  <button class="btn btn-outline primary">ADD</button>
  <input type="hidden" name="id" value="<?php echo $data['Id']?>">
</div>
    </div>
  </div>
</form>
</html>