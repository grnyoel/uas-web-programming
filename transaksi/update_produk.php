<?php 
include("../libs/koneksi.php");

$id = $_POST["id"];
$nama = $_POST["nama"];
$supplier = $_POST["supplier"];
$kategori = $_POST["kategori"];
$merek = $_POST["merek"];
$stok = $_POST["stok"];
$harga = $_POST["harga"];
$berat = $_POST["berat"];
$deskripsi = $_POST["deskripsi"];

mysqli_query($koneksi, "UPDATE transaction SET nama='$nama', supplier='$supplier', kategori='$kategori', merek='$merek', stok='$stok', harga='$harga', berat='$berat', deskripsi='$deskripsi' WHERE id='$id'");
header('location:produk.php?pesan=update')

?>