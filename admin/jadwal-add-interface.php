<?php include 'header.php'?>

<?php

    require_once("../database/db_login.php");



?>
<h1 class="display-4" style="text-align:center; margin-top:20px;">Tambah Jadwal Baru</h1>
<div class = "form">
    <form method="POST" action="jadwal-add.php">
        <div class = "form-interface">
            <table>
                <tr>
                    <td>Nama Matakuliah</td>
                    <td>:</td>
                    <td>
                        <div class="form-group">
                            <select id="my-select" class="form-control" name="matakuliah">
                                <?php
                                    $query = "SELECT * FROM matakuliah";
                                    $result = mysqli_query($db, $query);
                                    while($row = mysqli_fetch_array($result)){
                                        echo '<option value="'.$row['Kode_MK'].'">'.$row['Nama_M'].'</option>';
                                    }
                                    
                                    ?>

                            </select>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><div class="form-group">
                      <select class="custom-select" name="kelas" id="kelas-dropdown" size=1>
                        <option selected>Select one</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                      </select>
                    </div></td>
                </tr>
                <tr>
                    <td>Hari</td>
                    <td>:</td>
                    <td>
                        <div class="form-group">
                            <select class="custom-select" name="hari" id="">
                                <option selected>Select one</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Ju'mat</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Jam Mulai</td>
                    <td>:</td>
                    <td><input class="form-control" type="time" name="waktu_mulai"></td>
                </tr>
                <tr>
                    <td>Ruangan</td>
                    <td>:</td>
                    <td><div class="form-group">
                            <select id="my-select" class="form-control" name="ruangan">
                                <?php
                                    $query = "SELECT * FROM ruangan";
                                    $result = mysqli_query($db, $query);
                                    while($row = mysqli_fetch_array($result)){
                                        echo '<option value="'.$row['Kode_Ruang'].'">'.$row['Kode_Ruang'].'</option>';
                                    }
                                    
                                    ?>

                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Pengampu</td>
                    <td>:</td>
                    <td>
                        <div class="form-group">
                            <select class="custom-select" name="pengampu" id="">
                            <option selected>Select one</option>
                                <?php
                                    $query = "SELECT * FROM dosen";
                                    $result = mysqli_query($db, $query);
                                    while($row = mysqli_fetch_array($result)){
                                        echo '<option value="'.$row['Nama'].'">'.$row['Nama'].'</option>';
                                    }
                                    
                                ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                <td colspan=3 align="right"><button name="submit" id="" class="btn btn-primary" type="submit">Simpan</button></td>
                </tr>
            </table>
        </div>
    </form>
</div>

<?php include 'footer.php'?>