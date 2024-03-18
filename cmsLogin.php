<?php
require('db_Portfolio.php');
session_start();
$password = $_POST['password'];
$username = $_POST['username'];
$_SESSION['password'] = $password;
$query = "SELECT * FROM account WHERE password='$password' and username='$username'";
$result = mysqli_query($dbPortfolio, $query);
$count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION['password'] = $password;
        $_SESSION['username'] = $username;
        $_SESSION["login_time_stamp"] = time(); 
        header('location: contentManagementSystem.php');
    }
    else {
        header('location: login.php');
    }
?>