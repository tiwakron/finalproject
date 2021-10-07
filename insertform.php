<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มบันทึกข้อมูลพนักงาน</title>
    
    <!--ตกแต่งด้วย bootstrap 5.0-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<h2 class="text-primary my-3" align="center">แบบฟอร์มบันทึกข้อมูลพนักงาน</h2>

<div class="container"> 

    <br>
    <form action="insertdata.php" method="post"> <!--ส่งข้อข้อมูล action ไปยัง insertdata.php-->

    <div class="form-group">
        <label for="">username :</label>
        <input type="text" name="username" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label for="">password :</label>
        <input type="password" name="password" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label for="">ชื่อพนักงาน :</label>
        <input type="text" name="name" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label for="">นามสกุล :</label>
        <input type="text" name="lastname" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label for="">ตำแหน่ง :</label>
        <input type="text" name="position" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label for="">แผนก :</label>
        <input type="text" name="department" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label for="">เบอร์โทร :</label>
        <input type="number" name="phone" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label for="">อีเมล์ :</label>
        <input type="email" name="email" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label for="gender">เพศ :</label>
        <input type="radio" name="gender" value="male">ชาย
        <input type="radio" name="gender" value="female">หญิง
        <input type="radio" name="gender" value="other">อื่นๆ
    </div>
    <br>
    <br>

    <input type="submit" value="บันทึกข้อมูล" class="btn btn-success"> <!--ปุ่มบันทึกข้อมูล action ไปยัง insertData.php-->
    <input type="reset" value="รีเซ็ท" class="btn btn-danger">  <!--ปุ่มบัน reset ล้างข้อมูล-->
    <a href="employeedata.php" class="btn btn-primary">กลับ</a> <!--ปุ่มบันกลับไปยังหน้าตารางข้อมูลพนักงาน-->
    </form>
    <br>
</div>
        
</body>
</html>