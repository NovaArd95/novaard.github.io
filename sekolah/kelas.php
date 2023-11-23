<!DOCTYPE html>
<html>
<head>
    <title>Kelas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
       <div class="judul">
        <h1>Kelas</h1>
		</div>
    </header>
    <nav>
        <ul>
		   <li><a href="index.php">Beranda</a></li>
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
        <center><h2>Informasi Data Kelas</h2></center>
        <p style="text-align:center">Di sini Anda dapat mengedit, menghapus dan menambah data kelas.</p>
        <!-- Isi konten siswa di sini -->
   </div>


    <!-- Tambahkan class "styled-table" ke tabel berikut -->
    <table class="styled-table" border="1">
        <tr>
          <th>ID Kelas</th>
          <th>Nama Kelas</th>
          <th>Jumlah Siswa</th>
          <th>Hapus</th>
		  <th>Edit</th>
        </tr>

        <?php
        include "koneksi2.php";
        $data = mysqli_query($koneksi, "SELECT * FROM kelas");
        while ($tampil = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $tampil['Id_Kelas'] ?></td>
            <td><?php echo $tampil['Nama_Kelas'] ?></td>
            <td><?php echo $tampil['Jumlah_Siswa'] ?></td>
]            <td><a href="hapus_kelas.php?id=<?php echo $tampil['Id_Kelas']; ?>"class="button">Hapus</a></td>
            <td><a href="edit_kelas.php?id=<?php echo $tampil['Id_Kelas']; ?>"class="button">Edit</a></td>
        </tr>
        <?php
        }
        ?>

    </table>
<a href="input_kelas.php" class="button">Tambahkan Data Baru</a>
</body>
</html>