<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require_once 'Dao.php';

    if (ISSET($_POST['admin'])){
        try{
            $client_email = $_POST['client_email'];
            $macro_email = $_POST['macro_email'];
            $fats = $_POST['fats'];
            $carbs = $_POST['carbs'];
            $protein = $_POST['protein'];
            $weight = $_POST['weight'];
            $goal_weight = $_POST['goal_weight'];
            $appt_date = $_POST['appt_date'];
            
            çç
            
            if (!empty($client_email)){
                $Dao->updateUser ($client_email, $weight, $goal_weight, $appt_date);
            }

            if (!empty($macro_email)){
                $Dao->updateMacros($macro_email, $carbs, $protein,$fats);
            }
            header('Location: admin.php');
			exit;
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }