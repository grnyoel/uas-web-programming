<?php 
include("../../libs/koneksi.php");
$nama = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];
$akses = $_POST["akses"];

if(empty($nama) || empty($username) || empty($password) || empty($akses)) {
    echo "Data kosong!";
} else {
    mysqli_query($koneksi,"INSERT into user values ('id','$nama','$username','$password','$akses')") or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:user.php");
}
?>