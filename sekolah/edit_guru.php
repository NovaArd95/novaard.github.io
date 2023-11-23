<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Guru</title>
    <link rel="stylesheet" type="text/css" href="style2.css"> <!-- Include the same CSS stylesheet -->
</head>
<body>
    <?php
    include 'koneksi2.php';
    $id_guru = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM guru WHERE Id_Guru='$id_guru'");
    while ($tampil = mysqli_fetch_array($data)) {
    ?>
    <h3 class="centered-heading">Edit Data Guru</h3>
    <form method="post" action="edit_aksi_guru.php">
        <div class="page-container"> <!-- Gaya wadah halaman -->
            <div class="form-container"> <!-- Gaya wadah formulir -->
                <div class="rectangle"></div> <!-- Rectangle di tengah -->
                <table>
                    <tr>
                        <td>Id Guru :</td>
                        <td><input type="text" name="idguru" class="input-field" value="<?php echo $tampil['Id_Guru']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Guru :</td>
                        <td><input type="text" name="namaguru" class="input-field" value="<?php echo $tampil['Nama_Guru']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat :</td>
                        <td><input type="text" name="alamat" class="input-field" value="<?php echo $tampil['Alamat']; ?>"></td>
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
