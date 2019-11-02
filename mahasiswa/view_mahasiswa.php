<?php include "header.php"; ?>

<?php

        require_once("../database/db_login.php");
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($db,$query);
        if(!$result){
            die("Query gagal". mysqli_connect_error());
        }
        ?>

        <table class="table table-dark">
            <thead>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>".$row['NIM']."</td>";
                            echo "<td>".$row['Nama']."</td>";
                            echo "<td>".$row['Alamat']."</td>";
                            echo "<td>".$row['password']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>




<?php include "footer.php"; ?>



