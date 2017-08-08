<?php include 'includes/nli.php';
session_start(); 
if ($_SESSION['reg']==!1)
header("Location: error.php");
else
?>
<table width="95%" align="center">
<tr> 
<td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="index.php"><img src="images/home.png" alt="<?php echo "$lang_titles27";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_titles27";?></p>
</div></td>
<td><div align="center"> 
<p class="subtitle"><?php echo $lang_titles21;?></p>
</div></td>
<td width="48">&nbsp;</td>
</tr>
</table>
<table width="95%" align="center" class="general">
<tr> 
<td>
<div align="justify">
<p><br>
<br>
          <?php echo $lang_register22.' '.$lang_titles01;?>,&nbsp;<?php echo $lang_register01.' '.$lang_register03.' '.$lang_register07;?><a href="index.php"> <?php echo "<b />$lang_error02</b>";?></a>.</p>
</div></td>
</tr>
</table>
</body></html>