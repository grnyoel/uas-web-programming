<?php
include '../../libs/koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

mysqli_query($koneksi, "UPDATE supplier SET nama='$nama', alamat='$alamat', telepon='$telepon' WHERE id='$id'");

header('location:supplier.php?pesan=update')
?>