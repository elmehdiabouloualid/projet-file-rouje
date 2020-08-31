<?php
session_start();
unset($_SESSION["UserName"]);
unset($_SESSION["PassWord"]);
header("Location:login.php");
?>