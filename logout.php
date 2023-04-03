<?php
session_start();
session_destroy();
session_start();
$_SESSION['logged_in'] = false;
$_SESSION['admin']= false;
header("Location: login.php");
exit();