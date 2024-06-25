<?php
include '../../libs/koneksi.php';
$id = $_POST['id'];
$merek = $_POST['merek'];

mysqli_query($koneksi, "UPDATE brand SET nama='$merek' WHERE id='$id'");

header('location:merek.php?pesan=update')
?>