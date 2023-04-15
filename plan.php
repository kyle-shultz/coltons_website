<?php $thisPage = "Plan"; ?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Schedule</title>
</head>

<body>
    <?php include("header.php"); ?>
    <?php require_once("nav.php"); ?>
        <h2 id="profile-h2">Your Nutrition Plan</h2>
    <div class="container">
        <div class="profile-box">
            <h3 id="profile-header-3">Your Macros</h3>
            </br>
            <h4 id="profile-header-4">Protein</h4>
            <p id="profile-text">  <?php echo $_SESSION['protein'] . " grams per day"?> </p>
            <h4 id="profile-header-4">Fats</h4>
            <p id="profile-text"> <?php echo $_SESSION['fats'] . " grams per day"?> </p>
            <h4 id="profile-header-4">Carbs</h4>
            <p id="profile-text"> <?php echo $_SESSION['carbs'] . " grams per day"?> </p>
</ul>
        </div>
        <div class="profile-box">
            <h3 id="profile-header-3">Recommended Dishes</h3>
            </br>
            <p id="profile-text"> [meal] Breakfast </p>
            <p id="profile-text"> [meal] Lunch </p>
            <p id="profile-text"> [meal] Dinner</p>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>