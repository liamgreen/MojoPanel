<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/header.php';?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
<table align="center" class="general">
        <tr valign="top"> 
          <td width="100"><strong><?php echo $lang_stats04;?></strong></td>
          <td> 
            <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
echo "{$row['name']}";
}while($row = mysql_fetch_array($result));?>
          </td>
        </tr>
        <tr valign="top"> 
          <td width="125"><strong><br>
            <?php echo $lang_stats03;?></strong></td>
          <td> <br> 
            <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
echo "{$row['member_since']}";
}while($row = mysql_fetch_array($result));?>
          </td>
        </tr>
        <tr valign="top"> 
          <td><strong><br>
            <br>
            <?php echo $lang_stats01;?></strong></td>
          <td> <br> <br> 
            <?php $result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$ads = "{$row['adverts']}";
}while($row = mysql_fetch_array($result));
if ($ads=='yes')
echo $lang_stats06; 
elseif ($ads=='no')
echo $lang_stats05; 
elseif ($i_ads=='no')
echo $lang_stats05; 
else
echo $lang_stats06; 
?>
          </td>
        </tr>
        <tr valign="top"> 
          <td><br /> <br /><strong>
            <?php echo $lang_stats02;?></strong></td>
          <td> <br> <br> 
            <?php 
function size_hum_read($size){
$i=0;
$iec = array(" B", " KB", " MB", " GB");
while (($size/1024)>1) {
$size=$size/1024;
$i++;}
return substr($size,0,strpos($size,'.')+3).$iec[$i];}
$username = $_SESSION['username'];
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$quota = "{$row['space']}"*1024*1024;
}while($row = mysql_fetch_array($result));
$result = mysql_query("SELECT folder FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$userdir = "{$row['folder']}/";
}while($row = mysql_fetch_array($result));
function dir_size($path) {
$size = 0;
$dir = opendir($path);
if (!$dir){return 0;}
while (($file = readdir($dir)) !== false) {
if ($file[0] == '.'){ continue; }
if (is_dir($path.$file)){
$size += dir_size($path.$file.DIRECTORY_SEPARATOR);
}else{
$size += filesize($path.$file);}}
closedir($dir);
return $size;}
$used = (dir_size($userdir));
$quota2 = size_hum_read($quota);
echo $quota2;?>
          </td>
        </tr>
        <tr valign="top"> 
          <td colspan="2" class="general_center"><br>
            <?php 
		  include('includes/graphs.inc.php');		  
$spare = $quota - $used;		  
$spare2 = size_hum_read($spare);
$used2 = size_hum_read($used);
if ($spare < 0)
$spare = 0;
		  $graph = new BAR_GRAPH("hBar");
$graph->values = "$spare;$used";
$graph->labels = "$lang_stats09 ($spare2):&nbsp;&nbsp;&nbsp;<br><br>&nbsp;$lang_stats08 ($used2):&nbsp;&nbsp;&nbsp;";
//$graph->legend = "Available,Used";
$graph->barColors = "images/green.gif,images/red.gif";
echo $graph->create();
		  ?>
          </td>
        </tr>
      </table>
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