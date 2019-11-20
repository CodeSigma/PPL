<?php

    require_once("../database/db_login.php");
    print_r($_POST);

    if($_POST){
        $query = "INSERT into matakuliah
                (Kode_MK, Nama_M, Jumlah_kel, semester, sks)
                VALUES 
                ('{$_POST['kode']}', '{$_POST['nama']}',{$_POST['kelas']}, {$_POST['semester']}, {$_POST['sks']})
                ;";

        print_r($query);
        $result = mysqli_query($db,$query);
        if(!$result){
            mysqli_error();
            die("Query gagal");
        }
    }




    header("Location: matkul.php");

?>
