<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>

<body>
    <?php include("header.php"); ?>
    <?php require_once("nav.php"); ?>
    <div class="container">
        <div class="wrapper">
            <header>Register</header>
            <form action="register_handler.php" method="POST">
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="First Name" name="firstname">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Last Name" name="lastname">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <br />
                    <button class="register-btn" name ="register"> Register </button>
            </form>
        </div>
    </div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>