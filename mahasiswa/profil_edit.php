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
        <div class="content">
            <div class="edit">
                <img src="images/profil.png" alt="profil">

                <?php echo '<form method="POST" action="profil_update.php?NIM='.$nim.'">'; ?>
                    <?php echo '<img class="img-fluid" src="'.$data['img'].'" alt="">';?>
                    <span>Nama <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>"></span>
                    <span>NIM <input type="text" name="NIM" value="<?php echo $_GET['NIM'];?>" id="NIM" disabled></span>
                    <span id="textarea">Alamat <textarea name="alamat" value="<?php echo $data['Alamat']; ?>"></textarea></span>
                    <span>Tempat Lahir <input type="text" type="text" name="tempat-lahir" value="<?php echo $data['tempat_lahir']; ?>"></span>
                    <span>Tanggal Lahir <input type="date" name="tanggal-lahir" value="<?php echo $data['tanggal_lahir']; ?>"></span>
                    <span>Email <input type="email" name="email" value="<?php echo $data['email']; ?>"></span>
                    <span>HP <input type="text" name="hp" value="<?php echo $data['hp']; ?>"></span>
                    <span>Nama wali <input type="text" name="wali" value="<?php echo $data['wali']; ?>"></span>
                    <span>HP wali <input type="text" name="wali-hp" value="<?php echo $data['hp_wali']; ?>"></span>
                    <span> <input type="submit" name="submit" value="Simpan"></span>
                </form>
            </div>
        </div>
    <div class="col-xl-3"></div>
</div>

<?php include "footer.php" ?>