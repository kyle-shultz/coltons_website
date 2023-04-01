<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Admin Page</title>
</head>

<body>
    <?php include("header.php"); ?>
    <?php require_once("nav.php"); ?>
    <div class="profile-header">
        <h2 id="profile-h2">Hello Colton!</h2>
    </div>
    <div class="container">
        <div class="wrapper">
            <h2>Enter Client Info</h2>
</br>
            <form action="admin_handler.php" method="POST">
            <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Client Email" name="client_email">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Client's Weight" name="weight">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Client's Goal Weight" name="goal_weight">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Next Appointment Date" name="appt_date">
                    </div>
                </div>
                    <button class="register-btn" name ="admin"> Submit </button>
            </form>
</div>
            <div class="wrapper">
            <h2>Enter Client Macros</h2>
            </br>
            <form action="admin_handler.php" method="POST">
            <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Client Email" name="macro_email">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Client's Carbs" name="carbs">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Client's Protein" name="protein">
                    </div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Client's Fats" name="fats">
                    </div>
                </div>
                    <button class="register-btn" name ="admin"> Submit </button>
            </form>
</div>
<a href="user_mgmt.php"> Manage Users </a>          
</div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>