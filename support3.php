<?php include 'includes/nli.php';
session_start(); 
if ($_SESSION['support']==!1)
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
        <p class="subtitle"><?php echo $lang_titles23;?></p>
</div></td>
<td width="48">&nbsp;</td>
</tr>
</table>
<table align="center" class="general">
  <tr> 
    <td width="360" class="general_center"> <br> <br> <br> <br> <br> 
      <?php
echo "$lang_support07<br /><br ><br ><br ><a href=\"index.php\"><b />$lang_register44</b></a>";
$_SESSION['logged_in'] = 0;
session_destroy();
?>
    </td>
  </tr>
</table>
<p class="general_center">&nbsp; </p>
</body></html>