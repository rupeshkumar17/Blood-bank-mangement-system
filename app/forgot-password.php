<?php
$msg = NULL;

$con=mysqli_connect("localhost", "root", "", "PHPLearning");
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['email']);
    $usercheck = mysqli_query($con, "SELECT * FROM users WHERE email='$username'");
    if(mysqli_num_rows($usercheck) > 0) {
         
        $row = mysqli_fetch_array($usercheck);
        $email = $row['email'];
        $db_id = $row['id'];
        $token = uniqid(md5(time()));
        
        if (mysqli_query($con, "INSERT INTO password_reset( `email`, `token`) VALUES ('$email','$token')")) {
            "Mail has been sended to your registered email for reseting your password.";
            $to = $email;

            $subject = "Reset Password Link";
        $message = "<a href = 'http://localhost/ITW PROJECT/app/reset.php?token=$token'>Reset your Password</a>";
        $headers = "From: Blood Bank Private Limited";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to, $subject, $message, $headers);
      
            echo "<center><h1>Reset Link is shared to your email.</h1></center>";
            $msg = "<div class = 'alert alert-success'>Password reset link has been sent to our email.</div>";
        }
    }else{
        $msg = "<div class = 'alert alert-danger'>User not found.</div>";
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .form-gap {
            padding-top: 70px;
        }
    </style>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap"></div>
<div class="container">
  <div class="row">
        <!-- <br> -->
    <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center" style="padding-top: 10%;">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value="Please check your email"> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="footer" style="color: red; margin-top: 45%;"><h2 align="center">Copyright@Team 9 2020-21</h2></div>
  </div>
</div>
<h1 style="color: black">created by Ronak,Rupesh,Ravi,Riya,Rohan</h1>
    </body>
</html>