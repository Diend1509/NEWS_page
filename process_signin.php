<?php
$email= $_POST['email'];
$password= $_POST['password'];
require 'connectDB.php';

$sql="select * from cus
where email='$email' and password = '$password'";

$result=mysqli_query($ket_noi,$sql);

$number_rows=mysqli_num_rows($result);

if($number_rows == 1){
	$each=mysqli_fetch_array($result);
	session_start();
	$_SESSION['id']= $each['id'];
	$_SESSION['name']= $each['name'];
	$_SESSION['level']= $each['level'];

	header('location:NEW/index.php');
	exit();
	}

header('location:signin.php?error=Tên đăng nhập hoặc mật khẩu không đúng');
?>