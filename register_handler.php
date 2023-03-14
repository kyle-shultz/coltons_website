<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require_once 'Dao.php';

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