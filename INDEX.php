<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
</head>
<body>
    <h2>Formulir Pendaftaran</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        No HP: <input type="text" name="no_hp"><br>
        Alamat: <textarea name="alamat"></textarea><br>
        <input type="submit" value="Simpan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];

        // Buat nama file
        $filename = $nim . "_" . $nama . ".php";

        // Buat konten HTML
        $htmlContent = "<!DOCTYPE html>
        <html>
        <head>
            <title>Data Mahasiswa</title>
        </head>
        <body>
            <h2>Data Mahasiswa</h2>
            <p>NIM: " . $nim . "</p>
            <p>Nama: " . $nama . "</p>
            <p>No HP: " . $no_hp . "</p>
            <p>Alamat: " . $alamat . "</p>
        </body>
        </html>";

        // Simpan konten ke file
        file_put_contents($filename, $htmlContent);

        echo "Data berhasil disimpan dalam file: " . $filename;
        echo "<br>Klik <a href='$filename'>di sini</a> untuk melihat data.";
    }
    ?>
</body>
</html>