<?php session_start() ?>
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
        <th>SKS</th>
        <th>Semester</th>
        <th>Kelas</th>
    </tr>
    <?php
    require_once("../database/db_login.php");
    $query = "SELECT * FROM krs LEFT JOIN jadwal ON krs.Kode_Jadw = jadwal.Kode_Jadw
    LEFT JOIN matakuliah ON jadwal.Kode_MK = matakuliah.Kode_MK 
    WHERE krs.NIM = '{$_SESSION['username']}';";
$result = mysqli_query($db,$query);
if(!$result){
    // print_r($query);
    print_r($query);
    die("Query gagal". mysqli_connect_error());
}

$count = 1;
while($row = mysqli_fetch_array($result)){
    echo '<tr>';
        echo '<td>'.$count.'</td>';
        echo '<td>'.$row['Kode_MK'].'</td>';
        echo '<td>'.$row['Nama_M'].'</td>';
        echo '<td>'.$row['sks'].'</td>';
        echo '<td>'.$row['semester'].'</td>';
        echo '<td>'.$row['Kelas'].'</td>';
    echo '<tr>';
    $count++;
}
    ?>
    </table>
<br>
    <h3>JADWAL KULIAH</h3>
    <?php include "krs-jadwal.php"; ?>
</center>
<script>
window.print();
</script>
</body>
</html>