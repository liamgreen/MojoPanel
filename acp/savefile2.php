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
$filecontents = $_POST['contents'];
$savedir = $_POST['dir'];
$filename = $_POST['filename'];
$open = fopen("$savedir/$filename",'r+');
$filecontents = stripslashes($filecontents);
ftruncate($open,0);
fwrite($open, $filecontents);
fclose($open);
$open2 = fopen("$savedir/$filename",'r+');
fwrite($open2, $filecontents);
fclose($open2);
header("Location: mfm.php");?>