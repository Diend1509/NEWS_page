<?php
session_start();
if(empty($_SESSION['level'])){
    header('location:index.php');
    echo '<script>alert("admin mới được làm thế!!")</script>';
    exit();
}
?>
<?php 
$ma=$_GET['ma'];

include 'connect.php';

$xoa="delete from tin_tuc where ma= $ma";
mysqli_query($ket_noi,$xoa);

mysqli_close($ket_noi);
header('location:index.php');

 ?>