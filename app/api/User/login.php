<?php
include_once '../config/database.php';
include_once '../objects/user.php';
session_start();


 

$user = new User($db);

$user->username = isset($_GET['username']) ? $_GET['username'] : die();
$user->password = md5(isset($_GET['password']) ? $_GET['password'] : die());

$stmt = $user->login();
if($stmt->rowCount() > 0){
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($row) {
        $SESSION['username']=$username;
        header("Location:http://localhost/ITW%20PROJECT/app/admin-home.php");
    }
}
    else
    {
        echo "<script>alert('Wrong user')</script>";
    }
?>