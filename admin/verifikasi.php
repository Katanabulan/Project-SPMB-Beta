<?php
include "../koneksi.php";
$id = $_GET['id'];

mysqli_query($koneksi, "UPDATE siswa SET status='DITERIMA' WHERE id='$id'");
header("location:dashboard.php");
?>
