<?php 

$username = $_POST['username'];
$password = $_POST['password'];

$db_username = "Sou";
$db_password = "1234";

if($username == $db_username){
    if($password == $db_password){
        header("location:dashbord.php");
    }else{
    header("location:login.php");
    }
}else{
    header("location:login.php");
}    
?>
