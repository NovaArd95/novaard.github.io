<?php
include 'koneksi2.php';

$id_reservasi = $_POST['idguru'];
$nama_guru = $_POST['namaguru'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE guru SET Nama_Guru='$nama_guru', Alamat='$alamat' WHERE Id_Guru='$id_reservasi'");
header("location: guru.php");
?>
