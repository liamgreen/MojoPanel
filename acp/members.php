<?php include 'includes/header.php';?>
<table width="95%" align="center"><tr><td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
          <?php echo $lang_control01;?></p>
      </div></td><td><div align="center"><p class="subtitle"><?php echo $admin_titles13;?></p></div></td><td width="48"><div align="center"> 
        <p class="general_center">&nbsp;</p>
      </div></td></tr></table><table width="95%" align="center" class="general_center"><tr>
    <td><div align="center"> 
      <?php
error_reporting(0);
$update = $_POST['update'];
if ($update == ''){
}else{
$id= $_POST['member'];
if ($id==!""){
$q22 = mysql_query("SELECT * FROM `$mhp_members` WHERE `user_id` = $id");
$q33 = mysql_fetch_object($q22);
if($q33->user_id == $id) {
$_SESSION['id'] = $id;
session_write_close();
header("Location: members2.php");
}}}
echo '<table border="0" cellspacing="0" cellpadding="0">';
$query="SELECT user_id, name, site_name, member_since, adverts, space, confirmed, approved FROM $mhp_members where user_id order by user_id asc";
$result=mysql_query($query);
$num=mysql_numrows($result);
echo "<u><span >$admin_addition35 $num</span></u><br /><br />";
mysql_close();
echo'<tr class="general_center"><td><b>'.$lang_stats04.'&nbsp;&nbsp;</b><br /><br /></td><td><b>&nbsp;&nbsp;'.$lang_email_new_mem04 .'&nbsp;&nbsp;</b><br /><br /></td><td><b>'. $admin_mbr_acc_control02 .'</b><br /><br /></td><td><b>&nbsp;&nbsp;'. $admin_mbr_details05 .'&nbsp;&nbsp;</b><br /><br /></td><td><b>&nbsp;&nbsp;'. $admin_mbr_details06 .'&nbsp;&nbsp;</b><br /><br /></td><td><b>&nbsp;&nbsp;'. $admin_mbr_details01 .'&nbsp;&nbsp;</b><br /><br /></td><td><b>&nbsp;&nbsp;'. $lang_stats07 .'&nbsp;&nbsp;</b><br /><br /></td><td><b>&nbsp;&nbsp;'. $admin_forms05 .'&nbsp;&nbsp;</b><br /><br /></td></tr>';
$i=0;
while ($i < $num) {
echo '<tr ><td align="center" valign="baseline"><span class="general_center" > ';
$user_id=mysql_result($result,$i,"user_id");
$name=mysql_result($result,$i,"name");
$site_name=mysql_result($result,$i,"site_name");
$member_since=mysql_result($result,$i,"member_since");
$confirmed=mysql_result($result,$i,"confirmed");
$approved=mysql_result($result,$i,"approved");
$adverts=mysql_result($result,$i,"adverts");
$quota=mysql_result($result,$i,"space");
echo '<span class="general_center" >'.$name.'&nbsp;&nbsp;</span>'; 
echo '</td><td align="center" valign="baseline">';
echo '<span class="general_center" >&nbsp;&nbsp;'.$site_name.'&nbsp;&nbsp;</span>';
echo '</td><td align="center" valign="baseline">';
echo '<span class="general_center" >&nbsp;&nbsp;'.$member_since.'&nbsp;&nbsp;</span>'; 
echo '</td><td align="center" valign="baseline">';
if ($approved == 'no') {
echo '<img src="../images/off.gif" width="12" height="12">'; 
}else{
echo '<img src="../images/on.gif" width="12" height"12">'; 
}
echo '</td><td align="center" valign="baseline">';
if ($confirmed == 'no') {
echo '<img src="../images/off.gif" width="12" height="12">'; 
}else{
echo '<img src="../images/on.gif" width="12" height"12">'; 
}
echo '</td><td align="center" valign="baseline">';
if ($adverts == 'no') {
echo '<img src="../images/off.gif" width="12" height="12">'; 
}else{
echo '<img src="../images/on.gif" width="12" height"12">'; 
}
echo '</td><td align="center" valign="baseline">';
echo '<span class="general_center" >&nbsp;&nbsp;'.$quota.' MB&nbsp;&nbsp;</span>';
echo '</td><td align="center">';
echo '
<form name="update" action="members.php" method="POST">
<input type="hidden" name="update" value="1">
<input type="hidden" name="member" value="'.$user_id.'">
<input type="image" src="../images/update.gif"  width="15" value="update" name="update" type="submit" >
</form>';
echo '</td></tr>';
$i++;
}
?>
</table></div>
<a href="#"><b /><?php echo $admin_mbr_acc_control06;?></b></a></td></tr></table></body></html>