<?php
include 'koneksi2.php';

$id=$_GET ['id'];
mysqli_query ($koneksi,"DELETE FROM mapel WHERE Id_Mapel='$id'");

header("location:mapel.php");


?>