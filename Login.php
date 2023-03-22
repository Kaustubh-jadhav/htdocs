<?php
 session_start();
 $_SESSION['uname'] = $_POST['uname'];
 $_SESSION['pass'] = $_POST['pass'];
 $_SESSION['count'] = 1;
 $username = "admin";
 $password = "admin";
 if($username == $_SESSION['uname'] && $password == $_SESSION['pass'])
 {
    
    header('Location: second.php');
    exit();
 }
 else
 {
    $_SESSION['count']=$_SESSION['count']+1;
    header('Location: setB1.html');
    exit();
 }
?>