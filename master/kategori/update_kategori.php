<?php
include '../../libs/koneksi.php';
$id = $_POST['id'];
$kategori = $_POST['kategori'];

mysqli_query($koneksi, "UPDATE category SET nama='$kategori' WHERE id='$id'");

header('location:kategori.php?pesan=update')
?>