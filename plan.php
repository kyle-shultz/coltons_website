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
        <li> [amount] Protein </li>
        <li> [amount] Fats </li>
        <li> [amount] Carbs </li>
    </div>
    <div class="profile-box"> 
        <h3>Recommended Dishes</h3>
        <li> [meal] Breakfast </li>
        <li> [meal] Lunch </li>
        <li> [meal] Dinner</li>
    </div>
</div>
<div class="profile-redirect"> 
    <a href="profile.php"> Go back to your profile. </a>
</div>
</body>
    <?php include("footer.php"); ?>
</html>