<?php
/**
* This is a quick little website for my wedding invitation. Mostly just to present information and collect RSVP data
**/
include ('inc/header.php');
 ?>
<div id="content-wrap">
 <section id="welcome">
   <img src="images/jb_ag_logo.png" alt="John Bent and Alison Green Wedding logo" class="logo"/>
   <h1 class="welcome-header eloquent">Alison Green <span>d</span> John Bent are getting married!</h1>
   <p class="coquette">Sunday, August 31st, 2019</p>
   <div class="down-section gothic">
     Details
     <i class="fas fa-arrow-down" aria-hidden="true"></i>
 </section>

 <section id="details">
       <div class="image">
         <img src="images/Roger_Williams_statue.png" alt="Statue of Roger Williams in Prospect Terrace Park, Providence RI" />
      </div>
      <div class="join_us">
        <?php include('inc/join_us.svg'); ?>
      </div>
      <div class="text-content">
        <h2 class="gothic">Details</h2>
        <div class="details-text">
          <div class="details-header">
            <span class="gothic">Ceremony</span> <span class="coquette"> - 4:00pm</span>
          </div>
          <div class="ceremony">
              Prospect Park Terrace<br>
              Providence, RI
            </div>
          <div class="details-header">
            <span class="gothic">Reception</span> <span class="coquette"> - 5:00 pm</span>
          </span>
        </div>
        <div class="reception">
          RiffRaff - Bookstore / Bar
        <span class="small-text">A light dinner and drinks will be served</span>
      </div>
      </div>
 </section>

 <section id="rsvp"></section>

</div>
<?php
include ('inc/footer.php');
?>
