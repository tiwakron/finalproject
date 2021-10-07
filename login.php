<?php 

    session_start();

    if (isset($_POST['username'])) {

        //คำสั่งเรียกไฟล์เพื่อทำการเชื่อม database
        include('connection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password); //คำสั่งซ่อน password

        //เรียกใช้คำสั่ง sql เช็ค username และ password ใน database
        $query = "SELECT * FROM employees WHERE username = '$username' AND password = '$passwordenc'";

        //คำสั่ง sql เก็บในตัวแปร $result
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            //คำสั่ง sql เรียกใช้ข้อมูลใน database
            $row = mysqli_fetch_assoc($result);
            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['name'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if ($_SESSION['userlevel'] == 'a') {  // กำหนดค่า a คือ admin 
                header("Location: employeedata.php"); //เมื่อล็อกอีนสำเร็จไปที่หน้าจัดการข้อมูล
            }
        } else{
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง');</script>"; //แสดงข้อคว่าม User หรือ Password ไม่ถูกต้อง
             }
    }else{
        header("Location: index.php"); //กลับไปหน้า login
    }

?>

