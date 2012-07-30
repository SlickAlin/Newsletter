<?php
include('config.php');
function db ($var) {
	global $dbhost;
	global $dbuser;
	global $dbpass;
	global $dbname;
	switch ($var) {
		case open :
		$con = mysql_connect($dbhost,$dbuser,$dbpass);
		mysql_select_db($dbname,$con);
		break;
		case close :
		mysql_close(mysql_connect($dbhost,$dbuser,$dbpass));
		break;
		default :
		break;
	}
}
?>