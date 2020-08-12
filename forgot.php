<?php
   include("conf.php");
      // username and password sent from form 
      
      $email =$_POST['email'];
	
		$sql1="select * from signup where email = '$email' ";
		$res1=mysql_query($sql1);	
		
		if(mysql_num_rows($res1)>0)
		{
			while($result1=mysql_fetch_array($res1))
				{
					$password=$result1[1];
					//echo $password;
					
				}	
			echo "<script language='javascript'>alert('password is :'+"?><?php echo json_encode($password);?><?php echo " )</script>";
			echo "<script language='javascript'>window.location='login.html'</script>";
		}
		else
		{
			echo "<script language='javascript'>alert('Invalid Email id ')</script>";
			echo "<script language='javascript'>window.location='forgot.html'</script>";
			exit(0);
		}
?>

