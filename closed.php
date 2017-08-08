<?php include 'includes/nli.php';
session_start();
unset($_SESSION['logged_in']);
unset($_SESSION['username']);
unset($_SESSION['username']);
session_destroy();
?>
<table width="95%" align="center">
<tr> 
<td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="index.php"><img src="images/home.png" alt="<?php echo "$lang_titles27";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_titles27";?></p>
</div></td>
<td><div align="center"></div></td>
<td width="48">&nbsp;</td>
</tr>
</table>
<table width="95%" align="center">
  <tr> 
    <td class="subtitle"><br>
      <br>
      <br>
      <br>
      <?php echo $lang_close12;?></td>
  </tr>
</table>
</body></html>