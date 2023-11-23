<?php
include 'koneksi2.php';

$idsis = $_POST['idsiswa'];
$idkel = $_POST['idkelas'];
$namasis=$_POST['namasiswa'];
$alamat = $_POST['alamat'];
$jenkel = $_POST['jeniskelamin'];

mysqli_query($koneksi,"insert into siswa values('$idsis','$idkel','$namasis','$alamat','$jenkel')");
header("location:siswa.php");
?>
