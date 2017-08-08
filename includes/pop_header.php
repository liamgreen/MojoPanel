<?php
ob_start();
session_start();
error_reporting(0);
require_once('includes/connect.php');
?>
<table width="95%"><tr>
<td class="powered"><?php include'includes/licence.php';?></td>
</tr></table>
<?php 
$result = mysql_query("SELECT * FROM $mhp_config");
while($row = mysql_fetch_array($result)){
$lang_titles01 = $row['site_name'];
$lang_def = $row['default_lang'];
$lang_sel = $row['lang_selection'];}
if ($lang_sel == 'on'){
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$lang = "{$row['language']}";
}while($row = mysql_fetch_array($result));
if ($lang =='')
$lang = $lang_def;
include("language/$lang/member_lang.php");
}else{
include("language/$lang_def/member_lang.php");}
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$uid = "{$row['user_id']}";
}while($row = mysql_fetch_array($result));
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$name = "{$row['name']}";
}while($row = mysql_fetch_array($result));
if ($uid <> 1){
if ($maint == 'on'){
header ('Location: maint.php');}}
if ($_SESSION['logged_in']==0)
header("Location: error.php");
else
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$approved = "{$row['approved']}";
}while($row = mysql_fetch_array($result));
if ($approved == 'no')
header("Location: awaiting.php");
else
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$approved = "{$row['confirmed']}";
}while($row = mysql_fetch_array($result));
if ($approved == 'no')
header("Location: not_confirmed.php");
else?>
<html><head><title><?php echo $site_name; ?></title><meta http-equiv="Content-Type" content="text/html; charset=<?php echo $char_set;?>">
<link href="includes/mojopanel.css" rel="stylesheet" type="text/css" /></head><body>