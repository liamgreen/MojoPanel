<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/header.php';?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
<table align="center" class="general">
        <tr valign="top"> 
		<td width="125"><strong><?php echo "$lang_stats04";?></strong></td>
          <td> 
            <?php $result = mysql_query("SELECT name FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
echo "{$row['name']}";
}while($row = mysql_fetch_array($result));?>
          </td>
        </tr>
        <tr valign="top"> 
          <td width="125"><strong><br>
            <?php echo "$lang_forgot10";?></strong></td>
          <td><br> <?php echo $username;?></td>
        </tr>
        <tr valign="top"> 
          <td width="125"><strong><br>
            <?php echo "$lang_profile06";?></strong></td>
          <td><br> 
            <?php $result = mysql_query("SELECT email FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
echo "{$row['email']}";
}while($row = mysql_fetch_array($result));?>
          </td>
        </tr>
        <tr valign="top"> 
          <td><strong><br>
            <?php echo "$lang_profile20";?></strong></td>
          <td><br> 
            <?php $result = mysql_query("SELECT secret_question FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
echo "{$row['secret_question']}";
}while($row = mysql_fetch_array($result));?>
          </td>
        </tr>
        <tr valign="top"> 
          <td width="125"><strong><br>
            <br>
            <br>
            <?php echo "$lang_email_new_mem04";?></strong></td>
          <td><br> <br> <br> 
            <?php $result = mysql_query("SELECT site_name FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
echo "{$row['site_name']}";
}while($row = mysql_fetch_array($result));?>
          </td>
        </tr>
        <tr valign="top"> 
          <td><br> <?php echo "<b />$lang_addon_1000</b>";?></td>
          <td><br> 
            <?php 
$result = mysql_query("SELECT private FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
if ($row['private'] == 0){
echo "$lang_addon_1001";}
if ($row['private'] == 1){
echo "$lang_addon_1002";}
}while($row = mysql_fetch_array($result));?>
          </td>
        </tr>
        <tr valign="top"> 
          <td width="125"><strong><br>
            <?php echo "$lang_profile21";?></strong></td>
          <td><br> <?php echo "{$folder_url}/";
$result = mysql_query("SELECT folder FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
echo "{$row['folder']}";
}while($row = mysql_fetch_array($result));?> </td>
        </tr>
      </table>
      <table width="450" align="center" class="general">
        <tr valign="top"> 
          <td width="33%"> 
            <div align="center"><a href="profile_edit.php"><br>
              <br>
              <br>
              </a><a href="profile_edit.php"><img src="images/profile_edit.png" alt="<?php echo "$lang_titles19";?>" width="48" height="48" border="0" /></a><br>
              <?php echo "$lang_titles19";?></div></td>
          <td width="33%"> 
            <div align="center"><br>
              <br>
              <br>
              <a href="clac.php"><img src="images/close.png" alt="Close Account" width="48" height="48" border="0"></a><br>
              <?php echo "$lang_titles31";?></div></td>
          <td width="33%"> 
            <div align="center"><br>
              <br>
              <br>
              <?php
if ($lang_sel =="on")
echo "<center><a href=\"lang2.php\"><img src=\"images/globe.png\" alt=\"$lang_lang11\" width=\"48\" height=\"48\" border=\"0\" /></a><br />
$lang_lang11</center>";
else
echo ""; 
?>
            </div></td>
        </tr>
      </table>
</td>
</tr>
</table>
					</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<?php include 'includes/footer.php';?>
<!-- end #footer -->
</body>
</html>