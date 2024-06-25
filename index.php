<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Netflix Login Page</title>
    <link rel="stylesheet" href="./form.css" />
</head>

<body>
    <nav>
        <a href="#"><img src="img/logo.svg" alt="logo" /></a>
    </nav>
    <div class="form-wrapper">
        <h2>Sign In</h2>
        <div>
            <?php
                if(isset($_GET['pesan'])) {
                    if($_GET['pesan'] == 'gagal') {
                        echo "Login gagal! username dan password salah!";
                    } else if ($_GET["pesan"] == "logout") {
                        echo "Anda berhasil untuk logout";
                    } else if ($_GET["pesan"] == "belum_login") {
                        echo "belum login";
            }};
            ?>
        </div>
        <form method="POST" action="./libs/check_login.php">
            <div class="form-control">
                <input type="text" name="username" required placeholder="Username" />
                <label>Username or Email</label>
            </div>
            <div class="form-control">
                <input type="password" name="password" required placeholder="Password" />
                <label>Password</label>
            </div>
            <button type="submit">Sign In</button>
            <div class="form-help">
                <div class="remember-me">
                    <input type="checkbox" id="remember-me" />
                    <label for="remember-me">Remember me</label>
                </div>
                <a href="#">Need help?</a>
            </div>
        </form>
        <p>New to Netflix? <a href="#">Sign up now</a></p>
        <small>
            This page is protected by Google reCAPTCHA to ensure you're not a bot.
            <a href="#">Learn more.</a>
        </small>
    </div>

</body>

</html>