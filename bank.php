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
					<li class="active"><a href="donate.html">Home</a></li>
                 	<li ><a href="adopt.html">Adopt Child</a></li>
					<li><a href="#">Contact</a></li>
                 	<li><a href="login.html">Logout</a></li>
				</ul>
			
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<?php
include("conf.php");

$cnum=$_POST['cnum'];
$cname=$_POST['cname'];
$mon=$_POST['mon'];
$year=$_POST['year'];
$cvv=$_POST['cvv'];

$query="insert into bank(cnum,cname,mon,year,cvv) values('$cnum','$cname','$mon','$year','$cvv')";

if(mysql_query($query))
		{
			echo "<br><br><br><br><br>	<center><h2>Your donation for orphanage is successfully sent.<br><br><br> Thank you...Have a nice day..</h2></center>";
		}
		else 
		{
			//echo "<script language='javascript'>alert('Donation not sent ')</script>";
			//echo "<script language='javascript'>window.location='gv.html'</script>";
			//exit(0);
		}


?>
</body>
	</html>