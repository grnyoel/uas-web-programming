<?php 
include '../../libs/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM brand WHERE id='$id'")or die(mysqli_error($koneksi));

header("location:merek.php?pesan=hapus")
?>