<?php
        $query = "SELECT * FROM krs LEFT JOIN jadwal ON krs.Kode_Jadw = jadwal.Kode_Jadw
            LEFT JOIN matakuliah ON jadwal.Kode_MK = matakuliah.Kode_MK 
            WHERE krs.NIM = '{$_SESSION['username']}';";
        $result = mysqli_query($db,$query);
        if(!$result){
            // print_r($query);
            print_r($query);
            die("Query gagal". mysqli_connect_error());
        }
        

        ?>
        <table class="table table-light">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
        <?php
        $count = 1;
        while($row = mysqli_fetch_array($result)){
            echo '<tr>';
                echo '<td>'.$count.'</td>';
                echo '<td>'.$row['Kode_MK'].'</td>';
                echo '<td>'.$row['Nama_M'].'</td>';
                echo '<td>'.$row['sks'].'</td>';
                echo '<td>'.$row['semester'].'</td>';
                echo '<td>'.$row['Kelas'].'</td>';
                echo '<td>
                    <a name="" id="" class="btn btn-primary" href="krs-delete.php?id='.$row['NIM'].'&kode_j='.$row['Kode_Jadw'].'" role="button">Delete</a>
                </td>';
            echo '<tr>';
            $count++;
        }
        ?>
        </table>
        <a name="" id="" class="btn btn-primary" href="krs.php" role="button">Simpan</a>
        