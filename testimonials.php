<?php $thisPage = "Testimonials"; ?>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo">
  <title>Testimonials</title>
</head>

<body>
  <?php include("header.php"); ?>
  <?php require_once("nav.php"); ?>
  <div id="Testimonial-container">
    <div id="main-left">
      <div id="top">
        <div id="Testimonial-1" class="flex-item">
          <img id="quote" src="images/bg-pattern-quotation.svg" alt="">
          <div class="header">
            <div class="header-text">
              <p>Daniel Clifford</p>
            </div>
          </div>
          <h4>Colton changed my life. I am healthier than ever!</h4>
          <p id="profile-text">“ When I first reached out to Colton for help I was ready to lose weight but was completely lost on how to start. After only 6 months with him 
            I have lost more weight than I could ever imagine. Colton changed my life. I am healthier than ever! ”</p>

        </div>
        <div id="Testimonial-2" class="flex-item">
          <div class="header">
            <div class="header-text">
              <p>Jonathan Walters</p>
            </div>
          </div>
          <h4>I have never felt better since I hired Colton and his team!</h4>
          <p id="profile-text">“ When I made the call to Colton I had just gotten through recovering from a surgey that put me out for months. 
            I had never felt worse. Now I feel great! I have never felt better since I hired Colton and his team! ”</p>
        </div>
      </div>
      <div id="bottom">
        <div id="Testimonial-3" class="flex-item">
          <div class="header">
            <div class="header-text">
              <p>Jeanette Harmon</p>
            </div>
          </div>
          <h4>An overall wonderful and rewarding experience</h4>
          <p id="profile-text">“ I have always been skeptical of nutrition and fitness "experts". Let me say that Colton stands out from the rest. He is professional, friendly, and 
            extremely knowledgeable. Colton and his team have provided an overall wonderful and rewarding experience. ”</p>
        </div>
      </div>
</body>
<?php include("footer.php"); ?>

</html>