<?php
include 'koneksi2.php';

$id_reservasi = $_POST['idsiswa'];
$no_ktp = $_POST['idkelas'];
$id_kamar = $_POST['namasiswa'];
$id_pegawai = $_POST['alamat'];
$check_in = $_POST['jeniskelamin'];


mysqli_query($koneksi,"UPDATE siswa SET Id_Siswa='$id_reservasi', Id_Kelas='$no_ktp',
Nama_Siswa='$id_kamar',Alamat='$id_pegawai',Jenis_Kelamin='$check_in' WHERE Id_Siswa='$id_reservasi'");
header("location: siswa.php"); 

?>