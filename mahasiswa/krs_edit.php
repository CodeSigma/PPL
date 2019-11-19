<?php include "header.php"; ?>
<table class="table table-light">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Matakuliah</th>
        <th>kelas</th>
        <th>semester</th>
        <th>status</th>
        <th>SKS</th>
        <th></th>
    </tr>
    <?php
    require_once("../database/db_login.php");
    $query = "SELECT mk.Kode_MK, mk.Nama_M, mk.semester, mk.sks, mk.Jumlah_kel, krs.nilai FROM matakuliah as mk, krs WHERE matakuliah.Kode_MK=krs.Kode_MK AND krs.nilai!=4 AND krs.NIM=".$_SESSION["NIM"];
    $result = mysqli_query($db,$query);
    if(!$result){
        die("Query gagal". mysqli_connect_error());
    }
    $i = 1;
    while($row = $result->fetch_object()){
        echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$row->Kode_MK.'</td>';
        echo '<td>'.$row->Nama_M.'</td>';
        if($row->Jumlah_kel == 4){
            echo '<td><select id="my-select" class="form-control" name="kelas">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
            </td>';
        }else if($row->Jumlah_kel == 3){
            echo '<td><select id="my-select" class="form-control" name="kelas">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
            </td>';
        }else if($row->Jumlah_kel == 2){
            echo '<td><select id="my-select" class="form-control" name="kelas">
                        <option value="A">A</option>
                        <option value="B">B</option>
                    </select>
            </td>';
        } 
        echo '<td>'.$row->semester.'</td>'; 
        if($row->nilai == 3 || $row->nilai == 2){
            echo '<td>P</td>';
        }else if($row->nilai == 1 || $row->nilai == 0){
            echo '<td>U</td>';
        }else{
            echo '<td>B</td>';
        }
        echo '<td>'.$row->sks.'</td>';
        echo '<td><a href="delete.php?matkul='.$row->Kode_MK.'">delete</a></td>';
        echo '</tr>';
        $i++;
    }
    ?>
</table>
<button class = "btn btn-primary" type="submit" name="simpan" href="krs.php">Simpan</button>
<?php include "footer.php"; ?>