<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/pages.css">
<!-- <link rel="stylesheet" href="style/sidebar.css"> -->

<title>Title</title>
</head>
<body>
<?php require_once("../database/db_login.php");?>
<div class="col-xl-12 head">
    <div class="menu">
        <?php session_start();
            if($_SESSION['level'] != '2'){
                header("Location: ../index.php");
                
            }
        ?>
        
        <img src="../images/menu.png" alt="menu">
    </div>
    <div class="logo">
        <img src="../images/logo.png" alt="logo">
        <p>UNIVERSITAS DIPONEGORO</p>
    </div>
</div>
<div class="col-xl-12 page">
    
    <div class="row">
        <div class="col-xl-2 sidebar">
            <?php include "sidebar.php" ?>
        </div>
        <div class="col-xl-10 mainpage">
