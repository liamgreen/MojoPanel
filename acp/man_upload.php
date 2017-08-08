<?php include 'includes/header.php';
setcookie ("oldfile", $oldfile, time() - 3600);
setcookie ("oldpath", $oldpath, time() - 3600);
setcookie ("delfile", $delfile, time() - 3600);
setcookie ("delpath", $delpath, time() - 3600);
$size_bytes = $max_file_size * 1024;
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
?>
<table width="95%" align="center">
<tr> 
    <td width="48" valign="top"> 
      <div align="center" class="subtitle"> 
        <p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
          <?php echo $lang_control01;?></p>
</div></td>
<td><div align="center"> 
<p class="subtitle"><?php echo $lang_titles28;?></p>
</div></td>
    <td width="48"><div align="center"> 
        <p class="general_center"><a href="mfm.php"><img src="../images/mfm.png" alt="<?php echo "$admin_titles19";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$admin_titles19";?></p>
      </div></td>
</tr>
</table>
<table width="95%" align="center" class="general">
<tr> 
    <td class="general_center"> 
      <?php
$upload_dir = "$folder_path";
if (!is_dir("$upload_dir")) {
die("<div class=\"subtitle\"><font color=#ff0000><b />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br />
$lang_file_man11 <a href=\"memberh.php\"><b />$lang_titles23</b></a></div>");}
if (!is_writeable("$upload_dir")){
die("<div class=\"subtitle\"><font color=#ff0000><b />$lang_titles07</b></font></div>
<div class=\"general_center\"><br /><br />
$lang_file_man12 <a href=\"memberh.php\"><b />$lang_titles23</b></a></div>");}
echo "$lang_upload14 $max_uploads $lang_upload07<br><br>";
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
 if(file_exists($d1.$file_name)){
 echo "$lang_upload03 $i: ($file_name) <font color=\"ff0000\">$lang_upload04</font>";
 }else{
 if (move_uploaded_file($file_tmp,$d1.$file_name)) {
$newfile = "$d1$file_name";
chmod ($newfile, 0777);
echo "$lang_upload03 $i: ($file_name) $lang_upload13";
}else{
echo "$lang_upload03 $i: <font color=\"ff0000\">$lang_upload02</font>";}}}}
echo "<a href=\"$_SERVER[PHP_SELF]\"><br><br><br><b />$lang_upload12<b/></a>";
}else{
echo " <form method=\"post\" action=\"$_SERVER[PHP_SELF]\" enctype=\"multipart/form-data\">";
for ($i = 0; $i <= $num_files; $i++) {
echo "$lang_upload03 $i: <input type=\"file\" name=\"file". $i ."\"><br>";}
?><br><?php
echo "$lang_upload16<br><br><b />$lang_upload17</b><br><br><b />$lang_upload18</b> $lang_upload19&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b />
	  $lang_upload20</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$lang_upload21<br><br>";
echo " / <input name=\"destination\" type=\"text\" id=\"destination\"><br><br>
<input type=\"submit\" name=\"upload_form\" value=\"$lang_forms07\">
</form>";}?>
    </td>
</tr>
</table>
</body></html>