<?php include 'includes/header.php';?>
<table width="95%" align="center"><tr> <td width="48"> <div align="center" class="subtitle"> 
<p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
<?php echo $lang_control01;?></p>
</div></td><td><div align="center"><p class="subtitle"><?php echo $admin_titles01;?></p></div></td>
<td width="48">&nbsp;</td>
</tr></table><table width="95%" align="center"><tr> 
<td class="general_center"><br>
<?php if ($lang_sel == 'on'){
$username = $_SESSION['username'];
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$lang = "{$row['language']}";
}while($row = mysql_fetch_array($result));
if ($lang =='')
$lang = $lang_def;
include "../language/$lang/admin_help.php";
}else{
include "../language/$lang_def/admin_help.php";
}?>
<br><br>
</td>
</tr></table></body></html>