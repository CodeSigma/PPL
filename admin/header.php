<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../css/bootstrap.min.css">

<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/sidebar.css">
<title>Title</title>
</head>
<body>
<div class="row">

    <?php session_start();
    session_write_close();
    if($_SESSION['level'] != "1"){
        header('Location: not_found');
    }
    
    
    ?>
    <div class="col-xl-2 sidebar">
        <?php include "sidebar.php" ?>
    </div>
    <div class="col-xl-10 mainpage">