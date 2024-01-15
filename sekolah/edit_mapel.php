<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mata Pelajaran</title>
    <link rel="stylesheet" type="text/css" href="style2.css"> <!-- Include the same CSS stylesheet -->
</head>
<body>
    <?php
    include 'koneksi2.php';
    $id_mapel = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM mapel WHERE Id_Mapel='$id_mapel'");
    while ($tampil = mysqli_fetch_array($data)) {
    ?>
    <h3 class="centered-heading">Edit Data Mata Pelajaran</h3>
    <form method="post" action="edit_aksi_mapel.php">
        <div class="page-container"> <!-- Gaya wadah halaman -->
            <div class="form-container"> <!-- Gaya wadah formulir -->
                <div class="rectangle"></div> <!-- Rectangle di tengah -->
                <table>
				 <tr>
                        <td>Id Mata Pelajaran :</td>
                        <td><input type="text" name="idmapel" class="input-field" value="<?php echo $tampil['Id_Mapel']; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Id Guru :</td>
                        <td><input type="text" name="idguru" class="input-field" value="<?php echo $tampil['Id_Guru']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Id Kelas :</td>
                        <td><input type="text" name="idkelas" class="input-field" value="<?php echo $tampil['Id_Kelas']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Mapel :</td>
                        <td><input type="text" name="namamapel" class="input-field" value="<?php echo $tampil['Nama_Mapel']; ?>"></td>
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
