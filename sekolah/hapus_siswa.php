<?php
include 'koneksi2.php';

$id=$_GET ['id'];
mysqli_query ($koneksi,"delete from siswa where Id_Siswa='$id'");

header("location: siswa.php");


?>