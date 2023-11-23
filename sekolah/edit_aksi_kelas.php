<?php
include 'koneksi2.php';

$id_reservasi = $_POST['idkelas'];
$no_ktp = $_POST['namakelas'];
$id_kamar = $_POST['jumlahsiswa'];



mysqli_query($koneksi,"UPDATE kelas SET Id_Kelas='$id_reservasi', Nama_Kelas='$no_ktp',
Jumlah_Siswa='$id_kamar' WHERE Id_Kelas='$id_reservasi'");
header("location: kelas.php"); 

?>