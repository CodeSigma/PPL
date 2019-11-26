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
<table class="table table-light" border="1">

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
    
    <table class="table table-light" border="1">
      <thead>
          <tr>
              <th>Hari</th>
              <th>Mata Kuliah</th>
              <th>Waktu</th>
              <th>Ruangan</th>
              <th>Pengampu</th>
          </tr>
      </thead>
      <tbody>
          <?php
                echo '<tr>'; //senin
                $query = "SELECT COUNT(*) as jumlah
                        FROM jadwal LEFT JOIN krs ON jadwal.Kode_Jadw = krs.Kode_Jadw
                        WHERE NIM = '{$_SESSION['username']}' AND Hari = 'Senin' 
                        ORDER BY Jam_Mulai
                    ;";
                $result = mysqli_query($db, $query);
                $count = mysqli_fetch_assoc($result)['jumlah'];
                if($count != 0){

                    ?>
              <td rowspan = <?php echo $count?>>Senin</td>
              <?php
                $query = "SELECT * FROM jadwal LEFT JOIN krs ON jadwal.Kode_Jadw = krs.Kode_Jadw
                    LEFT JOIN matakuliah on jadwal.Kode_MK = matakuliah.Kode_MK
                    WHERE NIM = '{$_SESSION['username']}' AND Hari = 'Senin' 
                    ORDER BY Jam_Mulai;";
                $result = mysqli_query($db, $query);
                $count = 0;
                while($row = mysqli_fetch_array($result)){
                    if($count != 0) echo '<tr>';
                    echo '<td>'.$row['Nama_M'].'</td>
                    <td>'.$row['Jam_Mulai'].'</td>
                    <td>'.$row['ruangan'].'</td>
                    <td>'.$row['Pengampu'].'</td>
                    </tr>';
                    $count++;
                }
            }
                ?>

<?php
                echo '<tr>'; //Selasa
                $query = "SELECT COUNT(*) as jumlah
                        FROM jadwal LEFT JOIN krs ON jadwal.Kode_Jadw = krs.Kode_Jadw
                        WHERE NIM = '{$_SESSION['username']}' AND Hari = 'Selasa' 
                        ORDER BY Jam_Mulai
                    ;";
                $result = mysqli_query($db, $query);
                $count = mysqli_fetch_assoc($result)['jumlah'];
                if($count != 0){
                
              ?>
              <td rowspan = <?php echo $count?>>Selasa</td>
              <?php
                $query = "SELECT * FROM jadwal LEFT JOIN krs ON jadwal.Kode_Jadw = krs.Kode_Jadw
                    LEFT JOIN matakuliah on jadwal.Kode_MK = matakuliah.Kode_MK
                    WHERE NIM = '{$_SESSION['username']}' AND Hari = 'Selasa' 
                    ORDER BY Jam_Mulai;";
                $result = mysqli_query($db, $query);
                $count = 0;
                while($row = mysqli_fetch_array($result)){
                    if($count != 0) echo '<tr>';
                    echo '<td>'.$row['Nama_M'].'</td>
                        <td>'.$row['Jam_Mulai'].'</td>
                        <td>'.$row['ruangan'].'</td>
                        <td>'.$row['Pengampu'].'</td>
                    </tr>';
                    $count++;
                }
            }
            ?>
            <?php
                echo '<tr>'; //Rabu
                $query = "SELECT COUNT(*) as jumlah
                        FROM jadwal LEFT JOIN krs ON jadwal.Kode_Jadw = krs.Kode_Jadw
                        WHERE NIM = '{$_SESSION['username']}' AND Hari = 'Rabu' 
                        ORDER BY Jam_Mulai
                    ;";
                $result = mysqli_query($db, $query);
                $count = mysqli_fetch_assoc($result)['jumlah'];
                if($count != 0){   
              ?>
              <td rowspan = <?php echo $count?>>Rabu</td>
              <?php
                $query = "SELECT * FROM jadwal LEFT JOIN krs ON jadwal.Kode_Jadw = krs.Kode_Jadw
                    LEFT JOIN matakuliah on jadwal.Kode_MK = matakuliah.Kode_MK
                    WHERE NIM = '{$_SESSION['username']}' AND Hari = 'Rabu' 
                    ORDER BY Jam_Mulai;";
                $result = mysqli_query($db, $query);
                $count = 0;
                while($row = mysqli_fetch_array($result)){
                    if($count != 0) echo '<tr>';
                    echo '<td>'.$row['Nama_M'].'</td>
                        <td>'.$row['Jam_Mulai'].'</td>
                        <td>'.$row['ruangan'].'</td>
                        <td>'.$row['Pengampu'].'</td>
                    </tr>';
                    $count++;
                }
            }
            ?>
            <?php
                echo '<tr>'; //Kamis
                $query = "SELECT COUNT(*) as jumlah
                        FROM jadwal LEFT JOIN krs ON jadwal.Kode_Jadw = krs.Kode_Jadw
                        WHERE NIM = '{$_SESSION['username']}' AND Hari = 'Kamis' 
                        ORDER BY Jam_Mulai
                    ;";
                $result = mysqli_query($db, $query);
                $count = mysqli_fetch_assoc($result)['jumlah'];
                if($count != 0){   
              ?>
              <td rowspan = <?php echo $count?>>Kamis</td>
              <?php
                $query = "SELECT * FROM jadwal LEFT JOIN krs ON jadwal.Kode_Jadw = krs.Kode_Jadw
                    LEFT JOIN matakuliah on jadwal.Kode_MK = matakuliah.Kode_MK
                    WHERE NIM = '{$_SESSION['username']}' AND Hari = 'Kamis' 
                    ORDER BY Jam_Mulai;";
                $result = mysqli_query($db, $query);
                $count = 0;
                while($row = mysqli_fetch_array($result)){
                    if($count != 0) echo '<tr>';
                    echo '<td>'.$row['Nama_M'].'</td>
                        <td>'.$row['Jam_Mulai'].'</td>
                        <td>'.$row['ruangan'].'</td>
                        <td>'.$row['Pengampu'].'</td>
                    </tr>';
                    $count++;
                }
            }
            ?>
            <?php
                echo '<tr>'; //Jumat
                $query = "SELECT COUNT(*) as jumlah
                        FROM jadwal LEFT JOIN krs ON jadwal.Kode_Jadw = krs.Kode_Jadw
                        WHERE NIM = '{$_SESSION['username']}' AND Hari = 'Jumat' 
                        ORDER BY Jam_Mulai
                    ;";
                $result = mysqli_query($db, $query);
                $count = mysqli_fetch_assoc($result)['jumlah'];
                if($count != 0){   
              ?>
              <td rowspan = <?php echo $count?>>Jumat</td>
              <?php
                $query = "SELECT * FROM jadwal LEFT JOIN krs ON jadwal.Kode_Jadw = krs.Kode_Jadw
                    LEFT JOIN matakuliah on jadwal.Kode_MK = matakuliah.Kode_MK
                    WHERE NIM = '{$_SESSION['username']}' AND Hari = 'Jumat' 
                    ORDER BY Jam_Mulai;";
                $result = mysqli_query($db, $query);
                $count = 0;
                while($row = mysqli_fetch_array($result)){
                    if($count != 0) echo '<tr>';
                    echo '<td>'.$row['Nama_M'].'</td>
                        <td>'.$row['Jam_Mulai'].'</td>
                        <td>'.$row['ruangan'].'</td>
                        <td>'.$row['Pengampu'].'</td>
                    </tr>';
                    $count++;
                }
            }
            ?>

      </tbody>
  </table>

</center>
<script>
window.print();
</script>
</body>
</html>