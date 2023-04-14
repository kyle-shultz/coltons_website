<?php $thisPage = "Plan"; ?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Schedule</title>
</head>

<body>
    <?php include("header.php"); ?>
    <?php require_once("nav.php"); ?>
    <div class="profile-header">
        <h2 id="profile-h2">Your Nutrition Plan</h2>
    </div>
    <div class="container">
        <div class="profile-box">
            <h3>Your Macros</h3>
            <ul>
            <h4>Protein</h4>
            <li> <?php echo $_SESSION['protein'] . " grams per day"?> </li>
            <h4>Fats</h4>
            <li> <?php echo $_SESSION['fats'] . " grams per day"?> </li>
            <h4>Carbs</h4>
            <li> <?php echo $_SESSION['carbs'] . " grams per day"?> </li>
</ul>
        </div>
        <div class="profile-box">
            <h3>Recommended Dishes</h3>
            <li> [meal] Breakfast </li>
            <li> [meal] Lunch </li>
            <li> [meal] Dinner</li>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>