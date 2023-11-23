<?php
include 'koneksi2.php';

$id=$_GET ['id'];
mysqli_query ($koneksi,"DELETE FROM guru WHERE Id_Guru='$id'");

header("location:guru.php");


?>