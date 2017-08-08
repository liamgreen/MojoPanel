<?php include 'includes/header.php';?>
<table width="95%" align="center"><tr><td width="48"><div align="center" class="subtitle"> 
<p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
<?php echo $lang_control01;?></p>
</div></td><td> <div align="center">
<p class="subtitle"><?php echo $admin_titles06;?></p>
</div></td>
<td width="48">&nbsp;</td></tr></table><table width="95%" align="center"><tr> 
<td class="general_center"><?php echo $admin_css02;?></td>
</tr>
<tr><td class="general_center"><form action="" method="post" name="code" id="code">
<p><br>
<?php echo $admin_css01;?></b><br>
<?php $file = '../includes/mojopanel.css';
$open = fopen($file,'r');
$contents = fread($open,filesize($file));?>
<textarea name="code" style="width:100%" rows="17" id="code"><?php echo $contents;?></textarea>
<br><br>
<input name="submit" type="submit" id="submit" value="<?php echo $admin_forms05;?>">
<input name="reset" type="reset" id="reset" value="<?php echo $lang_forms04;?>">
<?php if (get_magic_quotes_gpc()){
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
$file = fopen('../includes/sciurus.css', 'w');
fwrite ($file, $_POST['code']);
fclose ($file);
header( "refresh:$css_refresh_delay; url=edit_css.php" );
echo '<br><br>Updating, please wait';}?>
</p>
</form></td></tr></table></body></html>