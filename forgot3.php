<?php include 'includes/nli.php';
session_start(); 
if ($_SESSION['forgotpw']==!1)
header("Location: error.php");
else
if(isset($_POST['submit'])) {
if(!$_POST['secret_answer']) 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br>$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_forgot06<br /><br /><br />
<a href=\"forgot2.php\"><b />$lang_forgot09</b></a></div>");
$get_user = mysql_query("SELECT * FROM $mhp_members WHERE secret_answer = '".$_POST['secret_answer']."'");
$q = mysql_fetch_object($get_user);
if(!$q) 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br>$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_forgot05<br /><br /><br />
<a href=\"forgot2.php\"><b />$lang_forgot09</b></a></div>");
function GetID($x){      
$characters = array('a','b','c','d','e','f','g','h','i','j','k','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z','2','3','4','5','6','7','8','9');
shuffle($characters);
for (; strlen($ReqID)<$x;){
$ReqID .= $characters[mt_rand(0, count($characters))];}
return $ReqID;}      
$np .= (GetID(8));
$name = $_SESSION['username'];
$to = strtolower($_SESSION['mail']);
mysql_query("UPDATE $mhp_members SET password = ('".md5($np)."') WHERE email = '$to'");
$headers = "FROM:$admin_email";
$subject = "$lang_titles01 - Member Password Reset";
$message = "$name

Your password has been reset to:

$np

Please change this to something more memorable next time you login.

$lang_confirm08
$lang_titles01
";
mail ($to, $subject, $message, $headers);
echo "<br /><br /><br /><br /><br />Your password has been reset and e-mailed to you<br /><br /><br /><a href=\"index.php\"><b />$lang_register44</b></a>";
$_SESSION['forgotpw'] = 0;
session_destroy();
} else {
?>
<table width="95%" align="center">
<tr> 
<td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="index.php"><img src="images/home.png" alt="<?php echo "$lang_titles27";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_titles27";?></p>
</div></td>
<td><div align="center"> 
        <p class="subtitle"><?php echo "$lang_titles09";?></p>
</div></td>
<td width="48">&nbsp;</td>
</tr>
</table>
<table width="95%" align="center">
<tr> 
<td class="general">
<form name="login" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <table width="220" align="center" class="general">
          <tr> 
<td colspan="2"> 
<?php
$username =  $_SESSION['username'];
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{
echo "{$row['secret_question']}";
}while($row = mysql_fetch_array($result));
?>
</td>
</tr>
          <tr valign="top"> 
            <td width="70"><br>
<?php echo "$lang_forgot01";?></td>
            <td width="150"><br> <input type="text" id="password2" name="secret_answer"></td>
</tr>
<tr> 
<td><br>
</td>
<td><br>
<table width="50%" align="center">
<tr> 
<td width="50%"><div align="center"> 
<input type="submit" value="<?php echo "$lang_forms06";?>" name="submit" id="submit">
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