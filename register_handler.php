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

if (empty($email)){
    $_SESSION['message'] = "Email field cannot be empty";
    header("Location: register.php");
    exit();
} else if (empty($password)){
    $_SESSION['message'] = "Password field cannot be empty";
    header("Location: register.php");
    exit();
} else if (empty($firstname)){
    $_SESSION['message'] = "First name field cannot be empty";
    header("Location: register.php");
    exit();
} else if (empty($lastname)){
    $_SESSION['message'] = "Last name field cannot be empty";
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