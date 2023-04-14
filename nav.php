<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    ?>
<div id="nav">
  <ul>
    <li<?php if ($thisPage=="Home") 
    echo " id=\"currentpage\""; ?>><a href="/index.php" class="links-btn">Home</a></li>
    <li<?php if ($thisPage=="About") 
    echo " id=\"currentpage\""; ?>><a href="/about.php" class="links-btn">About</a></li>
    <li <?php if ($thisPage=="Testimonials") 
    echo " id=\"currentpage\""; ?>><a href="/testimonials.php" class="links-btn">Testimonials</a></li>
    <li <?php if ($thisPage=="Services") 
    echo " id=\"currentpage\""; ?>><a href="/services.php" class="links-btn">Services</a></li>
    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
      if (isset($_SESSION['admin']) && $_SESSION['admin'] == true){
        if ($thisPage == "Admin"){
          echo "<li id=\"currentpage\"><a href=\"" . "/admin.php\"" . "class=\"" ."links-btn\">" . "Back to Profile</a></li>";
          echo "<li><a href=\"" . "/logout.php\"" . "class=\"" ."links-btn\">" . "Log Out</a></li>";
        } else {
          echo "<li><a href=\"" . "/admin.php\"" . "class=\"" ."links-btn\">" . "Back to Profile</a></li>";
          echo "<li><a href=\"" . "/logout.php\"" . "class=\"" ."links-btn\">" . "Log Out</a></li>";
        }
      } else {
        if ($thisPage == "Profile"){
          echo "<li id=\"currentpage\"><a href=\"" . "/profile.php\"" . "class=\"" ."links-btn\">" . "Back to Profile</a></li>";
          echo "<li><a href=\"" . "/logout.php\"" . "class=\"" ."links-btn\">" . "Log Out</a></li>";
        } else {
          echo "<li><a href=\"" . "/profile.php\"" . "class=\"" ."links-btn\">" . "Back to Profile</a></li>";
          echo "<li><a href=\"" . "/logout.php\"" . "class=\"" ."links-btn\">" . "Log Out</a></li>";
        }
      }
    } else {
      echo "<li><a href=\"" . "/login.php\"" . "class=\"" ."links-btn\">" . "Log In/Create</a></li>";
    }
    ?>
  </ul>
</div>