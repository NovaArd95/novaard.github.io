<?php
include 'koneksi2.php';

$nis = $_POST['idguru'];
$nama_siswa = $_POST['namaguru'];
$kelas=$_POST['alamat'];

mysqli_query($koneksi,"insert into guru values('$nis','$nama_siswa','$kelas')");
header("location:guru.php");
?>
