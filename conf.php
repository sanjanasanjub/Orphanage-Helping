<?php
$con =mysql_connect('localhost','root','');
if(!$con) { 
	die("Cannot connect." . mysql_error());
}
$dbselect = mysql_select_db('orphanage');
if(!$dbselect) { 
	die("Cannot select database " . mysql_error());
}
?>
