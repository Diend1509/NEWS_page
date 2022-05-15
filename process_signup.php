<?php 

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$level=0;
require 'connectDB.php';

$sql="select count(*) from cus
where email='$email'";

$result=mysqli_query($ket_noi,$sql);

$number_rows = mysqli_fetch_array($result)['count(*)'];

if($number_rows == 1){
	header('location:signup.php?error= Trùng email rồi.');
	exit();
}
$sql="insert into cus(name,email,password,level)
value('$name','$email','$password','$level')";
mysqli_query($ket_noi,$sql);

$sql="select id from cus
where email='$email'";
$result = mysqli_query($ket_noi,$sql);
$id=mysqli_fetch_array($result)['id'];

session_start();
$_SESSION['id']=$id;
$_SESSION['name']= $name;
$_SESSION['level']= $level;
header('location:NEW/index.php');
mysqli_close($ket_noi);