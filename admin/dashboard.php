<?php
session_start();
include "../koneksi.php";

if(!isset($_SESSION['admin'])){
    header("location:login.php");
}

$siswa = mysqli_query($koneksi, "SELECT * FROM siswa");
?>
<h2>Dashboard Admin</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>Nama</th>
        <th>NISN</th>
        <th>Foto</th>
        <th>Status</th>
        <th>Verifikasi</th>
    </tr>

    <?php while($d = mysqli_fetch_array($siswa)){ ?>
    <tr>
        <td><?= $d['nama']; ?></td>
        <td><?= $d['nisn']; ?></td>
        <td><img src="../assets/foto/<?= $d['foto']; ?>" width="70"></td>
        <td><?= $d['status']; ?></td>
        <td><a href="verifikasi.php?id=<?= $d['id']; ?>">VERIFIKASI</a></td>
    </tr>
    <?php } ?>
</table>

<br>
<a href="logout.php">Logout</a>
