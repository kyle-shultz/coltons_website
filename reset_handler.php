<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require_once 'KLogger.php';
require_once 'Dao.php';

$logger = new KLogger ("log.txt" , KLogger::WARN);
$email = $_POST["login_email"];
$SESSION['login_email'] = $_POST['login_email'];
$password = $_POST["password"];
$isError = false;
$_SESSION['inputs'] = $_POST;

if(isset($_POST['reset']))
		{
        $email = $_POST['reset_email'];
		$new_pass = $_POST['new_password'];
		$confirm_pass = $_POST['confirm_password'];

		$data_pwd=$chg_pwd1['password'];
        $dao = new Dao();

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($new_pass) < 8 and !empty($password)) {
            $_SESSION['password_message'] = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
            header("Location: reset.php");
            exit();
        }

		if($new_pass==$confirm_pass){
			$dao->resetPassword($email, $new_pass);
            header('Location: login.php');
			exit;
		}else{
			$_SESSION['password_message'] = "The passwords do not match. Please re enter them.";
			$_SESSION['logged_in'] = false;
			header('Location: reset.php');
			exit;
		}
}