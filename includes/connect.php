<?php
define('INSTALLED', true);
$dbhost = "localhost";
$dbname = "hosting";
$dbuser = "root";
$dbpass = "123";
$mhp_config = 'mhp_config';
$mhp_members = 'mhp_members';
$mhp_impressum = 'mhp_impressum';
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Unable to connect to database server.');
$select = mysql_select_db($dbname) or die ('Connected to server but unable to find database.');
?>