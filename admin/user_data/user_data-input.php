<?php

    if($_POST){
        print_r($_POST);
        require_once "../../database/db_login.php";
        $id = $_POST['id'];


        header("Location: user_data-interface.php?id=".$id);

    }
?>
