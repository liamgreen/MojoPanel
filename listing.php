<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/nli.php';?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
			<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p><table width="95%" align="center">
<tr>
<td class="general"> 
<table width="300" border=0 align=center cellpadding=5 cellspacing=1 >
<?php
$result = mysql_query("select * from $mhp_members where private = 0");
$row = mysql_fetch_array($result);
$row_count = 0;
do{
echo "<tr><td class=general><center><a href=\"{$row['folder']}\" target=blank>{$row['site_name']}</a></center></td></tr></center>";
$row_count++;
}while($row = mysql_fetch_array($result));
?>
</table>
</table></td>
</tr>
</table>
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