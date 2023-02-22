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
            <header>Reset Password</header>
            <form action="reset.php">
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="password">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="confirm password">
                    </div>
                </div>
                <input type="submit" value="Reset Password">
            </form>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>