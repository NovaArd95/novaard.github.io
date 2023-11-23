<?php
include 'koneksi2.php';

$nis = $_POST['idmapel'];
$nama_siswa = $_POST['idguru'];
$kelas=$_POST['idkelas'];
$kelas1=$_POST['namamapel'];

mysqli_query($koneksi,"insert into mapel values('$nis','$nama_siswa','$kelas','$kelas1')");
header("location:mapel.php");
?>
