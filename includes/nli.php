<?php session_start(); ?>
<?php
ob_start();
error_reporting(0);
require_once('includes/connect.php');

$version = "0.8";
//*$srv_version = file_get_contents("includes/.version");-->*//

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
<!--[if lt IE 7]>
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
<link href="includes/mojopanel.css" rel="stylesheet" type="text/css">
</head><body>
<?php
if (file_exists ('install')){
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
      <div align="left"><?php include'includes/licence.php';
	  if ($maint =='on'){
header("Location: maint.php");}
?></div></td>
  </tr>
</table>