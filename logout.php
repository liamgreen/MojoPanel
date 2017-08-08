<?php
ob_start();
session_start( );
$_SESSION['logged_in'] = 0;
session_destroy();
include 'includes/connect.php';
$result = mysql_query("SELECT * FROM $mhp_config");
$row = mysql_fetch_array($result);
do{
$maint = $row['maintain'];
}while($row = mysql_fetch_array($result));
if ($maint == 'on'){
header("Location: index.php");
}else{
header("Location: logged_out.php");}
?>