<html>
<head>
    <link rel="stylesheet" href="css/custom.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
</head>

<body>
    <?php session_start();
        if(isset($_SESSION['level'])){
            if($_SESSION['level'] == '1'){
                header("Location: admin/main.php");
            }else{
                header("Location: mahasiswa/main.php");
            }
        }


    ?>
    
    <div class="wrapper">
        <div class="left">
            <h1>SISTEM INFORMASI AKADEMIK UNIVERSITAS DIPONEGORO</h1>
            <!-- <img src="./images/bgleft.jpeg" alt="backgambar"> -->
        </div>
        <div class="right">
            <img src="images/undip-logo.png" alt="logo">
            <form method="POST" action="login_session.php">
                <input type="text" name="username" placeholder="username" required>
                <input type="password" name="password" placeholder="password" required>
                <input type="submit" value="login">
            </form>
        </div>
    </div>
    <?php
    if(isset($_SESSION['wrong_pass'])){
        ?>
            <script>
                document.addEventListener("DOMContentLoaded", function(){
                    alert("Username atau Password salah");
                });
            </script>
        <?php
        session_destroy();
    }
    ?>
    
    
</body>
</html>