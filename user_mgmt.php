<?php $thisPage = "user_mgmt"; ?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>User Management</title>
</head>
<?php 
include("header.php");
include("nav.php");
require_once "Widgets.php";
require_once 'Dao.php';
    $dao = new Dao();
    $users = $dao->getUsers();
    echo Widgets::renderTable($users);
    ?>
    <div id="bot_cent">
</div> 
</html>
