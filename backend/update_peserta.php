<?php
    if(isset($_POST['is_approved'])){
        $is_approved = $_POST['is_approved'];
        $id_peserta = $_POST['id_peserta'];

        $update_peserta = mysqli_query($conn,"update registrant set is_approved='$is_approved' where idreg='$id_peserta'");

        if($update_peserta){
            echo 'Berhasil
            <meta http-equiv="refresh" content="1;url=admin.php" />';
        } else {
            echo 'Gagal
                  <meta http-equiv="refresh" content="3;url=admin.php" />';
        };


    };
?>