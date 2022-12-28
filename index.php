<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
<title>demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/eb2cfeef2f.js" crossorigin="anonymous"></script>
  
  </head>
  <body class="bg-primary">
    <form action="insert.php" method="GET">

    <div class="container">
  <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
    <h2 class="text-center text-primary font-monospace">
      TODO LISTS
    </h2>
    <div class="col-8">
      <input type="text" name ="lists" class="form-control" id="">
</div>
<div class="col-2">
  <button class="btn btn-outline primary">ADD</button>
</div>
    </div>
  </div>
</form>
<!---get data-->
<?php
include "config.php";
$rawData=mysqli_query($con,"select "  "from tbltodo");


?>
<div class="container" >
  <div class="  col-8 bg-white m-auto mt-3">
<table class="table">
  <tbody>
   <?php
   while($row=mysqli_fetch_array($rrawData)){

   
    ?>
    <tr>
      <td><?php echo $row['ID'] ?></td>
      <td><?php echo $row['list'] ?></td>
        <td style="width:10%;"> <a href="delete.php ? ID= <?php echo $row['ID'] ?>" class="btn btn-outline-danger"> <i class="fa-solid fa-delte-left"></i><</a> </td>
        <td style="width:10%;"><a href="update.php ? ID= <?php echo $row['ID'] ?>" class="btn btn-outline-danger" class="btn btn-outline-success"> <i class="fa-solid fa-pen-to-square"></i><</a></td>

        
     
    </tr>
    <?php
    }
    ?>

  </tbody>
  </table>
  </div>

</div>
</body>
</html>
