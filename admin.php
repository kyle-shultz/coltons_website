<?php $thisPage = "Admin"; ?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Admin Page</title>
</head>

<body>
    <?php include("header.php"); ?>
    <?php require_once("nav.php"); ?>
        <h2 id="profile-h2">Hello Colton!</h2>
    <div class="container">
        <div class="wrapper">
            <h2>Enter Client Info</h2>
</br>
            <form action="admin_handler.php" method="POST">
            <div class="field email">
                    <div class="input-area">
                        <input type="text" value="<?php echo isset($_SESSION['admin_inputs']['client_email']) ? $_SESSION['admin_inputs']['client_email'] : '' ?>" placeholder="Client Email" name="client_email">
                    </div>
                </div>
                <?php
                if(isset($_SESSION['client_email_message'])) {
                        echo "<div id='message'>" . $_SESSION['client_email_message'] . "</div>";
                        unset($_SESSION['client_email_message']);
                    }
                    ?>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" value="<?php echo isset($_SESSION['admin_inputs']['weight']) ? $_SESSION['admin_inputs']['weight'] : '' ?>" placeholder="Client's Weight" name="weight">
                    </div>
                </div>
                <?php
                if(isset($_SESSION['weight_message'])) {
                        echo "<div id='message'>" . $_SESSION['weight_message'] . "</div>";
                        unset($_SESSION['weight_message']);
                    }
                    ?>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" value="<?php echo isset($_SESSION['admin_inputs']['goal_weight']) ? $_SESSION['admin_inputs']['goal_weight'] : '' ?>" placeholder="Client's Goal Weight" name="goal_weight">
                    </div>
                </div>
                <?php
                if(isset($_SESSION['goal_weight_message'])) {
                        echo "<div id='message'>" . $_SESSION['goal_weight_message'] . "</div>";
                        unset($_SESSION['goal_weight_message']);
                    }
                    ?>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" value="<?php echo isset($_SESSION['admin_inputs']['appt_date']) ? $_SESSION['admin_inputs']['appt_date'] : '' ?>" placeholder="Next Appointment Date" name="appt_date">
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
                        <input type="text" value="<?php echo isset($_SESSION['admin_inputs']['macro_email']) ? $_SESSION['admin_inputs']['macro_email'] : '' ?>" placeholder="Client Email" name="macro_email">
                    </div>
                </div>
                <?php
                if(isset($_SESSION['macro_email_message'])) {
                        echo "<div id='message'>" . $_SESSION['macro_email_message'] . "</div>";
                        unset($_SESSION['macro_email_message']);
                    }
                    ?>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" value="<?php echo isset($_SESSION['admin_inputs']['carbs']) ? $_SESSION['admin_inputs']['carbs'] : '' ?>" placeholder="Client's Carbs" name="carbs">
                    </div>
                </div>
                <?php
                if(isset($_SESSION['carbs_message'])) {
                        echo "<div id='message'>" . $_SESSION['carbs_message'] . "</div>";
                        unset($_SESSION['carbs_message']);
                    }
                    ?>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" value="<?php echo isset($_SESSION['admin_inputs']['protein']) ? $_SESSION['admin_inputs']['protein'] : '' ?>" placeholder="Client's Protein" name="protein">
                    </div>
                </div>
                <?php
                if(isset($_SESSION['protein_message'])) {
                        echo "<div id='message'>" . $_SESSION['protein_message'] . "</div>";
                        unset($_SESSION['protein_message']);
                    }
                    ?>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" value="<?php echo isset($_SESSION['admin_inputs']['fats']) ? $_SESSION['admin_inputs']['fats'] : '' ?>" placeholder="Client's Fats" name="fats">
                    </div>
                </div>
                <?php
                if(isset($_SESSION['fats_message'])) {
                        echo "<div id='message'>" . $_SESSION['fats_message'] . "</div>";
                        unset($_SESSION['fats_message']);
                    }
                    ?>
                    <button class="register-btn" name ="admin"> Submit </button>
            </form>
</div>
<a href="user_mgmt.php"> User Info List </a>          
</div>
    </div>
</body>
<?php include("footer.php"); ?>

</html>