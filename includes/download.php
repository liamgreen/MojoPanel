<?php 
ob_start();
session_start();
if ($_SESSION['logged_in']==0)
header("Location: ../error.php");
$file = $_POST['downfile'];
header('Content-Description: File Transfer'); 
header('Content-Type: application/force-download'); 
header('Content-Length: ' . filesize($file)); 
header('Content-Disposition: attachment; filename=' . basename($file)); 
readfile($file);
?> 