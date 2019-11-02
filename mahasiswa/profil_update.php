<?php
    if($_POST){
        

        print_r($_POST);

        require_once "../database/db_login.php";
        $alamat = $_POST['alamat'];
        $tempat = $_POST['tempat-lahir'];
        $tanggal = $_POST['tanggal-lahir'];
        $hp = $_POST['hp'];
        $email = $_POST['email'];
        $wali = $_POST['wali'];
        $hpwali = $_POST['wali-hp'];
        
        $query= "UPDATE mahasiswa 
                SET Alamat='{$alamat}',
                    tempat_lahir='{$tempat}',
                    tanggal_lahir='{$tanggal}',
                    email = '{$email}',
                    hp='{$hp}',
                    wali='{$wali}',
                    hp_wali='{$hpwali}'
                WHERE NIM = '{$_GET['NIM']}'";
        
        $result = mysqli_query($db,$query);
        if(!$result){
            die ("Query gagal");
            mysqli_connect_errno();
        }   
        ?>


        <?php
        header("Location: main.php");

    }
 ?>