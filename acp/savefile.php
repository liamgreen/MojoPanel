<?php include 'includes/header.php';
if (get_magic_quotes_gpc()) {
function stripslashes_deep($value){
$value = is_array($value) ?
array_map('stripslashes_deep', $value) :
stripslashes($value);
return $value;}
$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);}
$filecontents = $_POST['filecontents'];
$savedir = $_POST['dir'];
$filename = $_POST['filename'];
$open = fopen("$savedir/$filename",'r+');
$filecontents = stripslashes($filecontents);
ftruncate($open,0);
$filecontents = str_replace("<?xml version=\"1.0\"?>","",$filecontents);
$filecontents = str_replace("<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>","",$filecontents);
$filecontents = str_replace("<?xml version=\"1.0\" encoding=\"iso-8859-2\"?>","",$filecontents);
$filecontents = str_replace("<?xml version=\"1.0\" encoding=\"utf-8\"?>","",$filecontents);
$filecontents = str_replace("<?xml version=\"1.0\" encoding=\"big5\"?>","",$filecontents);
$filecontents = str_replace("<?xml version=\"1.0\" encoding=\"iso-8859-5\"?>","",$filecontents);
$filecontents = str_replace("<?xml version=\"1.0\" encoding=\"iso-2022-jp\"?>","",$filecontents);
$filecontents = str_replace("<?xml version=\"1.0\" encoding=\"iso-8859-7\"?>","",$filecontents);
$filecontents = str_replace("<?xml version=\"1.0\" encoding=\"iso-2022-kr\"?>","",$filecontents);
$filecontents = str_replace("<?xml version=\"1.0\" encoding=\"us-ascii\"?>","",$filecontents);
$filecontents = str_replace("<!--ADS-START--><div align=\"center\">*<!--ADS-END-->","",$filecontents);
fwrite($open, $filecontents);
fclose($open);
$result = mysql_query("SELECT * FROM $table WHERE username= '$username'");
$row = mysql_fetch_array($result);
do{	
$adverts =  "{$row['adverts']}";
}while($row = mysql_fetch_array($result));
if ($adverts=='yes'){
$ext = str_replace('.','',strstr($filename, '.'));
if (in_array(strtolower($ext),$add_ads)) {
$adcode = file_get_contents("includes/ads.inc");
$open2 = fopen("$savedir/$filename",'r+');
fwrite($open2, $filecontents);
fwrite($open2, "<!--ADS-START--><div align=\"center\">$adcode</div><!--ADS-END-->");
fclose($open2);
}}
header("Location: mfm.php");?>