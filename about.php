<?php $thisPage = "About"; ?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>About</title>
</head>

<body>
    <?php include("header.php"); ?>
    <?php require_once("nav.php"); ?>
    <div class="container">
        <div class="profile-box">
            <h2 id="about-header-3">Colton the Nutritionist</h2>
            <img src="colton.jpg" alt="Colton" id="centered-image">
            <p id="profile-text">Some text that describes Colton the million year old nutritionist</p>
            <h2>Contact Information</h2>
            <p id="profile-text">colton@example.com</p>
            <p id="profile-text"><button class="contact-btn">Contact</button></p>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>