<!DOCTYPE html>
<html>
<head>
    <title>Form Transaksi Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
    <header>
        <div class="judul">
            <h1>Form Transaksi Pembayaran</h1>
        </div>
    </header>

    <div class="dashboard-box">
        <?php
        // Memeriksa apakah ID siswa diterima dari URL
        if(isset($_GET['id'])){
            $id_siswa = $_GET['id'];
            echo "<h2>Transaksi untuk Siswa dengan ID: $id_siswa</h2>";
            // Di sini, kamu bisa menampilkan informasi tambahan tentang siswa jika diperlukan
        }
        ?>
        <form action="proses_transaksi.php" method="post">
            <input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>">
            <label for="nominal">Nominal Pembayaran:</label>
            <input type="text" name="nominal" id="nominal"><br><br>
            <input type="submit" value="Bayar">
        </form>
    </div>
</body>
</html>
