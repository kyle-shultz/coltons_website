<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require_once 'Dao.php';
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
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

if (empty($firstname)){
    $_SESSION['firstname_message'] = "First name field cannot be empty";
    $isError = true;
} 

if (empty($lastname)){
    $_SESSION['lastname_message'] = "Last name field cannot be empty";
    $isError = true;
}

if($isError){
    $isError = false;
    header("Location: register.php");
    exit();
}

    if (ISSET($_POST['register'])){
        try{
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $Dao = new Dao();
            $Dao->addUser($firstname, $lastname, $email, $password);
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }