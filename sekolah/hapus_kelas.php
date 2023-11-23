<?php
include 'koneksi2.php';

$id=$_GET ['id'];
mysqli_query ($koneksi,"DELETE FROM kelas WHERE Id_Kelas='$id'");

header("location:kelas.php");


?>