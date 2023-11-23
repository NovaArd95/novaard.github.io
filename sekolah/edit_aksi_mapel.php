<?php
include 'koneksi2.php';

$id_reservasi = $_POST['idmapel'];
$no_ktp = $_POST['idguru'];
$id_kamar = $_POST['idkelas'];
$id_pegawai = $_POST['namamapel'];



mysqli_query($koneksi,"UPDATE mapel SET Id_Mapel='$id_reservasi', Id_Guru='$no_ktp',
Id_Kelas='$id_kamar',Nama_Mapel='$id_pegawai' WHERE Id_Mapel='$id_reservasi'");
header("location: mapel.php"); 

?>