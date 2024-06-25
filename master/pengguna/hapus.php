<?php 
include '../../libs/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'")or die(mysqli_error($koneksi));

header("location:user.php?pesan=hapus")
?>