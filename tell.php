<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/header.php';?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
					<?php $result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$name = "{$row['name']}";
}while($row = mysql_fetch_array($result));
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$email = "{$row['email']}";
}while($row = mysql_fetch_array($result));
$ref = $_SERVER['HTTP_REFERER'];
echo "
<form method='post' action='tell.php'>
$lang_tell04 ($lang_tell09)
<br>
<input type='text' name='fname' size='40'>
<br><br>
$lang_tell03 ($lang_tell09)
<br>
<input type ='text' name='femail' size='40'>
<br><br>
$lang_tell01:
<br><textarea name='message' rows='5' cols='31'></textarea>
<br><br>
<input type='submit' name='submit' value='$lang_forms05'>
<input type='reset' name='reset' value='$lang_forms04'>
</form>";
if(!empty($_POST['submit'])){
$message = $_POST['message'];
$fname = $_POST['fname'];
$femail = $_POST['femail'];?>
</div></td>
</tr>
<tr> 
    <td valign="top"> 
      <div align="center"> 
<?php  if((empty($femail)) || (empty($fname))){
die("<b /><font color=\"FF0000\">$lang_titles07</font></b><br>$lang_tell08");}
$validate2 = eregi("^[A-Z0-9.-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$", $femail);
if(!$validate2){
die("<b /><font color=\"FF0000\">$lang_titles07</font></b><br>$lang_tell10 (<b />" .$femail. "</b>) $lang_tell02");}
$name = stripslashes($name);
$fname = stripslashes($fname);
$subject = "$lang_email_tell03 ".$fname." - $lang_email_tell02";
$message = trim(stripslashes($message));
$message = strip_tags($message);
$msg = wordwrap($message, '70', '<br>\n');
$headers = 'From: '.$email.'';
mail("$femail", "$subject","
$lang_email_tell03 $fname,
$msg
-------------------------------
$lang_email_tell04:
$folder_url
", $headers);
if(!mail){
echo "<b />$lang_tell06<b/>";
}else{
echo "<b />$lang_tell07 $lang_titles01</b>";}}
?>
					</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php include 'includes/usersidebar.php';?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<?php include 'includes/footer.php';?>
<!-- end #footer -->
</body>
</html>