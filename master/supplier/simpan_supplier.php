<?php 
include("../../libs/koneksi.php");
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$telepon = $_POST["telepon"];

if(empty($nama) || empty($alamat) || empty($telepon)) {
    echo "Data kosong!";
} else {
    mysqli_query($koneksi,"INSERT into supplier values ('id','$nama','$alamat','$telepon')") or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:supplier.php");
}
?>