<?php
//เรียกไฟล์การเชื่อมต่อฐานข้อมูล
	require('dbconnect.php');

//รับค่าที่ส่งมาจากไฟล์ insertform.php ลงในตัวแปร
	$username=$_POST["username"];
	$password=$_POST["password"];
	$name=$_POST["name"];
	$lastname=$_POST["lastname"];
	$position=$_POST["position"];
	$department=$_POST["department"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$gender=$_POST["gender"];

//บันทึกข้อมูล
	$sql="insert into employees(username,password,name,lastname,position,department,phone,email,gender) values('$username','$password','$name','$lastname','$position','$department','$phone','$email','$gender')";

	$result=mysqli_query($connect,$sql);//คำสั่งฐานข้อมูลเก็บในตัวแปร result

//รับคำสั่งฐานข้อมูล	
if($result){
    header("location:employeedata.php"); //เมื่อเพิ่มข้อมูลเสร็จแล้วให้กลับไปหน้าข้อมูลพนักงาน
    exit(0);
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}
?>