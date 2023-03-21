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
        <?php
            if(isset($_SESSION['message'])) {
                echo "<div id='message'>" . $_SESSION['message'] . "</div>";
                unset($_SESSION['message']);
            }
            ?>
            <header>Register</header>
            <form action="register_handler.php" method="POST">
                <div class="field email">
                    <div class="input-area">
                        <input type="text" value="<?php echo isset($_SESSION['inputs']['firstname']) ? $_SESSION['inputs']['firstname'] : '' ?>" placeholder="First Name" name="firstname">
                    </div>
                </div>
                <?php
                if(isset($_SESSION['firstname_message'])) {
                        echo "<div id='message'>" . $_SESSION['firstname_message'] . "</div>";
                        unset($_SESSION['firstname_message']);
                    }
                    ?>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" value="<?php echo isset($_SESSION['inputs']['lastname']) ? $_SESSION['inputs']['lastname'] : '' ?>" placeholder="Last Name" name="lastname">
                    </div>
                </div>
                <?php
                if(isset($_SESSION['lastname_message'])) {
                        echo "<div id='message'>" . $_SESSION['lastname_message'] . "</div>";
                        unset($_SESSION['lastname_message']);
                    }
                    ?>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" value="<?php echo isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '' ?>" placeholder="Email" name="register_email">
                    </div>
                </div>
                <?php
                if(isset($_SESSION['email_message'])) {
                        echo "<div id='message'>" . $_SESSION['email_message'] . "</div>";
                        unset($_SESSION['email_message']);
                    }
                    ?>
                <div class="field email">
                    <div class="input-area">
                        <input type="password" value="<?php echo isset($_SESSION['inputs']['password']) ? $_SESSION['inputs']['password'] : '' ?>" placeholder="Password" name="password">
                    </div>
                </div>
                <?php
                    if(isset($_SESSION['password_message'])) {
                        echo "<div id='message'>" . $_SESSION['password_message'] . "</div> </br>";
                        unset($_SESSION['password_message']);
                    }
                    ?>
                    <br />
                    <button class="register-btn" name ="register"> Register </button>
            </form>
        </div>
    </div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>