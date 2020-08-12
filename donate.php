<?php
include("conf.php");

$name=$_POST['name'];
$email=$_POST['email'];
$amount=$_POST['amount'];
$tel=$_POST['tel'];
$message=$_POST['message'];
$donate=$_POST['donate'];
$priority=$_POST['priority'];

$query="insert into donate values('$name','$email','$amount','$tel','$message'.'$donate','$priority')";

mysql_query($query);
echo "<script language='javascript'>window.location='bank.html'</script>";

?>