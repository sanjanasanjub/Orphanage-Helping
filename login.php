<?php
   include("conf.php");
   session_start();
 
      // username and password sent from form 
      
      $myemail =$_POST['email'];
      $mypassword = $_POST['pass']; 
      
      $sql = "SELECT id FROM signup WHERE email = '$myemail' and pass = '$mypassword'";
      $result = mysql_query($sql);
      $row = mysql_fetch_array($result,MYSQL_ASSOC);
      
      $count = mysql_num_rows($result);
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($count == 1)
		  {
         
					$_SESSION['login_email'] = $myemail;
         
					header("location: donate.html");
		}
	else 
		{
					echo "<script>window.alert('Invalid Login');</script>";
					echo "<script>window.location='login.html'</script>";
					exit(0);
			// $error = "Your Login Name or Password is invalid";
      }
?>

