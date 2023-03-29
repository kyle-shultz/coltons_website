<?php
require_once 'KLogger.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

class Dao{
  private $host = "us-cdbr-east-06.cleardb.net";
  private $db = "heroku_65df615f3f685b6";
  private $user = "b12a0f4c90accc";
  private $pass = "86694570";
  private $log;
public function __construct(){
    $this ->log = new KLogger("log.txt", KLogger::INFO);
}

public function getConnection () {
    return new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
}

public function addUser($firstname, $lastname, $email, $password){
    
      $conn=$this->getConnection();
      $saveQuery = "INSERT INTO user (First_name, Last_name, email, password) VALUES (:First_name, :Last_name, :email, :password)";
      $q=$conn ->prepare($saveQuery);
      $q->bindParam(":First_name", $firstname);
      $q->bindParam(":Last_name", $lastname);
      $q->bindParam(":email", $email);
      $q->bindParam(":password", $password);
      $q->execute();
      header("location:login.php");
      exit;

  }

public function getUser($email, $password){

    $conn=$this->getConnection();
		$q=$conn->prepare("SELECT email FROM user WHERE email = :email AND password = :password");
		$q->bindParam(":email", $email);
		$q->bindParam(":password", $password);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
}

public function get_email(){
    $conn=$this->getConnection();
    $getQuery = "SELECT email FROM user WHERE id=1";
    return $conn->query($getQuery)->fetch(PDO::FETCH_ASSOC);
}

public function getName($email){
    $conn=$this->getConnection();
    $q = $conn->prepare("SELECT First_name FROM user WHERE email= :email");
    $q->bindParam(":email", $email);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $q->execute();
    $result = $q->fetchAll();
    foreach ($result as $row) {
        $name = $row['First_name'];
    }
    return $name;
}

public function getWeight($email){
    $conn=$this->getConnection();
    $q = $conn->prepare("SELECT Weight FROM user WHERE email= :email");
    $q->bindParam(":email", $email);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $q->execute();
    $result = $q->fetchAll();
    foreach ($result as $row) {
        $weight = $row['Weight'];
        if ($weight === null){
            $weight = "[Weight]";
        }
    }
    return $weight;
}

public function getGoalWeight($email){
    $conn=$this->getConnection();
    $q = $conn->prepare("SELECT Goal_weight FROM user WHERE email= :email");
    $q->bindParam(":email", $email);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $q->execute();
    $result = $q->fetchAll();
    foreach ($result as $row) {
        $goal_weight = $row['Goal_weight'];
        if ($goal_weight === null){
            $goal_weight = "[Goal Weight]";
        }
    }
    return $goal_weight;
}

public function getAppointmentDate($email){
    $conn=$this->getConnection();
    $q = $conn->prepare("SELECT Appointment_date FROM user WHERE email= :email");
    $q->bindParam(":email", $email);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $q->execute();
    $result = $q->fetchAll();

    foreach ($result as $row) {
        $appt_date = $row['Appointment_date'];
        if ($appt_date === null){
            $appt_date = "[Appointment Date]";
        }
    }
    return $appt_date;
}

public function updateUser ($email, $weight, $goal_weight, $appt_date) {
    $conn = $this->getConnection();
    $saveQuery =
        "UPDATE user
        SET weight = :weight, Goal_weight = :goal_weight, Appointment_date = :appt_date
        WHERE email = :email;";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":email", $email);
    $q->bindParam(":weight", $weight);
    $q->bindParam(":goal_weight", $goal_weight);
    $q->bindParam(":appt_date", $appt_date);
    $q->execute();
  }

public function getUsers () {
    $conn = $this->getConnection();
    return $conn->query("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
  }
}