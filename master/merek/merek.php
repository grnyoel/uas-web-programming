<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/home.css">
    <title>Daftar Film</title>
</head>

<body>
    <?php include("../../libs/session.php"); ?>
    <div class="container">
        <div class="navbar">
            <ul class="navigation">
                <li><a href="../pengguna/user.php">Users</a></li>
                <li><a href="../supplier/supplier.php">Supplier</a></li>
                <li class="active"><a href="#">Daftar Film</a></li>
                <li><a href="../kategori/kategori.php">Genre</a></li>
                <li><a href="../../transaksi/produk.php">Series</a></li>
                <li class="logout"><a href="../../libs/logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="data-container">
            <h1>Daftar Film</h1>
            <table>
                <tr>
                    <th>NO</th>
                    <th>Judul Film</th>
                    <th>Kelola</th>
                </tr>
                <?php 
                include("../../libs/koneksi.php");
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT * FROM brand");
                while($d = mysqli_fetch_array($data)) {
                    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td>
                        <a href="edit_merek.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a href="hapus_merek.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php
                };
                ?>
            </table>
            <form action="simpan_merek.php" method="POST">
                <input type="text" name="merek" required="true" autocomplete="off" placeholder="Masukan Nama Merek">
                <button type="submit">Tambah Merek</button>
            </form>
        </div>
    </div>
</body>

</html>