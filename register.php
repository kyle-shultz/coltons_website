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
            <header>Register</header>
            <form action="#">
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="First Name">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Email">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Password">
                    </div>
            </form>
        </div>
        <button class="register-btn"> Register </button>
    </div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>