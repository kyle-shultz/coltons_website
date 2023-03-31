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
            <form action="reset_handler.php" method="POST">
                <div class="field email">
                <div class="input-area">
                        <input type="text" placeholder="email" name="reset_email" >
                    </div>
</div>
                    <div class="field email">
                    <div class="input-area">
                        <input type="password" placeholder="new password" name="new_password">
                    </div>
</div>
                <div class="field email">
                    <div class="input-area">
                        <input type="password" placeholder="confirm password" name="confirm_password">
                    </div>
                    <?php
                    if(isset($_SESSION['password_message'])) {
                        echo "<div id='message'>" . $_SESSION['password_message'] . "</div> </br>";
                        unset($_SESSION['password_message']);
                    }
                    ?>
                </div>
                <br />
                    <button class="register-btn" name ="reset"> Reset </button>
            </form>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>