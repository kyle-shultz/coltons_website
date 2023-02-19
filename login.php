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
        <form action="profile.php">
            <div class="field email">
                <div class="input-area">
                    <input type="text" placeholder="Email Address">
                </div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Password">
                </div>
            </div>
            <div class="pass-txt"><a href="#">Forgot password?</a></div>
           <input type="submit" value="Login">
        </form>
        <div class="sign-txt">Not yet member? <a href="register.php">Signup now</a></div>
    </div>
</div>
    </body>
    <?php include("footer.php"); ?>
</html>