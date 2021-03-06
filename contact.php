  <link href="css/contact.css" rel="stylesheet">

<section class="contact" id="contact">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <h2>Contact Us<i class="fa fa-paper-plane-o"></i></h2>
               </div>
           </div>
           <div id="map-canvas"></div>
           <div class="row">
               <form method="post" action="contact.php" name="contactform" id="contactform">
                   <div class="col-md-6">
                       <fieldset>
                           <input name="name" type="text" id="name" size="30" placeholder="Name">
                           <br>
                           <input name="email" type="text" id="email" size="30" placeholder="Email">
                           <br>
                           <input name="phone" type="text" id="phone" size="30" placeholder="Phone">
                           <br>
                           
                       </fieldset>
                   </div>
                   <div class="col-md-6">
                       <fieldset>
                           <textarea name="comments" cols="40" rows="20" id="comments" placeholder="Message"></textarea>
                       </fieldset>
                   </div>
                   <div class="col-md-12">
                       <fieldset>
                           <button type="submit" class="btn btn-lg" id="submit" value="Submit">Send Message</button>
                       </fieldset>
                   </div>
               </form>
           </div>
       </div>
   </section>
   <!--Google Maps API-->
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnycWatbGyK6ldFqErjFtko1yeMclNUOA&amp;sensor=true"></script>
<script src="js/contact.js"></script>
