<?php 
    require_once("../database/db_login.php");
    session_start();
    print_r($_POST);
    $result = mysqli_query($db, "SELECT semester FROM mahasiswa WHERE NIM = '{$_SESSION['username']}'");
    $row = mysqli_fetch_array($result);
    $_SESSION['username'];
    $query = "INSERT INTO krs
        (NIM, Kode_Jadw, semester) Values ({$_SESSION['username']}, '{$_POST['matakuliah']}',{$row['semester']});
        ";
    $result = mysqli_query($db,$query);
    print_r($query);
    if(!$result){
        ?>
            <script>
                document.addEventListener('DOMContentLoaded',function(){
                    alert("Query gagal");

                });
            </script>
        <?php
            die(mysqli_error($db));
    }else{
        header("Location: krs.php");
    }
?>