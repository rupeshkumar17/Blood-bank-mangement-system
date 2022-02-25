<?php
include('C:\xampp\htdocs\ITW PROJECT\app\api\config\database.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exchange Blood Registration</title>
	<link rel="stylesheet" type="text/css" href="../css/as.css">
	  <style type="text/css">
        #form{
    width: 80%;
    height: 300px;
    margin-right: 5%;
    background-color: #7e926d;
}
    </style>
</head>
<body bgcolor="#26735e">
<div id="full">
	<div id="inner_full">
		<div id="header"><h1><a href="admin-home.php" style="text-decoration: none;color: white;"> Blood Bank Management system</a></h1></div>
		<div id="body">
			<br>
			    
			<h1>Exchange Blood Donor Registration</h1>
			<center><div id="form">
				<form action="" method="post">
				<table>
					<tr>
						
						<td width="200px" height="50px">Enter Name</td>
						<td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name" required></td>
						<td width="200px" height="50px">Enter Father's Name</td>
						<td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name" required></td>
					</tr>
					<tr>
						<td width="200px" height="50px">Enter Address</td>
						<td width="200px" height="50px"><textarea name="address"></textarea></td>
						<td width="200px" height="50px">Enter City</td>
						<td width="200px" height="50px"><input type="text" name="city" placeholder="City" required></td>
					</tr>
					<tr>
						<td width="200px" height="50px">Enter Age</td>
						<td width="200px" height="50px"><input type="text" name="age" placeholder="Age" required></td>
						<td width="200px" height="50px">Enter E-Mail</td>
						<td width="200px" height="50px"><input type="text" name="email" placeholder="E-Mail"></td>
					</tr>
					<tr>
						
						<td width="200px" height="50px">Enter Mobile No</td>
						<td width="200px" height="50px"><input type="text" name="mno" placeholder="Mobile No" required></td>
					</tr>
					<tr>
						<td width="200px" height="50px">Select Blood Group</td>
						<td width="200px" height="50px">
							<select name="bgroup">
								<option>O+</option>
								<option>AB-</option>
								<option>AB+</option>
							</select>
						</td>
						<td width="200px" height="50px">Exchange Blood Group</td>
						<td width="200px" height="50px">
							<select name="exbgroup">
								<option>O+</option>
								<option>AB-</option>
								<option>AB+</option>
							</select>
						</td>
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
                 	$exbgroup=$_POST['exbgroup'];
                 	$q2="select * from donor_registration where bgroup = '$bgroup'";
                 	$st=$db->query($q2);
                 	$num_row=$st->fetch();
                 	$id=$num_row['id'];
                 	$name1=$num_row['name'];
                 	$b1=$num_row['bgroup'];
                 	$mno1=$num_row['mno'];
                   	$q1="INSERT INTO out_stoke_b (bname,name,mno) value(?,?,?)";
                 	$st1=$db->prepare($q1);
                 	$st1->execute([$b1,$name,$mno]);
                 	$delete_q="delete from donor_registration where id='$id'";
                 	$st1=$db->prepare($delete_q);
                 	$st1->execute();
                 	$q=$db->prepare("INSERT INTO exchange_b(name,fname,address,city,age,bgroup,mno,email,ebgroup) VALUES(:name,:fname,:address,:city,:age,:bgroup,:mno,:email,:ebgroup)");
                 	$q-> bindValue('name',$name);
                 	$q-> bindValue('fname',$fname);
                 	$q-> bindValue('address',$address);
                 	$q-> bindValue('city',$city);
                 	$q-> bindValue('age',$age);
                 	$q-> bindValue('bgroup',$bgroup);
                 	$q-> bindValue('mno',$mno);
                 	$q-> bindValue('email',$email);
                 	$q-> bindValue('ebgroup',$exbgroup);
                 	if ($q->execute())
                 	{
                 		echo "<script>alert('Registration succesfull')</script>";
                 	}
                 	else
                 	{
                 		echo "<script>alert('Registration Fail')</script>";
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