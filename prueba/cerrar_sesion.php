<?php 
session_start(); 
$_SESSION=array(); 
session_destroy(); 
//lo redirecciono a la página anterior 
$ir=$_SERVER['HTTP_REFERER']; 
header("location:$ir");
?>