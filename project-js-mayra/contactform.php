<?php include('includes/contact-parse_new.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Pug Essentials</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="css/reset.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="navbox">
    <a href="#main-nav" class="menu-link">Menu</a>
  <nav id="main-nav" role="navigation" class="cf">
    <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="contactform.php">MORE INFO</a></li>
    </ul>
  </nav>
  <!-- the website logo with clickable home link is below -->
  <a href="index.html"><img class ="logopug" src="images/logo_pug_03.png" alt=#  /></a>
</div>
<main>
  <h1>NEED INFORMATION?<span>CONTACT US!</span></h1>
  <img src="images/contact_us1.jpg" alt="#" />
</main>

        <!-- <p>We are awesome</p> -->
        <form action="contactform.php" method="post" name="signup" id="signup" class="cf">
            <fieldset class="info">
            <legend>Contact Info</legend>
        
            <label for="name" class="label">Name</label>
            <input name="name" type="text" id="name">

            <label for="email" class="label">E-mail Address</label>
            <input name="email" id="email" type="email" pattern="([\w\-\.]+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|(([\w\-]+\.)+)([a-zA-Z]{2,8}))" placeholder="yourname@domain.com">

            <label for="message" class="label">Your Message</label>
            <textarea id="message" name="message" spellcheck cols="45" rows="6"></textarea>

          </fieldset>
          <div>
            <input type="submit" name="submit" value="Submit" id="button" >
            <button type="reset" name="button" id="button">Reset</button>
          </div>
          <!-- this field is mandatory form to work belowwwww -->
          <input type="hidden" name="did_send" value="1" >
        </form>
        <!-- set up the success message -->
        <?php 
        if($_REQUEST['DID_SEND']==1){
          echo '<div class="'.$status.'">An email has been sent';
            echo $display_msg;
            echo '</div>';
        }
        ?>

<footer>
     <div class="social">
          <h3>Follow Us:</h3>
             <a href="https://twitter.com" target="_blank"> <img src="images/twitter_icon.png" alt="twitter logo"  /></a>
             <a href="https://instagram.com" target="_blank"> <img src="images/ig_icon.png" alt="instagram logo"  /></a>
             <a href="https://facebook.com" target="_blank"> <img src="images/fb_icon.png" alt="facebook logo"  /></a>
        </div>
        <!-- logo img goes here -->
        <div> 
      <p><span>Pug Life</span> is a small group of dog owners who give their recommendations and insight based off their own experiences being Pug owners.</p>
  <a href="index.html"><img class ="footpug" src="images/logo_pug_03.png" alt=#  /></a>
      </div>
        
</footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="scripts/jquery.validate_t.js"></script>
  <script src="scripts/validTests.js"></script>
  <script src="scripts/navtogg.js"></script>
<script type="text/javascript">
  
     
   </script>
   </div>
   </body>
   </html>
