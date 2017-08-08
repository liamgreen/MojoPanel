<?php include 'includes/nli.php';
session_start();
?>
<table width="95%" align="center">
<tr> 
    <td width="48"><div align="center" class="general_center"> 
        <?php
if ($_SESSION['logged_in']==0){
echo "<center><a href=\"index.php\"><img src=\"images/home.png\" alt=\"$lang_titles27\" width=\"48\" height=\"48\" border=\"0\" /></a><br />
$lang_titles27</center>";
}else{
echo "<center><a href=\"logged_in.php\"><img src=\"images/home.png\" alt=\"$lang_control04\" width=\"48\" height=\"48\" border=\"0\" /></a><br />
$lang_control04</center>";
}
?>
      </div></td>
<td><div align="center"> 
        <p class="subtitle"><?php echo $lang_titles20;?></p>
</div></td>
<td width="48">&nbsp;</td>
</tr>
</table>
<table width="95%" align="center">
  <tr class="general"> 
    <td><div align="center"><br>
        <?php echo "$lang_register43<br /><br /><br /><a href=\"index.php\"><b />$lang_register44</b></a>";?>
       </div></td>
  </tr>
</table>
</body></html>