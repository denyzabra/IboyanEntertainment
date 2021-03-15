<?php 
/* 
 * Basic Site Settings and Database Configuration 
 */ 
 
// Site Settings 
$siteName = 'iboyanentertainment'; 
$siteEmail = 'ugandanmariof@gmail.com'; 
 /*
$siteURL = ($_SERVER["localhost"] == "on")?'https://':'http://'; 
$siteURL = $siteURL.$_SERVER["localhost"].dirname($_SERVER['REQUEST_URI']).'/'; 
 */

$con = mysqli_connect("localhost","root","","musicdb") or die(mysql_error());

// Database configuration 
/*
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'musicdb'); 
*/