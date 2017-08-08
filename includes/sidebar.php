<div id="sidebar">
			<ul>
				<li>
				<p class="general_center"><center><a href="index.php"><img src="images/home.png" alt="<?php echo "$lang_titles27";?>" width="48" height="48" border="0"></a><br>
          <?php echo "$lang_titles27";?></center></p>
				<p>
				<?php
echo "{$lang_titles02} {$_SERVER['REMOTE_ADDR']} [$lang_titles26]<br />";
$day = date('w');
$date = date('j');
$year = date('Y');
$month = date('n');
if ($day==1)
$day = $lang_day01;
elseif ($day==2)
$day = $lang_day02;
elseif ($day==3)
$day = $lang_day03;
elseif ($day==4)
$day = $lang_day04;
elseif ($day==5)
$day = $lang_day05;
elseif ($day==6)
$day = $lang_day06;
else
$day = $lang_day07;
if ($month==1)
$month = $lang_month01;
elseif ($month==2)
$month = $lang_month02;
elseif ($month==3)
$month = $lang_month03;
elseif ($month==4)
$month = $lang_month04;
elseif ($month==5)
$month = $lang_month05;
elseif ($month==6)
$month = $lang_month06;
elseif ($month==7)
$month = $lang_month07;
elseif ($month==8)
$month = $lang_month08;
elseif ($month==9)
$month = $lang_month09;
elseif ($month==10)
$month = $lang_month10;
elseif ($month==11)
$month = $lang_month11;
else
$month = $lang_month12;
echo "$day $date $month $year<br />";
'session_write_close';
?>
				</P>
				</li>
								<!--<li>
					<h2></h2>
					<p></p>
				</li>
				<li>
					<h2></h2>
					<ul>
						<li></li>
					</ul>
				</li>
				<li>
					<h2></h2>
					<ul>
						<li></li>
					</ul>
				</li>
				<li>
					<h2></h2>
					<ul>
						<li></li>
					</ul>
				</li>-->
			</ul>
		</div>