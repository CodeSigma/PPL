<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<center>
<h3>KARTU RENCANA STUDI</h3><br>
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
    require_once("../database/db_login.php");
    $nim = $_SESSION['NIM'];
    $query = "SELECT mk.Kode_MK, mk.Nama_M, mk.semester, mk.sks, mk.Jumlah_kel, krs.nilai FROM matakuliah as mk, krs WHERE matakuliah.Kode_MK=krs.Kode_MK AND krs.nilai!=4 AND krs.NIM=".$nim;
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

    <h3>JADWAL KULIAH</h3>
</center>
<script>
window.print();
</script>
</body>
</html>