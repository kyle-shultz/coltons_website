<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Profile Page</title>
</head>

<body>
    <?php include("header.php"); ?>
    <?php require_once("nav.php"); ?>
    <div class="profile-header">
        <h2 id="profile-h2">Welcome Back <?php echo $_SESSION['name'] ?>!</h2>
    </div>
    <div class="container">
        <div class="profile-box">
            <p>Your next appointment is on  <?php echo $_SESSION['date'] ?></p>
            <a href="schedule.php"> Need to cancel or reschedule? </a>
        </div>
        <div class="profile-box">
            <p>Your weight:  <?php echo $_SESSION['weight'] ?></p>
            <p>Your goal weight:  <?php echo $_SESSION['goal_weight'] ?></p>
            <a href="plan.php"> Your Nutrition Plan </a>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>