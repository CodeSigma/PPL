<?php

    if($_POST){
        print_r($_POST);
        require_once "../database/db_login.php";
        $id = $_POST['id'];
        $query = "INSERT into mahasiswa
                (NIM) VALUES ({$id});";
        $result = mysqli_query($db, $query);
        if(!$result){
            die("$result");
        }
        print_r($result);
        header("Location: user_data-interface.php?id=".$id);

    }
?>
