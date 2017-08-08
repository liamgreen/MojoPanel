<?php include 'includes/header.php';
$id = $_SESSION['id'];?>
<table width="95%" align="center"><tr><td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
          <?php echo $lang_control01;?></p>
      </div></td><td><div align="center"><p class="subtitle"><?php echo $admin_titles05;?></p></div></td><td width="48"><div align="center">
        <p class="general_center"><a href="members.php"> <img src="../images/member.png" alt="<?php echo $admin_titles15;?>" width="48" height="48" border="0"></a><br>
<?php echo $admin_titles15;?></p></div></td></tr></table><form action="" method="post" name="remove" id="remove">
  <table width="750" align="center">
    <tr>
      <td class="general_center"><?php echo $admin_del_mbr01;?></td>
    </tr><tr><td class="general"><br>
        <table align="center">
          <tr valign="top" class="general"> 
            <td><strong><?php echo $lang_email_support02;?></strong></td>
            <td><b />: </b><?php echo $id;?></td>
          </tr>
          <tr valign="top" class="general"> 
            <td><strong><?php echo $lang_stats04;?></strong></td>
            <td> <b />: </b> 
              <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
echo "{$row['name']}";
}while($row = mysql_fetch_array($result));?>
            </td>
          </tr>
          <tr valign="top" class="general"> 
            <td><strong><?php echo $lang_profile06;?></strong></td>
            <td> <b />: </b> 
              <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
echo "{$row['email']}";
}while($row = mysql_fetch_array($result));?>
            </td>
          </tr>
          <tr valign="top" class="general"> 
            <td><strong><?php echo $lang_email_new_mem02;?></strong></td>
            <td> <b />: </b> 
              <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
$user_folder = "{$row['folder']}";
}while($row = mysql_fetch_array($result));
echo $user_folder;?>
            </td>
          </tr>
          <tr valign="top" class="general"> 
            <td><strong><?php echo $lang_email_new_mem04;?></strong></td>
            <td> <b />: </b> 
              <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE user_id= $id");
$row = mysql_fetch_array($result);
do{	
echo "{$row['site_name']}";
}while($row = mysql_fetch_array($result));?>
            </td>
          </tr></table></td></tr><tr><td class="general"> <p><br>
<?php echo "$admin_del_mbr06 <b />$admin_del_mbr02</b> $admin_del_mbr03 $admin_del_mbr05";?></p>
<p align="center"><strong><?php echo $admin_del_mbr04;?></strong></p></td></tr><tr><td class="general_center"><br>
<?php
if ($id == '1'){
echo "<font color=\"ff0000\"><b />$admin_del_mbr07</b></font>";
}else{?>
        <input name="code" type="text" id="code"> 
&nbsp;&nbsp;&nbsp; <input name="remove" type="submit" id="remove2" value="<?php echo $admin_forms02;?>"> 
<?php
if(isset($_POST['remove'])){
if ($_POST[code] !== $admin_del_mbr02){
echo "<br><br>$admin_del_mbr06 $admin_del_mbr02 $admin_del_mbr03";
}else{
function remove_directory($dir) { 
  if ($handle = opendir("$dir")) { 
   while (false !== ($item = readdir($handle))) { 
     if ($item != "." && $item != "..") { 
       if (is_dir("$dir/$item")) { 
         remove_directory("$dir/$item"); 
       } else { 
         unlink("$dir/$item"); 
         echo " removing $dir/$item<br>\n"; 
       }}} 
   closedir($handle); 
   rmdir($dir); 
  }}
remove_directory("$folder_path/$user_folder"); 
mysql_query ("DELETE FROM $mhp_members WHERE user_id = $id");
header("Location: members.php");}}}?>
</td></tr></table></form></body></html>