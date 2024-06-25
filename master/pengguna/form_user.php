<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/update.css">
    <title>Form Kontak</title>
</head>

<body>
    <div class="container">
        <?php include("../../libs/session.php"); ?>
        <h2>Form User</h2>
        <form action="simpan_user.php" method="POST">
            <input type="text" name="nama" required="true" placeholder="Nama" />
            <input type="text" name="username" required="true" placeholder="Username" />
            <input type="password" name="password" required="true" placeholder="Password" />
            <select name="akses">
                <option value="">>--- Pilih Akses ---< </option>
                <option value="member">Member</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>