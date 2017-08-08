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
$username = $_SESSION['username'];
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
<html><head><title><?php echo $lang_titles01; ?></title><meta http-equiv="Content-Type" content="text/html; charset=<?php echo $char_set;?>">
<link href="includes/mojopanel.css" rel="stylesheet" type="text/css" /><!--[if lt IE 7]>
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
</head><body>
<?php
if (file_exists ('setup')){
echo '<table border="2" align="center" cellpadding="10" cellspacing="0">
  <tr>
    <td bordercolor="#FF0000" bgcolor="#FFFFFF" class="general_center"><font color="#FF0000"><strong>WARNING: 
      The setup folder still exists - For security purposes please delete it.</strong></font></td>
  </tr>
</table>';}
?>
<?php include'includes/licence.php';
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
?>