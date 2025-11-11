<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
<h2>Form Pendaftaran Siswa Baru</h2>

<form action="simpan.php" method="post" enctype="multipart/form-data">
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <input type="text" name="nisn" placeholder="NISN" required>
    <label>Upload Foto</label>
    <input type="file" name="foto" required>
    <button type="submit">Daftar</button>
</form>
</div>

</body>
</html>
