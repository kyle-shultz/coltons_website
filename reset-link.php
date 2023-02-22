<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
</head>

<body>
    <?php include("header.php"); ?>
    <?php require_once("nav.php"); ?>
    <div class="container">
        <div class="wrapper">
            <header>Trouble Logging In?</header>
            <form action="reset.php">
                <p>Enter your email and we'll send you a link to get you back on track!</p>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Email Address">
                    </div>
                </div>
                <input type="submit" value="Send reset link">
            </form>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>