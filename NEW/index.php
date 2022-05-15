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

<a href="index.php"> <h1>Trang chủ!</h1> </a>
<a href="form_php.php"> Thêm bài viết</a>
<a href="../signout.php">Đăng xuất</a>
<?php if($_SESSION['level']==1){
	include '../menu.php';
} ?>

<?php
include 'connect.php';




//pagination
$trang=1;
if(isset($_GET['trang'])){
	$trang=$_GET['trang'];
}
$tim_kiem="";
if(isset($_GET['tim_kiem'])){
	$tim_kiem=$_GET['tim_kiem'];
}
$spl_so_tin_tuc = "select count(*) from tin_tuc
where tieu_de
like '%$tim_kiem%'";
$mang_so_tin_tuc= mysqli_query($ket_noi,$spl_so_tin_tuc);
$ket_qua_so_tin_tuc = mysqli_fetch_array($mang_so_tin_tuc);
$so_tin_tuc=$ket_qua_so_tin_tuc['count(*)'];

$so_tin_tuc_tren_1_trang=3;


$so_trang=ceil($so_tin_tuc / $so_tin_tuc_tren_1_trang);
// die($so_trang);
$bo_qua = $so_tin_tuc_tren_1_trang*($trang-1);



// cach 1
// if(isset($_GET['tim_kiem'])){
// 	$tim_kiem=$_GET['tim_kiem'];
// 	$sql="select * from tin_tuc
// where
// tieu_de like '%$tim_kiem%'";
// }
// else {
// 	$sql="select * from tin_tuc";
// }

//cach 2

//Searching

$sql="select * from tin_tuc 
where tieu_de 
like '%$tim_kiem%'
limit $so_tin_tuc_tren_1_trang offset $bo_qua";

$ket_qua= mysqli_query($ket_noi,$sql);

?>
<table border="1" width="100%">
	<caption>
		<form>
			<input type="search" name="tim_kiem" value="<?php echo $tim_kiem ?>">
		</form>
	</caption>
	<tr>
		<th>Mã</th>
		<th>Tiêu đề</th>
		<th>Ảnh</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>	

<?php foreach($ket_qua as $tung_bai_tin_tuc){ ?>
<tr>
	<td>
		<?php echo $tung_bai_tin_tuc['ma'] ?>	
	</td>
	<td>
		<a href="show.php?ma= <?php echo $tung_bai_tin_tuc['ma'] ?>"> 
		<?php echo $tung_bai_tin_tuc['tieu_de'] ?>
		</a>
	</td>	

	<td width="40%">
		<img src="<?php echo $tung_bai_tin_tuc['anh'] ?>">
	</td>

	<td align="center">
		<a href="form_update.php?ma= <?php echo $tung_bai_tin_tuc['ma'] ?>">
			sửa
		</a>
	</td>
	<td align="center">
		<a href="delete.php?ma= <?php echo $tung_bai_tin_tuc['ma'] ?>">
			Xóa
		</a>
	</td>
	
</tr>
<?php } ?>


</table>
<?php for($i=1; $i<= $so_trang; $i++){ ?>
<a href="?trang=<?php echo $i ?>&tim_kiem= <?php echo $tim_kiem ?>">
	<?php echo $i; ?>
</a>

<?php } ?>	


</body>

</html>
