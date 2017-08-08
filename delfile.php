<?php
include 'includes/pop_header.php';
$old = $_COOKIE['delfile'];
$path = $_COOKIE['delpath'];
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
      <td><div align="center"> 
          <p><font color="#CC0000"><strong>* * * <u><?php echo $lang_addition11;?></u> 
            * * *</strong></font></p>
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font color="#CC0000"><strong><br>
          <?php echo "$lang_addition12<br>
          $lang_addition13";?></strong></font></div></td>
    </tr>
    <tr> 
      <td><div align="right"></div>
        <div align="center"><br>
          <?php echo "$path$old";?></div></td>
    </tr>
    <tr> 
      <td><div align="center"><br>
          <input name="submit" type="submit" id="submit3" value="<?php echo $lang_addition14;?>">
          <input name="cancel" type="submit" id="cancel" value="<?php echo $lang_addition05;?>">
        </div></td>
    </tr>
    <tr> 
      <td><br>
        <?php echo $lang_addition06;?></td>
    </tr>
  </table>
</form>
<?php
if(isset($_POST['submit'])){
chmod ("$folder_path$path$old", 0777);
unlink ("$folder_path$path$old");
echo "<script language=\"Javascript\">opener.focus();opener.location.href = opener.location;self.close();</script>";}
if(isset($_POST['cancel'])){
setcookie("delfile", $delfile, time()-3600);
setcookie("delpath", $delpath, time()-3600);
echo "<script language=\"Javascript\">self.close();</script>";}
?>