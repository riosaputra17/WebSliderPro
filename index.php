<?php
session_start();
require 'backend/koneksi.php';
date_default_timezone_set("Asia/Bangkok");
$date_now = date("Y-m-d");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Online</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
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
            <h1>WebinarSlides Pro<br> Microsoft learning</h1>
            <p>Memberikan sesi pelatihan PowerPoint secara langsung dan interaktif melalui webinar. Peserta dapat
                berinteraksi, bertanya, dan berkolaborasi secara real-time..</p>
        </header>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="#intro" class="active">Pendahuluan</a></li>
                <li><a href="#first">Keuntungan</a></li>
                <li><a href="#second">Workshop Tersedia</a></li>
                <li><a href="#cta">Admin</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">

            <!-- Introduction -->
            <section id="intro" class="main">
                <div class="spotlight">
                    <div class="content">
                        <header class="major">
                            <h2>Workshop learning</h2>
                        </header>
                        <p>Selamat datang di WebinarSlides Pro! Di sini, Anda akan belajar PowerPoint dengan cara yang
                            menyenangkan dan interaktif. Dapatkan tutorial langkah-demi-langkah, ikuti webinar, dan
                            kerja sama dalam proyek bersama. Sambut perubahan dan tingkatkan keterampilan presentasi
                            Anda bersama kami!</p>
                        <p>Selamat datang di WebinarSlides Pro! Di sini, Anda akan belajar PowerPoint dengan cara yang
                            menyenangkan dan interaktif. Dapatkan tutorial langkah-demi-langkah, ikuti webinar, dan
                            kerja sama dalam proyek bersama. Sambut perubahan dan tingkatkan keterampilan presentasi
                            Anda bersama kami!</p>
                    </div>
                    <img src="img/landing1.png" class="landing" />
                </div>
                <div class="spotlight2">
                    <div class="content2">
                        <header class="major">
                            <h2>Buat Presentasi yang Menarik dengan Microsoft Power Point</h2>
                        </header>
                        <p>Microsoft PowerPoint menjadi software penunjang saat kita melakukan presentasi. Hal ini
                            membuat kita perlu memaksimalkan software tersebut untuk menghasilkan presentasi yang
                            ciamik.

                            Di kelas ini kamu akan belajar mengoptimalkan Microsoft PowerPoint, mulai dari memahami
                            teknik membuat layout, transisi gambar dan animasi, memilih warna dan font yang sesuai,
                            memasukkan gambar, video, dan tabel sehingga kamu dapat membuat presentasi dalam
                            PowerPoint-mu menarik, dan membuat terpukau para audiens. </p>

                    </div>
                </div>

                <div class="spotlight2">
                    <div class="content2">
                        <header class="major">
                            <h2>Yuk Gabung di Kelas WebinarSlides</h2>
                        </header>
                        <p>Belajar sepuasnya, tidak ada batas waktu. Beli sekali akses seumur hidup. Materi update terus
                            mengikuti perkembangan zaman dan tren industri, tanpa tambahan biaya.</p>
                        <ul>
                            <li>Akses Materi + Update Materi Seumur Hidup</li>
                            <li>Akses Materi + Update Materi Seumur Hidup</li>
                            <li>1x Bayar, Akses + Update Materi Seumur Hidup</li>
                            <li>Forum Tanya Jawab</li>
                            <li>Grup Member untuk Silaturahmi dan Informasi</li>
                        </ul>
                    </div>
                </div>
                <img src="img/pict2.png" class="landing" />
                <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1">
                    <div class="col mt-3">
                        <a href="img/gallery/elena-joland--4nhJnfF7W0-unsplash.jpg" data-toggle="lightbox"
                            data-caption="Prewedding Foto1" data-gallery="mygallery">
                            <img src="img/pict2.png" alt="Prewedding Foto1" class="img-fluid w-100 rounded">
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="img/gallery/elena-joland--4nhJnfF7W0-unsplash.jpg" data-toggle="lightbox"
                            data-caption="Prewedding Foto2" data-gallery="mygallery">
                            <img src="img/pict2.png" alt="Prewedding Foto2" class="img-fluid w-100 rounded">
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="img/gallery/elena-joland--4nhJnfF7W0-unsplash.jpg" data-toggle="lightbox"
                            data-caption="Prewedding Foto3" data-gallery="mygallery">
                            <img src="img/pict2.png" alt="Prewedding Foto3" class="img-fluid w-100 rounded">
                        </a>
                    </div>
                </div>
            </section>

            <!-- First Section -->
            <section id="first" class="main special">
                <header class="major">
                    <h2>Keuntungan</h2>
                </header>
                <ul class="features">
                    <li>
                        <span class="icon solid major style1 fa-code"></span>
                        <h3>Knowledge</h3>
                        <p>Pelatihan oleh mentor yang ahli di bidangnya</p>
                    </li>
                    <li>
                        <span class="icon major style3 fa-copy"></span>
                        <h3>Experience</h3>
                        <p>Menambah jam terbang dan pendalaman materi</p>
                    </li>
                    <li>
                        <span class="icon major style5 fa-gem"></span>
                        <h3>Character</h3>
                        <p>Pembentukan karakter siap kerja dengan gaya industri modern</p>
                    </li>
                </ul>
            </section>

            <!-- Second Section -->
            <section id="second" class="main special">
                <header class="major">
                    <h2><strong>Workshop Tersedia</strong></h2>
                </header>
                <div class="table-wrapper">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Kelas Tersedia</th>
                                <th>Periode</th>
                                <th>Deadline Pendaftaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $getdata = mysqli_query($conn, "select * from job where registerend>'$date_now'");
                            while ($data = mysqli_fetch_array($getdata)) {
                                $idjob = $data['id'];
                                $namajob = $data['jobname'];
                                $descjob = $data['jobdesc'];
                                $mulai = date_format(date_create($data['jobstart']), "d M Y");
                                $selesai = date_format(date_create($data['jobend']), "d M Y");
                                $periode = $mulai . " - " . $selesai;
                                $deadline = date_format(date_create($data['registerend']), "d M Y");
                                $jobloc = $data['jobloc'];
                                $workingtype = $data['workingtype'];
                            ?>

                            <tr>

                                <td><?= $namajob; ?></td>
                                <td><?= $periode; ?></td>
                                <td><?= $deadline; ?></td>
                                <td><a href="apply.php?id=<?= $idjob; ?>" class="btn btn-primary">Apply</a></td>
                            </tr>

                            <?php
                            };

                            ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Get Started -->
            <section id="cta" class="main special">
                <header class="major">
                    <h2>Kelola Web Sebagai Admin</h2>
                </header>
                <footer class="major">
                    <ul class="actions special">
                        <li><a href="login.php" class="button primary">Login</a></li>
                    </ul>
                </footer>
            </section>

        </div>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">WebinarSlides</p>
        </footer>


    </div>


    <!-- about us section -->
    <div class="about-us-section">
        <header class="section-header">
            <h2>Tentang Kami</h2>
        </header>

        <div class="team-members">
            <div class="team-member">
                <img src="img/rio.png" alt="Anggota 1">
                <h3>Rio Saputra</h3>
                <p>Back-End & Front-End Dev</p>
            </div>

            <div class="team-member">
                <img src="img/afra.png" alt="Anggota 2">
                <h3>Afra Nesiya</h3>
                <p>Data Management</p>
            </div>

            <div class="team-member">
                <img src="img/imam.png" alt="Anggota 3">
                <h3>Imam Solehudin</h3>
                <p>Project leader</p>
            </div>
        </div>
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