<?php
$LIST = $_GET['list'];

include "config.php";
mysqli_query($con, "INSERT INTO `tbltodo`( `list`) VALUES ('$LIST')");
header("location:index.php");

?>
