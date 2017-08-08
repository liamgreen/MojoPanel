<?php
include 'includes/nli.php';
/****************************************************************************************
				    	Includes Audio & Visual CAPTCHA v1.3 by											
						 Nicklas Swärdh - nick@nswardh.com, 
								  www.nswardh.com
****************************************************************************************/
session_start();
$_SESSION['downloadprotect'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
?>
<table width="95%" align="center">
<tr> 
<td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="index.php"><img src="images/home.png" alt="<?php echo "$lang_titles27";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_titles27";?></p>
</div></td>
<td><div align="center"> 
        <p class="subtitle"><?php echo $lang_titles23;?></p>
</div></td>
<td width="48">&nbsp;</td>
</tr>
</table>
<table width="95%" align="center" class="general">
<tr> 
<td><div align="center"><br>
<img src="visual/visual.php" alt="" title="Cant read the numbers? Move the mouse over the speaker and listen..." style="border: 1px solid #000000" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<object type="application/x-shockwave-flash" name="movie" data="audio/voice.swf" style="width: 50px; height: 57px">
<param name="movie" value="audio/voice.swf" />
<param name="allowScriptAccess" value="sameDomain" />
<param name="menu" value="false" />
<param name="quality" value="high" />
</object>
<br>
<a href="http://www.nswardh.com/shout" target="_blank" class="small">Audio & Visual CAPTCHA by www.nswardh.com</a> </div>
<div style="clear: both; padding-top: 15px; padding-right: 15px"> </div></td>
</tr>
<tr> 
    <td><?php echo $lang_forgot08;?></td>
</tr>
<tr> 
<td><form method="post" action="" style="margin: 0px;">
<div align="center"><br>
<input type="text" maxlength="4" name="code" id="code3" />
          <input name="submit" type="submit" id="reject2" value="<?php echo "$lang_forms02";?>">
          <?php
if (isset($_POST['submit'])) {
$code = trim($_POST['code']);
if (md5($code) == md5($_SESSION['sess_captcha'])) {
$_SESSION['support']=1;
header("Location: support2.php");
}else{
echo "<p style=\"color: #ff0000\"><b />$e031</b></p>";}}
include 'includes/captcha.php';?>
        </div>
</form></td>
</tr>
</table>
</body></html>