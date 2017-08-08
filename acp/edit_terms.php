<?php
include 'includes/header.php';
?>
<table width="95%" align="center"><tr><td width="48"> <div align="center" class="subtitle"> 
<p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
<?php echo $lang_control01;?></p>
</div></td><td><div align="center">
<p class="subtitle"><?php echo $admin_titles11;?></p>
</div></td>
<td width="48">&nbsp;</td></tr></table><table width="95%" align="center"><tr><td class="general"><br>
<?php $dir = $folder_path;
$filename = 'terms.php';
$filesize=(filesize("../includes/$filename"));
$open = fopen("../includes/$filename","r+");
if($open == false) {
echo ('Error opening file! Please CHMOD it to 777.');
exit();}
@$fileContents = fread($open, $filesize);
session_start( );
$_SESSION['memberfolder'] = $path_to_MHP.'/admin/';
session_write_close;
?>
      <form action="" method="post" name="terms" id="terms">
        <!-- tinyMCE -->
        <script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce_gzip.js"></script>
<script type="text/javascript">
tinyMCE_GZ.init({
plugins : "contextmenu,directionality,emotions,flash,fullpage,fullscreen,ibrowser,iespell,insertdatetime,layer,noneditable,paste,preview,print,save,searchreplace,table,zoom",
themes : 'simple,advanced',
languages : 'en',
disk_cache : true,
debug : false
});
</script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
mode : "textareas",
theme : "advanced",
convert_urls : "false",
plugins : "contextmenu,directionality,emotions,flash,fullpage,fullscreen,ibrowser,iespell,insertdatetime,layer,noneditable,paste,preview,print,save,searchreplace,table,zoom",
theme_advanced_buttons1_add_before : "",
theme_advanced_buttons1_add : "fontselect,fontsizeselect,separator,forecolor,backcolor,separator,fullpage",
theme_advanced_buttons2_add : "ibrowser,separator,insertdate,inserttime,preview",
theme_advanced_buttons2_add_before: "cut,copy,paste,pastetext,pasteword,separator,search,replace,separator",
theme_advanced_buttons3_add_before : "tablecontrols,separator",
theme_advanced_buttons3_add : "emotions,iespell,separator,insertlayer,moveforward,movebackward,absolute,separator,fullscreen",
//		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,spellchecker",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_path_location : "bottom",
content_css : "/example_data/example_full.css",
plugin_insertdate_dateFormat : "%Y-%m-%d",
plugin_insertdate_timeFormat : "%H:%M:%S",
extended_valid_elements : "hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]",
external_link_list_url : "example_data/example_link_list.js",
external_image_list_url : "example_data/example_image_list.js",
flash_external_list_url : "example_data/example_flash_list.js",
file_browser_callback : "mcFileManager.filebrowserCallBack",
theme_advanced_resize_horizontal : false,
theme_advanced_resizing : true,
apply_source_formatting : true,
spellchecker_languages : "+English=en,Danish=da,Dutch=nl,Finnish=fi,French=fr,German=de,Italian=it,Polish=pl,Portuguese=pt,Spanish=es,Swedish=sv"
});
</script>
<!-- /tinyMCE -->
<input type="hidden" name="filename" value="<?php echo($filename); ?>">
<input type="hidden" name="dir" value="<?php echo($dir); ?>">
<?php
$result = mysql_query("SELECT * FROM $mhp_config");
$row = mysql_fetch_array($result);
$nolink = $row['lockout'];?>
<input type="hidden" name="nolink" value="<?php echo $nolink; ?>">
<?php echo '<textarea name="filecontents" style="width:100%" rows="20">'. $fileContents .'</textarea><br>';?> 
<input name="submit" type="submit" value="<?php echo "$lang_forms06";?>">
        <?php
if(isset($_POST['submit'])){
$filecontents = $_POST['filecontents'];
$savedir = "../includes";
$filename = 'terms.php';
$open = fopen("$savedir/$filename",'r+');
$filecontents = stripslashes($filecontents);
ftruncate($open,0);
fwrite($open, $filecontents);
fclose($open);
header("Location: acp.php");}?>
      </form></td></tr></table></body></html>