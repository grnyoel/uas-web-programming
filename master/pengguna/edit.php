<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <div class="judul">
        <h1 align="center">EDIT DATA</h1>
    </div>
    <center><a href="user.php">Lihat Semua Data</a>
    <br><br>
    <?php 
    include "../../libs/koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'")or die(mysqli_error($koneksi));
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username" value="<?php echo $data['username'] ?>">
                </td>
            </tr>
            <tr>
                <td>password</td>
                <td>
                    <input type="password" name="password" value="<?php echo $data['password'] ?>">
                </td>
            </tr>
            <tr>
            <tr>
                <td>Akses</td>
                <td>
                    <select name="akses">
                        <option value="<?=$data['akses']; ?>"><?php echo $data['akses']; ?></option>
                        <option value="member">Member</option>
                        <option value="admin">Admin</option>
                    </select>
                </td>
            </tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>
    <?php } ?>
    </center>
</body>
</html>