<?php 
session_start();
session_destroy();
// unset($_SESSION['id']);
// unset($_SESSION['name']);
// unset($_SESSION['level']);

header('location:index.php');
?>