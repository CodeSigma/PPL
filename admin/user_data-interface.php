<?php include "header.php" ?>

<?php
        require_once("../database/db_login.php");
        if($_POST){
            $id = $_POST['id'];
        }
        if($_GET){
            $id = $_GET['id'];
        }
        
        $query = "SELECT * FROM mahasiswa WHERE NIM = '{$id}'";
        $result = mysqli_query($db, $query);
        if(!$result){
            die("Query Error");
            mysqli_connect_errno();
        }else{
            if($_GET){
                $data = mysqli_fetch_array($result);
                $nama = $data['Nama'];
                $alamat = $data['Alamat'];
                $tempat = $data['tempat_lahir'];
                $tanggal = $data['tanggal_lahir'];
                $email = $data['email'];
                $hp = $data['hp'];
                $wali = $data['wali'];
                $hp_wali = $data['hp_wali'];
            }else{
                $nama = '';
                $alamat = '';
                $tempat = '';
                $tanggal = '';
                $email = '';
                $hp = '';
                $wali = '';
                $hp_wali = '';
            }
            
        }
?>
        <div class="row">
            
            <div class="col-xl-3"></div>
            <div class="col-xl-6 mainform">
                <form method="POST" action="user_data-insert.php">
                    <table class="table table-light user_data-interface">
                    <tbody>
                            <tr>
                            <td colspan=3 align="center">
                            <img class="img-fluid" src="img/profile-default.png" alt="">
                        </tr>
                            <tr>
                                <td>NAMA</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="nama" value="<?php echo $nama; ?>"></td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td><input name="NIM" class="form-control" type="text" value="<?php echo $id; ?>" ></td>

                                
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="tempat-lahir" value="<?php echo $tempat; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><input class="form-control" type="date" name="tanggal-lahir" value="<?php echo $tanggal; ?>"></td>
                            </tr>
                            <tr>
                                <td>HP</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="hp" value="<?php echo $hp; ?>"></td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>:</td>
                                <td><input class="form-control" type="email" name="email" value="<?php echo $email; ?>"></td>
                            </tr>
                            <tr>
                                <td>Nama Wali</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="wali" value="<?php echo $wali; ?>"></td>
                            </tr>
                            <tr>
                                <td>HP Wali</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="wali-hp" value="<?php echo $hp_wali; ?>"></td>
                            </tr>
                            <tr>
                                <td colspan=3 align="right"><button name="submit" id="" class="btn btn-primary" type="submit">Simpan</button></td>
                            </tr>
                        </tbody> 
                    </table>    
                </form>
            </div>

            <div class="col-xl-3"></div>
        </div>

<?php include "footer.php" ?>