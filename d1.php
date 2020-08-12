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
                 	<li class="active"><a href="d1.php">Donator Details</a></li>
					<li><a href="d2.php">Donation Details</a></li>
					<li><a href="d3.php">Adoption Details</a></li>
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

 

$result = mysql_query("SELECT * FROM donate");

 echo"<h1 align='center'><br><u>Donate details</u></h1>";


echo "<table align='center' border='1' width='80%'>

<tr>

<th><center>ID</center></th>

<th><center>NAME</center></th>

<th><center>EMAIL</center></th>

<th><center>AMOUNT</center></th>

<th><center>TEL</center></th>

<th><center>MESSAGE</center></th>

<th><center>DONATE</center></th>

<th><center>PRIORIRTY</center></th>

</tr>";

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td align='center'>" . $row['id'] . "</td>";

  echo "<td align='center'>" . $row['name'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";
  
  echo "<td align='center'>" . $row['amount'] . "</td>";
  
  echo "<td align='center'>" . $row['tel'] . "</td>";

echo "<td>" . $row['message'] . "</td>";

echo "<td align='center'>" . $row['donate'] . "</td>"; 

echo "<td align='center'>" . $row['priorirty'] . "</td>";

 echo "</tr>";

}
echo "</table>";

echo "</table><br><br>";
mysql_close($con);

?>

</body>

</html>