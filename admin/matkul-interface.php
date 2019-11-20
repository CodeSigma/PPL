<?php include "header.php"?>

<?php
        require_once("../database/db_login.php");

?>        <div class="form">
            <?php if($_GET){
                $query = "SELECT * FROM matakuliah WHERE Kode_MK ='{$_GET['id']}'";
                $result = mysqli_query($db, $query);
                if(!$result){
                    die("Query gagal");
                    mysqli_error();
                }
                $row = mysqli_fetch_assoc($result);
                $kode = $row['Kode_MK'];
                $nama = $row['Nama_M'];
                $kelas = $row['Jumlah_kel'];
                $semester = $row['semester'];
                $sks = $row['sks'];

                
                echo '<form method="POST" action="matkul-edit.php">';
            }else{
                $kode = '';
                $nama = '';
                $kelas = '';
                $semester = '';
                $sks = '';
                echo '<form method="POST" action="matkul-insert.php">';
            }?>
            <table class="table form-interface">
                    <tbody>
                        <tr>
                            <td>Kode</td>
                            <td>:</td>
                            <td><input class="form-control" type="text" name="kode" value="<?php echo $kode.'"'; if($_GET) echo 'readonly';?> ></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input name="nama" class="form-control" type="text" value="<?php echo $nama; ?>"></td>

                            
                        </tr>
                        <tr>
                            <td>Jumlah Kelas</td>
                            <td>:</td>
                            <td><input class="form-control" type="text" name="kelas" value="<?php echo $kelas; ?>"></td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                            <td><input class="form-control" type="text" name="semester" value="<?php echo $semester; ?>"></td>
                        </tr>
                        <tr>
                            <td>SKS</td>
                            <td>:</td>
                            <td><input class="form-control" type="text" name="sks" value="<?php echo $sks; ?>"></td>
                        </tr>
                            <td colspan=3 align="right"><button name="submit" id="" class="btn btn-primary" type="submit">Simpan</button></td>
                        </tr>
                    </tbody> 
                 </table>     
            </form>
            </div>
            
<?php include "footer.php" ?>