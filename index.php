<?php
/**
* This is a quick little website for my wedding invitation. Mostly just to present information and collect RSVP data
**/
include ('inc/header.php');
 ?>
<div id="content-wrap">
 <section id="welcome">
   <img src="images/jb_ag_logo.png" alt="John Bent and Alison Green Wedding logo" class="logo"/>
   <h1 class="welcome-header eloquent-jf-pro">Alison Green <span>&amp;</span> John Bent are getting married!</h1>
   <div class="down-section gothic-open">
     Details
     <i class="fas fa-arrow-down" aria-hidden="true"></i>
 </section>

 <section id="details">
   <div class="inner-wrap">
     <div class="section-content">
       <div class="image">
         <img src="images/Roger_Williams_statue.png" alt="Statue of Roger Williams in Prospect Terrace Park, Providence RI" />
      </div>
      <div class="text-content">
        <span class="details-header gothic-open">
          Ceremony
        </span>
        <div class="details-text">

        </div>
        <span class="details-header gothic-open">
          Reception
        </span>
        <div class="details-text">

        </div>
      </div>
     </div>
   </div>
 </section>

 <section id="rsvp"></section>

</div>
<?php
include ('inc/footer.php');
?>
