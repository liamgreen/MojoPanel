<?php include 'includes/header.php';
setcookie ("oldfile", $oldfile, time() - 3600);
setcookie ("oldpath", $oldpath, time() - 3600);
setcookie ("delfile", $delfile, time() - 3600);
setcookie ("delpath", $delpath, time() - 3600);?>
<SCRIPT>
function getbrowserwidth(){
if (navigator.userAgent.indexOf("MSIE") > 0){
return(document.body.clientWidth);
}else{
return window.outerWidth;}}
function getbrowserheight(){
if (navigator.userAgent.indexOf("MSIE") > 0){
return(document.body.clientHeight);
}else{
return(window.outerHeight);}}
var popup = new Object()
function CenterPopup(URL, width, height){
// get center of browser window
var X = getbrowserwidth() / 2
var Y = getbrowserheight() / 2                    	
popup = window.open(URL, 'PopUp', 
'scrollbars=no ' +
'width=' + width + ' ' +
'height=' + height + ' ' +
'top=' + (window.screenTop + (Y - (height/2))) + ' ' +
'left=' + (window.screenLeft + (X - (width/2))) )
popup.focus()}
</SCRIPT>
<table width="95%" align="center">
<tr> 
<td width="48">
<div align="center" class="subtitle"> 
        <p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
          <?php echo $lang_control01;?></p>
</div></td>
<td><div align="center"> 
        <p class="subtitle"><?php echo "$admin_titles19";?></p>
      </div></td>
    <td width="48" class="general_center"><div align="center"><a href="man_upload.php"><img src="../images/upload.png" alt="<?php echo $lang_titles28;?>" width="48" height="48" border="0"></a><br>
        <?php echo $lang_titles28;?></div></td>
</tr>
</table>
<table width="95%" class="general" align="center">
  <tr class="general_center"> 
    <td>
      <?php
error_reporting(0);
$rootdir = '..';
$max = 0;
$filenum = 1;
$createdir = $_POST['createdir'];
$chmodfile = $_POST['chmodfile'];
$chmodvalue = $_POST['chmodvalue'];
$create = $_POST['create'];
$deletedir = $_POST['deletedir'];
$cd = $_POST['cd'];
$dirname = $_POST['dirname'];
$createdirdir = $_POST['createdirdir'];
$create = "$rootdir/$createdir/$create";
$dirname = "$rootdir/$createdirdir/$dirname";
$delfile = $_POST['delfile'];
$delpath = $_POST['delpath'];
$oldfile = $_POST['oldfile'];
$oldpath = $_POST['oldpath'];
$downfile = $_POST['downfile'];
//Hacking protection
if($create !== "$rootdir/$createdir/") {
if(isset($create)){
$filename = str_replace(' ', '_', $create);
if(!$createHandler = fopen($create, 'w+')){
echo("$lang_file_man04");}
chmod($create, 0777);
fclose($createHandler);}}
//Create directory
if($dirname !== "$rootdir/$createdirdir/") {
if(isset($dirname)){
if(!mkdir($dirname)){
echo "$lang_file_man18<br>";}}}
//CHMOD
if($chmodfile == ''){
}else{
$chmodvalue = octdec($chmodvalue);
if(!chmod($chmodfile, $chmodvalue)){
echo "$lang_file_man19<br>";}}
//Delete directory
if($deletedir == ''){
}else{
if(!rmdir("$deletedir")){
echo "$lang_file_man20<br>";}}
//delete file
if(!$delpath==''){
setcookie("delfile", $delfile, time()+300);
setcookie("delpath", $delpath, time()+300);
echo "<script language='javascript'>CenterPopup('addelfile.php',500,250);</script>";
}else{}
//RENAME
if(!$oldfile==''){
setcookie("oldfile", $oldfile, time()+300);
setcookie("oldpath", $oldpath, time()+300);
echo "<script language='javascript'>CenterPopup('adrename.php',500,250);</script>";
}else{}
//CD
if($cd == ''){
}else{
$dir = "$dir$cd";}
?>
      <table align="center">
        <tr class="general_center"> 
          <td width="50%"> <form action="mfm.php" method="POST">
              <strong><br>
              <?php echo $lang_file_man01;?>:</strong> <br>
              <input type="text" name="create" class="input">
              <input type="hidden" name="createdir" value="<?php echo($dir); ?>">
              <input name="submit" type="submit" class="input" value="<?php echo $lang_forms03;?>">
            </form></td>
          <td width="50%"> <form action="mfm.php" method="POST">
              <strong><br>
              <?php echo $lang_file_man13;?>:</strong> <br>
              <input type="text" name="dirname" class="input">
              <input type="hidden" name="createdirdir" value="<?php echo($dir); ?>">
              <input name="submit" type="submit" class="input" value="<?php echo $lang_forms03;?>">
            </form></td>
        </tr>
        <tr class="general"> 
          <td colspan="2" class="general_center"><?php echo "<u><b />$lang_email_new_mem02: </b>$rootdir$dir</u><br /><br /><a href=\"mfm.php\"><b />$lang_file_man14</b></a><br><br>";?> 
          </td>
        </tr>
      </table>
<?php
function size_hum_read($size){
$i=0;
$iec = array(" B", " KB", " MB", " GB");
while (($size/1024)>1) {
$size=$size/1024;
$i++;}
return substr($size,0,strpos($size,'.')+3).$iec[$i];}
$detect = $_SERVER['SERVER_SOFTWARE'];
if (stristr($detect, 'Win') === FALSE){
//Display file list (non windows)
echo('<table align="center" class="general">
');
echo("<tr>
<td><b>$lang_file_man06</b><br><br><br></td>
<td width='5'></td>
<td width='75'><div align='center'><b>$lang_file_man10</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_file_man09</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_file_man03</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_addition01</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_addition02</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_file_man02</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_file_man15</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_file_man16</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_file_man17</b></div><br><br></td>
");
$open = opendir("$rootdir/$dir");
while (($file = readdir($open)) !== false) {
$perms = fileperms("$rootdir/$dir/$file");
$perms = substr(sprintf('%o', $perms), -4);
$filesize = size_hum_read(filesize("$rootdir/$dir/$file"));
$filemtime= date("F d Y H:i:s", filemtime("$rootdir/$dir/$file"));
$filetype = "file";
if ($file !== "." && $file !== "..") {
//HIDE ALL MHP FILES/FOLDERS
$sciurus_folders = array($folder_path.'awaiting.php',$folder_path.'clac.php',$folder_path.'closed.php',$folder_path.'editfile.php',$folder_path.'editfile2.php',$folder_path.'error.php',$folder_path.'mfm.php',$folder_path.'mfm.php',$folder_path.'forgot.php',$folder_path.'forgot2.php',$folder_path.'forgot3.php',$folder_path.'help.php',$folder_path.'impressum.php',$folder_path.'impressum2.php',$folder_path.'index.php',$folder_path.'lang.php',$folder_path.'lang2.php',$folder_path.'logged_in.php',$folder_path.'logged_out.php',$folder_path.'login.php',$folder_path.'login2.php',$folder_path.'logout.php',$folder_path.'memberh.php',$folder_path.'members.php',$folder_path.'news.php',$folder_path.'not_confirmed.php',$folder_path.'pie.php',$folder_path.'profile.php',$folder_path.'profile_edit.php',$folder_path.'register.php',$folder_path.'register2.php',$folder_path.'register3.php',$folder_path.'register4.php',$folder_path.'register5.php',$folder_path.'savefile.php',$folder_path.'savefile2.php',$folder_path.'stats.php',$folder_path.'support.php',$folder_path.'support2.php',$folder_path.'support3.php',$folder_path.'tell.php',$folder_path.'terms.php',$folder_path.'tos.php',$folder_path.'upload_manager.php',$folder_path.'verify.php',$folder_path.'acp',$folder_path.'audio',$folder_path.'images',$folder_path.'includes',$folder_path.'language',$folder_path.'tinymce',$folder_path.'visual',$folder_path.'limited.php',$folder_path.'delfile.php',$folder_path.'maint.php',$folder_path.'rename.php',$folder_path.'file_manager.php',$folder_path.'listing.php');
$limit = $folder_path.$dir.$file;
if (in_array($limit, $sciurus_folders)) {
echo ('');
}else{
if(is_dir("$rootdir/$dir/$file")){
//FOLDERS
echo ("<tr valign='top'>
<td>$file</td>
<th></th>
<th></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><center><form name=\"delete\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"deletedir\" value=\"$rootdir/$dir/$file\"><input type=\"image\" src=\"../images/delete.gif\" ALT=\"Delete\" value=\"Delete\" class=\"input\"></form></center></td>
<td><center><form name=\"cd\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"cd\" value=\"$dir/$file\"><input type=\"image\" src=\"../images/dir.gif\" ALT=\"Change Dir.\" value=\"Enter\" class=\"input\"></form></center></td>
<td><center>$perms</center></td>
<td><center><form name=\"chmod\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"chmodfile\" value=\"$rootdir/$dir/$file\"> <input style=\"height:16\" type=\"text\" name=\"chmodvalue\" maxlength=4 size=4 class=\"chmod-button\"> <input style=\"height:16\" type=\"submit\" value=\"CHMOD\" class=\"chmod-button\"></form></center></td>
");
//WEB FILES
}else {
if(!isset($ext)) {
$fext = str_replace('.','',strstr($file, '.'));
if (in_array($fext, explode(", ", $web_editor))) {
echo ("<tr valign='top'>
<td>$file</td>
<th></th>
<td><center>$filesize</center></td>
<td><center><a href=\"$rootdir$dir/$file\" target=\"_blank\"><img src=../images/view.gif border=0></a></center></td>
<td><center><form name=\"edit\" action=\"editfile.php\" method=\"POST\"><input type=\"hidden\" name=\"filename\" value=\"$file\"><input type=\"hidden\" name=\"dir\" value=\"$rootdir$dir\"><input type=\"image\" src=\"../images/edit.gif\" ALT=\"Edit\" value=\"Edit\" class=\"input\"></form></td>
<td><center><form name=\"rename\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"oldfile\" value=\"$file\"><input type=\"hidden\" name=\"oldpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/rename.gif\" ALT=\"Rename\" value=\"Rename\" class=\"input\"></form></center></td>
<td><center><form name=\"download\" action=\"../includes/download.php\" method=\"POST\"><input type=\"hidden\" name=\"downfile\" value=\"$rootdir$dir/$file\"><input type=\"image\" src=\"../images/download.gif\" ALT=\"Download\" value=\"Download\" class=\"input\"></form></center></td>
<td><center><form name=\"delete\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"delfile\" value=\"$file\"><input type=\"hidden\" name=\"delpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/delete.gif\" ALT=\"Delete\" value=\"Delete\" class=\"input\"></form></center></td>
<td></td>
<td><center>$perms</center></td>
<td><center><form name=\"chmod\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"chmodfile\" value=\"$rootdir/$dir/$file\"> <input style=\"height:16\" type=\"text\" name=\"chmodvalue\" maxlength=4 size=4 class=\"chmod-button\"> <input style=\"height:16\" type=\"submit\" value=\"CHMOD\" class=\"chmod-button\"></form></center></td>
");
//TEXT FILES
}else {
if(!isset($ext)) {
$fext = str_replace('.','',strstr($file, '.'));
if (in_array($fext, explode(", ", $txt_editor))) {
echo ("<tr valign='top'>
<td>$file</td>
<th></th>
<td><center>$filesize</center></td>
<td><center><a href=\"$rootdir$dir/$file\" target=\"_blank\"><img src=../images/view.gif border=0></a></center></td>
<td><center><form name=\"edit\" action=\"editfile2.php\" method=\"POST\"><input type=\"hidden\" name=\"filename\" value=\"$file\"><input type=\"hidden\" name=\"dir\" value=\"$rootdir$dir\"><input type=\"image\" src=\"../images/edit.gif\" ALT=\"Edit\" value=\"Edit\" class=\"input\"></form></td>
<td><center><form name=\"rename\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"oldfile\" value=\"$file\"><input type=\"hidden\" name=\"oldpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/rename.gif\" ALT=\"Rename\" value=\"Rename\" class=\"input\"></form></center></td>
<td><center><form name=\"download\" action=\"../includes/download.php\" method=\"POST\"><input type=\"hidden\" name=\"downfile\" value=\"$rootdir$dir/$file\"><input type=\"image\" src=\"../images/download.gif\" ALT=\"Download\" value=\"Download\" class=\"input\"></form></center></td>
<td><center><form name=\"delete\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"delfile\" value=\"$file\"><input type=\"hidden\" name=\"delpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/delete.gif\" ALT=\"Delete\" value=\"Delete\" class=\"input\"></form></center></td>
<td></td>
<td><center>$perms</center></td>
<td><center><form name=\"chmod\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"chmodfile\" value=\"$rootdir/$dir/$file\"> <input style=\"height:16\" type=\"text\" name=\"chmodvalue\" maxlength=4 size=4 class=\"chmod-button\"> <input style=\"height:16\" type=\"submit\" value=\"CHMOD\" class=\"chmod-button\"></form></center></td>
");
//OTHER
}else{
echo ("<tr valign='top'>
<td>$file</td>
<th></th>
<td><center>$filesize</center></td>
<td><center><a href=\"$rootdir$dir/$file\" target=\"_blank\"><img src=../images/view.gif border=0></a></center></td>
<td></td>
<td><center><form name=\"rename\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"oldfile\" value=\"$file\"><input type=\"hidden\" name=\"oldpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/rename.gif\" ALT=\"Rename\" value=\"Rename\" class=\"input\"></form></center></td>
<td><center><form name=\"download\" action=\"../includes/download.php\" method=\"POST\"><input type=\"hidden\" name=\"downfile\" value=\"$rootdir$dir/$file\"><input type=\"image\" src=\"../images/download.gif\" ALT=\"Download\" value=\"Download\" class=\"input\"></form></center></td>
<td><center><form name=\"delete\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"delfile\" value=\"$file\"><input type=\"hidden\" name=\"delpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/delete.gif\" ALT=\"Delete\" value=\"Delete\" class=\"input\"></form></center></td>
<td></td>
<td><center>$perms</center></td>
<td><center><form name=\"chmod\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"chmodfile\" value=\"$rootdir/$dir/$file\"> <input style=\"height:16\" type=\"text\" name=\"chmodvalue\" maxlength=4 size=4 class=\"chmod-button\"> <input style=\"height:16\" type=\"submit\" value=\"CHMOD\" class=\"chmod-button\"></form></center></td>
");
}}else
if(stripos($file, ".$ext")) {
$dir = $_POST['filterdir'];
if(isset($filterdir)){
$dir = "$dir$filterdir";}
echo "<tr><td>$dir</td></tr>";
echo ("<tr valign='top'>
<td>$file</td>
<th></th>
<td><center>$filesize</center></td>
<td><center><a href=\"$rootdir$dir/$file\" target=\"_blank\"><img src=../images/view.gif border=0></a></center></td>
<td><center><form name=\"edit\" action=\"editfile.php\" method=\"POST\"><input type=\"image\" src=\"../images/edit.gif\" ALT=\"Edit\" name=\"filename\" value=\"$file\" border=\"0\"><input type=\"hidden\" name=\"dir\" value=\"$rootdir/$dir\"><input type=\"submit\" value=\"Edit\" class=\"input\"></form></center></td>
<td><center><form name=\"rename\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"oldfile\" value=\"$file\"><input type=\"hidden\" name=\"oldpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/rename.gif\" ALT=\"Rename\" value=\"Rename\" class=\"input\"></form></center></td>
<td><center><form name=\"download\" action=\"../includes/download.php\" method=\"POST\"><input type=\"hidden\" name=\"downfile\" value=\"$rootdir$dir/$file\"><input type=\"image\" src=\"../images/download.gif\" ALT=\"Download\" value=\"Download\" class=\"input\"></form></center></td>
<td><center><form name=\"delete\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"delfile\" value=\"$file\"><input type=\"hidden\" name=\"delpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/delete.gif\" ALT=\"Delete\" value=\"Delete\" class=\"input\"></form></center></td>
<td></td>
<td><center>$perms</center></td>
<td><center><form name=\"chmod\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"chmodfile\" value=\"$rootdir/$dir/$file\"> <input style=\"height:16\" type=\"text\" name=\"chmodvalue\" maxlength=4 size=4 class=\"chmod-button\"><input style=\"height:16\" type=\"submit\" value=\"CHMOD\" class=\"chmod-button\"></form></center></td>
");}}
++$filenum;
}}}}}
}else{
//Display file list (windows)
echo('<table align="center" class="general">
');
echo("<tr>
<td><b>$lang_file_man06</b><br><br><br></td>
<td width='5'></td>
<td width='75'><div align='center'><b>$lang_file_man10</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_file_man09</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_file_man03</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_addition01</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_addition02</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_file_man02</b></div><br><br></td>
<td width='75'><div align='center'><b>$lang_file_man15</b></div><br><br></td>
");
$open = opendir("$rootdir/$dir");
while (($file = readdir($open)) !== false) {
$perms = fileperms("$rootdir/$dir/$file");
$perms = substr(sprintf('%o', $perms), -4);
$filesize = size_hum_read(filesize("$rootdir/$dir/$file"));
$filemtime= date("F d Y H:i:s", filemtime("$rootdir/$dir/$file"));
$filetype = "file";
if ($file !== "." && $file !== "..") {
//HIDE ALL MHP FILES/FOLDERS
$sciurus_folders = array($folder_path.'awaiting.php',$folder_path.'clac.php',$folder_path.'closed.php',$folder_path.'editfile.php',$folder_path.'editfile2.php',$folder_path.'error.php',$folder_path.'mfm.php',$folder_path.'mfm.php',$folder_path.'forgot.php',$folder_path.'forgot2.php',$folder_path.'forgot3.php',$folder_path.'help.php',$folder_path.'impressum.php',$folder_path.'impressum2.php',$folder_path.'index.php',$folder_path.'lang.php',$folder_path.'lang2.php',$folder_path.'logged_in.php',$folder_path.'logged_out.php',$folder_path.'login.php',$folder_path.'login2.php',$folder_path.'logout.php',$folder_path.'memberh.php',$folder_path.'members.php',$folder_path.'news.php',$folder_path.'not_confirmed.php',$folder_path.'pie.php',$folder_path.'profile.php',$folder_path.'profile_edit.php',$folder_path.'register.php',$folder_path.'register2.php',$folder_path.'register3.php',$folder_path.'register4.php',$folder_path.'register5.php',$folder_path.'savefile.php',$folder_path.'savefile2.php',$folder_path.'stats.php',$folder_path.'support.php',$folder_path.'support2.php',$folder_path.'support3.php',$folder_path.'tell.php',$folder_path.'terms.php',$folder_path.'tos.php',$folder_path.'upload_manager.php',$folder_path.'verify.php',$folder_path.'acp',$folder_path.'audio',$folder_path.'images',$folder_path.'includes',$folder_path.'language',$folder_path.'tinymce',$folder_path.'visual',$folder_path.'limited.php',$folder_path.'delfile.php',$folder_path.'maint.php',$folder_path.'rename.php',$folder_path.'file_manager.php',$folder_path.'listing.php');
$limit = $folder_path.$dir.$file;
if (in_array($limit, $sciurus_folders)) {
echo ('');
}else{
if(is_dir("$rootdir/$dir/$file")){
//FOLDERS
echo ("<tr valign='top'>
<td>$file</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><center><form name=\"delete\" action=\"mfm.php\" method=\"POST\">
<input type=\"hidden\" name=\"deletedir\" value=\"$rootdir/$dir/$file\">
<input type=\"image\" src=\"../images/delete.gif\" ALT=\"Delete\" value=\"Delete\" class=\"input\"></form></center></td>
<td><center><form name=\"cd\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"cd\" value=\"$dir/$file\"><input type=\"image\" src=\"../images/dir.gif\" ALT=\"Change Dir.\" value=\"Enter\" class=\"input\"></form></center></td>
");
//WEB FILES
}else {
if(!isset($ext)) {
$fext = str_replace('.','',strstr($file, '.'));
if (in_array($fext, explode(", ", $web_editor))) {
echo ("<tr valign='top'>
<td>$file</td>
<td></td>
<td><center>$filesize</center></td>
<td><center><a href=\"$rootdir$dir/$file\" target=\"_blank\"><img src=../images/view.gif border=0></a></center></td>
<td><center><form name=\"edit\" action=\"editfile.php\" method=\"POST\"><input type=\"hidden\" name=\"filename\" value=\"$file\"><input type=\"hidden\" name=\"dir\" value=\"$rootdir/$dir\"><input type=\"image\" src=\"../images/edit.gif\" ALT=\"Edit\" value=\"Edit\" class=\"input\"></form></td>
<td><center><form name=\"rename\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"oldfile\" value=\"$file\"><input type=\"hidden\" name=\"oldpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/rename.gif\" ALT=\"Rename\" value=\"Rename\" class=\"input\"></form></center></td>
<td><center><form name=\"download\" action=\"../includes/download.php\" method=\"POST\"><input type=\"hidden\" name=\"downfile\" value=\"$rootdir$dir/$file\"><input type=\"image\" src=\"../images/download.gif\" ALT=\"Download\" value=\"Download\" class=\"input\"></form></center></td>
<td><center><form name=\"delete\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"delfile\" value=\"$file\"><input type=\"hidden\" name=\"delpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/delete.gif\" ALT=\"Delete\" value=\"Delete\" class=\"input\"></form></center></td>
<td></td>
");
//TEXT FILES
}else {
if(!isset($ext)) {
$fext = str_replace('.','',strstr($file, '.'));
if (in_array($fext, explode(", ", $txt_editor))) {
echo ("<tr valign='top'>
<td>$file</td>
<td></td>
<td><center>$filesize</center></td>
<td><center><a href=\"$rootdir$dir/$file\" target=\"_blank\"><img src=../images/view.gif border=0></a></center></td>
<td><center><form name=\"edit\" action=\"editfile2.php\" method=\"POST\"><input type=\"hidden\" name=\"filename\" value=\"$file\"><input type=\"hidden\" name=\"dir\" value=\"$rootdir$dir\"><input type=\"image\" src=\"../images/edit.gif\" ALT=\"Edit\" value=\"Edit\" class=\"input\"></form></td>
<td><center>
<form name=\"rename\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"oldfile\" value=\"$file\"><input type=\"hidden\" name=\"oldpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/rename.gif\" ALT=\"Rename\" value=\"Rename\" class=\"input\"></form></center></td>
<td><center><form name=\"download\" action=\"../includes/download.php\" method=\"POST\"><input type=\"hidden\" name=\"downfile\" value=\"$rootdir$dir/$file\"><input type=\"image\" src=\"../images/download.gif\" ALT=\"Download\" value=\"Download\" class=\"input\"></form></center></td>
<td><center><form name=\"delete\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"delfile\" value=\"$file\"><input type=\"hidden\" name=\"delpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/delete.gif\" ALT=\"Delete\" value=\"Delete\" class=\"input\"></form></center></td>
<td></td>
");
//OTHER
}else{
echo ("<tr valign='top'>
<td>$file</td>
<td></td>
<td><center>$filesize</center></td>
<td><center><a href=\"$rootdir$dir/$file\" target=\"_blank\"><img src=../images/view.gif border=0></a></center></td>
<td></td>
<td><center><form name=\"rename\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"oldfile\" value=\"$file\"><input type=\"hidden\" name=\"oldpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/rename.gif\" ALT=\"Rename\" value=\"Rename\" class=\"input\"></form></center></td>
<td><center><form name=\"download\" action=\"../includes/download.php\" method=\"POST\"><input type=\"hidden\" name=\"downfile\" value=\"$rootdir$dir/$file\"><input type=\"image\" src=\"../images/download.gif\" ALT=\"Download\" value=\"Download\" class=\"input\"></form></center></td>
<td><center><form name=\"delete\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"delfile\" value=\"$file\"><input type=\"hidden\" name=\"delpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/delete.gif\" ALT=\"Delete\" value=\"Delete\" class=\"input\"></form></center></td>
<td></td>
");
}}else
if(stripos($file, ".$ext")) {
$dir = $_POST['filterdir'];
if(isset($filterdir)){
$dir = "$dir$filterdir";}
echo "<tr><td>$dir</td></tr>";
echo ("<tr valign='top'>
<td>$file</td>
<td></td>
<td><center>$filesize</center></td>
<td><center><a href=\"$rootdir$dir/$file\" target=\"_blank\"><img src=../images/view.gif border=0></a></center></td>
<td><center><form name=\"edit\" action=\"editfile.php\" method=\"POST\"><input type=\"image\" src=\"../images/edit.gif\" ALT=\"Edit\" name=\"filename\" value=\"$file\" border=\"0\"><input type=\"hidden\" name=\"dir\" value=\"$rootdir/$dir\"><input type=\"submit\" value=\"Edit\" class=\"input\"></form></center></td>
<td><center><form name=\"rename\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"oldfile\" value=\"$file\"><input type=\"hidden\" name=\"oldpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/rename.gif\" ALT=\"Rename\" value=\"Rename\" class=\"input\"></form></center></td>
<td><center><form name=\"download\" action=\"../includes/download.php\" method=\"POST\"><input type=\"hidden\" name=\"downfile\" value=\"$rootdir$dir/$file\"><input type=\"image\" src=\"../images/download.gif\" ALT=\"Download\" value=\"Download\" class=\"input\"></form></center></td>
<td><center><form name=\"delete\" action=\"mfm.php\" method=\"POST\"><input type=\"hidden\" name=\"delfile\" value=\"$file\"><input type=\"hidden\" name=\"delpath\" value=\"$dir/\"><input type=\"image\" src=\"../images/delete.gif\" ALT=\"Delete\" value=\"Delete\" class=\"input\"></form></center></td>
<td></td>
");}}
++$filenum;
}}}}}}
?>
</table>
</body></html>