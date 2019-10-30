<?php

session_start();

include 'database/db_login.php';


if($_POST){
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($db,"SELECT * FROM user WHERE username='$username' and user.password='$password'");
    $check = mysqli_num_rows($query);

    
    
    if($check > 0){
   
        $data = mysqli_fetch_assoc($query);
        $_SESSION['id_user'] = $data["id_user"];
        if($data['level'] == '1'){
            // Create Session
            $_SESSION['username'] = "$username";
            $_SESSION['level'] = "1";
            session_write_close();
            header("Location: admin/main.php");
        }else if($data['level'] == '2'){  
            $_SESSION['username'] = "$username";
            $_SESSION['level'] = "2";
            session_write_close();
            header("Location: mahasiswa/main.php");
        }
    }else{
        
        
        header("Location: index.php");
        session_write_close();
    }
}
?>