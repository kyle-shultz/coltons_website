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
            <header>Login</header>
            <form action="login_handler.php" method="POST">
                <div class="field email">
                    <div class="input-area">
                        <input type="text" id="email" value="<?php echo isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '' ?>" name="login_email" placeholder="Email Address">
                    </div>
                </div>
                <?php
                    if(isset($_SESSION['email_message'])) {
                        echo "<div id='message'>" . $_SESSION['email_message'] . "</div>";
                        unset($_SESSION['email_message']);
                    }
                    ?>
                <div class="field password">
                    <div class="input-area">
                        <input type="password" id="password" value="<?php echo isset($_SESSION['password']['email']) ? $_SESSION['inputs']['password'] : '' ?>" name="password" placeholder="Password">
                    </div>
                </div>
                <?php
                    if(isset($_SESSION['password_message'])) {
                        echo "<div id='message'>" . $_SESSION['password_message'] . "</div> </br>";
                        unset($_SESSION['password_message']);
                    }
                    ?>
                <div class="pass-txt"><a href="reset.php">Forgot password?</a></div>
                <br />
                    <button class="register-btn" name ="login"> Login </button>
            </form>
            <div class="sign-txt">Not yet a member? <a href="register.php">Signup now</a></div>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>