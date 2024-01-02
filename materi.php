<?php
session_start();
require 'backend/koneksi.php';

$id_user = $_SESSION['id'];
$video_played = $_GET['video_materi'];
$video = array();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi</title>
</head>

<body>
    <h1>ini adalah materi </h1>

    <form>
        <?php

        $get_data_registrant = mysqli_query($conn, "SELECT * FROM registrant WHERE is_approved IS TRUE AND iduser='$id_user'");
        while ($data_registrant = mysqli_fetch_array($get_data_registrant)) {
            $id_job = $data_registrant['idjob'];

            $get_data_materi = mysqli_query($conn, "SELECT * FROM materi WHERE id_job='$id_job'");

            $video_number = 1;
            while ($data_materi = mysqli_fetch_array($get_data_materi)) {
                $nama_materi = $data_materi['nama_materi'];
                $link_materi = $data_materi['link_materi'];

                $video[$video_number] = $link_materi;
        ?>

                <ul>
                    <li><button type="submit" name="video_materi" value="<?= $video_number ?>"><?= $nama_materi ?></button></li>
                </ul>

        <?php
                $video_number = $video_number + 1;
            }
        }

        if (isset($_POST['video_materi'])) {
            $video_played = $_POST['video_materi'];
        }

        ?>
    </form>

    <?php 
    
    if (count($video) == 0) {
        ?>
        <script>
            var pesan = confirm("Mohon maaf, Anda sepertinya belum terdaftar di kelas manapun, silahkan daftar kelas terlebih dahulu");
            if (pesan) {
                window.location.href = "index.php";
            } else {
                window.location.href = "index.php";
            }
        </script>

        <?php

    }

    ?>

    <iframe width="560" height="315" src="<?= $video[$video_played] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <div align="right"><a href="logout.php" class="btn btn-danger">Logout</a></div>
</body>

</html>