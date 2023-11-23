<!DOCTYPE html>
<html>
<head>
    <title>Siswa</title>
    <link rel="stylesheet" type="text/css" href="styleuser.css">
</head>
<body>
    <header>
	 <div class="judul">
        <h1>Siswa</h1>
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
		  <li><a href="login_tampilan.php">Login</a></li>
		              <li><a>Level: User</a></li>
        </ul>
    </nav>
	
	 <!-- Kotak 1 -->
    <div class="dashboard-box">
        <center><h2>Informasi Data Siswa</h2></center>
        <p style="text-align:center">Di sini Anda dapat melihat informasi tentang siswa.</p>
        <!-- Isi konten siswa di sini -->
   </div>


    <!-- Tambahkan class "styled-table" ke tabel berikut -->
    <table class="styled-table" border="1">
        <tr>
          <th>ID Siswa</th>
          <th>ID Kelas</th>
          <th>Nama Siswa</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
         
        </tr>
        <?php
        include "koneksi2.php";
        $data = mysqli_query($koneksi, "SELECT * FROM siswa");
        while ($tampil = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $tampil['Id_Siswa'] ?></td>
            <td><?php echo $tampil['Id_Kelas'] ?></td>
            <td><?php echo $tampil['Nama_Siswa'] ?></td>
            <td><?php echo $tampil['Alamat'] ?></td>
            <td><?php echo $tampil['Jenis_Kelamin'] ?></td>
            
        </tr>
        <?php
        }
        ?>

    </table>

<script>
    // Kode JavaScript untuk menangani tautan menu yang diklik
    var menuLinks = document.querySelectorAll("nav ul li a");

    menuLinks.forEach(function(link) {
        link.addEventListener("click", function() {
            // Hapus class "active" dari semua tautan menu
            menuLinks.forEach(function(menuLink) {
                menuLink.classList.remove("active");
            });

            // Tambahkan class "active" ke tautan yang sedang aktif
            link.classList.add("active");
        });
    });
</script>

</body>
</html>