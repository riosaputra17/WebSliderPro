<?php
    if(isset($_POST['update_materi'])){
        $u1 = $_POST['update_nama_materi'];
        $u2 = $_POST['update_kategori'];
        $u3 = $_POST['update_link_materi'];
        $idd = $_POST['updateid'];

        $update_materi = mysqli_query($conn,"update materi set nama_materi='$u1', id_job='$u2', link_materi='$u3' where id_materi='$idd'");

        if($update_materi){
            echo 'Berhasil
            <meta http-equiv="refresh" content="1;url=admin.php" />';
        } else {
            echo 'Gagal
                  <meta http-equiv="refresh" content="3;url=admin.php" />';
        };


    };
?>