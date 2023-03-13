<?php
session_start();

require_once 'KLogger.php';
require_once 'Dao.php';

$logger = new KLogger ("log.txt" , KLogger::WARN);

if(ISSET($_POST['login'])){
    if($_POST['email'] == "colton_strobl@gmail.com"){
        header("location:admin.php");
        exit;
    }
    if($_POST['email'] != "" || $_POST['password'] != ""){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $dao = new Dao();
        
        $dao->getUser($email, $password);
    }
}