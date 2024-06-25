<?php 
include("../../libs/koneksi.php");
$merek = $_POST["merek"];

if(empty($merek)) {
    echo "Data kosong!";
} else {
    mysqli_query($koneksi,"INSERT into brand values ('id','$merek')") or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:merek.php");
}
?>