<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if(!$_POST['old']){
     $_SESSION['error'] = "You must be older than 18.";
    header("Location:home.php");
    exit();
}else{
echo "Welcome " . $username;
}
?>