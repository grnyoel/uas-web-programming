<?php 
include("../libs/koneksi.php");
$query1 = "SELECT nama FROM supplier";
$query2 = "SELECT nama FROM category";
$query3 = "SELECT nama FROM brand";

$dataSupplier = mysqli_query($koneksi,$query1);
$dataCategory = mysqli_query($koneksi,$query2);
$dataBrand = mysqli_query($koneksi,$query3);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/update.css">
    <title>Tambah Produk</title>
</head>

<body>
    <div class="container">
        <?php include("../libs/session.php"); ?>
        <h2>Form Produk</h2>
        <form action="simpan_produk.php" method="POST">
            <input type="text" name="kode" required="true" placeholder="Kode">
            <input type="text" name="nama" required="true" placeholder="Judul">
            <select name="supplier">
                <option value="">Pilih Supplier</option>
                <?php while($row1 = mysqli_fetch_array($dataSupplier)):; ?>
                <option value="<?php echo $row1[0];?>"><?php echo $row1[0] ?></option>
                <?php endwhile; ?>
            </select>
            <select name="kategori">
                <option value="">Genre</option>
                <?php while($row2 = mysqli_fetch_array($dataCategory)):; ?>
                <option value="<?php echo $row2[0];?>"><?php echo $row2[0] ?></option>
                <?php endwhile; ?>
            </select>
            <select name="merek">
                <option value="">Judul</option>
                <?php while($row3 = mysqli_fetch_array($dataBrand)):; ?>
                <option value="<?php echo $row3[0];?>"><?php echo $row3[0] ?></option>
                <?php endwhile; ?>
            </select>
            <input type="text" name="stok" required="true" placeholder="Stok">
            <input type="text" name="harga" required="true" placeholder="Harga">
            <textarea name="deskripsi" cols="20" rows="3" placeholder="Deskripsi"></textarea>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>