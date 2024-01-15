<!DOCTYPE html>
<html>
<head>
    <title>Kelas</title>
    <link rel="stylesheet" type="text/css" href="styleuser.css">
</head>
<body>
    <header>
       <div class="judul">
        <h1>Kelas</h1>
		</div>
    </header>
    <nav>
        <ul>
		  <li><a href="index_user.php">Beranda</a></li>
			<li><a href="profil_user.php">Profil</a></li>
            <li><a href="siswa_user.php">Siswa</a></li>
            <li><a href="guru_user.php">Guru</a></li>
            <li><a href="kelas_user.php">Kelas</a></li>
            <li><a href="mapel_user.php">Mata Pelajaran</a></li>
		  <li><a href="login_tampilan.php">Logout</a></li>
		              <li><a>Level: User</a></li>
        </ul>
    </nav>
	 <div class="dashboard-box">
        <center><h2>Informasi Data Kelas</h2></center>
        <p style="text-align:center">Di sini Anda dapat melihat informasi tentang kelas.</p>
        <!-- Isi konten siswa di sini -->
   </div>


    <!-- Tambahkan class "styled-table" ke tabel berikut -->
    <table class="styled-table" border="1">
        <tr>
          <th>ID Kelas</th>
          <th>Nama Kelas</th>
          <th>Jumlah Siswa</th>
         
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
]           
        </tr>
        <?php
        }
        ?>

    </table>

</body>
</html>