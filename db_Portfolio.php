<?php
$servername = "localhost";
$database = "portfolio_db";
$username = "root";
$password = "";

$dbPortfolio = mysqli_connect($servername, $username, $password, $database);

$db_select = mysqli_select_db($dbPortfolio, $database) or die(mysqli_error());


if (!$dbPortfolio) {
    die("Connection failed: " . mysqli_connect_error());
}


?>