<?php $thisPage = "Login"; ?>
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
            <!-- action="register_handler.php" method="POST" -->
            <form  id ="register">
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
                        <input type="text" value="<?php echo isset($_SESSION['inputs']['register_email']) ? $_SESSION['inputs']['register_email'] : '' ?>" placeholder="Email" name="register_email">
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
                    <button class="register-btn" id = "register_btn" name ="register"> Register </button>
            </form>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>      
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/register.js"></script>
</body>
<?php include("footer.php"); ?>

</html>