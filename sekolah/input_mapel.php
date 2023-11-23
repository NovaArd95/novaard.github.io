<h3 class="centered-heading">Tambah Data Mapel</h3>

<form method="post" action="input-aksi_mapel.php"> 
   <link rel="stylesheet" type="text/css" href="style2.css">

    <div class="page-container"> <!-- Gaya wadah halaman -->
        <div class="form-container"> <!-- Gaya wadah formulir -->
            <div class="rectangle"></div> <!-- Rectangle di tengah -->
            <table>
                <tr>  
                    <td> Id Mapel</td>
                    <td><input type="text" name="idmapel" class="input-field"></td> <!-- Gaya input teks -->
                </tr>
                <tr>
                    <td>Id Guru</td>
                    <td><input type="text" name="idguru" class="input-field"></td> <!-- Gaya input teks -->
                </tr>
                <tr>
                    <td>Id Kelas</td>
                    <td><input type="text" name="idkelas" class="input-field"></td> <!-- Gaya input teks -->
                </tr>
                <tr>
                    <td>Nama Mapel</td>
                    <td><input type="text" name="namamapel" class="input-field"></td> <!-- Gaya input teks -->
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan" class="submit-button"></td> <!-- Gaya tombol "Simpan" -->
                </tr>
            </table>
        </div>
    </div>
</form>
