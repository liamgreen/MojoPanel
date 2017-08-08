<?php session_start(); ?>
<link href="includes/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php
	session_destroy();
	include 'includes/connect.php';
	
	if( !defined("INSTALLED") ){
		header('Location: install/index.php');
		exit;
	} else {
		include 'includes/nli.php';
		?>
<div id="wrapper">
	<div id="page">
		<div id="content">
			<div class="post">
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>
					<?php
		if ($login == 'on'){
			$lin = 'login.php';
		} else {
			session_start();
			$_SESSION['lin']=1;
			session_write_close;
			$lin = 'login2.php';
		}

		
		if ($forgot == 'on'){
			$fpw = 'forgot.php';
		} else {
			session_start();
			$_SESSION['forgotpw']=1;
			session_write_close;
			$fpw = 'forgot2.php';
		}

		
		if ($new_reg == 'off'){
			$reg = 'limited.php';
		} else {
			
			if ($lang_sel == 'on'){
				$reg = 'lang.php';
			} else {
				
				if ($register == 'on'){
					$reg = 'register.php';
				} else {
					session_start();
					$_SESSION['reg']=1;
					session_write_close;
					$reg = 'register5.php';
				}

			}

		}

		
		if ($support == 'on'){
			$sup = 'support.php';
		} else {
			session_start();
			$_SESSION['support']=1;
			session_write_close;
			$sup = 'support2.php';
		}

		?>
<table width="500" border="0" align="center" cellspacing="40">
  <tr valign="top" class="general"> 
    <td width="33%"> <div align="center"><a href="<?php  echo $reg; ?>"><img src="images/register.png" alt="<?php  echo "$lang_titles20"; ?>" width="48" height="48" border="0" /></a><br />
        <?php  echo "$lang_titles20"; ?></div></td>
    <td width="33%"> <div align="center"><a href="<?php  echo $lin; ?>"><img src="images/login.png" alt="<?php  echo "$lang_titles13"; ?>" width="48" height="48" border="0" /></a><br />
        <?php  echo "$lang_titles13"; ?> </div></td>
    <td width="33%"> <div align="center"><a href="<?php  echo $fpw; ?>"><img src="images/forgot_password.png" alt="<?php  echo "$lang_titles09"; ?>" width="48" height="48" border="0" /></a><br />
        <?php  echo "$lang_titles09"; ?></div></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="center"><a href="terms.php"><img src="images/terms.png" alt="<?php  echo "$lang_control03"; ?>" width="48" height="48" border="0" /></a><br />
        <?php  echo "$lang_control03"; ?></div></td>
    <td><div align="center"><a href="<?php  echo $sup; ?>"><img src="images/support.png" alt="<?php  echo "$lang_titles23"; ?>" width="48" height="48" border="0" /></a><br />
        <?php  echo "$lang_titles23"; ?></div></td>
    <td><div align="center"><a href="listing.php"><img src="images/members_list.png" alt="<?php  echo "$lang_titles17"; ?>" width="48" height="48" border="0" /></a><br>
        <?php  echo "$lang_titles17"; ?> </div></td>
  </tr>
  <tr valign="top" class="general"> 
    <td> <div align="center"> 
        <?php
 if ($impressum =="on")echo "<center><a href=\"impressum.php\"><img src=\"images/imp.png\" alt=\"$lang_impressum00\" width=\"48\" height=\"48\" border=\"0\" /></a><br />
$lang_impressum00</center>"; else echo ""; ?>
      </div></td>
  </tr>
</table>
					</p>
				</div>
			</div>
		</div>
		<!-- end #content -->
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!--<div class="container"><img src="images/img03.png" width="1000" height="40" alt="" /></div>-->
	<!-- end #page -->
</div>
<?php  include 'includes/footer.php'; ?>
<!-- end #footer -->
</body>
</html>
<?php
 } ?>