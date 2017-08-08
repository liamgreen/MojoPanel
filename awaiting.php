<?php include 'includes/nli.php';
session_start();
unset($_SESSION['logged_in']);
unset($_SESSION['username']);
unset($_SESSION['username']);
session_destroy();?>
<table width="95%" align="center">
<tr> 
<td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="index.php"><img src="images/home.png" alt="<?php echo "$lang_titles27";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_titles27";?></p>
</div></td>
<td><div align="center"> 
        <p class="subtitle"><?php echo $lang_titles05;?></p>
</div></td>
<td width="48">&nbsp;</td>
</tr>
</table>
<table width="520" align="center">
<tr> 
<td class="general"><p class="general"><br>
<?php echo $lang_confirm05; ?></p></td>
</tr>
<tr>
<td class="general"><br>
      <?php echo $lang_confirm02; ?></td>
</tr>
</table>
</body></html>