<?php include "header.php"; ?>

<?php
require_once("../database/db_login.php");
?>


    
    <?php
     if(!$_GET) {
        include "krs-view.php";
        include "krs-jadwal.php";
    }
     else {
        include "krs-add-dropdown.php"; 
        include "krs-edit.php";
     }


     ?>


<!-- <button class = "btn btn-primary" type="submit" name="simpan" href="krs_simpan.php">simpan</button> -->
<?php include "footer.php"; ?>