<?php
    require_once("../database/db_login.php");
    session_start();
    $id = $_GET['id'];

$result = mysqli_query($db, "DELETE FROM matakuliah WHERE Kode_Mk = '{$id}'");

if(!$result){
    echo "<script>alert('Query Gagal')</script>";
    
}
header("Location: matkul.php");



?>