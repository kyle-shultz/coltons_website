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
}