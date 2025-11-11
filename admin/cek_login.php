<?php
session_start();
include "../koneksi.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$user' AND password='$pass'");
$data = mysqli_num_rows($cek);

if($data > 0){
    $_SESSION['admin'] = $user;
    header("location:dashboard.php");
}else{
    echo "Login gagal";
}
?>
