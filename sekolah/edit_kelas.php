<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Kelas</title>
    <link rel="stylesheet" type="text/css" href="style2.css"> <!-- Include the same CSS stylesheet -->
</head>
<body>
    <?php
    include 'koneksi2.php';
    $id_kelas = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM kelas WHERE Id_Kelas='$id_kelas'");
    while ($tampil = mysqli_fetch_array($data)) {
    ?>
    <h3 class="centered-heading">Edit Data Kelas</h3>
    <form method="post" action="edit_aksi_kelas.php">
        <div class="page-container"> <!-- Gaya wadah halaman -->
            <div class="form-container"> <!-- Gaya wadah formulir -->
                <div class="rectangle"></div> <!-- Rectangle di tengah -->
                <table>
                    
                    <tr>
                        <td>Nama Kelas :</td>
                        <td><input type="text" name="namakelas" class="input-field" value="<?php echo $tampil['Nama_Kelas']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jumlah Siswa :</td>
                        <td><input type="text" name="jumlahsiswa" class="input-field" value="<?php echo $tampil['Jumlah_Siswa']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="SIMPAN" class="submit-button"></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <?php
    }
    ?>
</body>
</html>
