<!DOCTYPE html>
<html>
<head>
    <title>Guru</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
<div class="judul">
        <h1>Guru</h1>
		</div>
		</header>
    <nav>
        <ul> <li><a href="index.php">Beranda</a></li>
			<li><a href="profil.php">Profil</a></li>
            <li><a href="siswa.php">Siswa</a></li>
            <li><a href="guru.php">Guru</a></li>
            <li><a href="kelas.php">Kelas</a></li>
            <li><a href="mapel.php">Mata Pelajaran</a></li>
		  <li><a href="login_tampilan.php">Login</a></li>
		              <li><a>Level: Admin</a></li>
        </ul>
    </nav>
 <div class="dashboard-box">
        <center><h2>Informasi Data Guru</h2></center>
        <p style="text-align:center">Di sini Anda dapat mengedit, menghapus, dan menambahkan data guru di sekolahan ini.</p>
        <!-- Isi konten siswa di sini -->
   </div>

    <!-- Tambahkan class "styled-table" ke tabel berikut -->
    <table class="styled-table" border="1">
        <tr>
          <th>ID Guru</th>
          <th>Nama Guru</th>
          <th>Alamat</th>
          <th>Hapus</th>
		  <th>Edit</th>
        </tr>

        <?php
        include "koneksi2.php";
        $data = mysqli_query($koneksi, "SELECT * FROM guru");
        while ($tampil = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $tampil['Id_Guru'] ?></td>
            <td><?php echo $tampil['Nama_Guru'] ?></td>
            <td><?php echo $tampil['Alamat'] ?></td>
]            <td><a href="hapus_guru.php?id=<?php echo $tampil['Id_Guru']; ?>"class="button">Hapus</a></td>
            <td><a href="edit_guru.php?id=<?php echo $tampil['Id_Guru']; ?>"class="button">Edit</a></td>
        </tr>
        <?php
        }
        ?>

    </table>
<a href="input_guru.php" class="button">Tambahkan Data Baru</a>
</body>
</html>