<?php 

    session_start();

    //คำสั่งเรียกไฟล์เพื่อทำการเชื่อม database
    require_once "connection.php";

    //เงื่อนไขส่งค่า submit
    if (isset($_POST['submit'])) {

        //เก็บค่าตัวแปรแบบฟอร์ม register
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];

        //เรียกใช้คำสั่ง sql เช็ค username ใน database
        $user_check = "SELECT * FROM employees WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        //แสดงคำสั่งเมื่อมี Username ซ่้ำกันใน database
        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            $passwordenc = md5($password);
            
            //เก็บค่าตัวแปรแบบฟอร์มลง database
            $query = "INSERT INTO employees (username, password, name, lastname, userlevel)
                        VALUE ('$username', '$passwordenc', '$name', '$lastname', 'a')";
            $result = mysqli_query($conn, $query);
            
            //แสดงข้อความเมื่อมีการ register สำเร็จ
            if ($result) {
                $_SESSION['success'] = "Insert user successfully";
                header("Location: index.php");
            } else { //แสดงข้อความเมื่อมีการ register ล้มเหลว
                $_SESSION['error'] = "Something wrong";
                header("Location: index.php");
            }
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!---ตกแต่งด้วย bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <style type="text/css">body{background-color :skyblue}</style> <!---แสดงสี backgroud-->
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <!---ให้ทำการ action data หน้าเดิม-->

        <div class="container">

        <h2 class="text-primary my-3">Register</h2>

        <!---form register-->
        <label for="username" class="form=group">Username :</label>
        <input type="text" name="username" placeholder="Enter your username" required class="form-control">
        <br>
        <label for="password" class="form=group">Password :</label>
        <input type="password" name="password" placeholder="Enter your password" required class="form-control">
        <br>
        <label for="name" class="form=group">name :</label>
        <input type="text" name="name" placeholder="Enter your firstname" required class="form-control">
        <br>
        <label for="lastname" class="form=group">Lastname :</label>
        <input type="text" name="lastname" placeholder="Enter your lastname" required class="form-control">
        <br>
        <input type="submit" name="submit" value="register" class="btn btn-success">
        <a href="index.php"class="btn btn-info">Home</a>

        </div>
    
        
    
    </form>

    
    
</body>
</html>