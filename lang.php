<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php include 'includes/nli.php';
session_start();
if ($register == 'on'){
$register = 'register.php';
}else{
$_SESSION['reg']=1;
session_write_close();
$register = 'register5.php';
}
?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
					<table width="95%" align="center" class="general">
  <tr valign="top"> 
    <td width="50%" height="183" class="general_center"><br>
      <?php echo "$lang_lang04.$lang_lang05<br><br>$lang_lang10<br><br>";?> <?php echo "<b />$lang_lang01</b><br><br>"; 
$DirPath = $folder_path.'language/';
if($DirPath=="")
{
   $DirPath='./';
}
if (($handle=opendir($DirPath)))
{
echo '<div style="text-align:center"><form  method="post" action=""><SELECT name="language" ><OPTION VALUE="">Choose a Language..</OPtion>';
   while ($node = readdir($handle))
   {
       $nodebase = basename($node);
       if ($nodebase!="." && $nodebase!="..")
       {
           if(is_dir($DirPath.$node))
           {
               $nPath=$DirPath.$node."/";
               echo "<option value=\"$node\">$node</option>";
           }
       }
   }
}
 closedir();
?> </select> </div><br>
      <input name="submit" type="submit" id="submit3" value="<?php echo $lang_forms06;?>">
          <input name="reset" type="reset" id="reset" value="<?php echo $lang_forms04;?>">
          <?php
if(isset($_POST['submit']))
{
$choice = $_POST['language'];
if ($choice == '')
$lang = $lang_def;
elseif (is_dir($folder_path.'language/'.$choice))
$lang = $choice;
else
die("<div class=\"general\"><b /><br /><br />
$lang_lang09</b></div>");
session_start();
$_SESSION['lang'] = "$lang";
$_SESSION['reg'] = 1;
session_write_close();
header("Location: $register");
}
?>
        </div>
      </form>
    </td>
  </tr>
</table>
					</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<?php include 'includes/footer.php';?>
<!-- end #footer -->
</body>
</html>