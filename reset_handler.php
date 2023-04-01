<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require_once 'KLogger.php';
require_once 'Dao.php';

$logger = new KLogger ("log.txt" , KLogger::WARN);
$isError = false;
$_SESSION['reset_inputs'] = $_POST;
$email = $_POST['reset_email'];
$new_pass = $_POST['new_password'];
$confirm_pass = $_POST['confirm_password'];
// Validate password strength
$uppercase = preg_match('@[A-Z]@', $new_pass);
$lowercase = preg_match('@[a-z]@', $new_pass);
$number    = preg_match('@[0-9]@', $new_pass);
$specialChars = preg_match('@[^\w]@', $new_pass);

if(isset($_POST['reset']))
		{
    
        $dao = new Dao();

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) and !empty($email)) {
            $_SESSION['reset_email_message'] = "Invalid Email format";
            header("Location: reset.php");
            exit();
        }

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($new_pass) < 8 and !empty($new_pass)) {
            $_SESSION['reset_password_message'] = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
            header("Location: reset.php");
            exit();
        }

		if($new_pass==$confirm_pass){
			$dao->resetPassword($email, $new_pass);
            $_SESSION['reset_success'] = "Password Reset Sucessfully!";
            header('Location: login.php');
			exit;
		}else{
			$_SESSION['reset_password_message'] = "The passwords do not match. Please re enter them.";
			header('Location: reset.php');
			exit;
		}
}