<?php
session_start();

require_once 'KLogger.php';
$logger = new KLogger ("log.txt" , KLogger::WARN);

$email = $_POST['email'];
$password = $_POST['password'];
$logger->LogDebug("Email [{$email}] attempting to log in");

// check the database
if ($email == 'conradkennington@gmail.com' && $password == 'abc123') {
  $_SESSION['auth'] = true;
  header("Location: profile.php");
  exit();
} else {
  $logger->LogWarn("Email [{$email}] invalid email or password");
  $_SESSION['message'] = 'Invalid Username or password';
  header("Location: login.php");
  exit();
}