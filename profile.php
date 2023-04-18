<?php $thisPage = "Profile"; 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo">
    <title>Profile Page</title>
</head>

<body>
    <?php include("header.php"); ?>
    <?php require_once("nav.php"); ?>
        <h2 id="profile-h2">Welcome Back <?php echo $_SESSION['name'] ?>!</h2>
    <div class="container">
        <div class="profile-box">
            <h3 id="about-header-3"> Appointment Date </h3>
            </br>
            </br>
            <p id="profile-text">  <?php
            if ($_SESSION['date'] === null){
                echo "Please call Colton Strobl at 208-876-5432 to set up your free consulting appointment!";
            } else {
                echo "Your next appointment is on: " . $_SESSION['date'];
            }
            ?></p>
        </div>
        <div class="profile-box">
            <h3 id="about-header-3"> Weight Tracker </h3>
            </br>
            </br>
            <p id="profile-text">Your weight:  <?php echo $_SESSION['weight'] ?></p>
            <p id="profile-text">Your goal weight:  <?php echo $_SESSION['goal_weight'] ?></p>
        </div>
        <a href="plan.php" id="profile-btn"> Your Nutrition Plan </a>
    </div>
</br>
</body>
<?php include("footer.php"); ?>

</html>