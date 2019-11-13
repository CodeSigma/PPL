<?php include "../header.php"; ?>
<?php include "../sidebar.php"; ?>

<div class="row">
    <form method="POST" action="user_data-interface.php">
        <input class="form-control input-search" type="text" name="id" size="30">
        <button type="submit" class="btn btn-primary">Input</button>
    </form>
</div>    
    
<div class="row">

        <?php
        require_once "../../database/db_login.php";
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
            <td><a href="user_data-interface.php?id='.$row['NIM'].'&query=edit">&nbsp Edit &nbsp</a> 
            <a href="user_data-delete.php?id='.$row['NIM'].'">&nbsp Delete &nbsp</a></td>';
            echo '</tr>';
        }

        ?>
    </tbody>
    </table>
</div>
