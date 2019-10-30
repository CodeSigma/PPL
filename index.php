<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <div class="row">
        <div class="col-xl-8 col-sm align-middle ">
            <div class="bgimage"></div>
            <div class="sia">
                <h1 class="display-3">SISTEM INFORMASI AKADEMIK</h1>
                <h1 class="display-4">UNIVERSITAS DIPONEGORO</h1>
            </div>


        </div>


        <div class="col-xl-4 col-sm-12 login">
            <form method="POST" action="login_session.php">
                <table>
                <tr>
                    <td>Username:</td>
                    <td><input class="form-control" type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input class="form-control" type="password" name="password"></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary">Login</button></td>
                </tr>   
                </table>
                
                
            </form>
        </div>
    </div>






    <script src="js/bootstrap.min.js" async defer></script>
</body>

</html>