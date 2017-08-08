<?php include 'includes/header.php';?> 
<table width="95%" align="center"><tr><td width="48"> <div align="center" class="subtitle"> 
<p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
<?php echo $lang_control01;?></p>
</div></td><td><div align="center"><p class="subtitle"><?php echo $lang_control01;?></p>
</div></td><td width="48">&nbsp;</td></tr></table>
<table width="700" align="center" cellspacing="30">
  <tr valign="top" class="general"> 
    <td width="20%"> <div align="center"><a href="help.php"><img src="../images/help.png" alt="<?php echo $lang_titles10;?>" width="48" height="48" border="0"></a><br>
        <?php echo $lang_titles10;?></div></td>
    <td width="20%"> <div align="center"> 
        <?php
if ($impressum =="on")
echo "<center><a href=\"edit_imp.php\"><img src=\"../images/imp.png\" alt=\"$lang_file_man03 $lang_impressum00\" width=\"48\" height=\"48\" border=\"0\" /></a><br />
$lang_file_man03 $lang_impressum00</center>";
else
echo ""; 
?>
      </div></td>
    <td width="20%"> <div align="center"><a href="edit_terms.php"><img src="../images/terms.png" alt="<?php echo $admin_titles10;?>" width="48" height="48" border="0" /></a><br />
        <?php echo $admin_titles10;?></div></td>
    <td width="20%"> <div align="center"><a href="edit_news.php"><img src="../images/news.png" alt="<?php echo $admin_titles08;?>" width="48" height="48" border="0" /></a><br />
        <?php echo $admin_titles08;?></div></td>
    <td width="20%"> <div align="center"><a href="edit_css.php"><img src="../images/css.png" alt="<?php echo $admin_titles06;?>" width="48" height="48" border="0" /></a><br>
        <?php echo $admin_titles06;?></div></td>
  </tr>
  <tr valign="top" class="general"> 
    <td width="20%"> <div align="center"><a href="adverts.php"><img src="../images/ads.png" alt="<?php echo $admin_titles03;?>" width="48" height="48" border="0"></a><br>
        <?php echo $admin_titles03;?></div></td>
    <td width="20%"> <div align="center"></div></td>
    <td width="20%"><div align="center"></div></td>
    <td ><div align="center"><a href="members.php"><img src="../images/member.png" alt="<?php echo $admin_titles15;?>" width="48" height="48" border="0"></a><br>
        <?php echo $admin_titles15;?></div></td>
    <td width="20%"> <div align="center"><a href="edit_settings.php"><img src="../images/settings.png" alt="<?php echo $admin_titles18;?>" width="48" height="48" border="0"></a><br>
        <?php echo $admin_titles18;?></div></td>
  </tr>
  <tr valign="top" class="general"> 
    <td width="20%"> <div align="center"><a href="mfm.php"><img src="../images/mfm.png" alt="<?php echo "$admin_titles19";?>" width="48" height="48" border="0"></a><br>
        <?php echo "$admin_titles19";?></div></td>
    <td width="20%"> <div align="center"><a href="man_upload.php"><img src="../images/upload.png" alt="<?php echo $lang_titles28;?>" width="48" height="48" border="0"></a><br>
        <?php echo $lang_titles28;?></div></td>
    <td width="20%"><div align="center"><a href="status.php"><img src="../images/program_status.png" alt="<?php echo $admin_titles16;?>" width="48" height="48" border="0" /></a><br />
        <?php echo $admin_titles16;?> </div></td>
    <td width="20%"> <div align="center"><a href="http://mojopanel.com/contact" target="_blank"><img src="../images/bugs.png" alt="<?php echo $admin_titles17;?>" width="48" height="48" border="0" /></a><br />
        <?php echo $admin_titles17;?></div></td>
    <td width="20%"> <div align="center"><a href="../logged_in.php"><img src="../images/home.png" alt="<?php echo $lang_control04;?>" width="48" height="48" border="0" /></a><br />
        <?php echo $lang_control04;?></div></td>
  </tr>
</table>
</body></html>