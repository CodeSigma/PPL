<?php include "header.php" ?>

<?php
        require_once("../database/db_login.php");
        $id = $_POST['input'];
        print_r($_POST);
?>
        <div class="row">
            
            <div class="col-xl-3"></div>
            <div class="col-xl-6 mainform">
                <form method="POST" action="user_data-insert.php?">
                    <table class="table table-light user_data-interface">
                    <tbody>
                            <tr>
                            <td colspan=3 align="center">
                            <img class="img-fluid" src="img/profile-default.png" alt="">
                            </td>
                            </tr>
                            <tr>
                                <td>NAMA</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="password" value=""></td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td><input name="NIM" class="form-control" type="text" value="<?php echo $id; ?>"></td>

                                
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="alamat" value=""></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="tempat-lahir" value=""></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><input class="form-control" type="date" name="tanggal-lahir" value=""></td>
                            </tr>
                            <tr>
                                <td>HP</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="hp" value=""></td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>:</td>
                                <td><input class="form-control" type="email" name="email" value=""></td>
                            </tr>
                            <tr>
                                <td>Nama Wali</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="wali" value=""></td>
                            </tr>
                            <tr>
                                <td>HP Wali</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="wali-hp" value=""></td>
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