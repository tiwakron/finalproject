<?php
require ('dbconnect.php');

$sql = "SELECT * FROM employees";
$result=mysqli_query($connect,$sql);

$count=mysqli_num_rows($result);
//$order=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> จัดการข้อมูล admin</title>

    <!--ตกแต่งด้วย bootstrap 5.1-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</head>
<body>

        <div class="text-center">
    <h2 class="text-primary my-3">ข้อมูลพนักงาน(admin)</h2>
        </div>

<div class="container">

<!--คำสั่งให้ลบข้อมูลจากการกรอก id-->  
<?php if($count>0){?>
    <form action="deleteTextFiled.php" class="form-group" method="POST"> 
        <label for="">ลบรหัสพนักงาน</label> 
        <input type="text" placeholder="กรอกรหัสพนักงานเพื่อลบข้อมูล" name="idemployee" class="form-control">  
        <input type="submit" value="ลบข้อมูล" class="btn btn-danger my-2">  
    </form>
    
    <!--คำสั่ง table สร้างตาราง-->
    <table border="3" class="table table-striped table-hover"> 
        <thead>
            <tr>
                <th>รหัสพนักงาน</th>
                <th>username</th>
                <th>password</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>ตำแหน่ง</th>
                <th>แผนก</th>
                <th>เบอร์โทร</th>
                <th>email</th>
                <th>เพศ</th>
                <th>แก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
            </tr>
        </thead>
        <tbody>
         <!--ใช้คำสั่ง while + fetch assoc ดึงข้อมูลจาก batabase ในรูปแบบ array มาโชว์ที่ตารางพนักงาน-->
            <?php while($row=mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["username"];?></td>
                <td><?php echo $row["password"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["lastname"];?></td>
                <td><?php echo $row["position"];?></td>
                <td><?php echo $row["department"];?></td>
                <td><?php echo $row["phone"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["gender"];?></td>
            <td>
              <a href="editForm.php?id=<?php echo $row["id"]?>" class="btn btn-primary">แก้ไข</a> <!--ปุ่มลิงค์ไปหน้าแมูลพนักงาน-->

                <td><!--ปุ่มลบข้อมูลพนักงานที่อยู่บนตาราง+คำสั่งลบ id พนักงาน-->
                     <a href="deleteQueryString.php?idemp=<?php echo $row["id"];?>" 
                    class="btn btn-danger"
                    onclick="return confirm('แน่ใจนะว่าต้องการลบข้อมูล')" 
                    >ลบข้อมูล</a>
                </td>
            </tr>
        <?php } ?>    
        </tbody>
    </table>

    
    <?php } else {?>
    <div class="alert alert-danger"> <!--แสดงข้อความ Alert เมื่อในตารางไม่มีข้อมูล-->
        <b>ไม่มีข้อมูลพนักงาน !!!<b>
    </div>
    <?php } ?>

    
    <a href="insertform.php" class="btn btn-success">เพิ่มข้อมูล</a> <!--ปุ่มเพิ่มข้อมูล-->
    <a href="index.php" class="btn btn-secondary">กลับหน้าแรก</a> <!--ปุ่มกลับหน้าแรก-->
</div>



</body>
</html>