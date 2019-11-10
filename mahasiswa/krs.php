<?php include "header.php"; ?>
<?php include "sidebar.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KRS</title>
</head>
<body>

<h3>KARTU RENCANA STUDI</h3><br>
    <?php
        require_once("../database/db_login.php");
        $nim = $_GET['NIM'];
        $query1 = "SELECT Nama FROM mahasiswa WHERE NIM = ".$nim;
        $query2 = "SELECT krs.nilai, matakuliah.sks FROM krs, matakuliah WHERE NIM = ".$nim." AND krs.Kode_MK=matakuliah.Kode_MK";
        $result1 = mysqli_query($db,$query1);
        $result2 = mysqli_query($db,$query2);
        if(!$result1){
            die("Query gagal". mysqli_connect_error());
        }
        if(!$result2){
            die("Query gagal". mysqli_connect_error());
        }
        $data1 = mysqli_fetch_assoc($result1);
        $total = 0;
        $totsks = 0;
        while($khs = $result2->fetch_object()){
            $total = $khs->nilai * $khs->sks;
            $totsks = $khs->sks;
        }
    ?>
    <h4>Nama    :</h4><?php echo " ".$data1['Nama']?>&nbsp  <h4>IP Lalu         :</h4><?php echo "aksesnya gmn?"?><br>
    <h4>NIM     :</h4><?php echo " ".$nim?>&nbsp            <h4>Beban Studi maks:</h4><?php echo "sem lalu?"?><br>
    <h4>SEMESTER:</h4>&nbsp                                 <h4>IPK             :</h4><?php echo "$total/".$totsks?><br>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Kode MK</th>
            <th>Nama Matakuliah</th>
            <th>kelas</th>
            <th>SMT</th>
            <th>Status</th>
            <th>SKS</th>
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
            echo '</tr>';
            $i++;
        }
        ?>
    </table>
    <button type="submit" name="edit" href="krs_edit.php">Edit</button>
</body>
</html>
<?php include "footer.php"; ?>