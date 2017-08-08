<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/header.php';?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
                        <table width="100%">
  <tr>
    <th width="56%" align="left"><h2 class="title" align="left"><a href="#"><?php echo $lang_titles16;?></a></h2></th>
    <th width="44%" align="right"><a href="logged_in.php"><img src="images/home.png" alt="<?php echo "$lang_control04";?>" width="48" height="48" border="0" style="margin-right:24px"></a><br>
<?php echo "$lang_control04";?></th>
  </tr>
</table>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<table align="center" class="general">
  <form name="signup" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <tr valign="top"> 
      <td width="150"><br>
<?php echo "<b />$lang_stats04</b> ($lang_support12)";?></td>
      <td width="210"><br> 
        <?php $result = mysql_query("SELECT name FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$name = "{$row['name']}";
echo $name;
}while($row = mysql_fetch_array($result));
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$member_no = "{$row['user_id']}";
}while($row = mysql_fetch_array($result));?>
      </td>
</tr>
    <tr valign="top"> 
      <td><br> <?php echo "<b />$lang_profile06</b> ($lang_support12)";?></td>
      <td><br> 
        <?php $result = mysql_query("SELECT email FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$email =  "{$row['email']}";
echo $email;
}while($row = mysql_fetch_array($result));?>
      </td>
</tr>
    <tr valign="top"> 
      <td><br>
        <?php echo "<b />$lang_support02</b> ($lang_support12)";?></td>
      <td><br> <select name="cat" id="cat">
<option><?php echo $lang_support08;?></option>
<option value="<?php echo $lang_support01;?>"><?php echo $lang_support01;?></option>
<option value="<?php echo $lang_support06;?>"><?php echo $lang_support06;?></option>
<option value="<?php echo $lang_titles07;?>"><?php echo $lang_titles07;?></option>
<option value="<?php echo $lang_titles18;?>"><?php echo $lang_titles18;?></option>
<option value="<?php echo $lang_support10;?>"><?php echo $lang_support10;?></option>
<option value="<?php echo $lang_support09;?>"><?php echo $lang_support09;?></option>
<option value="<?php echo $lang_support11;?>"><?php echo $lang_support11;?></option>
<option value="<?php echo $lang_support13;?>"><?php echo $lang_support13;?></option>
<option value="<?php echo $lang_support14;?>"><?php echo $lang_support14;?></option>
<option value="<?php echo $lang_titles28;?>"><?php echo $lang_titles28;?></option>
<option value="<?php echo $lang_support15;?>"><?php echo $lang_support15;?></option>
</select> </td>
</tr>
    <tr valign="top"> 
      <td><br> <?php echo "<b />$lang_support04</b> ($lang_support12)";?></td>
      <td> <br> 
<textarea name="details" cols="23" rows="5" id="details"></textarea></td>
</tr>
<tr> 
<td colspan="2"> <div align="center"><br>
<table width="150">
<tr> 
<td width="50%"><div align="center"> 
<input type="submit" id="submit2" name="submit" value="<?php echo "$lang_forms05";?>">
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
<p class="general_center">
  <?php
if(isset($_POST['submit']))
{
if($_POST['cat']== $lang_support08) {
die("<font color =\"#FF0000\"><b />$lang_support03</b></font>");
}
if(!$_POST['details']) {
die("<font color =\"#FF0000\"><b />$lang_support05</b></font>");
}
echo "<b />$lang_support07</b>";
include "language/$lang_def/member_lang.php";
$name2 = $_POST['name'];
$email2 = strtolower($_POST['email']);
$cat = $_POST['cat'];
$details2 = $_POST['details'];
$ip = $_SERVER['REMOTE_ADDR'];
$headers = "FROM:$email";
$subject = $lang_titles01.' '.$lang_titles23;

$message = "$lang_email_support01 $lang_titles01, $lang_email_support04.;

$lang_email_support02 : $member_no
$lang_stats04 : $name
$lang_profile06 : $email
$lang_support02 : $cat
$lang_support04 : $details2
$lang_titles02 : $ip
";
mail ($support_email, $subject, $message, $headers);
}
?>
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
</body>
</html>