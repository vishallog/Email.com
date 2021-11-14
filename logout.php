<?php 
session_start();
$_SESSION["loginID"]=false;
session_destroy();
header('location:login.php');
 ?>