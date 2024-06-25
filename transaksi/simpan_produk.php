<?php 
include("../libs/koneksi.php");
$kode = $_POST["kode"];
$nama = $_POST["nama"];
$supplier = $_POST["supplier"];
$kategori = $_POST["kategori"];
$merek = $_POST["merek"];
$stok = $_POST["stok"];
$harga = $_POST["harga"];
$deskripsi = $_POST["deskripsi"];

if(empty($kode) || empty($nama) || empty($supplier) || empty($kategori) || empty($merek) || empty($stok) || empty($harga) || empty($deskripsi)) {
    echo "Data kosong!";
} else {
    mysqli_query($koneksi,"INSERT into transaction values ('id','$kode','$nama','$supplier','$kategori','$merek','$stok','$harga','$deskripsi')") or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:produk.php");
}
?>