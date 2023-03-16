<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require_once 'KLogger.php';
require_once 'Dao.php';

$logger = new KLogger ("log.txt" , KLogger::WARN);
$email = $_POST["email"];
$password = $_POST["password"];
$isError = false;

if (empty($email)){
    $_SESSION['email_message'] = "Email field cannot be empty";
    $isError = true;
}

if (empty($password)){
    $_SESSION['password_message'] = "Password field cannot be empty";
    $isError = true;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) and !empty($email)) {
    $_SESSION['email_message'] = "Invalid Email format";
    $isError = true;
}

if($isError){
    $isError = false;
    header("Location: login.php");
    exit();
}


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
					$_SESSION['logged_in']= true;
                    $_SESSION['name'] = $dao->getName($email);
                    $_SESSION['weight'] = $dao->getWeight($email);
                    $_SESSION['goal_weight'] = $dao->getGoalWeight($email);
                    $_SESSION['date'] = $dao->getAppointmentDate($email);
					header('Location: profile.php');
					exit;
		}else{
					$_SESSION['messages'][]="Username or Password is incorrect.";
					$_SESSION['logged_in'] = false;
					header('Location: login.php');
					exit;
		}
        
    }
}