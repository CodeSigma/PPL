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
                <?php echo '<form method="POST" action="profil_update.php?NIM='.$nim.'">'; ?>
                    <table class="table table-light profil-edit">
                    <tbody>
                            <tr>
                            <td colspan=3 align="center">
                            <?php echo '<img class="img-fluid" src="'.$data['img'].'" alt="">';?>
                            </td>
                            </tr>
                            <tr>
                                <td>NAMA</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="password" value="<?php echo $data['Nama']; ?>"></td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td><input name="NIM" class="form-control" type="text" value="<?php echo $_GET['NIM'];?>" id="NIM" disabled></td>

                                
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="alamat" value="<?php echo $data['Alamat']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="tempat-lahir" value="<?php echo $data['tempat_lahir']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><input class="form-control" type="date" name="tanggal-lahir" value="<?php echo $data['tanggal_lahir']; ?>"></td>
                            </tr>
                            <tr>
                                <td>HP</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="hp" value="<?php echo $data['hp']; ?>"></td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>:</td>
                                <td><input class="form-control" type="email" name="email" value="<?php echo $data['email']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Nama Wali</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="wali" value="<?php echo $data['wali']; ?>"></td>
                            </tr>
                            <tr>
                                <td>HP Wali</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="wali-hp" value="<?php echo $data['hp_wali']; ?>"></td>
                            </tr>
                            <tr>
                                <td colspan=3 align="right"><button name="submit" id="" class="btn btn-primary" type="submit">Simpan</button></td>
                            </tr>
                        </tbody> 
                    </table>    
                </form>
            </div>

            <div class="col-xl-2"></div>
        </div>

<?php include "footer.php" ?>