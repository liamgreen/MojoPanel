<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/nli.php';
session_start(); 
if ($_SESSION['forgotpw']==!1)
header("Location: error.php");
else
if(isset($_POST['submit'])) {
if(!$_POST['username']) 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br>$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_forgot11<br /><br /><br />
<a href=\"forgot2.php\"><b />$lang_forgot09</b></a></div>");
if(!$_POST['email'])
die("<div class=\"subtitle\"><font color=#ff0000><b /><br>$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_forgot02<br /><br /><br />
<a href=\"forgot2.php\"><b />$lang_forgot09</b></a></div>");
$get_user = mysql_query("SELECT * FROM $mhp_members WHERE username = '".strtolower($_POST['username'])."' AND 
email = '".strtolower($_POST['email'])."'");
$q = mysql_fetch_object($get_user);
if(!$q) 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br>$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_forgot05<br /><br /><br />
<a href=\"forgot2.php\"><b />$lang_forgot09</b></a></div>");
$_SESSION['forgotpass'] = 1;
$_SESSION['username'] = $_POST['username']; 
$_SESSION['mail'] = $_POST['email']; 
session_write_close();
header("Location: forgot3.php");
}else{
?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
<table width="95%" align="center">
<tr> 
<td class="general">
<form name="login" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <table width="220" align="center" class="general">
          <tr valign="top"> 
            <td width="70"><br>
              <?php echo "$lang_forgot10";?></td>
            <td width="150"><br> <input type="text" id="username" name="username"></td>
</tr>
          <tr valign="top"> 
            <td width="70"><br>
              <?php echo "$lang_profile06";?></td>
            <td width="150"><br> <input type="text" id="password2" name="email"></td>
</tr>
<tr> 
<td><br>
</td>
<td><br>
<table width="50%" align="center">
<tr> 
<td width="50%"><div align="center"> 
<input type="submit" value="<?php echo "$lang_forms06";?>" name="submit" id="submit2">
</div></td>
<td width="50%"><div align="center"> 
<input type="reset" name="Reset" value="<?php echo "$lang_forms04";?>">
</div></td>
</tr>
</table></td>
</tr>
</table>
</form>
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
	<!--<div class="container"><img src="images/img03.png" width="1000" height="40" alt="" /></div>-->
	<!-- end #page -->
</div>
<?php include 'includes/footer.php';?>
<!-- end #footer -->
<?php
}
?>
</body>
</html>