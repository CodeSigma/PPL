<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    header("location: index.php");
?>