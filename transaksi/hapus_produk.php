<?php 
include '../libs/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM transaction WHERE id='$id'")or die(mysqli_error($koneksi));

header("location:produk.php?pesan=hapus")
?>