<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Sekolah</title>
    <link rel="stylesheet" type="text/css" href="styleuser.css">
</head>
<body>
    <header>
        <div class="judul">
            <h1>Selamat Datang di Dashboard Sekolah</h1>
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
<div class="background-layer">
    <div class="foreground-layer">
        <!-- Konten halaman -->
    </div>
</div>

    <!-- Kotak 1 -->
    <div class="judul2">
        <h2>SMK NEGERI 1 BANTUL</h2>
        <!-- Isi konten siswa di sini -->
    </div>
	
    <div class="dashboard-search">
        <input type="text" id="search-input" placeholder="Apa yang ingin anda cari?">
        <button id="search-button">Cari</button>
    </div>
	<div class="j4">
        <h4>Berita Terbaru</h4>
        <!-- Isi konten siswa di sini -->
    </div>
	<div class="dashboard-news">
        <div class="news-item">
            <img src="hu-tao-genshin-impact-4k-thumb.jpg" alt="Berita 1" class="news-image">
            <p class="news-description">Bantul, 12 September 2023 - Suasana semangat dan kebersamaan memenuhi SMK Negeri 1 Bantul dalam peringatan Hari Olahraga Nasional (Haornas) tahun 2023. Acara yang diadakan pada hari Selasa ini telah berhasil mengumpulkan seluruh komponen sekolah, dari guru, karyawan, mahasiswa praktek dari UNY dan STIQ An Nur, hingga siswa kelas X dan XI, untuk merayakan kebugaran fisik dan semangat kebersamaan.</p>
        </div>
        <div class="news-item">
            <img src="genshin-impact-anime-boys-zhongli-genshin-impact-hd-wallpaper-preview.jpg" alt="Berita 2" class="news-image">
            <p class="news-description">Bantul, Senin, 28 Agustus 2023 - SMK Negeri 1 Bantul menjadi saksi dari momen penting dalam perjalanan kepemimpinan di sekolah mereka. Acara Orasi Kandidat Ketua OSIS untuk periode 2023/2024 digelar dengan penuh semangat dan antusiasme. Tiga kandidat berbakat telah memperebutkan posisi prestisius ini, yaitu Salma Ainun Rohimah, Sirillus Biru Langit Damai Bumi, dan Muhammad Ghozi Fairuz Rizq S.</p>
        </div>
        <div class="news-item">
            <img src="purple_eyes_hair_baal_raiden_shogun_with_sword_4k_5k_hd_genshin_impact-2560x1440.jpg" alt="Berita 3" class="news-image">
            <p class="news-description">Kamis tanggal 17 Agustus 2023, SMK Negeri 1 Bantul telah melaksanakan upacara di lapangan sekolah. Upacara dilaksanakan dengan penuh khidmat diikuti oleh seluruh siswa-siswi, bapak/ibu guru dan karyawan SMK N 1 Bantul.
Pembina upacara juga membacakan Sambutan Upacara Bendera Peringatan Kemerdekaan Ke-78 Republik Indonesia dari Gubernur Daerah Istimewa Yogyakarta tertanggal 17 Agustus 2023.</p>
        </div>
    </div>
	
<div class= "dashboard-box2">
    <div class="judul3">
        <h3>About Us</h3>
        <!-- Isi konten siswa di sini -->
    </div>
    <div class="icon-container">
        <!-- Tambahkan ikon Instagram dengan class social-icon -->
        <a href="https://www.instagram.com/smkn1bantul/" target="_blank">
            <img src="pngwing.com.png" alt="Instagram" height="45px" width="45px">
        </a>
        <!-- Tambahkan ikon Facebook dengan class social-icon -->
        <a href="https://web.facebook.com/smknegeri1bantul/" target="_blank">
            <img src="pngwing.com (1).png" alt="Facebook" height="45px" width="45px">
        </a>
        <a href="https://www.youtube.com/channel/UCQgXA3YAufCRhmBVXjNZisw" target="_blank">
            <img src="pngwing.com (2).png" alt="Youtube" height="45px" width="45px">
        </a>
        <a href="https://twitter.com/bantul_smkn1" target="_blank">
            <img src="pngwing.com (3) - Copy.png" alt="Twitter" height="45px" width="45px">
        </a>
    </div>
	</div>
	
	

    <script>
     
        // Kode JavaScript untuk fungsi pencarian
        function cari() {
            // Mengambil kata kunci yang dimasukkan oleh pengguna
            var kataKunci = document.getElementById("search-input").value;

            // Variabel untuk menentukan halaman tujuan
            var halamanTujuan = "";

            // Mengarahkan pengguna ke halaman yang sesuai berdasarkan kata kunci
            if (kataKunci === "siswa") {
                halamanTujuan = "siswa_user.php";
            } else if (kataKunci === "guru") {
                halamanTujuan = "guru_user.php";
            } else if (kataKunci === "kelas") {
                halamanTujuan = "kelas_user.php";
            } else if (kataKunci === "mapel") {
                halamanTujuan = "mapel_user.php";
            } else if (kataKunci === "dashboard") {
                halamanTujuan = "index_user.php";
			 } else if (kataKunci === "profil") {
                halamanTujuan = "profil_user.php";
            } else {
                alert("Pencarian tidak ditemukan");
            }

            // Jika ada halaman tujuan yang ditentukan, maka arahkan pengguna
            if (halamanTujuan) {
                window.location.href = halamanTujuan;
            }
        }

        document.getElementById("search-button").addEventListener("click", cari);
    </script>
</body>
</html>
