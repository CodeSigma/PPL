<?php include "header.php"; ?>

<div class="row">
    <div class="form-group matkul-select">
        <select id="my-select" class="form-control" name="matakuliah">
            <option value="">--select matakuliah--</option>
            <?php
            require_once("../database/db_login.php");
            $query = "SELECT * FROM matakuliah";
            $result = mysqli_query($db,$query);
            if(!$result){
                die("Query gagal". mysqli_connect_error());
            }
            while($row = $result->fetch_object()){
                echo '<option value='.$row->kode_MK.'>'.$row->Kode_MK.' - '.$row->Nama_M.' - '.$row->sks.'</option>';
            }
            ?>
        </select>
    </div>
</select>
<button class = "btn btn-primary matkul-select-btn" name='submit' type="submit">Pilih</button><br>
</div>

<table class="table table-light">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama_matakuliah</th>
        <th>kelas</th>
        <th>semester</th>
        <th>status</th>
        <th>SKS</th>
    </tr>
    <?php
    require_once("../database/db_login.php");
    $query = "SELECT * FROM matakuliah";
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
        echo '<td></td>'; //option based on class avaiablelity
        echo '<td>'.$row->semester.'</td>'; //belum ada didatabase
        echo '<td>status</td>'; //redict ke status di mahasiswa apakah sudah ambil
        echo '<td>'.$row->sks.'</td>'; //belum ada didatabase
        echo '</tr>';
        $i++;
    }
    ?>
</table>
<button class = "btn btn-primary" type="submit" name="edit" href="krs_edit.php">Edit</button>
<?php include "footer.php"; ?>