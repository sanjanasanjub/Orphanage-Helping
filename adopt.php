<html>
<head>
<title>Adoption Request</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Orphans Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.0.min.js"></script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/loginstyle.css">

<!--Custom-Theme-files-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--Custom-Theme-files-->
<!--Start-smoth-scrolling-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>	
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--end-smoth-scrolling-->
</head>
<body>
	<!--Header-Starts-Here-->
	<div class="header" id="home">
		<div class="container" style="width:51%">
			<span class="menu"> </span>
			<script>
					$( "span.menu" ).click(function() {
					  $( "ul.navig" ).slideToggle( "slow", function() {
					    // Animation complete.
					  });
					});
				</script>
			<div class="navigation">
				<ul class="navig">
					<li ><a href="donate.html">Home</a></li>
                 	<li class="active"><a href="adopt.html">Adopt Child</a></li>
					<li><a href="#">Contact</a></li>
                 	<li><a href="login.html">Logout</a></li>
				</ul>
			
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<?php
		include("conf.php");


		$appstatus=$_POST['appstatus'];
		$fathername=$_POST['fathername'];
		$mothername=$_POST['mothername'];
		$fage=$_POST['fage'];
		$mage=$_POST['mage'];
		$mdate=$_POST['mdate'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$income=$_POST['income'];
		$nation=$_POST['nation'];
		$motivation=$_POST['motivation'];


		$query="insert into adopt(appstatus,fathername,mothername,fage,mage,mdate,phone,email,address,income,nation,motivation)
		values('$appstatus','$fathername','$mothername','$fage','$mage','$mdate','$phone','$email','$address','$income','$nation','$motivation')";

		if(mysql_query($query))
		{
			echo "<br><br><br><br><br>	<center><h2>Requests for adoption is successfully sent. <br>We will contact you soon with the contact details that you are provided.<br><br><br> Have a nice day..</h2></center>";
		}
		else 
		{
			echo "<script language='javascript'>alert('Request not sent ')</script>";
			echo "<script language='javascript'>window.location='adopt.html'</script>";
			exit(0);
		}

	?>
	
	
	</body>
	</html>


