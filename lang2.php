<?php include 'includes/header.php';
?>
<table width="95%" align="center">
  <tr> 
    <td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="logged_in.php"><img src="images/home.png" alt="<?php echo "$lang_control04";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_control04";?></p>
      </div></td>
<td><div align="center"> 
        <p class="subtitle"><?php echo $lang_titles32; ?></p>
</div></td>
    <td width="48"><div align="center"><a href="profile.php"><img src="images/profile_edit.png" alt="<?php echo "$lang_titles18";?>" width="48" height="48" border="0"></a><br>
        <?php echo "$lang_titles18";?></div></td>
</tr>
</table>
<table width="95%" align="center" class="general">
  <tr valign="top"> 
    <td width="50%" height="183" class="general_center"><br>
      <?php echo "$lang_lang04.$lang_lang05<br><br>$lang_lang10<br><br>";?> <?php echo "<b />$lang_lang01</b><br><br>"; 
$DirPath = $folder_path.'language/';
//$DirPath=$_GET['DirPath'];
if($DirPath=="")
{
   $DirPath='./';
}
if (($handle=opendir($DirPath)))
{
echo '<div style="text-align:center"><form  method="post" action=""><SELECT name="language" ><OPTION VALUE="">Choose a Language..</OPtion>';
   while ($node = readdir($handle))
   {
       $nodebase = basename($node);
       if ($nodebase!="." && $nodebase!="..")
       {
           if(is_dir($DirPath.$node))
           {
               $nPath=$DirPath.$node."/";
               echo "<option value=\"$node\">$node</option>";
           }
       }
   }
}
 closedir();
?> </select> </div><br>
      <input name="submit" type="submit" id="submit3" value="<?php echo $lang_forms06;?>">
          <input name="reset" type="reset" id="reset" value="<?php echo $lang_forms04;?>">
          <?php
if(isset($_POST['submit'])){
$choice = $_POST['language'];
if ($choice == ''){
echo '';}
elseif (is_dir($folder_path.'language/'.$choice)){
mysql_query("UPDATE $mhp_members SET language = '$choice' WHERE username = '$username'");
header("Location: lang2.php");
}
else
die("<div class=\"general\"><b /><br /><br />
$lang_lang09</b></div>");
}			  
?>
              </div></td>
          </tr>
        </table>
      </form></td>
  </tr>
</table>
</body></html>