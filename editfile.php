<?php  include 'includes/header.php'; ?>
<table width="95%" align="center">
<tr> 
<td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="logged_in.php"><img src="images/home.png" alt="<?php  echo "$lang_control04"; ?>" width="48" height="48" border="0"></a><br>
          <?php  echo "$lang_control04"; ?></p>
</div></td>
<td><div align="center"> 
<p class="subtitle"><?php  echo $lang_titles30; ?></p>
</div></td>
    <td width="48"><div align="center"> 
        <p class="general_center"><a href="file_manager.php"><img src="images/file_manager.png" alt="<?php  echo "$lang_titles08"; ?>" width="48" height="48" border="0"></a><br>
          <?php  echo "$lang_titles08"; ?></p>
      </div></td>
</tr>
</table>
<table width="95%" align="center">
<tr> 
    <td class="general_center"> 
      <?php
	$dir = $_POST['dir'];
	$filename = $_POST['filename'];
	$filesize=(filesize("$dir/$filename"));
	$open = fopen("$dir/$filename","r+");
	
	if($open == false) {
		echo ('Error opening file! Please CHMOD it to 777.');
		exit();
	}

	@$fileContents = fread($open, $filesize);
	echo "<b />$lang_upload03 : </b>";
	echo $filename;
	?> 
      <form action="savefile.php" method="post">
<!-- tinyMCE -->
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce_gzip.js"></script>
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
//file_browser_callback : "mcFileManager.filebrowserCallBack",
theme_advanced_resize_horizontal : false,
theme_advanced_resizing : true,
apply_source_formatting : true,
fullpage_default_xml_pi : false,
spellchecker_languages : "+English=en,Danish=da,Dutch=nl,Finnish=fi,French=fr,German=de,Italian=it,Polish=pl,Portuguese=pt,Spanish=es,Swedish=sv"
});
</script>
<!-- /tinyMCE -->
<input type="hidden" name="filename" value="<?php  echo($filename); ?>">
<input type="hidden" name="dir" value="<?php  echo($dir); ?>">
<?php  echo '<textarea name="filecontents" style="width:100%" rows="20">'. $fileContents .'</textarea><br>'; ?> 
<input name="submit" type="submit" value="<?php  echo "$lang_forms06"; ?>">
</form>
</td>
</tr>
</table>
</body></html>