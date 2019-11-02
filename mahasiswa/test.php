<?php include "header.php" ?>

<?php

        require_once("../database/db_login.php");
        $nim = $_GET['NIM'];
        $query = "SELECT * FROM mahasiswa WHERE NIM = ".$nim;
        $result = mysqli_query($db,$query);
        if(!$result){
            die("Query gagal". mysqli_connect_error());
        }
        $data = mysqli_fetch_assoc($result);
        
        ?>
        <div class="row">
            
            <div class="col-xl-2"></div>
            <div class="col-xl-6 mainform">
                <form method="POST" action="profil_update.php">
                    <input class="form-control" type="text" name="sampleinput">
                    <button name="" id="" class="btn btn-primary" type="submit">Submit</button>
                </form>
                
            </div>

            <!-- <div class="col-xl-2"></div>
        </div>

 -->