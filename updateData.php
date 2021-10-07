<?php 
//คำสั่งเรียกไฟล์การเชื่อมต่อฐานข้อมูล dbconnect
require("dbconnect.php");

$id=$_POST["id"];

//รับค่าที่ส่งมาจากไฟล์ editForm.php ลงในตัวแปร
$username=$_POST["username"];
$password=$_POST["password"];
$name=$_POST["name"]; 
$lastname= $_POST["lastname"];
$position=$_POST["position"];
$department=$_POST["department"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$gender=$_POST["gender"];

//บันทึกข้อมูลอัพเดทข้อมูลพนักงาน
$sql ="UPDATE employees SET  username ='$username', password='$password', name = '$name', lastname ='$lastname', position='$position', department='$department', phone='$phone', email='$email', gender = '$gender'   WHERE id = $id";

$result=mysqli_query($connect,$sql);//คำสั่งฐานข้อมูล

if($result){
    header("location:employeedata.php"); //เมื่อเพิ่มข้อมูลเสร็จแล้วให้กลับไปหน้าข้อมูลพนักงาน
    exit(0);
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น".mysqli_error($connect);
}
?>