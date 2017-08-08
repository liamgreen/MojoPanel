<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/nli.php';
session_start(); 
if ($_SESSION['support']==!1)
header("Location: error.php");
else
?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
<table align="center" class="general">
  <form name="signup" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <tr valign="top"> 
      <td width="150"><br>
<?php echo "<b />$lang_stats04</b> ($lang_support12)";?></td>
      <td width="210"><br> <input name="name" type="text" id="name" size="30"></td>
</tr>
    <tr valign="top"> 
      <td><br> <?php echo "<b />$lang_profile06</b> ($lang_support12)";?></td>
      <td><br> <input name="email" type="text" id="email" size="30"></td>
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
if(isset($_POST['submit'])){
if(!$_POST['name']) {
die("<font color=\"#FF0000\"><b />$lang_register12</b></font>");}
if(!$_POST['email']) {
die("<font color=\"#FF0000\"><b />$lang_register06</b></font>");}
if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,6}$", $_POST['email'])) {
die("<font color=\"#FF0000\"><b />$lang_profile09</b></font>");}
if($_POST['cat']== $lang_support08) {
die("<font color=\"#FF0000\"><b />$lang_support03</b></font>");}
if(!$_POST['details']) {
die("<font color=\"#FF0000\"><b />$lang_support05</b></font>");}
$name2 = $_POST['name'];
$email2 = strtolower($_POST['email']);
$cat = $_POST['cat'];
$details2 = $_POST['details'];
$ip = $_SERVER['REMOTE_ADDR'];
$headers = "FROM:$email";
$subject = $lang_titles01.' '.$lang_titles23;
$message = "$lang_email_support01 $lang_titles01, $lang_email_support04.;

$lang_email_support02 : $lang_email_support03
$lang_stats04 : $name2
$lang_profile06 : $email2
$lang_support02 : $cat
$lang_support04 : $details2
$lang_titles02 : $ip
";
mail ($support_email, $subject, $message, $headers);
header ("Location: support3.php");}?>
</p>

					</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php include 'includes/sidebar.php';?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<?php include 'includes/footer.php';?>
<!-- end #footer -->
</body>
</html>