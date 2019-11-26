<?php include 'header.php'?>
<?php
    require_once('../database/db_login.php');
    $query = "SELECT * FROM matakuliah";
    $result = mysqli_query($db, $query);
    if(!$result){
        die("Query gagal");
        mysqli_error();
    }

?>
<h1 style="text-align: center;">Mata Kuliah</h1>
<table class="table table-light">
    <thead>
        <th>Kode</th>
        <th>Nama</th>
        <th>Jumlah Kelas</th>
        <th>Semester</th>
        <th>SKS</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php
        while($row = mysqli_fetch_array($result)){
            echo '<tr>';
                echo '<td>'.$row['Kode_MK'].'</td>';
                echo '<td>'.$row['Nama_M'].'</td>';
                echo '<td>'.$row['Jumlah_kel'].'</td>';
                echo '<td>'.$row['semester'].'</td>';
                echo '<td>'.$row['sks'].'</td>';
                echo '<td>
                    <a class="btn btn-primary" href="matkul-interface.php?id='.$row['Kode_MK'].'"role="button">Edit</a>
                    <a class="btn btn-primary" href="matkul-delete.php?id='.$row['Kode_MK'].'"role="button">Delete</a>
                </td>';

            echo '</tr>';
            // print_r($row);
            // print_r('\n');
        }

        ?>
    
    </tbody>
</table>
<a name="tambah" id="" class="btn btn-primary" href="matkul-interface.php" role="button">Tambah Mata Kuliah</a>



<?php include 'footer.php' ?>