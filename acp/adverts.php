<?php include 'includes/header.php';?>
<table width="95%" align="center"><tr><td width="48"> <div align="center" class="subtitle"> 
<p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
<?php echo $lang_control01;?></p>
</div></td><td><div align="center"><p class="subtitle"><?php echo $admin_titles03;?></p></div></td>
<td width="48">&nbsp;</td></tr></table><table width="95%" align="center">
<tr><td class="general_center"><?php echo $admin_adverts02;?></td></tr><tr> 
<td class="general_center"><form action="" method="post" name="code" id="code">
<p><br>
<strong><?php echo $admin_adverts01;?></strong><br>
<?php $file = '../includes/ads.inc';
$open = fopen($file,'r');
$contents = fread($open,filesize($file));
$contents = str_replace('<br /><div align="center">','',$contents);
$contents = str_replace('</div>','',$contents);?>
<textarea name="code" style="width:100%" rows="17" id="code"><?php echo $contents;?></textarea>
<br><br>
<input name="submit" type="submit" id="submit" value="<?php echo $admin_forms05;?>">
<input name="reset" type="reset" id="reset" value="<?php echo $lang_forms04;?>">
<?php if (get_magic_quotes_gpc()) {
function stripslashes_deep($value){
$value = is_array($value) ?
array_map('stripslashes_deep', $value) :
stripslashes($value);
return $value;}
$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);}
if(isset($_POST['submit'])){
$file = fopen('../includes/ads.inc', 'w');
fwrite ($file, '<br /><div align="center">'.$_POST['code'].'</div>');
fclose ($file);
header ("Location: adverts.php");}?>
</p></form></td></tr></table></body></html>