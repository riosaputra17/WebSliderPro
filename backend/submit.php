<?php

if(isset($_POST['apply'])){
    $id_job = $_POST['id_job'];
    $id_user = $_POST['id_user'];
    $a = $_POST['fullname'];
    $b = $_POST['gender'];
    $c = $_POST['kotalahir'];
    $d = $_POST['dob'];
    $e = $_POST['alamat'];
    $f = $_POST['email'];
    $g = $_POST['telepon'];
    $h = $_POST['motivasi'];
    $i = $_POST['linkedin'];
    $j = $_POST['portfolio'];

    $insertdata = mysqli_query($conn, "insert into registrant (idjob,iduser,name,gender,dob,alamat,email,telepon,motivational,linkedin,portfolio) values('$id_job','$id_user','$a','$b','$d','$e','$f','$g','$h','$i','$j')");

    if($insertdata){
        header('location:thanks.php');
    } else {
        echo 'Gagal
        <meta http-equiv="refresh" content="3;url=submit.php" />';
    }
};

?>
