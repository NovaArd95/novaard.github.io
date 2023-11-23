<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="style2.css"> <!-- Include the same CSS stylesheet -->
</head>
<body>
    <?php
    include 'koneksi2.php';
    $id_siswa = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE Id_Siswa='$id_siswa'");
    while ($tampil = mysqli_fetch_array($data)) {
    ?>
    <h3 class="centered-heading">Edit Data Siswa</h3>
    <form method="post" action="edit_aksi_siswa.php">
        <div class="page-container"> <!-- Gaya wadah halaman -->
            <div class="form-container"> <!-- Gaya wadah formulir -->
                <div class="rectangle"></div> <!-- Rectangle di tengah -->
                <table>
                    <tr>
                        <td>Id Siswa :</td>
                        <td><input type="text" name="idsiswa" class="input-field" value="<?php echo $tampil['Id_Siswa']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Id Kelas :</td>
                        <td><input type="text" name="idkelas" class="input-field" value="<?php echo $tampil['Id_Kelas']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa :</td>
                        <td><input type="text" name="namasiswa" class="input-field" value="<?php echo $tampil['Nama_Siswa']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat :</td>
                        <td><input type="text" name="alamat" class="input-field" value="<?php echo $tampil['Alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin :</td>
                        <td><input type="text" name="jeniskelamin" class="input-field" value="<?php echo $tampil['Jenis_Kelamin']; ?>"></td>
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
