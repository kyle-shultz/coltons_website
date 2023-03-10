<?php
require_once 'KLogger.php';

class Dao{
  private $host = "localhost:3377";
  private $db = "colton_website";
  private $user = "msandbox";
  private $pass = "boise2020";
  private $log;
public function __construct(){
    $this ->log = new KLogger("log.txt", KLogger::INFO);
}

public function getConnection () {
    return new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
}

public function addUser($email, $password){
      $conn=$this->getConnection();
      $saveQuery =
				"INSERT INTO user (email, password) VALUES (:username, :password)";
      $q=$conn ->prepare($saveQuery);
      $q->bindParam(":username", $username);
      $q->bindParam(":password", $hashPass);
      $q->execute();
  }

public function get_email(){
    $conn=$this->getConnection();
    $getQuery = "SELECT email FROM user WHERE id=1";
    return $conn->query($getQuery)->fetch(PDO::FETCH_ASSOC);
}
}