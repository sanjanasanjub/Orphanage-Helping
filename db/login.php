<?php
$un=$_POST['$user'];
$pa=$_POST['$pass'];

mysql_connect('localhost','root','');
mysql_select_db('orphanage');
$query="insert into Login values('$un','$pa');
mysql_query($query);
?>