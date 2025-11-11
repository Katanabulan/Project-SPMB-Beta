<?php
include "koneksi.php";

$nama = $_POST['nama'];
$nisn = $_POST['nisn'];

// Upload foto
$nama_foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];
$folder = "assets/foto/" . $nama_foto;
move_uploaded_file($tmp_foto, $folder);

// Simpan ke database
mysqli_query($koneksi, "INSERT INTO siswa(nama, nisn, foto, status) VALUES('$nama','$nisn','$nama_foto','MENUNGGU')");

header("location:sukses.php");
?>
