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
