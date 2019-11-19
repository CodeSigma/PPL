<?php
    $matkul = $_GET['matkul'];
    $nim = $_SESSION['NIM'];
    require_once("../database/db_login.php");
    $query1 = "DELETE FROM krs WHERE NIM=".$nim." AND Kode_MK=".$matkul;
    $result1 = mysqli_query($db,$query);
    if(!$result1){
        die("Query gagal". mysqli_connect_error());
    }else{
        header('Location: krs_edit.php');
    }
?>