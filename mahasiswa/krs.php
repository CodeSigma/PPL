<?php include "header.php"; ?>

<?php
//membaca isi form
require_once("../database/db_login.php");
if (isset($_POST["submit"])){
    $matkul = $_POST['matakuliah'];
    $nim = $_SESSION['NIM'];
    $query1 = "INSERT INTO krs (NIM,Kode_MK) VALUES ('$nim','$matkul')";
    $result1 = mysqli_query($db,$query1);
    if(!$result1){
        die("Query gagal". mysqli_connect_error());
    }else{
        header('Location: krs.php');
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
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
<button class = "btn btn-primary matkul-select-btn" name='submit' type="submit">Pilih</button><br>
</div>
</form>

<table class="table table-light">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Matakuliah</th>
        <th>kelas</th>
        <th>semester</th>
        <th>status</th>
        <th>SKS</th>
    </tr>
    <?php
    $nim = $_SESSION['NIM'];
    require_once("../database/db_login.php");
    $query = "SELECT mk.Kode_MK, mk.Nama_M, mk.semester, mk.sks, mk.Jumlah_kel, krs.nilai FROM matakuliah as mk, krs WHERE matakuliah.Kode_MK=krs.Kode_MK AND krs.nilai NOT 4 AND krs.NIM=".$nim;
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
        echo '<td>'.$row->kelas.'</td>'; 
        echo '<td>'.$row->semester.'</td>'; 
        if($row->nilai == 3 || $row->nilai == 2){
            echo '<td>P</td>';
        }else if($row->nilai == 1 || $row->nilai == 0){
            echo '<td>U</td>';
        }else{
            echo '<td>B</td>';
        }
        echo '<td>'.$row->sks.'</td>';
        echo '</tr>';
        $i++;
    }
    ?>
</table>
<button class = "btn btn-primary" type="submit" name="edit" href="krs_edit.php">Edit</button>
<?php include "footer.php"; ?>