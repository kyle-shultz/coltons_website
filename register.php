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
            <header>Register</header>
            <!-- action="register_handler.php" method="POST" -->
            <form  id = "register_form" action="register_handler.php" method="POST">
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
                        <input type="text"  placeholder="Email" name="register_email">
                    </div>
                </div>
                
                <div class="field email">
                    <div class="input-area">
                        <input type="password" placeholder="Password" name="password">
                    </div>
                </div>

                    <br />
                    <button type= "submit" class="register-btn" id = "register_btn" name ="register"> Register </button>
            </form>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>      
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="js/register.js"></script>
</body>
<?php include("footer.php"); ?>

</html>