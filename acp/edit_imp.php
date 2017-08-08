<?php include 'includes/header.php';
$result = mysql_query("SELECT * FROM $mhp_impressum");
while($row = mysql_fetch_array($result)){
$name = $row['name'];
$address = $row['address'];
$telephone = $row['telephone'];
$email = $row['email'];
$website = $row['website'];
$company = $row['company'];
$responsible = $row['responsible'];
$position = $row['position'];
$registered = $row['registered'];
$number = $row['number'];
$eu_vat = $row['eu_vat'];}
?> 
<table width="95%" align="center">
  <tr>
    <td width="48"> <div align="center" class="subtitle"> 
        <p class="general_center"><a href="acp.php"><img src="../images/admin.png" alt="<?php echo $lang_control01;?>" width="48" height="48" border="0"></a><br>
          <?php echo $lang_control01;?></p>
      </div></td>
    <td> <div align="center"> 
        <p class="subtitle"><?php echo "$lang_file_man03 $lang_impressum00";?></p>
      </div></td>
    <td width="48"><div align="center"> 
        <p class="general_center">&nbsp;</p>
      </div></td>
  </tr>
</table>
<table width="95%" align="center">
  <tr> 
    <td> <p align="center" class="general_center"><?php echo $lang_impressum12;?></p>
      </td>
  </tr>
</table>
<form name="form1" method="post" action="">
  <table align="center">
    <tr class="general"> 
      <td valign="baseline"> <div align="right"><strong> <?php echo $lang_impressum01a;?></strong></div></td>
      <td valign="baseline"> 
        <input name="name" type="text" id="name" value="<?php echo $name;?>" size="35"></td>
      <td valign="baseline"> <div align="right"><strong>&nbsp;&nbsp;&nbsp;&nbsp;
          <?php echo $lang_impressum07a;?></strong></div></td>
      <td valign="baseline"> 
        <input name="company" type="text" id="company" value="<?php echo $company;?>" size="35"></td>
    </tr>
    <tr class="general"> 
      <td rowspan="4"> <div align="right"><strong><?php echo $lang_impressum02a;?></strong></div></td>
      <td rowspan="4"> <textarea name="address" cols="27" rows="5" id="address"><?php echo $address;?></textarea></td>
      <td valign="baseline"> <div align="right"></div></td>
      <td valign="baseline">&nbsp; </td>
    </tr>
    <tr valign="top" class="general"> 
      <td valign="baseline"> <div align="right"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang_impressum08a;?></strong></div></td>
      <td valign="baseline"> <input name="responsible" type="text" id="responsible" value="<?php echo $responsible;?>" size="35"> </td>
    </tr>
    <tr valign="top" class="general"> 
      <td valign="baseline"> <div align="right"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang_impressum09a;?></strong></div></td>
      <td valign="baseline"><input name="position" type="text" id="position" value="<?php echo $position;?>" size="35"> </td>
    </tr>
    <tr valign="top" class="general"> 
      <td valign="baseline"> <div align="right"></div></td>
      <td valign="baseline">&nbsp; </td>
    </tr>
    <tr class="general"> 
      <td valign="baseline"> <div align="right"><strong><?php echo $lang_impressum03a;?></strong></div></td>
      <td valign="baseline"> <input name="telephone" type="text" id="telephone" value="<?php echo $telephone;?>" size="35"></td>
      <td valign="baseline"> <div align="right"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang_impressum10a;?></strong></div></td>
      <td valign="baseline"><input name="registered" type="text" id="registered" value="<?php echo $registered;?>" size="35"></td>
    </tr>
    <tr class="general"> 
      <td valign="baseline"> <div align="right"><strong><?php echo $lang_impressum04a;?></strong></div></td>
      <td valign="baseline"> <input name="email" type="text" id="email" value="<?php echo $email;?>" size="35"></td>
      <td valign="baseline"> <div align="right"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang_impressum11a;?></strong></div></td>
      <td valign="baseline"><input name="number" type="text" id="number" value="<?php echo $number;?>" size="35"> </td>
    </tr>
    <tr class="general"> 
      <td valign="baseline"> <div align="right"><strong><?php echo $lang_impressum05a;?></strong></div></td>
      <td valign="baseline"> <input name="website" type="text" id="website" value="<?php echo $website;?>" size="35"></td>
      <td valign="baseline"> <div align="right"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang_impressum06a;?></strong></div></td>
      <td valign="baseline"><input name="eu_vat" type="text" id="eu_vat" value="<?php echo $eu_vat;?>" size="35"></td>
    </tr>
    <tr class="general"> 
      <td colspan="4" valign="top"> <div align="right"><br>
          <table align="center">
            <tr> 
              <td><div align="center"> 
                  <input name="confirm" type="submit" id="confirm" value="<?php echo $lang_forms06;?>">
                </div></td>
              <td><div align="center"> 
                  <input type="reset" name="Reset" value="<?php echo $lang_forms04;?>">
                </div></td>
            </tr>
          </table>
        </div></td>
    </tr>
  </table>
<?php
if(isset($_POST['confirm'])){
$name2 = $_POST['name'];
$address2 = $_POST['address'];
$telephone2 = $_POST['telephone'];
$email2 = $_POST['email'];
$website2 = $_POST['website'];
$company2 = $_POST['company']; 
$responsible2 = $_POST['responsible'];
$position2 = $_POST['position'];
$registered2 = $_POST['registered'];
$number2 = $_POST['number'];
$eu_vat2 = $_POST['eu_vat'];
mysql_query("UPDATE $mhp_impressum SET name = ('".$name2."') WHERE id = 1");
mysql_query("UPDATE $mhp_impressum SET address = ('".$address2."') WHERE id = 1");
mysql_query("UPDATE $mhp_impressum SET telephone = ('".$telephone2."') WHERE id = 1");
mysql_query("UPDATE $mhp_impressum SET email = ('".$email2."') WHERE id = 1");
mysql_query("UPDATE $mhp_impressum SET website = ('".$website2."') WHERE id = 1");
mysql_query("UPDATE $mhp_impressum SET company = ('".$company2."') WHERE id = 1");
mysql_query("UPDATE $mhp_impressum SET responsible = ('".$responsible2."') WHERE id = 1");
mysql_query("UPDATE $mhp_impressum SET position = ('".$position2."') WHERE id = 1");
mysql_query("UPDATE $mhp_impressum SET registered = ('".$registered2."') WHERE id = 1");
mysql_query("UPDATE $mhp_impressum SET number = ('".$number2."') WHERE id = 1");
mysql_query("UPDATE $mhp_impressum SET eu_vat = ('".$eu_vat2."') WHERE id = 1");
mysql_close();
header ("Location: edit_imp.php");}
?>
</form>
</body></html>