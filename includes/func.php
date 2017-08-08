<?php
########################################################
##			REQUIREMENTS				##
##			PHP version 4 or greater		##
########################################################
##			INSTRUCTIONS				##
##		To use the sanitzer function:			##
##	- $variable = sanitize($_POST['variable']);	##
##	- $variable = sanitize($variable);			##
########################################################

# Start Sanitizer Function #
function sanitize($data)  
	{  
	// Remove whitespaces (Not required)
	$data = trim($data);
	// Apply stripslashes if magic_quotes_gpc is enabled
	if(get_magic_quotes_gpc())
		{
		$data = stripslashes($data);
		}
	// A mySQL connection is required before using this function
	$data = mysql_real_escape_string($data);  
	return $data;
}
# End Sanitizer Function #

########################################################
##			REQUIREMENTS				##
##			PHP version 4 or greater		##
########################################################
##			INSTRUCTIONS				##
##		Function: sql_sanitize($sCode)		##
##		To use the sanitzer function:			##
##	- $variable = sql_sanitize($_POST['variable']);	##
##	- $variable = sql_sanitize($variable);		##
########################################################

# Start SQL_Sanitizer Function #
function sql_sanitize($sCode)
	{
	if(function_exists("mysql_real_escape_string"))
		{
			// If PHP version > 4.3.0
			// Escape the MySQL string.
			$sCode = mysql_real_escape_string($sCode);
		}
		else
		{
			// If PHP version < 4.3.0
			// Precede sensitive characters with a slash \
			$sCode = addslashes( $sCode );
	}
	// Return the sanitized code
	return $sCode;
}
# End SQL_Sanitizer Function #

########################################################
##			REQUIREMENTS				##
##			PHP version 4 or greater		##
########################################################
##			INSTRUCTIONS				##
##		Function: delete_directory($dirname)	##
##		To use the delete_directory function:	##
##		- function delete_directory($dirname)	##
########################################################

# Start Delete Directory and Contents Function #
function delete_directory($dirname)
{
	if (is_dir($dirname))
	{
		$dir_handle = opendir($dirname);
	}
		if (!$dir_handle)
		{
			return false;
		}
		while($file = readdir($dir_handle))
		{
			if ($file != "." && $file != "..")
			{
				if (!is_dir($dirname."/".$file))
				{
				unlink($dirname."/".$file);
				}
				else
				{
					delete_directory($dirname.'/'.$file);        
				}  
		}
	}
	closedir($dir_handle);
	rmdir($dirname);
	return true;
}
# End Delete Directory and Contents Function #

?>