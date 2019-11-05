<?php

    require_once "../../database/db_login.php";

    $id = $_GET['id'];
    $query = "DELETE FROM mahasiswa WHERE NIM = {$id}";
    $result = mysqli_query($db, $query);
    if($result){
        header("Location: user_data.php");
    }else{
        die($query);
        mysqli_connect_errno();
        
    }



?>