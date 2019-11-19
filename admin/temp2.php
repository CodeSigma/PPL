<table class="table user_data-interface">
                    <tbody>
                        <tr>
                            <td colspan=3 align="center">
                            <img class="img-fluid" src="images/profile-default.png" alt="">
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
                            <td colspan=3><button name="submit" id="" class="btn btn-primary" type="submit">Simpan</button></td>
                        </tr>
                    </tbody> 
                    </table>