<?php
ob_start();
session_start( );
error_reporting(0);
require_once('../includes/connect.php'); 
$result = mysql_query("SELECT * FROM $mhp_config");
while($row = mysql_fetch_array($result)){
$lang_titles01 = $row['site_name'];
$lang_def = $row['default_lang'];
$lang_sel = $row['lang_selection'];}
$username = $_SESSION['username'];
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do
$userid = "{$row['user_id']}";
while($row = mysql_fetch_array($result));
if ($userid ==1){
if ($lang_sel == 'on'){
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do	
$lang = "{$row['language']}";
while($row = mysql_fetch_array($result));}
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do
$name = "{$row['name']}";
while($row = mysql_fetch_array($result));
if ($lang ==''){
$lang = $lang_def;}
include("../language/$lang/member_lang.php");
include("../language/$lang/admin_lang.php");
?>
<html>
<head>
<title><?php echo $lang_titles01; ?> Admin CP</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $char_set;?>">
<link href="../includes/mojopanel.css" rel="stylesheet" type="text/css" /><!--[if lt IE 7]>
<script language="JavaScript">
function correctPNG() // correctly handle PNG transparency in Win IE 5.5 & 6.
{
   var arVersion = navigator.appVersion.split("MSIE")
   var version = parseFloat(arVersion[1])
   if ((version >= 5.5) && (document.body.filters)) 
   {
      for(var i=0; i<document.images.length; i++)
      {
         var img = document.images[i]
         var imgName = img.src.toUpperCase()
         if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
         {
            var imgID = (img.id) ? "id='" + img.id + "' " : ""
            var imgClass = (img.className) ? "class='" + img.className + "' " : ""
            var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
            var imgStyle = "display:inline-block;" + img.style.cssText 
            if (img.align == "left") imgStyle = "float:left;" + imgStyle
            if (img.align == "right") imgStyle = "float:right;" + imgStyle
            if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
            var strNewHTML = "<span " + imgID + imgClass + imgTitle
            + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
            + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
            + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>" 
            img.outerHTML = strNewHTML
            i = i-1
         }
      }
   }    
}
window.attachEvent("onload", correctPNG);
</script>
<![endif]-->
</head>
<body>
<?php
if (file_exists ('../setup')){
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
      <div align="left"><?php include'../includes/licence.php';?></div></td>
    <td class="powered"> <p align="center" class="title"><?php echo "$lang_titles01";?> Admin CP</p></td>
    <td width="200" class="powered"> <div align="right">
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
echo "$day $date $month $year<br />";
$username = $_SESSION['username'];
echo "<b />$lang_titles03 $name</b>";
'session_write_close';
?>
      </div></td>
  </tr>
</table>
<?php
}else{
header("Location: ../error.php");
}?>