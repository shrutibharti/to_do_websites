<?php

include "config.php";
$List = $_POST['list'];
$Id = $_POST['id'];
mysqli_query($con, "UPDATE 'tbltodo' SET 'ID'='$ID','list='[value-2]'WHERE 1");
?>
