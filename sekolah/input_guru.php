<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Guru</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h3 class="centered-heading">Tambah Data Siswa</h3>
    <form method="post" action="input-aksi-guru.php">
        <div class="page-container"> <!-- Gaya wadah halaman -->
            <div class="form-container"> <!-- Gaya wadah formulir -->
                <div class="rectangle"></div> <!-- Rectangle di tengah -->
                <table>
                    <tr>  
                        <td>Id Guru</td>
                        <td><input type="text" name="idguru" class="input-field"></td> <!-- Gaya input teks -->
                    </tr>
                    <tr>
                        <td>Nama Guru</td>
                        <td><input type="text" name="namaguru" class="input-field"></td> <!-- Gaya input teks -->
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" class="input-field"></td> <!-- Gaya input teks -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan" class="submit-button"></td> <!-- Gaya tombol "Simpan" -->
                    </tr>
                </table>
            </div>
        </div>
    </form>
</body>
</html>
