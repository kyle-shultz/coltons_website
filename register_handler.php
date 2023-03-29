<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require_once 'Dao.php';
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["register_email"];
    $password = $_POST["password"];
    $isError = false;
    $_SESSION['inputs'] = $_POST;
    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);


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

if(!preg_match("/^([a-zA-Z' ]+)$/",$firstname) and !empty($firstname)){
    $_SESSION['firstname_message'] = "Invalid first name given";
    $isError = true;
}

if(!preg_match("/^([a-zA-Z' ]+)$/",$lastname) and !empty($lastname)){
    $_SESSION['lastname_message'] = "Invalid last name given";
    $isError = true;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) and !empty($email)) {
    $_SESSION['email_message'] = "Invalid Email format";
    $isError = true;
}


if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 and !empty($password)) {
    $_SESSION['password_message'] = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
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
            $email = $_POST['register_email'];
            $password = $_POST['password'];
            
            $Dao = new Dao();
            $Dao->addUser($firstname, $lastname, $email, $password);
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }