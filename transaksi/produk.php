<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>Series</title>
</head>

<body>
    <?php include("../libs/session.php"); ?>
    <div class="container">
        <div class="navbar">
            <ul class="navigation">
                <li><a href="../master/pengguna/user.php">Users</a></li>
                <li><a href="../master/supplier/supplier.php">Supplier</a></li>
                <li><a href="../master/merek/merek.php">Daftar Film</a></li>
                <li><a href="../master/kategori/kategori.php">Genre</a></li>
                <li class="active"><a href="#">Series</a></li>
                <li class="logout"><a href="../libs/logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="data-container">
            <h1>Daftar Series</h1>
            <table>
                <tr>
                    <th>NO</th>
                    <th>Nama Produk</th>
                    <th>Supplier</th>
                    <th>Judul</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kelola</th>
                </tr>
                <?php 
                include("../libs/koneksi.php");
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT * FROM transaction");
                while($d = mysqli_fetch_array($data)) {
                    ?>
                <tr>
                    <td><?php echo $no++; ?>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['supplier']; ?></td>
                    <td>
                        <ul>
                            <li><?php echo $d['kategori']; ?></li>
                            <li><?php echo $d['merek']; ?></li>
                        </ul>
                    </td>
                    <td><?php echo $d['harga']; ?></td>
                    <td><?php echo $d['stok']; ?></td>
                    <td>
                        <a href="edit_produk.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a href="hapus_produk.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php
                };
                ?>
            </table>
            <div>
                <button class="tambah"><a href="./tambah_produk.php">Tambah Series</a></button>
                <button class="tambah"><a href="../print.php" target="_blank">Print</a></button>
            </div>
        </div>
    </div>
</body>

</html>