<?php include 'includes/header.php';
$id = $_SESSION['id'];?>
<table width="95%" align="center"><tr><td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
          <?php echo $lang_control01;?></p>
      </div></td><td> <div align="center">
        <p class="subtitle"><?php echo $admin_titles13;?></p>
      </div></td><td width="48"><div align="center"> 
        <p class="general_center"><a href="members.php"> <img src="../images/member.png" alt="<?php echo $admin_titles15;?>" width="48" height="48" border="0"></a><br>
          <?php echo $admin_titles15;?></p>
      </div></td></tr></table><form name="details" method="post" action="">
  <table align="center">
    <tr valign="top" class="general"> 
      <td><strong><?php echo $lang_email_support02;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td> <?php echo $id;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><strong> 
        <?php if ($id == 1){
	  }else{
	  echo $admin_mbr_acc_control02;}?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td> 
        <?php if ($id == 1){
		}else{
		$result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
echo "{$row['member_since']}";
}while($row = mysql_fetch_array($result));}?>
      </td>
    </tr>
    <tr valign="top" class="general"> 
      <td><strong><br>
        <?php echo $lang_stats04;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td><br> 
        <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
echo "{$row['name']}";
}while($row = mysql_fetch_array($result));?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
      <td><strong> <br>
        <?php if ($id == 1){
	  }else{
	  echo $admin_mbr_details05;}?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td> <br> 
        <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
$approved = "{$row['approved']}";
}while($row = mysql_fetch_array($result));
if ($id == 1){
}else{
echo "<input name=\"box3\" type=\"text\" id=\"box3\" value=\"$approved\" size=\"10\">";
echo " yes / no";}?>
      </td>
    </tr>
    <tr valign="top" class="general"> 
      <td><strong><br>
        <?php echo $lang_profile06;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td> <br> 
        <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
echo "{$row['email']}";
}while($row = mysql_fetch_array($result));?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
      <td><strong> <br>
        <?php if ($id == 1){
	  }else{
	  echo $admin_mbr_details06;}?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td> <br> 
        <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
$confirmed = "{$row['confirmed']}";
}while($row = mysql_fetch_array($result));
if ($id == 1){
}else{
echo "<input name=\"box4\" type=\"text\" id=\"box4\" value=\"$confirmed\" size=\"10\">";
echo " yes / no";}?>
      </td>
    </tr>
    <tr valign="top" class="general"> 
      <td><strong><br>
        <?php echo $lang_email_new_mem04;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td colspan="3"> <br> 
        <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
echo "{$row['site_name']}";
}while($row = mysql_fetch_array($result));?>
      </td>
    </tr>
    <tr valign="top" class="general"> 
      <td><strong><br>
        <?php echo $lang_email_new_mem02;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td> <br> 
        <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
$user_folder = "{$row['folder']}";
}while($row = mysql_fetch_array($result));
echo $user_folder;?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      </td>
      <td><strong><br>
        <?php echo $admin_mbr_details01;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td> <br> <input name="box2" type="text" id="box2" value="<?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
echo "{$row['adverts']}";
}while($row = mysql_fetch_array($result));?>" size="10">
        yes / no</td>
    </tr>
    <tr valign="top" class="general"> 
      <td><strong><br>
        <?php echo $admin_mbr_details12;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td> <br> 
        <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
echo "{$row['ip']}";
}while($row = mysql_fetch_array($result));?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      </td>
      <td><strong><br>
        <?php echo $admin_mbr_details02;?> (MB)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td> <br> <input name="box1" type="text" id="box1" value="<?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
$s2 = "{$row['space']}";
}while($row = mysql_fetch_array($result));
echo $s2;?>"size="10"></td>
    </tr>
    <tr valign="top" class="general"> 
      <td><strong><br>
        <?php echo $admin_mbr_acc_control03;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td> <br> 
        <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
echo "{$row['last_login']}";
}while($row = mysql_fetch_array($result));?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      </td>
      <td><strong><br>
        <?php echo $admin_mbr_details21;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td> <br> 
        <?php
$result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= '$id'");
$row = mysql_fetch_array($result);
do{	
$userdir = "$folder_path{$row['folder']}/";
}while($row = mysql_fetch_array($result));
function dir_size($path) {
$size = 0;
$dir = opendir($path);
if (!$dir){return 0;}
while (($file = readdir($dir)) !== false) {
if ($file[0] == '.'){ continue; }
if (is_dir($path.$file)){
$size += dir_size($path.$file.DIRECTORY_SEPARATOR);
}else{
$size += filesize($path.$file);}}
closedir($dir);
return $size;}
function size_hum_read($size){
$i=0;
$iec = array(" B", " KB", " MB", " GB");
while (($size/1024)>1) {
$size=$size/1024;
$i++;}
return substr($size,0,strpos($size,'.')+3).$iec[$i];}
$used = size_hum_read(dir_size($userdir));
echo $used;?>
      </td>
    </tr>
    <tr class="general"> 
      <td colspan="4"><div align="center"><br>
          <input name="details" type="submit" id="details" value="<?php echo $admin_forms05;?>">
          <input name="reset" type="reset" id="reset" value="<?php echo $lang_forms04;?>">
        </div></td>
    </tr>
  </table>
  <br>
<?php

if(isset($_POST['details'])){
$box1 = ($_POST['box1']);
$box2 = strtolower($_POST['box2']);
if ($id ==1){
$box3 = 'yes';
$box4 = 'yes';
}else{
$box3 = strtolower($_POST['box3']);
$box4 = strtolower($_POST['box4']);
}
if(!$box1) 
die("<div class=\"general_center\"><b />$admin_mbr_details03</b><br>$admin_mbr_details19</div>");
$junk = array('.' , ',' , '/' , '`' , ';' , '[' ,  ']' , '-', '_', '*', '#', '@', '!', '~', '+', '(', ')', '|', '{', '}', '<', '>', '?', ':', '"', '='); 
$len = strlen($box1);
$box1 = str_replace($junk, '', $box1);
$test = $box1;
if(strlen($test) != $len) {
die("<div class=\"general_center\"><b />$admin_mbr_details04</b><br>$admin_mbr_details15</div>");}
$numbers = array('1' , '2' , '3' , '4' , '5' , '6' ,  '7' , '8', '9', '0'); 
$len2 = strlen($box1);
$box1a = str_replace($numbers, '', $box1);
$test2 = $box1a;
if(strlen($test2) != !$len2) {
die("<div class=\"general_center\"><b />$admin_mbr_details04</b><br>$admin_mbr_details14</div>");}
if ($box2=='yes')
echo ''; 
elseif ($box2=='no')
echo ''; 
else
die("<div class=\"general_center\"><b />$admin_mbr_details07</b><br>$admin_mbr_details18 $admin_mbr_details22 $admin_mbr_details17 $admin_mbr_details16</div>");
if ($box3=="yes")
echo ''; 
elseif ($box3=="no")
echo ''; 
else
die("<div class=\"general_center\"><b />$admin_mbr_details11</b><br>$admin_mbr_details18 $admin_mbr_details22 $admin_mbr_details17 $admin_mbr_details16</div>");
if ($box4=="yes")
echo ''; 
elseif ($box4=="no")
echo ''; 
else
die("<div class=\"general_center\"><b />$admin_mbr_details10</b><br>$admin_mbr_details18 $admin_mbr_details22 $admin_mbr_details17 $admin_mbr_details16</div>");
mysql_query("UPDATE $mhp_members SET adverts = ('".$box2."') WHERE user_id = $id");
mysql_query("UPDATE $mhp_members SET approved = ('".$box3."') WHERE user_id = $id");
mysql_query("UPDATE $mhp_members SET space = ('".$box1."') WHERE user_id = $id");
mysql_query("UPDATE $mhp_members SET confirmed = ('".$box4."') WHERE user_id = $id");
header("Location: members2.php");}?>
</form><form action="members3.php" method="post" name="remove" target="_parent" id="remove">
  <div align="center">
    <input name="delete" type="submit" id="delete" value="<?php echo $admin_forms01;?>">
  </div>
</form></body></html>