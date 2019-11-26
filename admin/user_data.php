<?php include "header.php"; ?>
    
    <div class="col-xl-12">
        <h1 style="text-align: center;">Daftar Pengguna</h1>
        <div class="col-xl-10  search" style="margin-left: 60px;">
            
            <form method="POST" action="user_data-interface.php">
                <table>
                    <tr>
                        <td><input class="form-control input-search" type="text" name="id" size="20"></td>
                        <td><button type="submit" class="btn btn-primary">Input</button></td>
                    </tr>
                </table>
            </div>    
        </div>
    </form>
    
            

<?php
if($_GET){
    if($_GET['alert'] == 1){
        ?>
        <script>
            alert("ID sudah ada");
        </script>
    <?php
    }
}

require_once "../database/db_login.php";
$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($db, $query);

if(!$result){
    die ("Query Error");
    mysqli_error();
}
?>

<table class="table table-light">
    <thead>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </thead>
    <tbody>
<?php
while($row = mysqli_fetch_array($result)){           
    echo '<tr>';
    echo  '<td>'.$row['NIM'].'</td>';
    echo '<td>'.$row['Nama'].'</td>';
    echo'<td>'.$row['Alamat'].'</td>';
    echo '
    <td><a href="user_data-interface.php?id='.$row['NIM'].'">&nbsp Edit &nbsp</a> 
    <a href="user_data-delete.php?id='.$row['NIM'].'">&nbsp Delete &nbsp</a></td>';
    echo '</tr>';
}

        ?>
    </tbody>
    </table>

<?php include "footer.php" ?>
