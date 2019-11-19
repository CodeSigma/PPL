<?php

    require_once("../database/db_login.php");
    print_r($_POST);

    if($_POST){
        $query = "UPDATE mahasiswa SET Nama='{$_POST['nama']}',Alamat='{$_POST['alamat']}',tempat_lahir= '{$_POST['tempat-lahir']}',tanggal_lahir='{$_POST['tanggal-lahir']}', email='{$_POST['email']}',hp='{$_POST['hp']}',wali='{$_POST['wali']}',hp_wali='{$_POST['wali-hp']}' WHERE NIM = '{$_POST['NIM']}';
                ";

        print_r($query);
        $result = mysqli_query($db,$query);
        if(!$result){
            die("Query gagal");
            mysqli_error();
        }
    }




    header("Location: user_data.php");

?>
