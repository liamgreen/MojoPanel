<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/nli.php';
session_start(); 
if ($_SESSION['lin']==!1)
header("Location: error.php");
else
if(isset($_POST['submit'])) {
if(!$_POST['username']) 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br>$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_forgot11<br /><br /><br />
<a href=\"login2.php\"><b />$lang_forgot09</b></a></div>");
if(!$_POST['password'])
die("<div class=\"subtitle\"><font color=#ff0000><b /><br>$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register14<br /><br /><br />
<a href=\"login2.php\"><b />$lang_forgot09</b></a></div>");
$get_user = mysql_query("SELECT * FROM `$mhp_members` WHERE username = '".$_POST['username']."' AND 
password = '".md5($_POST['password'])."'");
$q = mysql_fetch_object($get_user);
if(!$q) 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br>$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_forgot05<br /><br /><br />
<a href=\"login2.php\"><b />$lang_forgot09</b></a></div>");
$day = date('j');
$year = date('Y');
$month = date('n');
if ($month==1)
$month = $lang_month01;
elseif ($month==2)
$month = $lang_month02;
elseif ($month==3)
$month = $lang_month03;
elseif ($month==4)
$month = $lang_month04;
elseif ($month==5)
$month = $lang_month05;
elseif ($month==6)
$month = $lang_month06;
elseif ($month==7)
$month = $lang_month07;
elseif ($month==8)
$month = $lang_month08;
elseif ($month==9)
$month = $lang_month09;
elseif ($month==10)
$month = $lang_month10;
elseif ($month==11)
$month = $lang_month11;
else
$month = $lang_month12;
$last_login = "$day $month $year";
$ip = $_SERVER['REMOTE_ADDR'];
$user= strtolower($_POST['username']); 
mysql_query("UPDATE $mhp_members SET last_login = '$last_login'
WHERE username = '$user'");
mysql_query("UPDATE $mhp_members SET ip = '$ip'
WHERE username = '$user'");
$_SESSION['logged_in'] = 1;
$_SESSION['username'] = $_POST['username']; 
$_SESSION['password'] = $_POST['password']; 
session_write_close();
header("Location: logged_in.php");
} else {
?>
<div id="wrapper">
	<!-- end #header -->
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
            <td width="150"><br>
<input type="text" id="username" name="username"></td>
</tr>
          <tr valign="top"> 
            <td width="70"><br>
<?php echo "$lang_forgot07";?></td>
            <td width="150"><br>
<input type="password" id="password2" name="password"></td>
</tr>
<tr> 
<td colspan="2"><br>
<table width="50%" align="center">
<tr> 
<td width="50%"><div align="center"> 
<input type="submit" value="<?php echo "$lang_forms06";?>" name="submit" id="submit3">
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
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<?php include 'includes/footer.php';?>
<!-- end #footer -->
<?php
}
?>
</body>
</html>