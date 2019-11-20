<?php
    require_once("../database/db_login.php");

    print_r($_GET);
    $query = "DELETE FROM krs WHERE NIM = '{$_GET['id']}' AND Kode_Jadw = '{$_GET['kode_j']}';";
    $result = mysqli_query($db,$query);
    if(!$result){
        die("Query gagal");
        mysqli_error();
    }
    header("Location: krs.php");



?>