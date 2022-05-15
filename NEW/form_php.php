<?php
session_start();
if(empty($_SESSION['level'])){
    header('location:index.php');
    alert("admin mới được làm thế!!") ;
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
	<form method="POST" action="process_php.php">
		Tiêu đề
		<input type="text" name="tieu_de">
		<br>
		Nội dung
		<textarea name="noi_dung"> </textarea>
		<br>
		Link ảnh
		<input type="text" name="anh">
		<button>Thêm</button>
	</form>


</body>






	</html>