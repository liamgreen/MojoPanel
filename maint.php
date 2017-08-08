<?php include 'includes/maint_header.php';
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
$last_login = date('l j F Y');
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
<table width="95%" align="center">
<tr> 
<td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center">&nbsp;</p>
</div></td>
<td><div align="center"> 
        <p class="subtitle"><br>
          <?php echo $admin_maint01;?></p>
</div></td>
<td width="48">&nbsp;</td>
</tr>
</table>
<table width="95%" align="center">
  <tr valign="top" class="general"> 
    <td width="33%" class="general_center"><br>
      <br> <?php echo $admin_maint02;?><br>
      <br> <?php echo $admin_maint03;?></td>
  </tr>
</table>
<table width="95%" align="center">
<tr> 
<td class="general">
<form name="login" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <br>
        <br>
        <table width="220" align="center" class="general">
          <tr valign="top"> 
            <td width="70"> <?php echo "$lang_forgot10";?></td>
            <td width="150"> 
              <input name="username" type="text" id="username"></td>
</tr>
          <tr valign="top"> 
            <td width="70"><br>
<?php echo "$lang_forgot07";?></td>
            <td width="150"><br>
<input name="password" type="password" id="password2"></td>
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
<?php
}
?>
</body></html>