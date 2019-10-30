
<?php
	$db_host='localhost';
	$db_database='ppl';
	$db_username='root';
    $db_password='';
    $db = new mysqli($db_host, $db_username, $db_password, $db_database);
    if (mysqli_connect_errno()){
        die ("Tidak dapat terhubung dengan database: <br />".
        mysqli_connect_error( ));
    }
    if ($db->connect_errno){  
        die ("Tidak dapat terhubung dengan database: <br />". $db>connect_error); 
    } 
    
?>