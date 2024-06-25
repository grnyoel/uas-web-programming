<?php 
include("../../libs/koneksi.php");
$kategori = $_POST["kategori"];

if(empty($kategori)) {
    echo "Data kosong!";
} else {
    mysqli_query($koneksi,"INSERT into category values ('id','$kategori')") or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:kategori.php");
}
?>