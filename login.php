<?php
session_start();
require 'backend/koneksi.php';

if (isset($_SESSION['username'])) {
    // Jika sudah login, redirect ke halaman sesuai role
    if ($_SESSION['role'] == 'admin') {
        header('location:admin.php');
    } elseif ($_SESSION['role'] == 'user') {
        header('location:materi.php');
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result_username = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    while ($data_username = mysqli_fetch_array($result_username)) {
        $hashed_password = $data_username['password'];
        $password_decoded = password_verify($password, $hashed_password);
        $role = $data_username['role'];

        if ($password_decoded) {
            $_SESSION['id'] = $data_username['id'];
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role; // Tambahkan kolom 'role' pada tabel users

            if ($_SESSION['role'] == 'admin') {
                header('location:admin.php');
            } elseif ($_SESSION['role'] == 'user') {
                header('location:index.php');
            }
        } else {
            echo 'Username atau password salah' . $password_decoded;
            header('location:login.php');
        }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login As Admin</title>

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
                    <h2>Silahkan Login</h2>
                    <p>Masukan Username dan Password Sesuai dengan role anda</p>
                </header>


                <form method="post">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            Username
                            <input type="text" name="username" placeholder="Username" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            Password
                            <input type="password" name="password" placeholder="Password" />
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Login" class="primary" name="login" /></li>
                                <li><a href="index.php" class="button">Kembali</a></li>
                            </ul>
                        </div>
                        <a href="registrasi.php">Sign Up</a>
                    </div>
                </form>
            </section>


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