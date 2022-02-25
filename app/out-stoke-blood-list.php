<?php
include('C:\xampp\htdocs\ITW PROJECT\app\api\config\database.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Exchange Blood List</title>
    <link rel="stylesheet" type="text/css" href="../css/as.css">
    <style type="text/css">
        #form{
    overflow: scroll;
    width: 40%;
    height: 300px;
    overflow-x: hidden;
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
                
            <h1>Out Stoke Blood List</h1>
            <center><div id="form">
                <table>
                    <tr>
                        <th style="padding: 20px;"><b><u><center>Name</center></u></b></th>
                        <th style="padding: 20px;"><b><u><center>Mobile No</center></u></b></th>
                        <th style="padding: 20px;"><b><u><center>Blood Group</center></u></b></th>
                        </tr>
                    <?php
                    $q=$db->query("SELECT * FROM out_stoke_b");
                        while ($r1=$q->fetch(PDO::FETCH_OBJ)) 
                        {
                            ?>
                            <tr>
                            <td><center><?= $r1->name; ?></center></td>
                            <td><center><?= $r1->mno; ?></center></td>
                            <td><center><?= $r1->bname; ?></center></td>
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