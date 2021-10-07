<?php 

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <title>Login</title>

    <style type="text/css">body{background-color :skyblue}</style>
</head>
<body>

        <div align="center">

        <div class="container">

        <h2 class=text-primary>Sign in</h2>
    
    <form action="login.php" method="post">

    <div class="form-group">
            <div class="col-sm-8" align="left">
        Username :
        <input type="text" name="username" required class="form-control" placeholder="Username">
        </div>
            </div>
        <br>
        <div class="form-group">
            <div class="col-sm-8" align="left">
        Password :
        <input type="password" name="password" required class="form-control" placeholder="password">
        <br>
        </div>
            </div>
        <input type="submit" name="submit" value="Login" class="btn btn-primary my-3">
        <a href="register.php" class="btn btn-secondary">Go to register</a>
    </form>
        </div>
        </div>
    
</body>
</html>


   

