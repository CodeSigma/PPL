<?php

    require_once("../database/db_login.php");
    print_r($_POST);

    if($_POST){
        $query = "INSERT into mahasiswa
                (NIM, Nama, Alamat, tempat_lahir, tanggal_lahir, email, hp, wali, hp_wali)
                VALUES 
                ('{$_POST['NIM']}', '{$_POST['nama']}', '{$_POST['alamat']}', '{$_POST['tempat-lahir']}', {$_POST['tanggal-lahir']}, '{$_POST['hp']}', '{$_POST['email']}', '{$_POST['wali']}', '{$_POST['wali-hp']}')
                ;";

        print_r($query);
        $result = mysqli_query($db,$query);
        if(!$result){
            die("Query gagal");
            mysqli_error();
        }
    }




    header("Location: user_data.php");

?>
