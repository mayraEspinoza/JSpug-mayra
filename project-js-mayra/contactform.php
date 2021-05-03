<?php include('includes/contact-parse_new.php');?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Get Involved</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/reset.css" rel="stylesheet" type="text/css" />
  <link href="css/form.css" rel="stylesheet" type="text/css" />
  <script src="scripts/jquery-3.3.1.min.js"></script>
  <script src="scripts/jquery.validate_t.js"></script>
  <script src="scripts/validTests.js"></script>
  <!-- <script>
    $(document).ready(function(){
      $('#signup').validate(); })//closes doc ready
  </script> -->
</head>
<body>
  <div class="container">
  <div class="navbox">
  <nav>
    <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="">MORE INFO</a></li>
    </ul>
  </nav>
  <!-- the website logo with clickable home link is below -->
  <a href="index.html"><img src="images/grayscale2.jpg" alt=#  /></a>
</div>
<div>
  <figure>
    <img src="images/volunteers_img.jpg" alt="#" />
    <figcaption>
      <h1>VOLUNTEERS</h1>
      <p>If you would like to help make this event a reality and be part of an important cultural and artistic experience, Contact us to join in helping to make this an exciting, fun event! Without the help of volunteers, this event could not happen. There are a variety of activities happening over the two-day period, so there is sure to be a job to suit everyone!If you would like to volunteer for this event, please fill out our contact form.</p>
    </figcaption>
  </figure>
  <figure>
    <img src="images/CatrinaStatue.jpg" alt="#" />
    <figcaption>
      <h1>VENDORS</h1>
      <p>The Day of the Dead Celebration San Diego in Old Town is one of the best in the County. There are a limited number of spaces available for this two day event for Artists, Musicians and Face Painters. Ther are no food vendor as Old Town has over 25 of the best restaurants in San Diego all within walking distance. If you are interested in being a part of this growing tradition in San Diego please fill out our contact form as soon as possible.</p>
    </figcaption>
  </figure>
  <figure>
    <img src="images/sponsor.jpg" alt="#" />
    <figcaption>
      <h1>SPONSORS</h1>
      <p>This is the premier event in the San Diego region for San Diego County and Tijuana, Mexico. This event in it's sixth year will see over 75,000 visitors to Old Town in two days. A family-oriented audience but also very popular and in vogue with the young and even middle aged. Close to 60,000 visitors participated last year and we anticipate and are preparing for, even greater attendance. If you have any questions, require more information or would like a formal presentation, please fill out our contact form. We would be proud to partner with your business in producing this fantastic event.</p>
    </figcaption>
  </figure>
</div>
<iframe width="100%" height="430px" src="https://www.youtube.com/embed/_sSawpU81cI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <article>
      <section>
        <h2>Contact Us</h2>
        <!-- <p>We are awesome</p> -->
        <form action="contactform.php" method="post" name="signup" id="signup" class="cf">
          <fieldset>
            <legend>Please Pick The Field You Would Like More Information:</legend>
    
            <div class="checkbox">Categories</div>
            <input name="hobby" type="checkbox" id="volunteer" value="volunteer" class="required" title="choose an category">
            <label for="sleeping">Volunteer</label>
            
            <input name="hobby" type="checkbox" id="sponsor" value="sponsor">
            <label for="coding">Sponsor</label>
            
            <input name="hobby" type="checkbox" id="vendor" value="vendor">
            <label for="eating">Vendor</label>
          </fieldset>

          <fieldset class="info">
            <legend>Contact Info</legend>
        
            <label for="name" class="label">Name</label>
            <input name="name" type="text" id="name">

            <label for="email" class="label">E-mail Address</label>
            <input name="email" id="email" type="email" pattern="([\w\-\.]+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|(([\w\-]+\.)+)([a-zA-Z]{2,8}))" placeholder="yourname@domain.com">

            <label for="phone" class="label">Phone</label>
            <input name=phone type="tel" id="phone" placeholder="please use this format xxx-xxx-xxxx">

            <label for="message" class="label">Your Message</label>
            <textarea id="message" name="message" spellcheck cols="45" rows="6"></textarea>

          </fieldset>
          <div>
            <input type="submit" name="submit" value="submit" id="submit" >
            <button type="reset" name="button" id="button">Reset</button>
          </div>
          <!-- belowwwthis field is mandatory for your form to work belowwwww -->
          <input type="hidden" name="did_send" value="1" >
        </form>
        <!-- set up the success message -->
        <?php 
        if($_REQUEST['DID_SEND']==1){
          echo '<div class="'.$status.'">';
            echo $display_msg;
            echo '</div>';
        }
        ?>
      </section>
    </article>
  </main>
  <footer>
    <!-- this is the top div -->
        <div> 
             <section>
                <a href="index.html"> <img src="images/logo.png" alt=#  /></a>
                 <h2>DAY OF THE DEAD<br />2021</h2>
             </section>
             <section>
                 <p>Event Hours :<br />Monday: 10am - 10pm<br />Tuesday: 10am - 8pm<br /> Wednesday: 10am - 8pm<br />Thursday: 10am - 8pm<br /></p>
                     <p>Event Address:<br />Old Town San Diego<br />2415 San Diego Ave<br />San Diego, CA 92110<br /></p>
             </section>
             <section>
             <div class="social">
                <h3>Follow Us:</h3>
                 <a href="https://twitter.com" target="_blank"> <img src="images/twitter_icon.png" alt="twitter logo"  /></a>
                 <a href="https://instagram.com" target="_blank"> <img src="images/ig_icon.png" alt="instagram logo"  /></a>
                 <a href="https://facebook.com" target="_blank"> <img src="images/fb_icon.png" alt="facebook logo"  /></a>
             </div>
             <p>If you have trouble finding us please call: <a href="tel:+6196564721">(619) 656-4721</a> *Remember it will be busy so you are likely to get a<br /> recording with detailed directions.*</p>
         </section>
    <!-- the top div ends here -->
        </div> 
        <small>&copy; Day Of The Dead Old Town San Diego</small>
     </footer>
     <!-- the div container ends here -->
    </div>
     </body>
     </html>
