
<?php 
require('dbconnect.php');//เรียกไฟล์การเชื่อมต่อฐานข้อมูล

//รับค่ามาจากแบบฟอร์มลงตัวแปร id
$id=$_GET["idemp"];

//คำสั่ง Sql ลบข้อมูลใน Database
$sql="DELETE FROM employees WHERE id =$id";

$result=mysqli_query($connect,$sql);//คำสั่งฐานข้อมูลเก็บในตัวแปร result

if($result){
    header("location:employeedata.php");//เมื่อเพิ่มข้อมูลเสร็จแล้วให้กลับไปหน้าข้อมูลพนักงาน
    exit(0);
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}
?>
