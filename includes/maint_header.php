<?php
ob_start();
session_start();
error_reporting(0);
require_once('includes/connect.php'); 
$result = mysql_query("SELECT * FROM $mhp_config");
while($row = mysql_fetch_array($result)){
$lang_titles01 = $row['site_name'];
$lang_def = $row['default_lang'];
$lang_sel = $row['lang_selection'];}
$choice = $_SESSION['lang'];
session_write_close();
if ($choice =='')
$lang = $lang_def;
else
$lang = $choice;
include("language/$lang/member_lang.php");
?> 
<html><head><title><?php echo $lang_titles01; ?></title><meta http-equiv="Content-Type" content="text/html; charset=<?php echo $char_set;?>">
<link href="includes/mojopanel.css" rel="stylesheet" type="text/css" /></head><body>
<?php
if (file_exists ('setup')){
echo '<table border="2" align="center" cellpadding="10" cellspacing="0">
  <tr>
    <td bordercolor="#FF0000" bgcolor="#FFFFFF" class="general_center"><font color="#FF0000"><strong>WARNING: 
      The setup folder still exists - For security purposes please delete it</strong></font></td>
  </tr>
</table>';}
?>
<table width="95%" align="center" class="powered">
  <tr> 
    <td width="200"> 
      <div align="left"><?php include'includes/licence.php';?></div></td>
    <td class="title"><div align="center"><?php echo "$lang_titles01";?></div></td>
    <td width="200"> <div align="right"> 
        <?php
echo "{$lang_titles02} {$_SERVER['REMOTE_ADDR']} [$lang_titles26]<br />";
$day = date('w');
$date = date('j');
$year = date('Y');
$month = date('n');
if ($day==1)
$day = $lang_day01;
elseif ($day==2)
$day = $lang_day02;
elseif ($day==3)
$day = $lang_day03;
elseif ($day==4)
$day = $lang_day04;
elseif ($day==5)
$day = $lang_day05;
elseif ($day==6)
$day = $lang_day06;
else
$day = $lang_day07;
if ($month==1)
$month = $lang_month01;
elseif ($month==2)
$month = $lang_month02;
elseif ($month==3)
$month = $lang_month03;
elseif ($month==4)
$month = $lang_month04;
elseif ($month==5)
$month = $lang_month05;
elseif ($month==6)
$month = $lang_month06;
elseif ($month==7)
$month = $lang_month07;
elseif ($month==8)
$month = $lang_month08;
elseif ($month==9)
$month = $lang_month09;
elseif ($month==10)
$month = $lang_month10;
elseif ($month==11)
$month = $lang_month11;
else
$month = $lang_month12;
echo "$day $date $month $year";
?>
      </div></td>
  </tr>
</table>