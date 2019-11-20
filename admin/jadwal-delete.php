<?php
    require_once("../database/db_login.php");
    $id = $_GET['id'];
    $query = "DELETE FROM jadwal WHERE Kode_Jadw = {$id};";
    print_r($query);
    $result = mysqli_query($db,$query);
    if(!$result){
        die("Query gagal");
        mysqli_error();
    }else{
        header("Location: jadwal.php");
    }


?>