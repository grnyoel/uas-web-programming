<?php 
session_start();

include("koneksi.php");

$username = $_POST["username"];
$password = $_POST["password"];

if(empty($username) || empty($password)) {
    echo "Data kosong!";
}

$result = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($result);
if($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header('location:../master/pengguna/user.php');
} else {
header('location:../index.php?pesan=gagal');
}
?>