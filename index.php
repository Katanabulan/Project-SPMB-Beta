<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Siswa Baru</title>
</head>
<body>

<h2>Form Pendaftaran Siswa Baru</h2>
<form action="simpan.php" method="post" enctype="multipart/form-data">
    <label>Nama Lengkap</label><br>
    <input type="text" name="nama" required><br><br>

    <label>NISN</label><br>
    <input type="text" name="nisn" required><br><br>

    <label>Upload Foto</label><br>
    <input type="file" name="foto" required><br><br>

    <button type="submit">Daftar</button>
</form>

</body>
</html>
