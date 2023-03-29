<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require_once 'Dao.php';

    if (ISSET($_POST['admin'])){
        try{
            $email = $_POST['email'];
            $weight = $_POST['weight'];
            $goal_weight = $_POST['goal_weight'];
            $appt_date = $_POST['appt_date'];
            
            $Dao = new Dao();
            $Dao->updateUser ($email, $weight, $goal_weight, $appt_date);
            header('Location: admin.php');
			exit;
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }