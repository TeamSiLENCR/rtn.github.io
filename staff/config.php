<?php
	
	#region Database Settings
	// DATABASE SETTINGS
	$GLOBALS['mysql_host'] = "localhost";								// MySQL Host
	$GLOBALS['mysql_user'] = "root";								// MySQL User
	$GLOBALS['mysql_pass'] = "";								// MySQL Password
	$GLOBALS['mysql_db'] = "staff";									// MySQL Database
	#endregion
	
	// SITE SETTINGS
	$GLOBALS['domainname'] = "https://rollingthundernetworks.net/staff/";										// URL (and folder if used) with protocol and trailing slash. Example: https://arthurmitchell.xyz/beta/
	$GLOBALS['subfolder'] = "/staff"; 										// If accessing via a sub folder type the sub folder name out like the following: /foldername Example: /staff otherwise leave blank
	$GLOBALS['apikey'] = "4F6A5C9E106DA4556F6164D92FEC57D4";								 			// SteamCommunity API Key https://steamcommunity.com/dev/apikey
	date_default_timezone_set('America/New_York');						// Timezone (http://php.net/manual/en/timezones.php)

?>