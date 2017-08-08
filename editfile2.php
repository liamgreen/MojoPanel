<?php include 'includes/header.php';?> 
<table width="95%" align="center">
  <tr> 
    <td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="logged_in.php"><img src="images/home.png" alt="<?php echo "$lang_control04";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_control04";?></p>
      </div></td>
    <td><div align="center"> 
        <p class="subtitle"><?php echo $lang_titles30;?></p>
      </div></td>
    <td width="48"><div align="center"><p class="general_center"><a href="file_manager.php"><img src="images/file_manager.png" alt="<?php echo "$lang_titles08";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_titles08";?></p></div></td>
  </tr>
</table>
<table width="95%" align="center">
  <tr>
    <td class="general_center"><form action="savefile2.php" method="post">
        <p><b /> 
          <?php 
$dir = $_POST['dir'];
$filename = $_POST['filename'];
		  echo "$lang_upload03: </b>$filename";?>
          <br>
          <?php
$file = "$folder_path$dir/$filename";
$open = fopen($file,'r');
$length=filesize($file);
if ($length>0){
$contents = fread($open,filesize($file));
}else{
$content = filesize($file)?fread($handle, filesize($file)):"";}?>

          <input type="hidden" name="filename" value="<?php echo($filename); ?>">
<input type="hidden" name="dir" value="<?php echo($dir); ?>">
          <textarea name="contents" style="width:100%" rows="19" id="contents"><?php echo $contents;?></textarea>
          <br>
          <br>
          <input name="submit" type="submit" id="submit" value="<?php echo $lang_forms06;?>">
          <input name="reset" type="reset" id="reset" value="<?php echo $lang_forms04;?>">
          <?php
if (get_magic_quotes_gpc()){
function stripslashes_deep($value){
$value = is_array($value) ?
array_map('stripslashes_deep', $value) :
stripslashes($value);
return $value;}
$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);}
?>
        </p>
      </form></td>
  </tr>
</table>
</body></html>