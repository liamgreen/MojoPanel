<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/nli.php';
session_start();
$result = mysql_query("SELECT * FROM $mhp_impressum");
while($row = mysql_fetch_array($result)){
$imp_name = $row['name'];
$imp_address = $row['address'];
$imp_telephone = $row['telephone'];
$imp_email = $row['email'];
$imp_website = $row['website'];
$imp_company = $row['company'];
$imp_responsible = $row['responsible'];
$imp_position = $row['position'];
$imp_registered = $row['registered'];
$imp_number = $row['number'];
$imp_eu_vat = $row['eu_vat'];}
mysql_close();
?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
<table align="center">
  <tr valign="top" class="general"> 
    <td width="39%"> <div align="right"><strong><br>
        <br>
        <?php echo $lang_impressum01a;?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></td>
    <td width="39%"><br> <br> <?php echo $imp_name;?></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="right"><strong><?php echo $lang_impressum02a;?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></td>
    <td><?php echo $imp_address;?></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="right"><strong><?php echo $lang_impressum03a;?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></td>
    <td><?php echo $imp_telephone;?></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="right"><strong><?php echo $lang_impressum04a;?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></td>
    <td><?php echo $imp_email;?></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="right"><strong><?php echo $lang_impressum05a;?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></td>
    <td><?php echo $imp_website;?></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="right"><strong><br>
        <?php echo $lang_impressum06a;?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></td>
    <td><br> <?php echo $imp_eu_vat;?></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="right"><strong><br>
        <?php echo $lang_impressum07a;?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></td>
    <td><br> <?php echo $imp_company;?></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="right"><strong><?php echo $lang_impressum08a;?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></td>
    <td><?php echo $imp_responsible;?></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="right"><strong><?php echo $lang_impressum09a;?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></td>
    <td><?php echo $imp_position;?></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="right"><strong><?php echo $lang_impressum10a;?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></td>
    <td><?php echo $imp_registered;?></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="right"><strong><?php echo $lang_impressum11a;?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></td>
    <td><?php echo $imp_number;?></td>
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
</body>
</html>