<?php
        $query = "SELECT * FROM krs WHERE NIM = {$_SESSION['username']};";
        $result = mysqli_query($db,$query);
        if(!$result){
            // print_r($query);
            die("Query gagal". mysqli_connect_error());
        }
        
        $count = 1;
        while($row = mysqli_fetch_array($result)){
            echo '<tr>';
                echo '<td>'.$count.'</td>';
                echo '<td>'.$row['Kode_MK'].'</td>';
                $q1 = "SELECT * FROM matakuliah WHERE Kode_MK = '{$row['Kode_MK']}';";
                // print_r($q1);
                $res2 = mysqli_query($db,$q1);
                while($r2 = mysqli_fetch_array($res2)){
                    echo '<td>'.$r2['Nama_M'].'</td>';
                    echo '<td>'.$r2['sks'].'</td>';
                    echo '<td>'.$r2['semester'].'</td>';
                }
                print_r($r2);
                echo '<td>';
                ?>
                    <div class="form-group kelas">
                        <select id="my-select" class="form-control" name="">
                            <option value="">--</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>            

                <?php
                echo '</td>';
                
            echo '<tr>';
            $count++;
        }

//     $nim = $_SESSION['NIM'];
//     require_once("../database/db_login.php");
//     $query = "SELECT mk.Kode_MK, mk.Nama_M, mk.semester, mk.sks, mk.Jumlah_kel, krs.nilai FROM matakuliah as mk, krs WHERE matakuliah.Kode_MK=krs.Kode_MK AND krs.nilai NOT 4 AND krs.NIM=".$nim;
//     $result = mysqli_query($db,$query);
//     $i = 1;
//     while($row = $result->fetch_object()){
//         echo '<tr>';
//         echo '<td>'.$i.'</td>';
//         echo '<td>'.$row->Kode_MK.'</td>';
//         echo '<td>'.$row->Nama_M.'</td>';
//         echo '<td>'.$row->kelas.'</td>'; 
//         echo '<td>'.$row->semester.'</td>'; 
//         if($row->nilai == 3 || $row->nilai == 2){
//             echo '<td>P</td>';
//         }else if($row->nilai == 1 || $row->nilai == 0){
//             echo '<td>U</td>';
//         }else{
//             echo '<td>B</td>';
//         }
//         echo '<td>'.$row->sks.'</td>';
//         echo '</tr>';
//         $i++;
//     }
//     ?>