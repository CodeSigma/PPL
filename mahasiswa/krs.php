<?php include "header.php"; ?>

<?php
require_once("../database/db_login.php");
?>
<div class="form">

    <form action="krs-add.php" method="POST">
    <div class="row">
        <div class="form-group matkul-select">        
            <select id="my-select" class="form-control" name="matakuliah">
                <?php
                $query = "SELECT * FROM jadwal";
                $result = mysqli_query($db,$query);
                if(!$result){
                    die("Query gagal". mysqli_connect_error());
                    mysqli_error();
                }
                while($row = mysqli_fetch_array($result)){
                    $q1 = "SELECT * FROM matakuliah WHERE Kode_MK = '{$row['Kode_MK']}'";
                    $res1 = mysqli_query($db,$q1);
                    print_r($q1);
                    while($r = mysqli_fetch_array($res1)){
                        echo '<option value="'.$row['Kode_Jadw'].'">'.$row['Kode_MK'].' - '.$r['Nama_M'].' - '.$r['sks'].' - '.$row['Kelas'].'</option>';
                    }
                }
                ?>
            </select>
        </div>
    <button class = "btn btn-primary matkul-select-btn" name='pilih-jadwal' type="submit">Pilih</button><br>
    </div>
    </form>
</div>

<table class="table table-light">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Matakuliah</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Kelas</th>
        <th>Action</th>
    </tr>
    
    <?php
     if(!$_GET) include "krs-view.php";
    //  else include "krs-edit.php";
     
     ?>
</table>
<a name="" id="" class="btn btn-primary" href="krs.php?action='edit'" role="button">Edit</a>
<button class = "btn btn-primary" type="submit" name="simpan" href="krs_simpan.php">simpan</button>
<?php include "footer.php"; ?>