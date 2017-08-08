<?php
include 'includes/pop_header.php';
$old = $_COOKIE['oldfile'];
$path = $_COOKIE['oldpath'];
function findextn ($old){ 
$ext = split("[/\\.]", $old) ; 
$n = count($ext)-1; 
$ext = $ext[$n]; 
return $ext;} 
$extn = findextn($old);?>
<body>
<form action="" method="post" name="submit" id="submit">
  <table align="center" class="general">
    <tr> 
      <td colspan="2"><div align="center"> 
          <p><font color="#CC0000"><strong> <?php echo "$lang_addition07<br>
            $lang_addition08";?></strong></font></p>
        </div></td>
    </tr>
    <tr>
      <td><div align="right"><strong><br>
          <?php echo $lang_addition03;?> :&nbsp;</strong></div></td>
      <td><br>
        <?php echo "$old";?></td>
    </tr>
    <tr> 
      <td><div align="right"><strong><?php echo $lang_addition04;?> :&nbsp;</strong></div></td>
      <td><input name="rename_to" type="text" id="rename_to2"> <?php echo ".$extn";?></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="center"><br>
          <input name="submit" type="submit" id="submit3" value="<?php echo $lang_addition01;?>">
          <input name="cancel" type="submit" id="cancel" value="<?php echo $lang_addition05;?>">
        </div></td>
    </tr>
    <tr>
      <td colspan="2"><br>
        <?php echo $lang_addition06;?></td>
    </tr>
  </table>
</form>
<?php
if(isset($_POST['submit'])){
$original_filename = basename($old, '.'.$extn);
if(!$_POST['rename_to']) {
die("<div class=\"general_center\"><font color=\"#FF0000\">$lang_addition09</font></div>");}
$new = strtolower($_POST['rename_to']);
$new = $new.'.'.$extn;
if(file_exists($new)){
die ("<div class=\"general_center\"><font color=\"#FF0000\">$lang_addition10</font></div>");
}else{
if(strstr($new, '..')){
die("<div class=\"general_center\"><font color=\"#FF0000\">$lang_file_man07</font></div>");}
rename("$folder_path$path$old", "$folder_path$path$new");
echo "<script language=\"Javascript\">opener.focus();opener.location.href = opener.location;self.close();</script>";}}
if(isset($_POST['cancel'])){
setcookie("delfile", $oldfile, time()-3600);
setcookie("delpath", $oldpath, time()-3600);
echo "<script language=\"Javascript\">self.close();</script>";}
?>