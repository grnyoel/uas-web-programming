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
    <title>Edit Data</title>
</head>

<body>
    <?php 
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM transaction WHERE id='$id'")or die(mysqli_error($koneksi));
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <div class="container">
        <h2>Edit Data</h2>
        <form action="update_produk.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
            <select name="supplier">
                <option value="<?=$data['supplier']; ?>"><?php echo $data['supplier']; ?></option>
                <?php while($row1 = mysqli_fetch_array($dataSupplier)):; ?>
                <option value="<?php echo $row1[0];?>"><?php echo $row1[0] ?></option>
                <?php endwhile; ?>
            </select>
            <select name="kategori">
                <option value="<?=$data['kategori']; ?>"><?php echo $data['kategori']; ?></option>
                <?php while($row2 = mysqli_fetch_array($dataCategory)):; ?>
                <option value="<?php echo $row2[0];?>"><?php echo $row2[0] ?></option>
                <?php endwhile; ?>
            </select>
            <select name="merek">
                <option value="<?=$data['merek']; ?>"><?php echo $data['merek']; ?></option>
                <?php while($row3 = mysqli_fetch_array($dataBrand)):; ?>
                <option value="<?php echo $row3[0];?>"><?php echo $row3[0] ?></option>
                <?php endwhile; ?>
            </select>
            <input type="text" name="stok" value="<?php echo $data['stok'] ?>">
            <input type="text" name="harga" value="<?php echo $data['harga'] ?>">
            <input type="text" name="berat" value="<?php echo $data['berat'] ?>">
            <textarea name="deskripsi" cols="30" rows="5"><?php echo $data['deskripsi'] ?></textarea>
            <button type="submit">Simpan</button>
        </form>
        <?php } ?>
    </div>
</body>

</html>