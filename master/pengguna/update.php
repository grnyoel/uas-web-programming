<?php
include '../../libs/koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$akses = $_POST['akses'];

mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', password='$password', akses='$akses' WHERE id='$id'");

header('location:user.php?pesan=update')
?>