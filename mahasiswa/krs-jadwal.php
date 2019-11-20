<?php
  
  
?>

  <table class="table table-light">
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

