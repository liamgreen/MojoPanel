<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/nli.php';
session_start();
if ($_SESSION['reg']==!1)
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
					<table width="95%" align="center" class="general">
  <tr> 
    <td><br> <?php echo "$lang_register04&nbsp;$lang_titles01,&nbsp;$lang_register32";?> <a href="terms.php"><?php echo "$lang_titles25";?></a>. 
      <?php echo "$lang_register15<br><br>$lang_register16&nbsp;$lang_register23<br><br>$lang_register02";?> 
    </td>
  </tr>
  <tr> 
    <td><form name="form" method="post" action="">
        <div align="center"><br>
          <input name="submit" type="submit" id="submit" value="<?php echo "$lang_titles20";?>">
        <?php
if(isset($_POST['submit'])){
header("Location: register2.php");}
?></div>
      </form></td>
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
</body>
</html>