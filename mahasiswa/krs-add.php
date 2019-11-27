<?php 
    require_once("../database/db_login.php");
    session_start();
    print_r($_POST);
    $result = mysqli_query($db, "SELECT semester FROM mahasiswa WHERE NIM = '{$_SESSION['username']}'");
    $row = mysqli_fetch_array($result);
    $_SESSION['username'];
    $check = mysqli_query($db, "SELECT * FROM krs WHERE NIM = '{$_SESSION['username']}' AND Kode_Jadw = '{$_POST['matakuliah']}'");
    if(mysqli_num_rows($check)!=0){
        
        header("Location: krs.php?action='edit'&alert='selected'.php");
    }else{

        $cek1 = mysqli_query($db, "SELECT Kode_MK FROM jadwal WHERE Kode_Jadw = '{$_POST['matakuliah']}'  ");
        $kodemk = mysqli_fetch_array($cek1);
        $Kode_MK= $kodemk['Kode_MK'];

        $checkkodeMK = mysqli_query($db, "SELECT * FROM krs INNER JOIN jadwal ON krs.Kode_Jadw = jadwal.Kode_Jadw WHERE krs.NIM='{$_SESSION['username']}' AND jadwal.Kode_MK='{$Kode_MK}'");

        if (mysqli_num_rows($checkkodeMK)!=0){
            
        header("Location: krs.php?action='edit'&alert='selected'.php");
        } else {
               $cek2 = mysqli_query($db, "SELECT Jam_Mulai, Hari FROM jadwal WHERE Kode_Jadw = '{$_POST['matakuliah']}'  ");
                $jam = mysqli_fetch_array($cek2);
                $jamMK= $jam['Jam_Mulai'];
                $hariMK= $jam['Hari'];

                $checkJam_Mulai = mysqli_query($db, "SELECT * FROM krs INNER JOIN jadwal ON krs.Kode_Jadw = jadwal.Kode_Jadw WHERE krs.NIM='{$_SESSION['username']}' AND jadwal.Jam_Mulai='{$jamMK}' AND jadwal.Hari='{$hariMK}' ");


                if (mysqli_num_rows($checkJam_Mulai)!=0) {
                    header("Location: krs.php?action='edit'&alert='selected'.php");
                } else {
                    # code...
                    $query = "INSERT INTO krs (NIM, Kode_Jadw, semester) Values ({$_SESSION['username']}, '{$_POST['matakuliah']}',{$row['semester']})";

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
                        header("Location: krs.php?action='edit'.php");
                    }
                }
                
            
           
           

        }
        
    }
        

?>