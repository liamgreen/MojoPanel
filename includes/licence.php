<?php
$result = mysql_query("SELECT * FROM $mhp_config");
while($row = mysql_fetch_array($result)){
$folder_path = $row['mhp_path'];
$folder_url = $row['mhp_url'];
$path_to_MHP = $row['root2mhp'];
$admin_name = $row['admin_name'];
$admin_email = $row['admin_mail'];
$support_email = $row['support_mail'];
$i_approved = $row['pre_approve'];
$confirm = $row['confirm_mail'];
$notify = $row['notify_admin'];
$i_mbs = $row['default_quota'];
$css_refresh_delay = $row['css_refresh_delay'];
$i_ads = $row['default_adverts'];
$add_ads = explode(", ",$row['add_adverts']);
$web_editor = $row['web_editor'];
$txt_editor = $row['txt_editor'];
$permitted = explode(", ",$row['filetype_permitted']);
$reserved = $row['reserved_folders'];
$max_file_size = $row['max_file_size'];
$max_uploads = $row['max_uploads'];
$login = $row['cap_login'];
$forgot = $row['cap_forgot'];
$register = $row['cap_register'];
$support= $row['cap_support'];
$graph_bg = $row['name'];
$impressum = $row['impressum'];
$taf = $row['tell_friend'];
$new_reg = $row['allow_new_reg'];
$maint = $row['maintain'];
$version = $row['version'];}
$skel = $folder_path.'/includes/skeleton';
function skeleton($source, $destination){
if (is_file($source)){
copy($source, $destination);
chmod($destination, 0777);}
if (is_dir($source)){
$oldmask = umask(0);
mkdir($destination, 0777);
umask($oldmask);
$dir_handle = opendir($source);
while ($files = readdir($dir_handle)) if( $files!= "." && $files!= "..") $file_array[] = $files;
closedir($dir_handle);}
for($i=0; $i<count($file_array); $i++){
$file = $file_array[$i];
if ($destination!= "$source/$file") skeleton("$source/$file", "$destination/$file");}}
?>