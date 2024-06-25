<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/home.css">
    <title>Users</title>
</head>

<body>
    <div class="container">
        <?php include("../../libs/session.php"); ?>
        <div class="navbar">
            <ul class="navigation">
                <li class="active"><a href="#">Users</a></li>
                <li><a href="../supplier/supplier.php">Supplier</a></li>
                <li><a href="../merek/merek.php">Daftar Film</a></li>
                <li><a href="../kategori/kategori.php">Genre</a></li>
                <li><a href="../../transaksi/produk.php">Produk</a></li>
                <li class="logout"><a href="../../libs/logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="data-container">
            <h1>Daftar Users</h1>
            <table>
                <tbody>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Akses</th>
                        <th>Kelola</th>
                    </tr>
                    <?php 
                    include("../../libs/koneksi.php");
                    $no = 1;
                    $data = mysqli_query($koneksi,"SELECT * FROM user");
                    while($d = mysqli_fetch_array($data)) {
                        ?>
                    <tr>
                        <td><?php echo $no++; ?>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['username']; ?></td>
                        <td><?php echo $d['akses']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                            <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                        </td>
                    </tr>
                    <?php
                    };
                    ?>
                </tbody>
            </table>
            <button class="tambah">
                <a href="form_user.php">Tambah</a>
            </button>
        </div>
    </div>
</body>

</html>