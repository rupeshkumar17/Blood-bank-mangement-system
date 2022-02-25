<?php
include('C:\xampp\htdocs\ITW PROJECT\app\api\config\database.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor List</title>
    <link rel="stylesheet" type="text/css" href="../css/as.css">
    <style type="text/css">
        td{
            width: 100px;
            height: 30px;
        }
        #form{
    overflow: scroll;
    width: 80%;
    height: 300px;
    overflow-x: hidden;
    background-color: #7e926d;
    margin-right: 5%;}
    </style>
</head>
<body bgcolor="#26735e">
<div id="full">
    <div id="inner_full">
        <div id="header"><h1><a href="admin-home.php" style="text-decoration: none;color: white;"> Blood Bank Management system</a></h1></div>
        <div id="body">
            <br>
                 
            <h1 style="color: white;">Donor List</h1>
            <center><div id="form">
                <table>
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Age</th>
      <th scope="col">Bgroup</th>
      <th scope="col">Mno</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
                    <?php
                    $q=$db->query("SELECT * FROM donor_registration");
                        while ($r1=$q->fetch(PDO::FETCH_OBJ)) 
                        {
                            ?>
                            <tr>
                            <td><center><?= $r1->name; ?></center></td>
                            <td><center><?= $r1->fname; ?></center></td>
                            <td><center><?= $r1->address; ?></center></td>
                            <td><center><?= $r1->city; ?></center></td>
                            <td><center><?= $r1->age; ?></center></td>
                            <td><center><?= $r1->bgroup; ?></center></td>
                            <td><center><?= $r1->mno; ?></center></td>
                            <td><center><?= $r1->email; ?></center></td>
                        </tr>
                            <?php
                        }
                        ?>
                    
                </table>
            </div></center>
        </div><br><br><br><br><br><br><br><br>
        <div id="footer"><h2 align="center" style="padding-top: 3%;">Copyright@Team 9 2020-21</h2></div>
        <h1 align="center"><a href="logout.php"><font color="blue">Logout</font></a></h1>
    </div>
</div>
<h1 style="color: white">created by Ronak,Rupesh,Ravi,Riya,Rohan</h1>
</body>
</html>