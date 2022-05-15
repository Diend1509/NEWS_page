<?php 
$ma = $_POST['ma'];	
$tieu_de = $_POST['tieu_de'];
$noi_dung = $_POST['noi_dung'];
$anh = $_POST['anh'];

include 'connect.php';

$truyvan="update tin_tuc 
set
tieu_de = '$tieu_de',
noi_dung = '$noi_dung',
anh = '$anh'
where 
ma= '$ma'";

mysqli_query($ket_noi,$truyvan);
echo "Success!!";
header('location:index.php');
mysqli_close($ket_noi);
?>