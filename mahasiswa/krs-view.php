<?php
        // session_start();
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
                echo '<td>
                    <a name="" id="" class="btn btn-primary" href="krs-delete.php?id='.$row['NIM'].'&kode_j='.$row['Kode_Jadw'].'" role="button">Delete</a>
                </td>';
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