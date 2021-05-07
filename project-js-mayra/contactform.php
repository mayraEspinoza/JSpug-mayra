<?php
//var_dump($_POST);

$did_mail = false;

if( isset($_POST['did_submit']) && $_POST['did_submit'] == 1){
  
  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

$valid = true;
$errors = '';

if($name == ''){
  $valid = false;
  $errors .= 'Please fill out your name.<br>';
}


if( ! filter_var($email, FILTER_VALIDATE_EMAIL)){
  $valid = false;
  $errors .= 'Please enter a valid email address.<br>';

}
if($message == ''){
  $valid = false;
  $errors .= 'Please enter a message';
}
//echo "valid is: $valid";
if($valid){
//echo 'valid is true' . $did_mail;
  $to = 'mayraespinoza0715@platt.edu';
  $subject = "Info from contact form: pug  life \n";
  $body = "You have a message from $name: \n";
  $body .= "$message \n";
  $headers = "Reply-to: $email \r\n";
  $headers .= "From: $to";

  $did_mail = mail($to, $subject, $body, $headers);

   if($did_mail){

   $user_message = "Thank you, $name. We will contact you shortly.";

  }else{

$user_message = 'we were unable to send your message at this time. ';
// echo $user_message;
}

}else{
if($errors != ''){
$user_message .= $errors;
}
//echo 'valid is false';
}
   
      

} //end did submit

?>
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
  <h1 class="greeting">NEED INFORMATION?<span> CONTACT US!</span></h1>
  <main class="formbox">
  <img src="images/contact_us1.jpg" alt="#" />
<section>
        <p class="message">
    <?php 
    if(isset($user_message)){
        echo $user_message;
        }
        ?>
      </p>
        <!-- <p>We are awesome</p> -->
        <form action="contactform.php" method="post" id="sign-up" class="cf">
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
            <input type="submit" name="submit" value="Submit">
            <button type="reset" name="button" id="button">Reset</button>
          </div>
          <!-- this field is mandatory form to work belowwwww -->
          <input type="hidden" name="did_submit" value="1" >
        </form>
        </section>
        </main>
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
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
  <script src="scripts/navtogg.js"></script>
<script type="text/javascript">
      // $('#sign-up').validate();
    $('#sign-up').validate({
        rules:{
          name:'required', 
          email: {
            required: true,
            email:true
          },
          message: {
            required: true,
            minlegnth: 2
          }
        }, //end of rules

        messages: {
            name: 'Please enter your name',
            email: {
              required:'Please supply your email Address',
              email: 'This is not a valid email, please correct.'
            },
            message: 'Please tell us what you want to know'
            


        }//end of messages


    });
     
   </script>
   
   </body>
   </html>

