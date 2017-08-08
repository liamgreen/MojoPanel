<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/nli.php';
session_start(); 
if ($_SESSION['reg']==!1)
header("Location: error.php");
else
?> 
<?php
if(isset($_POST['submit']))
{
if(!$_POST['folder']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register18<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['folder2']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register17<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(strtolower($_POST['folder']) != strtolower($_POST['folder2'])) { 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register35<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
$address_requested = strtolower($_POST['folder']);
$reserved = strtolower($reserved);
if (in_array($address_requested, explode(", ", $reserved))) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register29<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
$sciurus_folders = array('acp','admin','audio','images','includes','language','tinymce','visual');
if (in_array(strtolower($_POST['folder']), $sciurus_folders)) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register29<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
$q62 = mysql_query("SELECT * FROM $mhp_members WHERE `folder` = '".strtolower($_POST['folder'])."'");
$q63 = mysql_fetch_object($q62);
if($q63->folder == strtolower($_POST['folder'])) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register29<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
$junk = array('.' , ',' , '/' , '`' , ';' , '[' ,  ']' , '-', '_', '*', '#', '@', '!', '~', '+', '(', ')', '|', '{', '}', '<', '>', '?', ':', '"', '='); 
$len2 = strlen($_POST['folder']);
$_POST['folder'] = str_replace($junk, '', $_POST['folder']);
$test2 = $_POST['folder'];
if(strlen($test2) != $len2) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register19<br /><br />$lang_register34<br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['site_name']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register31<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['name']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register12<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['name_confirm']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register11<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if($_POST['name'] != $_POST['name_confirm']) { 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register10<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['username']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_forgot11<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
$junk = array('.' , ',' , '/' , '`' , ';' , '[' ,  ']' , '-', '_', '*', '#', '@', '!', '~', '+', '(', ')', '|', '{', '}', '<', '>', '?', ':', '"', '='); 
$len = strlen($_POST['username']);
$_POST['username'] = str_replace($junk, '', $_POST['username']);
$test = $_POST['username'];
if(strlen($test) != $len) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register24<br /><br />lang_register34<br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['username_confirm']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register28<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(strtolower($_POST['username']) != strtolower($_POST['username_confirm'])) { 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register26<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(strtolower($_POST['username']) == strtolower($_POST['folder'])) { 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register27<br /><br />$lang_register09<br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
$q2 = mysql_query("SELECT * FROM $mhp_members WHERE `username` = '".strtolower($_POST['username'])."'");
$q3 = mysql_fetch_object($q2);
if($q3->username == strtolower($_POST['username'])) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register36<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['email']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register06<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['email2']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile08<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(strtolower($_POST['email']) != strtolower($_POST['email2'])) { 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile07<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,6}$", $_POST['email'])) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile09<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
$q22 = mysql_query("SELECT * FROM `$mhp_members` WHERE `email` = '".strtolower($_POST['email'])."'");
$q33 = mysql_fetch_object($q22);
if($q33->email == strtolower($_POST['email'])) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register37<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['password']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register14<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['verify_password']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile18<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if($_POST['password'] != $_POST['verify_password']) { 
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register38<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(strlen($_POST['password']) < 6 ) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_profile19<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
} 
if(!$_POST['secret_question']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register21<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
if(!$_POST['secret_answer']) {
die("<div class=\"subtitle\"><font color=#ff0000><b /><br />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br /><br />
$lang_register20<br /><br /><br />
<a href=\"register2.php\"><b />$lang_forgot09</b></a></div>");
}
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
$member_since = "$day $month $year";
$ip = $_SERVER['REMOTE_ADDR'];
function GetID($x){      
$characters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9');
shuffle($characters);
for (; strlen($ReqID)<$x;){
$ReqID .= $characters[mt_rand(0, count($characters))];
}
return $ReqID;     
}
$email=strtolower($_POST['email']);      
$secret_variable .= (GetID(16));
$cid = md5($email.$secret_variable);
$msg = "$name\n\n$lang_register22 $lang_titles01. $lang_email_confirm01. $lang_email_confirm03\n\n$folder_url/verify.php?email=$email&cid=$cid\n\nRegards\n$lang_titles01";
$to = strtolower($_POST['email']);
$subject2="$lang_email_confirm02";
$mailheaders="From: $admin_email";
if ($confirm == 'no')
$pre_auth = 'yes';
else
$pre_auth = 'no';
$insert ="INSERT INTO `$mhp_members` (name, username, email, folder, site_name, password, secret_question, secret_answer, member_since, ip, 
adverts, approved, space, cid, confirmed, language) 
VALUES(
'".$_POST['name']."', 
'".strtolower($_POST['username'])."', 
'".strtolower($_POST['email'])."',
'".strtolower($_POST['folder'])."',
'".$_POST['site_name']."',
'".md5($_POST['password'])."',
'".$_POST['secret_question']."', 
'".$_POST['secret_answer']."',
'$member_since',
'$ip',
'$i_ads',
'$i_approved',
'$i_mbs',
'$secret_variable',
'$pre_auth', 
'$lang')"; 
$insert2 = mysql_query($insert);
if(!$insert2) die(mysql_error());
$folder = strtolower($_POST['folder']);
$new = $folder_path.$folder;
skeleton ($skel, $new);
if ($confirm=="yes")
mail ($to,$subject2,$msg,$mailheaders);
if ($notify=="yes"){
include "language/$lang_def/member_lang.php";
$mess1 = strtolower($_POST['username']); 
$mess2 = strtolower($_POST['email']);
$mess3 = strtolower($_POST['folder']);
$mess4 = $_POST['site_name'];
$headers = "FROM:$admin_email";
$subject = "$lang_email_new_mem03 $lang_titles01";
$message = "$lang_email_new_mem01 $lang_titles01 $lang_email_new_mem05;
$lang_forgot10 : $mess1
$lang_profile06 : $mess2
$lang_email_new_mem04 : $mess4
$lang_email_new_mem02 : $mess3
$lang_titles02 : $ip
";
mail ($admin_email, $subject, $message, $headers);}
if ($confirm == 'yes')
header("Location: register4.php");
else 
header("Location: register3.php");
} else {
?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
					<table width="540" align="center" class="general">
  <form name="signup" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <tr valign="top"> 
      <td> <?php echo "$lang_register30";?></td>
      <td colspan="3"> <?php echo "{$folder_url}/ ";?> 
        <input name="folder" type="text" id="folder" size="30"></td>
</tr>
    <tr valign="top"> 
      <td><br> <?php echo "$lang_register05";?></td>
      <td colspan="3"><br> <?php echo "{$folder_url}/ ";?> <input name="folder2" type="text" id="folder2" size="30"></td>
</tr>
    <tr valign="top"> 
      <td><br> <?php echo "$lang_email_new_mem04";?></td>
      <td colspan="3"><br> <input name="site_name" type="text" id="site_name" size="30"></td>
</tr>
<!-- Start Name -->
<tr valign="top"> 
      <td width="240"><br> <?php echo "$lang_stats04";?></td>
      <td width="200"> <br> <input name="name" type="text" id="name2" size="30"></td>
</tr>
<tr valign="top">       
	  <td width="100"> 
        <div><br>
          <?php echo "$lang_forms02";?> Name</div></td>
      <td width="200"><br> <input name="name_confirm" type="text" id="name_confirm" size="30"></td>
</tr>
<!-- End Name -->
<!-- Start Username -->
<tr valign="top"> 
      <td width="240"><br> <?php echo "$lang_register25";?><br> </td>
      <td width="200"><br> <input name="username" type="text" id ="username2" value="" size="30"></td>
</tr>
<tr valign="top"> 
	  <td width="100"> 
        <div><br>
          <?php echo "$lang_forms02";?> Username</div></td>
      <td width="200"><br> <input name="username_confirm" type="text" id="username_confirm" size="30"></td>
</tr>
<!-- End Username -->
<!-- Strat Email -->
<tr valign="top"> 
      <td width="240"><br> <?php echo "$lang_profile06";?></td>
      <td width="200"><br> <input type="text" id="email2" name="email" value="" size="30"></td>
</tr>
<tr valign="top">
       <td width="100"> 
        <div><br>
          <?php echo "$lang_forms02";?> Email</div></td>
      <td width="200"> <br> <input type="text" id="email" name="email2" value="" size="30"></td>
</tr>
<!-- End Email -->
<!-- Start Password -->
<tr valign="top"> 
      <td width="240"><br> <?php echo "$lang_register13";?></td>
      <td width="200"><br> <input name="password" type="password" id="password2" value="" size="30"> </td>
</td>
<tr valign="top">
      <td width="100"> 
        <div><br>
          <?php echo "$lang_forms02";?></div></td>
      <td width="200"> <br> <input name="verify_password" type="password" id="verify_password" value="" size="30"></td>
</tr>
<!-- End Password -->
<!-- Start Question -->
<tr valign="top"> 
      <td width="240"><br> <?php echo "$lang_profile20";?></td>
      <td width="200"> <br> <input name="secret_question" type="text" id="secret_question" size="30"></td>
</tr>
<tr valign="top"> 
      <td width="100"> 
        <div><br><?php echo "$lang_forgot01";?></div></td>
      <td width="200"> <br> <input name="secret_answer" type="text" id="secret_answer2" size="30"></td>
</tr>
<!-- End Question -->
<tr> 
<td colspan="4"> <div align="center"><br>
<table width="150">
<tr> 
<td width="50%"><div align="center"> 
<input type="submit" id="submit2" name="submit" value="<?php echo "$lang_forms06";?>">
</div></td>
<td width="50%"><div align="center"> 
<input type="reset" name="Reset" value="<?php echo "$lang_forms04";?>">
</div></td>
</tr>
</table>
</div></td>
</tr>
</form>
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