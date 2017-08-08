<?php include 'includes/header.php';?>
<table width="95%" align="center">
<tr> 
    <td width="48"> 
      <div align="center" class="subtitle"> 
        <p class="general_center"><a href="logged_in.php"><img src="images/home.png" alt="<?php echo "$lang_control04";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_control04";?></p>
</div></td>
<td>
<div align="center">
<p class="subtitle"><?php echo "$lang_titles31";?></p>
</div></td>
<td width="48"><p align="center" class="general_center"><a href="profile.php"><img src="images/profile_edit.png" alt="<?php echo "$lang_titles18";?>" width="48" height="48" border="0"></a><br>
        <?php echo "$lang_titles18";?></p></td>
</tr>
</table>
<table width="95%" align="center">
  <tr> 
    <td class="general"><br>
      <?php echo "$lang_close01 <a href=\"memberh.php\"><b />$lang_error02</b></a> $lang_close02 $lang_close03 ";?></td>
  </tr>
  <tr> 
    <td class="general"><br>
      <?php echo "$lang_close04 <b />$lang_close05</b> $lang_close06 $lang_close07 $lang_close08";?></td>
  </tr>
  <tr> 
    <td class="general"><form name="form1" method="post" action="">
        <p class="general_center"><br>
        </p>
        <p class="general_center">
<?php $result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$id = "{$row['user_id']}";
}while($row = mysql_fetch_array($result));?>
<?php $result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$user_folder = "{$row['folder']}";
}while($row = mysql_fetch_array($result));
if ($id == '1'){
echo "<font color=\"ff0000\"><b />$lang_close09</b></font>";
}else{?>
          <input name="code" type="text" id="code">
          <input name="confirm" type="submit" id="confirm" value="<?php echo $lang_forms02;?>">
          <?php
if(isset($_POST['confirm'])){
if ($_POST[code] !== "$lang_close05"){
echo "<br><br><b />$lang_close10 $lang_close05 $lang_close11</b>";
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
remove_directory("$folder_path$user_folder"); 
mysql_query ("DELETE FROM $mhp_members WHERE user_id = $id");
header("Location: closed.php");}}}
?>
        </p>
      </form></td>
  </tr>
</table>
</body></html>