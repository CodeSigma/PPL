<?php

session_start();

include 'database/db_login.php';

if($_POST){
    
    $username = $_POST['username'];
    $password = $_POST['password'];




    $query = mysqli_query($db,"SELECT * FROM mahasiswa WHERE NIM='$username' and mahasiswa.password='$password'");
    $check = mysqli_num_rows($query);

    
    
    if($check > 0){
   
        $data = mysqli_fetch_assoc($query);
        $_SESSION['NIM'] = $data["NIM"];
        print_r($username);
        if($username == '1'){
            // Create Session
            $_SESSION['username'] = "admin";
            $_SESSION['level'] = "1";
            session_write_close();
            header("Location: admin/main.php");
        }else if($data['NIM'] == $username){  
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "2";
            // print_r($_SESSION['username']);
            session_write_close();
            ?>
            

            <?php
            header("Location: mahasiswa/main.php");
        }
    }else{
        $_SESSION['wrong_pass'] = 1;
        header("Location: index.php");
    }
}
?>