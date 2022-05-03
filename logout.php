<?php 
include_once('config/database.php');
session_start();
$email = $_SESSION['email'];
session_unset();
unset($_SESSION['email']);
session_destroy();
$_SESSION['msg'] = "You must log in first";
header('location:index.php');
?>