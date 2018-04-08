<?php
session_start();
unset($_SESSION['uname']);
unset($_SESSION['psw']);
header("location:index.php");
?>