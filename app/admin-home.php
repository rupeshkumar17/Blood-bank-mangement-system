<?php
include('C:\xampp\htdocs\ITW PROJECT\app\api\config\database.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="../css/as.css">
	<style type="text/css">
		li{
			width: 200%;
		}
	</style>
</head>
<body bgcolor="#1c77ac">
<div id="full">
	<div id="inner_full">
		<div id="header"><h1><a href="admin-home.php" style="text-decoration: none;color: black;"><b><u>Blood Bank Management system</a></h1></u></b></div>
		<div id="body">
			<br>
			   
			<h1><b><u>Welcome admin</h1></u></b><br><br>
			<ul>
				<li><a href="donor-red.php">Donor Registration</a></li>
				<li><a href="donor-list.php">Donor List</a></li>
				<li><a href="stoke-blood-list.php">Stoke Blood List</a></li>
			</ul><br><br><br><br><br>
            <ul>
				<li><a href="out-stoke-blood-list.php">Out Stoke Blood List</a></li>
				<li><a href="exchange-blood-list.php">Exchange Blood Registration</a></li>
				<li><a href="exchange-blood-list1.php">Exchange Blood List</a></li>
			</ul>
		</div>
		<div id="footer"><h2 align="center" style="padding-top: 3%">Copyright@Team 9 2020-21</h2></div>
		<h1 align="center"><a href="logout.php"><font color="black">Logout</font></a></h1>
	</div>
</div>
<h1 style="color: black">created by Ronak,Rupesh,Ravi,Riya,Rohan</h1>
</body>
</html>