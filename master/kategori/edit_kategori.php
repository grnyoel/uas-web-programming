<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/update.css">
    <title>Edit Data</title>
</head>

<body>
    <?php 
    include "../../libs/koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM category WHERE id='$id'")or die(mysqli_error($koneksi));
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
        ?>
    <div class="container">
        <h2>EDIT DATA</h2>
        <form action="update_kategori.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type="text" name="kategori" value="<?php echo $data['nama'] ?>" placeholder="Genre">
            <button type="submit">Simpan</button>
        </form>
        <?php } ?>
    </div>
</body>

</html>