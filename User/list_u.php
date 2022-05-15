<?php session_start(); ?>
<?php if (!isset($_SESSION['id']) ) {
	header('location:../index.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<a href="../NEW/index.php">Trang chủ</a>
<?php
include '../connectDB.php';
$level=0;

$sql="select * from cus
where level=$level";

$ket_qua= mysqli_query($ket_noi,$sql);
?>
<table border="1" width="100%">
	<tr>
		<td>
			ID
		</td>
		<td>
			Tên
		</td>
		<td>
			Email
		</td>
		<td></td>
	</tr>
	<?php foreach ($ket_qua as $each_member) { ?>
	<tr>
		<td>
			<?php echo $each_member['id'] ?>
		</td>
		<td>
			<?php echo $each_member['name'] ?>
		</td>
		<td>
			<?php echo $each_member['email'] ?>
		</td>
		<td>
			<a href="delete_user.php?id=<?php echo $each_member['id'] ?> ">Xóa</a>
		</td>

	</tr>
	<?php } ?> 
	<tr>
		

	</tr>


</table>

</body>
</html>