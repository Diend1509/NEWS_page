
<?php 
$id=$_GET['id'];

include '../connectDB.php';

$xoa="delete from cus where id= $id";
mysqli_query($ket_noi,$xoa);

mysqli_close($ket_noi);
header('location:list_u.php');

 ?>