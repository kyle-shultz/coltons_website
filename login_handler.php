<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

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

        $login=$dao->getUser($email, $password);
			if($login){
					$_SESSION['logged_in']=true;
                    $_SESSION['name'] = $dao->getName($email);
					header('Location: profile.php');
					exit;
		}else{
					$_SESSION['messages'][]="Username or Password is incorrect.";
					$_SESSION['logged_in']=false;
					header('Location: login.php');
					exit;
		}
        
    }
}