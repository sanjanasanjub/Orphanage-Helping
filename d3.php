<html>
<head>
<title>Admin</title>
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
<link rel="stylesheet" type="text/css"href="css/style1.css">
<link rel="stylesheet" type="text/css" media="all" href="css/styledonate.css">
<link rel="stylesheet" type="text/css" media="all" href="css/responsive.css">
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

<style>
th,td {
	padding:10px;
}

th {
	color:white;
	background-color:#d25036;	
}
h1  {
	color:blue;
	font-size: 32pt;
}
</style>

</head>

<body>
	<!--Header-Starts-Here-->
	<div class="header" id="home" style="border-top-width: 0px;">
		<div class="container" style="width:81%">
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
					<li ><a href="adminacc.html">Admin Home</a></li>
                 	<li ><a href="d1.php">Donator Details</a></li>
					<li ><a href="d2.php">Donation Details</a></li>
					<li class="active"><a href="d3.php">Adoption Details</a></li>
					<li ><a href="admin.html">Logout</a></li>
				</ul>
			
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>


<?php

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("orphanage", $con);

 

$result = mysql_query("SELECT * FROM adopt");

 echo"<h1 align='center'><br><u>Request for adoption details</u></h1>";


echo "<br><table align='center' border='1' width='80%'>
	<tr>
	<th ><center>APPLICANT STATUS</center></th>
	<th><center>FATHER NAME</center></th>
	<th><center>MOTHER NAME</center></th>
	<th><center>FATHER AGE</center></th>
	<th><center>MOTHER AGE</center></th>
	<th ><center>MARRIAGE DATE</center></th>
	<th><center>PHONE NO.</center></th>
	<th><center>EMAIL ID</center></th>
	<th><center>ADDRESS</center></th>
	<th><center>IMCOME</center></th>
	<th ><center>NATIONALITY</center></th>
	<th><center>MOTIVATION FOR ADOPTION</center></th>
	</tr>";

while($row = mysql_fetch_array($result))

  {
	  echo "<tr>";
	  echo "<td align='center'>" . $row[1] . "</td>";
	  echo "<td align='center'>" . $row[2] . "</td>";
	  echo "<td align='center'>" . $row[3] . "</td>";
	  echo "<td align='center'>" . $row[4] . "</td>";
	  echo "<td align='center'>" . $row[5] . "</td>";
	  echo "<td align='center'>" . $row[6] . "</td>";
	  echo "<td align='center'>" . $row[7] . "</td>";
	  echo "<td align='center'>" . $row[8] . "</td>";
	  echo "<td align='center'>" . $row[9] . "</td>";
	  echo "<td align='center'>" . $row[10] . "</td>";
	  echo "<td align='center'>" . $row[11] . "</td>";
	  echo "<td align='center'>" . $row[12] . "</td>";
	  echo "</tr>";
   }
echo "</table>";

//echo "<a href='delc.html'><h1 align='center'><font color='blue'>DELETE</a>&nbsp <a href='updatephp.php'>UPDATE</font></h1></a>" ;
 
  
  
echo "</table>";
mysql_close($con);

?>

</body>

</html>