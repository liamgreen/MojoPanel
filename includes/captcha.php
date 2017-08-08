<?php
/*
NOTE: A few chars has been removed, to prevent confusion
between the letters. The removed chars are:
	Bb - could be confused with number 8 and spoken Pp
	I  - could be confused with number 1
	l  - could be confused with number 1
	Nn - could be confused with the spoken Mm
	Zz - could be confused with the spoken Cc
*/
$_SESSION['sess_captcha'] = substr(str_shuffle("23456789ACDEFGHJKLMPQRSTUVWXY"), 0, 4);
//$_SESSION['sess_captcha'] = substr(str_shuffle("0123456789acdefghijkmopqrstuvwxyACDEFGHJKLMOPQRSTUVWXY"), 0, 4);?>