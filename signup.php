<?php
include("conf.php");

$id=$_POST['id'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];
$email=$_POST['email'];

if($pass!=$rpass)
{
	echo "<script language='javascript'>alert('Passwords not matched')</script>";
	echo "<script language='javascript'>window.location='login.html'</script>";
	exit(0);
}

$emailcheck="select * from signup where email='$email' ";
$ec=mysql_query($emailcheck);
if(mysql_num_rows($ec)>0)
{
	echo "<script language='javascript'>alert('Email id already registered')</script>";
	echo "<script language='javascript'>window.location='login.html'</script>";
	exit(0);
}



	$query="insert into signup values('$id','$pass','$rpass','$email')";

	mysql_query($query);
	echo "<script language='javascript'>window.location='donate.html'</script>";

?>