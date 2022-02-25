<?php
include('C:\xampp\htdocs\ITW PROJECT\app\api\config\database.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Exchange Blood List</title>
    <link rel="stylesheet" type="text/css" href="../css/as.css">
    <style type="text/css">
        #form1{
    overflow: scroll;
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
                 
            <h1>Exchange Blood List</h1>
            <center><div id="form1">
                <table>
                    <tr>
                        <td style="padding: 20px;"><center><b><u>Name</u></b></center></td>
                        <td style="padding: 20px;"><center><b><u>Father's Name</u></b></center></td>
                        <td style="padding: 20px;"><center><b><u>Address</u></b></center></td>
                        <td style="padding: 20px;"><center><b><u>City</u></b></center></td>
                        <td style="padding: 20px;"><center><b><u>Age</u></b></center></td>
                        <td style="padding: 20px;"><center><b><u>Blood Group</u></b></center></td>
                        <td style="padding: 20px;"><center><b><u>Exchange Blood Group</u></b></center></td>
                        <td style="padding: 20px;"><center><b><u>Mobile No</u></b></center></td>
                        <td style="padding: 20px;"><center><b><u>E-Mail</u></b></center></td>
                    </tr>
                    <?php
                    $q=$db->query("SELECT * FROM exchange_b");
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
                            <td><center><?= $r1->ebgroup; ?></center></td>
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
        <h1 align="center"><a href="logout.php"><font color="black">Logout</font></a></h1>
    </div>
</div>
<h1 style="color: black">created by Ronak,Rupesh,Ravi,Riya,Rohan</h1>
</body>
</html>