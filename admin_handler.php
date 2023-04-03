<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require_once 'Dao.php';
    $_SESSION['admin_inputs'] = $_POST;

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
            $Dao = new Dao();

            if (!filter_var($client_email, FILTER_VALIDATE_EMAIL) and !empty($client_email)) {
                $_SESSION['client_email_message'] = "Invalid Email format";
                header("Location: admin.php");
                exit();
            }

            if (!filter_var($macro_email, FILTER_VALIDATE_EMAIL) and !empty($macro_email)) {
                $_SESSION['macro_email_message'] = "Invalid Email format";
                header("Location: admin.php");
                exit();
            }

            if (!filter_var($weight, FILTER_VALIDATE_INT) and !empty($weight)){
                $_SESSION['weight_message'] = "Please put in weight as a whole number (lbs)";
                header("Location: admin.php");
                exit();
            }

            if (!filter_var($goal_weight, FILTER_VALIDATE_INT) and !empty($goal_weight)){
                $_SESSION['goal_weight_message'] = "Please put goal weight as a whole number (lbs)";
                header("Location: admin.php");
                exit();
            }
            
            if (!filter_var($fats, FILTER_VALIDATE_INT) and !empty($fats)){
                $_SESSION['fats_message'] = "Fats must be a whole number (in grams/day)";
                header("Location: admin.php");
                exit();
            }

            if (!filter_var($carbs, FILTER_VALIDATE_INT) and !empty($carbs)){
                $_SESSION['carbs_message'] = "Carbs must be a whole number (in grams/day)";
                header("Location: admin.php");
                exit();
            }

            if (!filter_var($protein, FILTER_VALIDATE_INT) and !empty($protein)){
                $_SESSION['protein_message'] = "Protein must be a whole number (in grams/day)";
                header("Location: admin.php");
                exit();
            }

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