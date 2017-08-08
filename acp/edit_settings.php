<?php include 'includes/header.php';?> 
<table width="95%" align="center">
  <tr>
    <td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
          <?php echo $lang_control01;?></p>
      </div></td>
    <td> <div align="center"> 
        <p class="subtitle"><?php echo $admin_titles07;?></p>
      </div></td>
    <td width="48"><div align="center"> 
        <p class="general_center">&nbsp;</p>
      </div></td>
  </tr>
</table>
<form name="form1" method="post" action="">
  <table align="center">
    <tr class="general"> 
      <td> <div align="right"><u><strong><?php echo $admin_addition01;?></strong></u></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_maint01;?></div></td>
      <td> <label> 
        <input name="maintain" type="radio" value="on" <?php if($maint=='on'){echo 'checked';}?>>
        <?php echo $lang_stats06;?></label> 
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="maintain" type="radio" value="off" <?php if($maint=='off'){echo 'checked';}?>>
        <?php echo $lang_stats05;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><strong><u><br>
          <?php echo $admin_addition02;?></u></strong></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr class="general"> 
      <td> <div align="right">MHP folder path</div></td>
      <td> 
        <?php
	  if ($folder_path==str_replace('acp/edit_settings.php','',str_replace('\\','/',$_SERVER['SCRIPT_FILENAME']))){
	  echo "<b />$folder_path</b>";
	  }else{
	  echo "<font color=\"#FF0000\"><b />$lang_titles07: $admin_addition03</font></b>";
	  $path_err01 = 1;}
	  ?>
      </td>
    </tr>
    <tr class="general"> 
      <td> <div align="right">MHP url</div></td>
      <td> 
        <?php
	  if ($folder_url==str_replace('/acp/edit_settings.php','','http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'])){
	  echo "<b />$folder_url</b>";
	  }else{
	  echo "<font color=\"#FF0000\"><b />$lang_titles07: $admin_addition03</font></b>";
	  $path_err02 = 1;}
	  ?>
      </td>
    </tr>
    <tr class="general"> 
      <td> <div align="right">Path to MHP</div></td>
      <td> 
        <?php 
	  if ($path_to_MHP==str_replace('/acp/edit_settings.php','',$_SERVER['SCRIPT_NAME'])){
	  echo "<b />$path_to_MHP</b>";
	  }else{
	  echo "<font color=\"#FF0000\"><b />$lang_titles07: $admin_addition03</font></b>";
	  $path_err03 = 1;
	  }
	  ?>
      </td>
    </tr>
    <tr class="general"> 
      <td>&nbsp;</td>
      <td> 
        <?php
if ($path_err01+$path_err02+$path_err03 > 0){
echo "<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name=\"confirm_details\" type=\"submit\" id=\"confirm_details\" value=\"$admin_forms05\" <br /><br /><br />";}?>
      </td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><u><strong><br>
          <?php echo $admin_addition07;?></strong></u></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition08;?></div></td>
      <td> <input name="site_name" type="text" id="site_name" value="<?php echo $lang_titles01;?>" size="50"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition09;?></div></td>
      <td> <input name="admin_name" type="text" id="admin_name" value="<?php echo $admin_name;?>" size="50"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition10;?></div></td>
      <td> <input name="admin_mail" type="text" id="admin_mail" value="<?php echo $admin_email;?>" size="50"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition11;?></div></td>
      <td> <input name="support_mail" type="text" id="support_mail" value="<?php echo $support_email;?>" size="50"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><u><strong><br>
          <?php echo $admin_addition12;?></strong></u></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition13;?></div></td>
      <td> <label> 
        <input name="confirm" type="radio" value="yes" <?php if($confirm=='yes'){echo 'checked';}?>>
        <?php echo $admin_addition33;?></label>
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="confirm" type="radio" value="no" <?php if($confirm=='no'){echo 'checked';}?>>
        <?php echo $admin_addition34;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition14;?></div></td>
      <td> <label> 
        <input name="pre_app" type="radio" value="yes" <?php if($i_approved=='yes'){echo 'checked';}?>>
        <?php echo $admin_addition33;?></label>
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="pre_app" type="radio" value="no" <?php if($i_approved=='no'){echo 'checked';}?>>
        <?php echo $admin_addition34;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition15;?></div></td>
      <td> <label> 
        <input name="notify" type="radio" value="yes" <?php if($notify=='yes'){echo 'checked';}?>>
        <?php echo $admin_addition33;?></label>
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="notify" type="radio" value="no" <?php if($notify=='no'){echo 'checked';}?>>
        <?php echo $admin_addition34;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition16;?></div></td>
      <td> <input name="def_quota" type="text" id="def_quota" value="<?php echo $i_mbs;?>" size="10"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><strong><u><br>
          <?php echo $admin_addition17;?></u></strong></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition18;?></div></td>
      <td> <label> 
        <input name="def_ads" type="radio" value="yes" <?php if($i_ads=='yes'){echo 'checked';}?>>
        <?php echo $lang_stats06;?></label> 
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="def_ads" type="radio" value="no" <?php if($i_ads=='no'){echo 'checked';}?>>
        <?php echo $lang_stats05;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition19;?></div></td>
      <td> <input name="add_ads" type="text" id="add_ads" value="<?php echo implode(', ',$add_ads);?>" size="50"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition20;?></div></td>
      <td> <input name="css_delay" type="text" id="css_delay" value="<?php echo $css_refresh_delay;?>" size="10"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition21;?></div></td>
      <td> <input name="max_size" type="text" id="max_size" value="<?php echo $max_file_size;?>" size="10"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition22;?></div></td>
      <td> <input name="max_upload" type="text" id="max_upload" value="<?php echo $max_uploads;?>" size="10"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition23;?></div></td>
      <td> <input name="txt_editor" type="text" id="txt_editor" value="<?php echo $txt_editor;?>" size="50"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition24;?></div></td>
      <td> <input name="web_editor" type="text" id="web_editor" value="<?php echo $web_editor;?>" size="50"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $lang_file_man08;?></div></td>
      <td> <input name="permitted" type="text" id="permitted" value="<?php echo implode(', ',$permitted);?>" size="50"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition25;?></div></td>
      <td> <input name="reserved" type="text" id="reserved" value="<?php echo $reserved;?>" size="50"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><u><strong><br>
          <?php echo $admin_addition26;?></strong><br>
          </u></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $lang_titles09;?></div></td>
      <td> <label> 
        <input name="forgot" type="radio" value="on" <?php if($forgot=='on'){echo 'checked';}?>>
        <?php echo $lang_stats06;?></label> 
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="forgot" type="radio" value="off" <?php if($forgot=='off'){echo 'checked';}?>>
        <?php echo $lang_stats05;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $lang_titles13;?></div></td>
      <td> <label> 
        <input name="login" type="radio" value="on" <?php if($login=='on'){echo 'checked';}?>>
        <?php echo $lang_stats06;?></label> 
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="login" type="radio" value="off" <?php if($login=='off'){echo 'checked';}?>>
        <?php echo $lang_stats05;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $lang_titles20;?></div></td>
      <td> <label> 
        <input name="register" type="radio" value="on" <?php if($register=='on'){echo 'checked';}?>>
        <?php echo $lang_stats06;?></label> 
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="register" type="radio" value="off" <?php if($register=='off'){echo 'checked';}?>>
        <?php echo $lang_stats05;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $lang_titles23;?></div></td>
      <td> <label> 
        <input name="support" type="radio" value="on" <?php if($support=='on'){echo 'checked';}?>>
        <?php echo $lang_stats06;?></label> 
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="support" type="radio" value="off" <?php if($support=='off'){echo 'checked';}?>>
        <?php echo $lang_stats05;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><strong><u><br>
          <?php echo $admin_addition27;?></u></strong></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition28;?></div></td>
      <td> <input name="def_lang" type="text" id="def_lang" value="<?php echo $lang_def;?>" size="50"></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $lang_titles32;?></div></td>
      <td> <label> 
        <input name="lang_sel" type="radio" value="on" <?php if($lang_sel=='on'){echo 'checked';}?>>
        <?php echo $lang_stats06;?></label> 
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="lang_sel" type="radio" value="off" <?php if($lang_sel=='off'){echo 'checked';}?>>
        <?php echo $lang_stats05;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><strong><u><br>
          <?php echo $admin_addition29;?></u></strong></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $admin_addition30;?></div></td>
      <td> <label> 
        <input name="new_reg" type="radio" value="on" <?php if($new_reg=='on'){echo 'checked';}?>>
        <?php echo $lang_stats06;?></label> 
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="new_reg" type="radio" value="off" <?php if($new_reg=='off'){echo 'checked';}?>>
        <?php echo $lang_stats05;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $lang_impressum00;?></div></td>
      <td> <label> 
        <input name="impressum" type="radio" value="on" <?php if($impressum=='on'){echo 'checked';}?>>
        <?php echo $lang_stats06;?></label> 
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="impressum" type="radio" value="off" <?php if($impressum=='off'){echo 'checked';}?>>
        <?php echo $lang_stats05;?></label></td>
    </tr>
    <tr class="general"> 
      <td> <div align="right"><?php echo $lang_titles24;?></div></td>
      <td> <label> 
        <input name="friend" type="radio" value="on" <?php if($taf=='on'){echo 'checked';}?>>
        <?php echo $lang_stats06;?></label> 
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="friend" type="radio" value="off" <?php if($taf=='off'){echo 'checked';}?>>
        <?php echo $lang_stats05;?></label></td>
    </tr>
    <tr class="general"> 
      <td colspan="2" valign="top"> <div align="right"><br>
          <table align="center">
            <tr> 
              <td><div align="center"> 
                  <input name="confirm_details" type="submit" id="confirm_details" value="<?php echo $lang_forms06;?>">
                </div></td>
              <td><div align="center"> 
                  <input type="reset" name="Reset" value="<?php echo $lang_forms04;?>">
                </div></td>
            </tr>
          </table>
          <br>
          <br>
        </div></td>
    </tr>
  </table>
<?php
if(isset($_POST['confirm_details'])){
$folder_path = str_replace('acp/edit_settings.php','',str_replace('\\','/',$_SERVER['SCRIPT_FILENAME']));
$folder_url = str_replace('/acp/edit_settings.php','','http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']);
$path_to_MHP = str_replace('/acp/edit_settings.php','',$_SERVER['SCRIPT_NAME']);
$admin_name = $_POST['admin_name'];
$admin_email = $_POST['admin_mail'];
$support_email = $_POST['support_mail'];
$lang_titles01 = $_POST['site_name'];
$i_approved = $_POST['pre_app'];
$confirm = $_POST['confirm']; 
$notify = $_POST['notify'];
$i_mbs = $_POST['def_quota'];
$css_refresh_delay = $_POST['css_delay'];
$i_ads = $_POST['def_ads'];
$add_ads = $_POST['add_ads'];
$web_editor = $_POST['web_editor'];
$txt_editor = $_POST['txt_editor'];
$permitted = $_POST['permitted'];
$reserved = $_POST['reserved'];
$max_file_size = $_POST['max_size'];
$max_uploads = $_POST['max_upload'];
$login = $_POST['login'];
$forgot = $_POST['forgot'];
$register = $_POST['register'];
$support= $_POST['support'];
$lang_def = $_POST['def_lang'];
$lang_sel = $_POST['lang_sel'];
$impressum = $_POST['impressum'];
$taf = $_POST['friend'];
$new_reg = $_POST['new_reg'];
$maint = $_POST['maintain'];
mysql_query("UPDATE $mhp_config SET 
mhp_path = '$folder_path',
mhp_url = '$folder_url',
root2mhp = '$path_to_MHP',
admin_name = '$admin_name',
admin_mail = '$admin_email',
support_mail = '$support_email',
site_name = '$lang_titles01',
pre_approve = '$i_approved',
confirm_mail = '$confirm',
notify_admin = '$notify',
default_quota = '$i_mbs',
css_refresh_delay = '$css_refresh_delay',
default_adverts = '$i_ads',
add_adverts = '$add_ads',
web_editor = '$web_editor',
txt_editor = '$txt_editor',
filetype_permitted = '$permitted',
reserved_folders = '$reserved',
max_file_size = '$max_file_size',
max_uploads = '$max_uploads',
cap_login = '$login',
cap_forgot = '$forgot',
cap_register = '$register',
cap_support = '$support',
default_lang = '$lang_def',
lang_selection = '$lang_sel',
impressum = '$impressum',
tell_friend = '$taf',
allow_new_reg = '$new_reg',
maintain = '$maint'
WHERE id = 1");
mysql_close();
header ("Location: edit_settings.php");
}
?>
</form>
</body></html>