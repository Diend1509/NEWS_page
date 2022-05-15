<?php 

	$tieu_de=$_POST['tieu_de'];
	$noi_dung=$_POST['noi_dung'];
	$anh=$_POST['anh'];

include 'connect.php';

$sql= "insert into tin_tuc(tieu_de,noi_dung,anh) values('$tieu_de', '$noi_dung', '$anh')";

mysqli_query($ket_noi,$sql);
echo "Đã cập nhật";
header('location:index.php');
mysqli_close($ket_noi);

?>		