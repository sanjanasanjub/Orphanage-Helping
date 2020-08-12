<?php


$user=$_GET['user'];
$pass=$_GET['pass'];

	$con=mysql_connect('localhost','root','');

mysql_select_db('orphanage',$con);



	//$query1="SELECT * FROM admin WHERE name='$user' AND pass='$pass'";

	$reterive_admin=mysql_query("Select * from admin where user='$user' and pass='$pass'");
		
		if(mysql_num_rows($reterive_admin)==0)  // if record not found so number of rows will be zero
		{
			
			echo "<script>window.alert('Invalid password');</script>";
			echo "<script>window.location='admin.html'</script>";
			exit(0);
		}
		else
		{
		//	$update_password=mysql_query("UPDATE admin SET password='$npassword' WHERE adminname='admin'");
			
			echo "<script>window.alert('Login Successfully....');</script>";
			echo "<script>window.location='adminacc.html'</script>";
			
		}
	
?>