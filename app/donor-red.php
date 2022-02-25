<?php
include('C:\xampp\htdocs\ITW PROJECT\app\api\config\database.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="../css/as.css">
	<style type="text/css">
		#form{
		margin-right: 5%;
		background-color: #7e926d;
		 width: 80%;
   		 height: 300px;
	}
	</style>
</head>
<body bgcolor="#26735e">
<div id="full">
	<div id="inner_full">
		<div id="header"><h1><a href="admin-home.php" style="text-decoration: none;color: white;"> Blood Bank Management system</a></h1></div>
		<div id="body">
			<br>
			     
			<h1>Donor Registration</h1>
			<center><div id="form">
				<form action="" method="post">
				<table>
					<tr>
						<td width="200px" height="50px">Enter Name</td>
						<td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name" required></td>
						<td width="200px" height="50px">Enter Father's Name</td>
						<td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter  father Name" required></td>
					</tr>
					<tr>
						<td width="200px" height="50px">Enter Address</td>
						<td width="200px" height="50px"><textarea name="address" required></textarea></td>
						<td width="200px" height="50px">Enter City</td>
						<td width="200px" height="50px"><input type="text" name="city" placeholder="City" required></td>
					</tr>
					<tr>
						<td width="200px" height="50px">Enter Age</td>
						<td width="200px" height="50px"><input type="text" name="age" placeholder="Age" required></td>
						<td width="200px" height="50px">Select Blood Group</td>
						<td width="200px" height="50px">
							<select name="bgroup">
								<option>O+</option>
								<option>AB-</option>
								<option>AB+</option>
							</select>
						</td>
					</tr>
					<tr>
						<td width="200px" height="50px">Enter E-Mail</td>
						<td width="200px" height="50px"><input type="text" name="email" placeholder="E-Mail"></td>
						<td width="200px" height="50px">Enter Mobile No</td>
						<td width="200px" height="50px"><input type="text" name="mno" placeholder="Mobile No" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="sub" value="Save"></td>
					</tr>
				</table></form>
				<?php
                 if (isset($_POST['sub'])) 
                 {
                 	$name=$_POST['name'];
                 	$fname=$_POST['fname'];
                 	$address=$_POST['address'];
                 	$city=$_POST['city'];
                 	$age=$_POST['age'];
                 	$bgroup=$_POST['bgroup'];
                 	$mno=$_POST['mno'];
                 	$email=$_POST['email'];
                 	$q=$db->prepare("INSERT INTO donor_registration(name,fname,address,city,age,bgroup,mno,email)VALUES(:name,:fname,:address,:city,:age,:bgroup,:mno,:email)");
                 	$q-> bindValue('name',$name);
                 	$q-> bindValue('fname',$fname);
                 	$q-> bindValue('address',$address);
                 	$q-> bindValue('city',$city);
                 	$q-> bindValue('age',$age);
                 	$q-> bindValue('bgroup',$bgroup);
                 	$q-> bindValue('mno',$mno);
                 	$q-> bindValue('email',$email);
                 	if ($q->execute())
                 	{
                 		echo "<script>alert('Donor Registration succesfull')</script>";
                 	}
                 	else
                 	{
                 		echo "<script>alert('Donor Registration Fail')</script>";
                 	}
                 }
				?>
			</div></center>
		</div><br><br><br><br><br><br><br><br>
		<div id="footer"><h2 align="center" style="padding-top: 3%;">Copyright@Team 9 2020-21</h2></div>
		<h1 align="center"><a href="logout.php"><font color="black">Logout</font></a></h1>
	</div>
</div>
<h1 style="color: black">created by Ronak,Rupesh,Ravi,Riya,Rohan</h1>
</body>
</html>