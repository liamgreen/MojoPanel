<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/header.php';
setcookie ("oldfile", $oldfile, time() - 3600);
setcookie ("oldpath", $oldpath, time() - 3600);
setcookie ("delfile", $delfile, time() - 3600);
setcookie ("delpath", $delpath, time() - 3600);
$size_bytes = $max_file_size * 1024;
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$s1 = "{$row['space']}";
}while($row = mysql_fetch_array($result));
if ($s1=='0')
$s2=$i_mbs;
else
$s2=$s1; 
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
function size_hum_read($size){
$i=0;
$iec = array(" B", " KB", " MB", " GB");
while (($size/1024)>1) {
$size=$size/1024;
$i++;}
return substr($size,0,strpos($size,'.')+3).$iec[$i];}
$used = size_hum_read(dir_size($userdir));
$all = ($s2*1024*1024);
$left = ($s2*1024*1024)-(dir_size($userdir));
$remaining = size_hum_read($left);
?>
<div id="wrapper">
<table width="95%" align="center">
<tr> 
<td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="logged_in.php"><img src="images/home.png" alt="<?php echo "$lang_control04";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_control04";?></p>
</div></td>
<td><div align="center"> 
<p class="subtitle"><?php echo $lang_titles28;?></p>
</div></td>
    <td width="48"><div align="center"><p class="general_center"><a href="file_manager.php"><img src="images/file_manager.png" alt="<?php echo "$lang_titles08";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_titles08";?></p></div></td>
</tr>
</table>
<table width="95%" align="center" class="general">
<tr> 
    <td class="general_center"> 
      <?php
$upload_dir = "$folder_path$userdir";
if (!is_dir("$upload_dir")) {
die("<div class=\"subtitle\"><font color=#ff0000><b />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br />
$lang_file_man11 <a href=\"memberh.php\"><b />$lang_titles23</b></a></div>");}
if (!is_writeable("$upload_dir")){
die("<div class=\"subtitle\"><font color=#ff0000><b />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br />
$lang_file_man12 <a href=\"memberh.php\"><b />$lang_titles23</b></a></div>");}
if ($left <= 0){
echo "<br><br><font color=\"FF0000\"><b />$lang_upload11</b></font><br><br>
$lang_upload01 <a href=\"memberh.php\"><b />$lang_titles23</b></a> $lang_upload15";
}else{
echo "$lang_upload14 $max_uploads $lang_upload07 $lang_upload09 ". $size_bytes / 1024 ." KB<br><br>";
echo "<b />$lang_file_man08</b> "; foreach(explode(', ', implode("&nbsp;&nbsp;", $permitted)) as $ok){echo "$ok&nbsp;&nbsp;&nbsp;";}
$num_files = ($max_uploads-1);
if (isset($_POST['upload_form'])){
$destination = strtolower($_POST['destination']);
if(strstr($destination, '..')){
die("<br /><br /><br /><br /><b />$lang_file_man07</b>");}
if ($destination =='')
$d1 = $upload_dir;
else
$d1 = $upload_dir."$destination/";
for ($i = -0; $i <= $num_files; $i++) {
$new_file = $_FILES['file'.$i];
$file_name = $new_file['name'];
$file_name = str_replace(' ', '_', $file_name);
$file_tmp = $new_file['tmp_name'];
$file_size = $new_file['size'];
echo "<br><br>";
if (!is_uploaded_file($file_tmp)) {
echo "$lang_upload03 $i: $lang_upload10";
}else{
$ext = str_replace('.','',strstr($file_name, '.'));
if (!in_array(strtolower($ext),$permitted)) {
echo "$lang_upload03 $i: ($file_name) <font color=\"ff0000\">$lang_upload06</font>";
}else{
if ($file_size > $size_bytes){
echo "$lang_upload03 $i: ($file_name) <font color=\"ff0000\">$lang_upload05 <b>". $size_bytes / 1024 ."</b> $lang_upload08</font>";
 }else{
 if(file_exists($d1.$file_name)){
 echo "$lang_upload03 $i: ($file_name) <font color=\"ff0000\">$lang_upload04</font>";
 }else{
 if (move_uploaded_file($file_tmp,$d1.$file_name)) {
$result = mysql_query("SELECT * FROM $mhp_members WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$adverts =  "{$row['adverts']}";
}while($row = mysql_fetch_array($result));
if ($adverts=='yes'){
$ext = substr(($t=strrchr($file_name,'.'))!==false?$t:'',1);
if (in_array(strtolower($ext),$add_ads)) {
$adcode = file_get_contents("includes/ads.inc");
$open = fopen("$d1$file_name", 'ab');
fwrite($open, "<!--ADS-START--><div align=\"center\">$adcode</div><!--ADS-END-->");
fclose($open);}}
$newfile = "$d1$file_name";
chmod ($newfile, 0777);
echo "$lang_upload03 $i: ($file_name) $lang_upload13";
}else{
echo "$lang_upload03 $i: <font color=\"ff0000\">$lang_upload02</font>";}}}}}}
echo "<a href=\"$_SERVER[PHP_SELF]\"><br><br><br><b />$lang_upload12<b/></a>";
}else{
echo " <form method=\"post\" action=\"$_SERVER[PHP_SELF]\" enctype=\"multipart/form-data\">";
for ($i = 0; $i <= $num_files; $i++) {
echo "$lang_upload03 $i: <input type=\"file\" name=\"file". $i ."\"><br>";}
?><br><?php
echo "$lang_upload16<br><br>$lang_upload17<br><br><b />$lang_upload18</b> $lang_upload19&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b />
	  $lang_upload20</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$lang_upload21<br><br>";
echo " $userdir <input name=\"destination\" type=\"text\" id=\"destination\"><br><br><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"$size_bytes\">
<input type=\"submit\" name=\"upload_form\" value=\"$lang_forms07\">
</form>";}}?>
    </td>
</tr>
</table>
	<!-- end #page -->
</div>
<?php include 'includes/footer.php';?>
<!-- end #footer -->
</body></html>