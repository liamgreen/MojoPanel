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
<p class="subtitle"><?php echo "$lang_titles21";?></p>
</div></td>
<td width="48">&nbsp;</td>
</tr>
</table>
<table width="95%" align="center" class="general">
<tr> 
<td>
<div align="justify"> 
<p align="center"> <br>
<br>
          <?php echo $lang_register22;?>&nbsp;<?php echo "$lang_titles01";?>,&nbsp;<?php echo $lang_register33;?><a href="index.php">&nbsp;<?php echo "<b />$lang_register08</b>"; ?></a> <?php echo $lang_confirm06;?> 
        </p>
</div></td>
</tr>
</table>
</body></html>