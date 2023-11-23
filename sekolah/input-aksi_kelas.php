<?php
include 'koneksi2.php';

$nis = $_POST['idkelas'];
$nama_siswa = $_POST['namakelas'];
$kelas=$_POST['jumlahsiswa'];

mysqli_query($koneksi,"insert into kelas values('$nis','$nama_siswa','$kelas')");
header("location:kelas.php");
?>
