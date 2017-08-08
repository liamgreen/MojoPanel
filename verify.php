<?php include 'includes/nli.php';?>
<table width="95%" align="center">
<tr> 
<td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="index.php"><img src="images/home.png" alt="<?php echo "$lang_titles27";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_titles27";?></p>
</div></td>
<td><div align="center"> 
<p class="subtitle"><?php echo $lang_titles06; ?></p>
</div></td>
<td width="48">&nbsp;</td>
</tr>
</table>
<table width="95%" align="center">
<tr> 
    <td class="general_center"> <br>
      <?php
$code= ($_GET['cid']);
$confirm_mail = $_GET['email'];
$result = mysql_query("SELECT * FROM $mhp_members WHERE email = '$confirm_mail'");
$row = mysql_fetch_array($result);
do{
$secret_variable = "{$row['cid']}";
}while($row = mysql_fetch_array($result));
if ($code == md5($confirm_mail.$secret_variable)) {
echo $lang_confirm08.'<br><br>'.$lang_confirm07; ?>
      <a href="index.php"><?php echo "<b />$lang_register08</b>";?></a>&nbsp;<?php echo $lang_confirm06; ?> 
      <?php
mysql_query("UPDATE $mhp_members SET confirmed = 'yes' WHERE email = '$confirm_mail'");
mysql_query("UPDATE $mhp_members SET cid = 'confirmed' WHERE email = '$confirm_mail'");
}else{
echo "<span class=\"subtitle\"><font color=\"FF0000\">$lang_confirm09</font></span>".'<br><br>'.$lang_confirm04.'<br /><br />'.$lang_confirm03;?>
      <a href="index.php"><?php echo "<b />$lang_error02</b>"; ?></a> <?php echo $lang_confirm01; } ?></td>
</tr>
</table>
</body></html>