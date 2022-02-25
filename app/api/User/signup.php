<?php
 

include_once '../config/database.php';
 

include_once '../objects/user.php';
 

 
$user = new User($db);
 

$user->username = $_POST['username'];
$user->email = $_POST['email'];
$user->password = md5($_POST['password']);
$user->created = date('Y-m-d H:i:s');
 
// create the user
if($user->signup()){
    
        echo "<script>alert('Sign Up Successfull')</script>";
    }

    else
    {
        echo "<script>alert('Wrong user')</script>";
    }
?>