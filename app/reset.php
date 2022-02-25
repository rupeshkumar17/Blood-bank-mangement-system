<?php
$msg = NULL;
// include("includes/config.php");
$con=mysqli_connect("localhost", "root", "", "PHPLearning");
if(isset($_GET['token'])){
    $token = mysqli_real_escape_string($con, $_GET['token']);
    $query = "SELECT * FROM password_reset WHERE token='$token'";
    $run = mysqli_query($con, $query);
    if(mysqli_num_rows($run)>0){
        $row = mysqli_fetch_array($run);
        $token = $row['token'];
        $email = $row['email'];
    }
    else{
        header("location:register.php");
    }
}
if (isset($_POST['submit'])) {
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    // $options = ['cost'=>11];
    $newpass = md5($password);
    if($password!=$cpassword){
        $msg = "Sorry, Passwords didn't matched";
    }else if(strlen($password)<6){
        $msg = "Password must be 6 characters long"; 
    }else{
        $query = "UPDATE users SET password='$newpass' WHERE email = '$email'";
        mysqli_query($con, $query);
        $query = "DELETE FROM forgetpasword where email = '$email'"; 
        mysqli_query($con, $query);
        $msg = "Password Updated"; 

    }
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        /* *{box-sizing: border-box; transform: translate(-50%,-50%);}     */
        .main{box-sizing: border-box; border: 5px; }
    </style>
</head>
<body>
    <!-- <div class="main"> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Reset Password</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input type="text" readonly class="form-control" name="" value="<?php echo $email;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="CPassword">Confirm Password</label>
                        <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-resize-vertical"></span></span>
                        <input type="password" class="form-control" name="cpassword" id="cpassword">
                        </div>
                    </div>
                    <?php 
                        if(isset($msg)){
                            echo $msg;
                        }
                    ?>
                    <div>
                        <a href="index.php"  class="btn btn-primary pull-left">Go to Login page!</a>
                        <button name="submit" class="btn btn-primary pull-right">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- </div> -->
</body>
</html>