<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    ?>
<div id="nav">
  <ul>
    <li><a href="/index.php" class="links-btn">Home</a></li>
    <li><a href="/about.php" class="links-btn">About</a></li>
    <li><a href="/testimonials.php" class="links-btn">Testimonials</a></li>
    <li><a href="/services.php" class="links-btn">Services</a></li>
    <?php
    if ($_SESSION['logged_in']){
      echo "<li><a href=\"" . "/logout.php\"" . "class=\"" ."links-btn\">" . "Log Out</a></li>";
    } else {
      echo "<li><a href=\"" . "/login.php\"" . "class=\"" ."links-btn\">" . "Log In/Create</a></li>";
    }
    ?>
  </ul>
</div>