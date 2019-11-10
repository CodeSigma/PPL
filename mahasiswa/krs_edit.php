<?php include "header.php"; ?>
<?php include "sidebar.php";?>

<form method="POST" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<select name="matakuliah">
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
</form>
<button name='submit' type="submit" value="Submit">Pilih</button><br>
<?php
    require_once("../database/db_login.php");
    $db = new mysqli($db_host, $db_username, $db_password, $db_database);
    if ($db->connect_errno){  
	    die ("Could not connect to the database: <br />". $db>connect_error); 
    }
    if (isset($_POST["submit"])){
        $matkul = $_POST['matakuliah'];
        $query1 = "INSERT INTO penjadwal(Kode_MK) VALUES ('$matkul')";
        $result1 = $db->query($query1);   
		if (!$result1){      
			die ("Could not query the database: <br />". $db->error);   
		}  
    }
?>

<table border=1>
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Matakuliah</th>
        <th>kelas</th>
        <th>SMT</th>
        <th>Status</th>
        <th>SKS</th>
        <th></th>
    </tr>
    <?php
    require_once("../database/db_login.php");
    $nim = $_GET['NIM'];
    $query = "SELECT matakuliah.Kode_MK, matakuliah.Nama_M, matakuliah.Jumlah_kel, 
    matakuliah.semester, krs.nilai, matakuliah.sks FROM penjadwal, matakuliah, krs 
    WHERE penjadwal.NIM=".$nim."AND penjadwal.Kode_MK=matakuliah.Kode_MK 
    AND matakuliah.Kode_MK=krs.Kode_MK AND krs.NIM=".$nim;
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
        echo '<td></td>';
//        switch(.$row->jumlah_kel.){
//            case 1:
//            <select name="kelas" id="kelas">
//                <option value="">-Pilih Kelas-</option>
//                <option value="a">A</option>
//            </select>
//            break;
//            case 2:
//            <select name="kelas" id="kelas">
//                <option value="">-Pilih Kelas-</option>
//                <option value="a">A</option>
//            </select>}
//option based on class availability
        echo '<td>'.$row->semester.'</td>'; //belum ada didatabase
        if ($row->nilai = 2 || $row->nilai = 3){
            echo '<td>P</td>';
        }else if($row->nilai = 1 || $row->nilai = 0){
            echo '<td>U</td>';
        } //kalau baru, constrainnya apa?
        //redict ke status di mahasiswa apakah sudah ambil
        echo '<td>'.$row->sks.'</td>';
        echo '<td>link buat delete</td>';
        echo '</tr>';
        $i++;
    }
    ?>
</table>
<button type="submit" name="edit" href="krs.php">Simpan</button>
<?php include "footer.php"; ?>