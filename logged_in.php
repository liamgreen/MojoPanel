<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/header.php';
setcookie ("oldfile", $oldfile, time() - 3600);
setcookie ("oldpath", $oldpath, time() - 3600);
setcookie ("delfile", $delfile, time() - 3600);
setcookie ("delpath", $delpath, time() - 3600);
?>
<div id="wrapper">
	<!-- end #header -->
	<div id="page">
		<div id="content">
			<div class="post">
				<h2 class="title" align="center"><a href="#"><?php echo "$lang_titles14"; ?></a></h2>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
					<table width="700" align="center" cellspacing="30">
  <tr valign="top" class="general"> 
    <td width="20%"> 
      <div align="center"><a href="help.php"><img src="images/help.png" alt="<?php echo "$lang_titles10";?>" width="48" height="48" border="0"></a><br>
        <?php echo "$lang_titles10";?></div></td>
    <td width="20%"> 
      <div align="center"> 
        <?php
if ($impressum =="on")
echo "<center><a href=\"impressum2.php\"><img src=\"images/imp.png\" alt=\"$lang_impressum00\" width=\"48\" height=\"48\" border=\"0\" /></a><br />
$lang_impressum00</center>";
else
echo ""; 
?>
      </div></td>
    <td width="20%"> 
      <div align="center"><a href="tos.php"><img src="images/terms.png" alt="<?php echo "$lang_control03";?>" width="48" height="48" border="0" /></a><br />
        <?php echo "$lang_control03";?></div></td>
    <td width="20%"> 
      <div align="center"><a href="news.php"><img src="images/news.png" alt="<?php echo "$lang_titles22";?>" width="48" height="48" border="0" /></a><br />
        <?php echo "$lang_titles22";?></div></td>
    <td width="20%"> 
      <div align="center"><a href="memberh.php"><img src="images/support.png" alt="<?php echo "$lang_titles23";?>" width="48" height="48" border="0" /></a><br />
        <?php echo "$lang_titles23";?></div></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> 
      <div align="center"><a href="file_manager.php"><img src="images/file_manager.png" alt="<?php echo "$lang_titles08";?>" width="48" height="48" border="0" /></a><br />
        <?php echo "$lang_titles08";?></div></td>
    <td> 
      <div align="center"><a href="upload_manager.php"><img src="images/upload.png" alt="<?php echo "$lang_titles28";?>" width="48" height="48" border="0"></a><br>
        <?php echo "$lang_titles28";?></div></td>
    <td> 
      <div align="center"><a href="profile.php"><img src="images/profile_edit.png" alt="<?php echo "$lang_titles18";?>" width="48" height="48" border="0" /></a><br />
        <?php echo "$lang_titles18";?></div></td>
	<td>  <div align="center"> 
        <?php
if ($taf =="on")
echo "<a href=\"tell.php\"><img src=\"images/tell.png\" alt=\"$lang_titles24\" width=\"48\" height=\"48\" border=\"0\" /></a><br />
$lang_titles24";
else
echo ""; 
?>
      </div></td>
     <td> 
	 
      <div align="center"><a href="logout.php"><img src="images/logoff.png" alt="<?php echo "$lang_control02";?>" width="48" height="48" border="0" /></a><br />
        <?php echo "$lang_control02";?></div></td>
 </tr>
  
  <tr valign="top" class="general"> 
    <td> 
      <div align="center"><a href="members.php"><img src="images/members_list.png" alt="<?php echo "$lang_titles17";?>" width="48" height="48" border="0" /></a><br>
        <?php echo "$lang_titles17";?></div></td>
    <td> 
      <div align="center"><a href="stats.php"><img src="images/stats.png" alt="<?php echo "$lang_titles15";?>" width="48" height="48" border="0" /></a><br />
        <?php echo "$lang_titles15";?></div></td>
    <td>
   
      <div align="center"> 
        <?php
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$userid = "{$row['user_id']}";
}while($row = mysql_fetch_array($result));
if ($userid==1)
echo "<center><a href=\"acp/acp.php\"><img src=\"images/admin.png\" alt=\"$lang_control01\" width=\"48\" height=\"48\" border=\"0\" /></a><br />
$lang_control01</center>";
else
echo ""; 
?>
      </div></td>
  </tr>
</table>
					</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<?php include 'includes/footer.php';?>
<!-- end #footer -->
</body>
</html>