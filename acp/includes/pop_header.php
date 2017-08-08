<?php
ob_start();
session_start();
error_reporting(0);
require_once('../includes/connect.php');
?>
<table width="95%">
  <tr>
    <td class="powered"><?php include'../includes/licence.php';?></td>
  </tr>
</table>
<?php 
$result = mysql_query("SELECT * FROM $mhp_config");
while($row = mysql_fetch_array($result)){
$lang_titles01 = $row['site_name'];
$lang_def = $row['default_lang'];
$lang_sel = $row['lang_selection'];}
$username = $_SESSION['username'];
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$userid = "{$row['user_id']}";
}while($row = mysql_fetch_array($result));
if ($userid==1){
if ($lang_sel == 'on'){
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$lang = "{$row['language']}";
}while($row = mysql_fetch_array($result));
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$name = "{$row['name']}";
}while($row = mysql_fetch_array($result));
if ($lang =='')
$lang = $lang_def;
include("../language/$lang/member_lang.php");
include("../language/$lang/admin_lang.php");
}else{
include("../language/$lang_def/member_lang.php");
include("../language/$lang_def/admin_lang.php");}
?>
<html><head><title><?php echo $site_name; ?></title><meta http-equiv="Content-Type" content="text/html; charset=<?php echo $char_set;?>">
<link href="../includes/mojopanel.css" rel="stylesheet" type="text/css" /></head><body>
<?php
}else{
header("Location: ../error.php");}
?>
