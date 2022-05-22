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
	<style type="text/css">
		#div_tong{
			width: 100%;
			height: auto;
			background-color: pink;
			border: none;
		}
		#divtrai{
			width:20%;
			height: 100%;
			/*background-color: red;*/
			float: left;
		}
		#divgiua{
			width: 50%;
			height: 100%;
			/*background-color: green;*/
			float: left;
			border: 4;
		}	
		#divphai{
			width: 30%;
			height: 100%;
			/*background-color: black;*/
			float: left;
		}	
		a {
		 	float: left;
		  	font-size: 16px;
		  	color: #333;
	  		text-align: center;
		  	padding: 14px 16px;
		  	text-decoration: none;
		}
		a:hover{
			background-color: #333;
  			color: #fff;
		}
	</style>

</head>
<body>

<?php 
$ma = $_GET['ma'];
include 'connect.php';

$sql="select * from tin_tuc where ma= $ma";

$ket_qua = mysqli_query($ket_noi,$sql);

$bai_tin_tuc = mysqli_fetch_array($ket_qua);

?>
<div id="div_tong">
	<div id="divtrai">
		<a href="index.php">Home</a>
	</div>
	<div id="divgiua">
		<h1>
			<?php echo $bai_tin_tuc['tieu_de']; ?>
		</h1>
		<br>
		<img src="<?php echo nl2br($bai_tin_tuc['anh']) ?>">
		<br>
		<p>
			<?php echo nl2br($bai_tin_tuc['noi_dung']) ?>
		</p>
		
	</div>
	<div id="divphai">b</div>
</div>


<?php mysqli_close($ket_noi);	 ?>

</body>






</html>