<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/header.php';?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
<table width="100%">
  <tr>
    <th width="5%" align="left"><h2 class="title" align="center"><a href="#"><?php echo "$lang_titles10";?></a></h2></th>
    <th width="95%" align="right"><a href="logged_in.php"><img src="images/home.png" alt="<?php echo "$lang_control04";?>" width="48" height="48" border="0" style="margin-right:24px"></a><br>
<?php echo "$lang_control04";?></th>
  </tr>
</table>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
      <?php 
if ($lang_sel == 'on'){
$username = $_SESSION['username'];
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$lang = "{$row['language']}";
}while($row = mysql_fetch_array($result));
if ($lang =='')
$lang = $lang_def;
include("language/$lang/member_help.php");
}else{
include("language/$lang_def/member_help.php");
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