<?php 
//คำสั่งติดต่อกลับฐานข้อมูล
require("dbconnect.php"); 

//ส่งข้อมูล id ด้วย get
$id=$_GET["id"];

//คำสั่ง sql เลือกตารางพนักงาน id
$sql="SELECT * FROM employees WHERE id = $id";

$result=mysqli_query($connect,$sql);

//แสดงข้อมูลแบบ array fetch_assoc
$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลข้อมูลพนักงาน</title >

    <!--ตกแต่งด้วย bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<h2 class="text-primary" align="center">แบบฟอร์มแก้ไขข้อมูลพนักงาน</h2>

<div class="container">

    <br>
    <form action="updateData.php" method="post"> <!--ส่งข้อข้อมูล action ไปยัง updateData.php-->

    <input type="hidden" value="<?php echo $row["id"];?>" name="id"> 
    
    <div class="form-group">
        <label for="">username :</label>
        <input type="text" name="username" class="form-control" value="<?php echo $row["username"];?>"> <!--คำสั่ง value เก็บข้อมูลไว้ในตัวแปร row "username"-->
    </div>
   <br>

   <div class="form-group">
        <label for="">password :</label>
        <input type="text" name="password" class="form-control" value="<?php echo $row["password"];?>"> <!--คำสั่ง value เก็บข้อมูลไว้ในตัวแปร row "password"-->
    </div>
   <br>

    <div class="form-group">
        <label for="">ชื่อพนักงาน :</label>
        <input type="text" name="name" class="form-control" value="<?php echo $row["name"];?>"> <!--คำสั่ง value เก็บข้อมูลไว้ในตัวแปร row "name"-->
    </div>
   <br>

    <div class="form-group">
        <label for="">นามสกุล :</label>
        <input type="text" name="lastname" class="form-control" value="<?php echo $row["lastname"];?>"> <!--คำสั่ง value เก็บข้อมูลไว้ในตัวแปร row "lastname"-->
    </div>
    <br>

    <div class="form-group">
        <label for="">ตำแหน่ง :</label>
        <input type="text" name="position" class="form-control" value="<?php echo $row["position"];?>"> <!--คำสั่ง value เก็บข้อมูลไว้ในตัวแปร row "position"-->
    </div>
   <br>

   <div class="form-group">
        <label for="">แผนก :</label>
        <input type="text" name="department" class="form-control" value="<?php echo $row["department"];?>"> <!--คำสั่ง value เก็บข้อมูลไว้ในตัวแปร row "department"-->
    </div>
   <br>

   <div class="form-group">
        <label for="">เบอร์โทร :</label>
        <input type="number" name="phone" class="form-control" value="<?php echo $row["phone"];?>"> <!--คำสั่ง value เก็บข้อมูลไว้ในตัวแปร row "phone"-->
    </div>
   <br>

   <div class="form-group">
        <label for="">อีเมล์ :</label>
        <input type="email" name="email" class="form-control" value="<?php echo $row["email"];?>"> <!--คำสั่ง value เก็บข้อมูลไว้ในตัวแปร row "email"-->
    </div>
   <br>

    <div class="form-group"> <!--คำสั่ง if else และ checked เพื่อตรวจสอบเพศดั้งเดิมของพนักงานก่อนทำการแก้ไข้ข้อมูล-->
                <label for="gender">เพศ</label>
             <?php
                if($row["gender"] == "male"){
                    echo "<input type='radio' name='gender' value='male' checked>ชาย"; 
                    echo "<input type='radio' name='gender' value='female'>หญิง";
                    echo "<input type='radio' name='gender' value='other'>อื่นๆ";
                }else if($row["gender"] == "female"){
                    echo "<input type='radio' name='gender' value='male'>ชาย";
                    echo "<input type='radio' name='gender' value='female' checked>หญิง";
                    echo "<input type='radio' name='gender' value='other'>อื่นๆ";
                }else{
                    echo "<input type='radio' name='gender' value='male'>ชาย";
                    echo "<input type='radio' name='gender' value='female'>หญิง";
                    echo "<input type='radio' name='gender' value='other' checked>อื่นๆ";
                }
            ?>
     </div>
    <br>
    <br>
    <input type="submit" value="อัพเดตข้อมูล" class="btn btn-success"> <!--ปุ่มอัพเดตข้อมูลส่ง action ไปยัง updateData.php-->
    <a href="employeedata.php" class="btn btn-primary">กลับ</a>  <!--ปุ่มกลับไปยังหน้าตารางข้อมูลพนักงาน-->
    </form>
    <br>
</div>
        
</body>
</html>