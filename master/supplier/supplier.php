<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/home.css">
    <title>Suppliers</title>
</head>

<body>
    <?php include("../../libs/session.php"); ?>
    <div class="container">
        <div class="navbar">
            <ul class="navigation">
                <li><a href="../pengguna/user.php">Users</a></li>
                <li class="active"><a href="#">Supplier</a></li>
                <li><a href="../merek/merek.php">Daftar Film</a></li>
                <li><a href="../kategori/kategori.php">Genre</a></li>
                <li><a href="../../transaksi/produk.php">Series</a></li>
                <li class="logout"><a href="../../libs/logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="data-container">
            <h1>Supplier</h1>
            <table>
                <tr>
                    <th>NO</th>
                    <th>Nama Supplier</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Kelola</th>
                </tr>
                <?php 
                include("../../libs/koneksi.php");
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT * FROM supplier");
                while($d = mysqli_fetch_array($data)) {
                    ?>
                <tr>
                    <td><?php echo $no++; ?>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['telepon']; ?></td>
                    <td>
                        <a href="edit_supplier.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a href="hapus_supplier.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php
                };
                ?>
            </table>
            <form action="simpan_supplier.php" method="POST">
                <input type="text" name="nama" required="true" autocomplete="off" placeholder="Nama">
                <input type="text" name="alamat" required="true" autocomplete="off" placeholder="Alamat">
                <input type="text" name="telepon" required="true" autocomplete="off" placeholder="No Telp">
                <button type="submit">Tambah</button>
            </form>
        </div>
    </div>
</body>

</html>