<?php include 'header.php'?>




<?php
    require_once('../database/db_login.php');
    $query = "SELECT * FROM jadwal";
    $result = mysqli_query($db, $query);
    if(!$result){
        die("Query gagal");
        mysqli_error();
    }

?>
<h1 style="text-align: center;">Jadwal</h1>
<table class="table table-light">
    <thead>
        <th>Kode</th>
        <th>Kelas</th>
        <th>Hari</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        <th>ruangan</th>
        <th>Pengampu</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php
        while($row = mysqli_fetch_array($result)){
            echo '<tr>';
                echo '<td>'.$row['Kode_MK'].'</td>';
                echo '<td>'.$row['Kelas'].'</td>';
                echo '<td>'.$row['Hari'].'</td>';
                echo '<td>'.$row['Jam_Mulai'].'</td>';
                echo '<td>'.$row['Jam_Mulai'].'</td>';
                echo '<td>'.$row['ruangan'].'</td>';
                echo '<td>'.$row['Pengampu'].'</td>';
                echo '<td>
                    <a class="btn btn-primary" href="jadwal-delete.php?id='.$row['Kode_Jadw'].'"role="button">Delete</a>
                </td>';

            echo '</tr>';
            // print_r($row);
            // print_r('\n');
        }

        ?>
    
    </tbody>
</table>

<td>
    <a name="" id="" class="btn btn-primary" href="jadwal-add-interface.php" role="button" align="right">Tambah Jadwal</a>
</td>

<?php include 'footer.php' ?>
