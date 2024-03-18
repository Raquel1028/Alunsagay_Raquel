<?php
require('db_Portfolio.php');
session_start();

session_unset();
session_destroy();
header("Location:index.php");
?>