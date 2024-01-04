<?php
session_start();
require 'backend/koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Verifikasi kata sandi
    if ($password !== $confirm_password) {
        echo 'Password tidak sesuai';
        exit();
    }

    // Hashing password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan data pengguna baru ke database
    $result = mysqli_query($conn, "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed_password', 'user')");

    if ($result) {
        header('Location: thanks2.php'); // Redirect ke halaman login setelah registrasi berhasil
        exit();
    } else {
        echo 'Registration failed. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">

        </header>

        <!-- Main -->
        <div id="main">

            <!-- First Section -->
            <section id="first" class="main special">
                <header class="major">
                    <h2>Silahkan Membuat Akun</h2>
                    <p>Masukan Username dan Password Dengan Benar</p>
                </header>
                <form method="post" style="text-align: center;">
                    <div class="row gtr-uniform">
                        <div class="col-12">
                            <label for="username">Username</label>
                            <input type="text" name="username" placeholder="Username" style="margin-bottom: 15px; width: 400px; display: inline-block; text-align: left; margin-bottom: 5px;" />
                        </div>
                        <div class="col-12">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Password" style="margin-bottom: 15px; width: 400px; display: inline-block; text-align: left; margin-bottom: 5px;" />
                        </div>
                        <div class="col-12">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" placeholder="Confirm Password" style="margin-bottom: 15px; width: 400px; display: inline-block; text-align: left; margin-bottom: 5px;" />
                        </div>
                        <div class="col-12">
                            <div class="actions">
                                <input type="submit" value="Register" class="primary" name="register" />
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="login.php">Sudah punya Akun?</a>
                        </div>
                    </div>
                </form>


        </div>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">Web Sliders Pro</p>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>