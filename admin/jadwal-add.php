<?php 
    require_once("../database/db_login.php");

    if ($_POST['waktu_mulai']==NULL) {
        header("Location: jadwal-add-interface.php");
    } else {
        # code...
         $query = "INSERT INTO jadwal
        (Kode_MK, Hari, Kelas, Jam_Mulai, ruangan, Pengampu) Values ('{$_POST['matakuliah']}', '{$_POST['hari']}', '{$_POST['kelas']}', '{$_POST['waktu_mulai']}', '{$_POST['ruangan']}', '{$_POST['pengampu']}');
        ";
    $result = mysqli_query($db,$query);
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
        header("Location: jadwal.php");
    }
    }
    


   
    

?>