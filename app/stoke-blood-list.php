<?php
include('C:\xampp\htdocs\ITW PROJECT\app\api\config\database.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/as.css">
    <style type="text/css">
        td{
            width: 100px;
            height: 30px;
        }
        #form{
    width: 30%;
    height: 150px;
    margin-right: 5%;
    background-color:  #7e926d;
}
    </style>
</head>
<body bgcolor="#26735e">
<div id="full">
    <div id="inner_full">
        <div id="header"><h1><a href="admin-home.php" style="text-decoration: none;color: white;"> Blood Bank Management system</a></h1></div>
        <div id="body">
            <br>
                
            <h1>Stoke Blood List</h1><br><br><br><br>
            <center><div id="form">
                <table>
                    <tr>
                        <td><center><b><u>Name</u></b></center></td>
                        <td><center><b><u>Qty</u></b></center></td>
                    </tr>
                            <tr>
                            <td><center>O+</center></td>
                            <td><center>
                                <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>
                         <tr>
                            <td><center>AB+</center></td>
                            <td><center><?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>
                         <tr>
                            <td><center>AB-</center></td>
                            <td><center><?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                                echo $row=$q->rowcount();
                                ?></center></td>
                        </tr>
                        </table>
            </div></center>
        </div><br><br><br><br><br><br><br><br>
        <div id="footer"><h2 align="center" style="padding-top: 3%;">Copyright@Team 9 2020-21</h2></div>
        <h1 align="center"><a href="logout.php"><font color="black">Logout</font></a></h1>
    </div>
</div>
<h1 style="color: black">created by Ronak,Rupesh,Ravi,Riya,Rohan</h1>
</body>
</html>