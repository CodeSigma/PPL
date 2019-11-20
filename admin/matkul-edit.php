<?php

    require_once("../database/db_login.php");

    
        $query = "UPDATE matakuliah SET Kode_MK='{$_POST['kode']}',Nama_M='{$_POST['nama']}',Jumlah_kel= '{$_POST['kelas']}',semester='{$_POST['semester']}', sks='{$_POST['sks']}' WHERE Kode_MK = '{$_POST['kode']}';
                ";

        print_r($query);
        $result = mysqli_query($db,$query);
        if(!$result){
            die("Query gagal");
            mysqli_error();
        }
    




    header("Location: matkul.php");

?>
