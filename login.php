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
                        <input type="text" id="email" name="email" placeholder="Email Address">
                    </div>
                </div>
                <div class="field password">
                    <div class="input-area">
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="pass-txt"><a href="reset-link.php">Forgot password?</a></div>
                <br />
                    <button class="register-btn" name ="login"> Login </button>
                    <?php
                        if(ISSET($_SESSION["error"])){
                            $error = $_SESSION["error"];
                            echo "<span>$error</span>";
                        }
                    ?>
            </form>
            <div class="sign-txt">Not yet a member? <a href="register.php">Signup now</a></div>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>