<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Kelas</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h3 class="centered-heading">Tambah Data Kelas</h3>
    <form method="post" action="input-aksi_kelas.php">
        <div class="page-container"> <!-- Gaya wadah halaman -->
            <div class="form-container"> <!-- Gaya wadah formulir -->
                <div class="rectangle"></div> <!-- Rectangle di tengah -->
                <table>
                    <tr>  
                        <td>Id Kelas</td>
                        <td><input type="text" name="idkelas" class="input-field"></td> <!-- Gaya input teks -->
                    </tr>
                    <tr>
                        <td>Nama Kelas</td>
                        <td><input type="text" name="namakelas" class="input-field"></td> <!-- Gaya input teks -->
                    </tr>
                    <tr>
                        <td>Jumlah Siswa</td>
                        <td><input type="text" name="jumlahsiswa" class="input-field"></td> <!-- Gaya input teks -->
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

	 