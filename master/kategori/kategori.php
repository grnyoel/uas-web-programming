<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/home.css">
    <title>Genre</title>
</head>

<body>
    <?php include("../../libs/session.php"); ?>
    <div class="container">
        <div class="navbar">
            <ul class="navigation">
                <li><a href="../pengguna/user.php">Users</a></li>
                <li><a href="../supplier/supplier.php">Supplier</a></li>
                <li><a href="../merek/merek.php">Daftar Film</a></li>
                <li class="active"><a href="#">Genre</a></li>
                <li><a href="../../transaksi/produk.php">Series</a></li>
                <li class="logout"><a href="../../libs/logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="data-container">
            <h1>Daftar Genre</h1>
            <table>
                <tr>
                    <th>NO</th>
                    <th>Genre</th>
                    <th>Kelola</th>
                </tr>
                <?php 
                include("../../libs/koneksi.php");
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT * FROM category");
                while($d = mysqli_fetch_array($data)) {
                    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td>
                        <a href="edit_kategori.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a href="hapus_kategori.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php
                };
                ?>
            </table>
            <form action="simpan_kategori.php" method="POST">
                <input type="text" name="kategori" required="true" autocomplete="off" placeholder="Tambah">
                <button type="submit">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>