<?php

/*
Template Name: homepage
*/?>
<?php get_header();?>

  <div id="about">
    <p>My name is <em>Simon Bennett</em>,<br> I’m a web <strong>developer</strong>, creating functional <span>websites</span> and managing <em>servers</em>.
    <p class="small">
	    I am based between Swansea and Norwich (UK) and currently available for hire. 
    </p>
  </div>
  <div id="porfolio">
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active"> <a href="http://phnorwichmotorcycles.com" target="_blank" ><img src="<?php bloginfo('template_directory'); ?>/images/phnorwich.jpg" alt="P and H Norwich Motorcycles"></a>
          <div class="carousel-caption">
            <h4>P and H Motorcylces</h4>
            <p>Norwich based motorcycle company.</p>
          </div>
        </div>
        <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images/wordpress.jpg" alt="">
          <div class="carousel-caption">
            <h4>WordPress SOS</h4>
            <p>WordPress blog for wp fans</p>
          </div>
        </div>
        <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images/servers.jpg" alt="Server Managerment">
          <div class="carousel-caption">
            <h4>Server Management</h4> 
            <p>Server Management - Debian</p>
          </div>
        </div>
        <div class="item"><a href="https://github.com/wgas" target="_blank" > <img src="<?php bloginfo('template_directory'); ?>/images/github.jpg" alt="Git Hub, Socail Coding"></a>
          <div class="carousel-caption">
            <h4>GitHub</h4> 
            <p>Open source project work</p>
          </div>
        </div>
        <div class="item"> <img src="<?php bloginfo('template_directory'); ?>/images/xboxworkshop.jpg" alt="Xbox WorkShop">
          <div class="carousel-caption">
            <h4>Xbox Workshop</h4>
            <p>Online management system</p>
          </div>
        </div>
        <div class="item"><a href="https://abannan.com/" target="_blank" > <img src="<?php bloginfo('template_directory'); ?>/images/abannan.jpg" alt="Abannan App Developers"></a>
          <div class="carousel-caption">
            <h4></h4>
            <p>Data Mining System - PHP/MySQL</p>
          </div>
        </div>
        <div class="item"><a href="http://wjbreachandsons.co.uk/" target="_blank" > <img src="<?php bloginfo('template_directory'); ?>/images/wjbreachandsons.jpg" alt="WJ Breach and Sons"></a>
          <div class="carousel-caption">
            <h4></h4>
            <p>WJ Breach and Sons - Coming Soon</p>
          </div>
        </div>
        <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images/googleadword.jpg" alt="Google Adword Campaigns">
          <div class="carousel-caption">
            <h4>Google Adword Campaigns</h4>
            <p>Advertise your Business Online</p>
          </div>
        </div>
      </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
     </div>
  </div>
  <div id="findme">
    <p>Follow me on Twitter <a href="https://twitter.com/MrSimonBennett" rel='me'>@MrSimonBennett</a></p>
     <p>Follow me on App.net <a href="https://alpha.app.net/mrsimonbennett" rel='me'>@MrSimonBennett</a></p>
    <p>Email me <script>mail2("hello","bennett",0,"")</script> </p>
  </div>

<?php get_footer()?>
