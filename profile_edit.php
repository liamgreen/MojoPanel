<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/header.php';
if(isset($_POST['submit4']))
{
if(!$_POST['new_wsn']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile16<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['new_wsn2']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile22<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
if($_POST['new_wsn'] != $_POST['new_wsn2']) { 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile23<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
mysql_query("UPDATE $mhp_members SET site_name = ('".$_POST['new_wsn']."') WHERE username = '$username'");
header("Location: profile.php");
} else {
} 
if(isset($_POST['submit1']))
{
if(!$_POST['new_mail']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile11<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['new_mail_confirm']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile08<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
if(strtolower($_POST['new_mail']) != strtolower($_POST['new_mail_confirm'])) { 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile07<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,6}$", $_POST['new_mail'])) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile09<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
$email_check = strtolower($_POST['new_mail']);
$domain = strstr($email_check, '@');
include 'includes/em_blocklist.php';
if (in_array ($domain, $block_list)){
die("<div align=\"center\"><font color=\"#ff0000\"><b><br><br><br><br><br><br><br><br>
$lang_block_mail02<br /><br /><br /><a href=\"profile_edit.php\">$lang_forgot09</font></div>");}
mysql_query("UPDATE $mhp_members SET email = ('".strtolower($_POST['new_mail'])."') WHERE username = '$username'");
header("Location: profile.php");
} else {
} 
if(isset($_POST['submit2']))
{
if(!$_POST['new_pass']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile13<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['new_pass_confirm']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile18<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
if($_POST['new_pass'] != $_POST['new_pass_confirm']) { 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register38<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
if(strlen($_POST['new_pass']) < 6 ) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile19<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
} 
mysql_query("UPDATE $mhp_members SET password = ('".md5($_POST['new_pass'])."') WHERE username = '$username'");
header("Location: profile.php");
} else {
} 
if(isset($_POST['submit3']))
{
if(!$_POST['new_secret']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile15<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['new_answer']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile01<br /><br /><br />
<a href=\"profile_edit.php\"><b />$lang_forgot09</b></a></div>");
}
mysql_query("UPDATE $mhp_members SET secret_question = ('".$_POST['new_secret']."') WHERE username = '$username'");
mysql_query("UPDATE $mhp_members SET secret_answer = ('".$_POST['new_answer']."') WHERE username = '$username'");
header("Location: profile.php");
} else {
} 
?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
<?php if(isset($_POST['submit5']))
	{
	mysql_query("UPDATE $mhp_members SET private = ('".$_POST['private']."') where username = '$username'");
	header ("Location: profile.php");
	} else {
	}?>
<table class="general" align="center">
  <tr class="general"> 
    <td> <form name="form1" method="post" action="">
        <table width="750" align="center" class="general">
          <tr> 
            <td colspan="5" class="subtitle"><?php echo "$lang_profile05";?></td>
          </tr>
          <tr valign="top" class="general"> 
            <td width="170"><br> <?php echo "$lang_profile17";?></td>
            <td width="200"><br> <input name="new_wsn" type="text" id="new_wsn" size="32"> </td>
		  </tr>
		  <tr valign="top" class="general"> 
            <td width="80"><br>
                <?php echo "$lang_forms02";?></div></td>
            <td width="200"><br> <input name="new_wsn2" type="text" id="new_wsn2" size="32"> 
            </td>
		  </tr>
		  <tr valign="top" class="general"> 
            <td width="100">
                <input name="submit4" type="submit" id="submit4" value="<?php echo "$lang_forms06";?>">
              </div></td>
          </tr>
        </table>
      </form>
      <form action="" method="post" name="form5" id="form5">
        <table width="750" align="center" class="general">
          <tr valign="top" class="general"> 
            <td><br>
              <?php echo "$lang_addon_1000";
			  $result = mysql_query("SELECT private FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$show_state = $row['private'];
}while($row = mysql_fetch_array($result));
			  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="private" type="radio" value="0" <?php if ($show_state==0)echo'checked';?>>
              <?php echo "$lang_addon_1001";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              <input name="private" type="radio" value="1" <?php if ($show_state==1)echo'checked';?>>
              <?php echo "$lang_addon_1002";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="submit5" type="submit" id="submit522" value="<?php echo "$lang_forms06";?>"></td>
          </tr>
        </table>
      </form> 
  <form name="form1" method="post" action="">
    <table width="750" align="center" class="general">
      <tr> 
        <td colspan="5" class="subtitle"><?php echo "$lang_profile02";?></td>
      </tr>
      <tr valign="top" class="general"> 
        <td width="170"><br> <?php echo "$lang_profile10";?></td>
        <td width="200"><br> <input name="new_mail" type="text" id="new_mail" size="32"> </td>
	  </tr>
	  <tr valign="top" class="general"> 
        <td width="80"><br>
            <?php echo "$lang_forms02";?></div></td>
        <td width="200"><br> <input name="new_mail_confirm" type="text" id="new_mail_confirm" size="32"> 
        </td>
	  </tr>
	  <tr valign="top" class="general"> 
        <td width="100"> 
            <input name="submit1" type="submit" id="submit1" value="<?php echo "$lang_forms06";?>">
          </div></td>
      </tr>
    </table>
  </form>
  <form name="form2" method="post" action="">
    <table width="750" align="center" class="general">
      <tr> 
        <td colspan="5" class="subtitle"><?php echo "$lang_profile03";?></td>
      </tr>
      <tr valign="top" class="general"> 
        <td width="170"><br> <?php echo "$lang_profile12";?></td>
        <td width="200"><br> <input name="new_pass" type="password" id="new_pass" size="32"> </td>
	  </tr>
	  <tr valign="top" class="general"> 
        <td width="80"><br>
            <?php echo "$lang_forms02";?></div></td>
        <td width="200"><br> <input name="new_pass_confirm" type="password" id="new_pass_confirm" size="32"> 
        </td>
	  </tr>
	  <tr valign="top" class="general"> 
        <td width="100">
            <input name="submit2" type="submit" id="submit2" value="<?php echo "$lang_forms06";?>">
          </div></td>
      </tr>
    </table>
  </form>
  <form name="form3" method="post" action="">
    <table width="750" align="center" class="general">
      <tr> 
        <td colspan="5" class="subtitle"><?php echo "$lang_profile04";?></td>
      </tr>
      <tr valign="top" class="general"> 
        <td width="170"><br> <?php echo "$lang_profile14";?></td>
        <td width="200"><br> <input name="new_secret" type="text" id="new_secret" size="32"></td>
	  </tr>
	  <tr valign="top" class="general"> 
        <td width="80"><br>
            <?php echo "$lang_forgot01";?></div></td>
        <td width="200"><br> <input name="new_answer" type="text" id="new_answer" size="32"> 
        </td>
	  </tr>
	  <tr valign="top" class="general"> 
        <td width="100">
            <input name="submit3" type="submit" id="submit3" value="<?php echo "$lang_forms06";?>">
          </div></td>
      </tr>
    </table>
  </form></td>  
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