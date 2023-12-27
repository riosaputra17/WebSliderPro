<?php

if(isset($_POST['add_materi'])){

    $nama_materi = $_POST['nama_materi'];
    $kategori = $_POST['kategori'];
    $link_materi = $_POST['link_materi'];

    $tambahMateri = mysqli_query($conn,"insert into materi (id_job,nama_materi,link_materi)
                                    values ('$kategori','$nama_materi','$link_materi')");

    if($tambahMateri){
        echo 'Berhasil';
        header('location:admin.php');
    } else {
        echo 'Gagal';
        header('location:admin.php');
    };

};



?>