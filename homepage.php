<?php

/*
Template Name: homepage
*/?>
<?php get_header();?>

  <div id="about">
    <p>I’m a web <strong>developer</strong>, creating functional <span>websites</span> and managing <em>servers</em>.
    <p> 
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
        <div class="item"><a href="https://github.com/wgas" target="_blank" > <img src="<?php bloginfo('template_directory'); ?>/images/github.jpg" alt="Git Hub, Socail Coding"></a>
          <div class="carousel-caption">
            <h4>GitHub</h4> 
            <p>Open source project work</p>
          </div>
        </div>
        <div class="item"> <img src="<?php bloginfo('template_directory'); ?>/images/xboxworkshop.jpg" alt="">
          <div class="carousel-caption">
            <h4>Xbox Workshop</h4>
            <p>Online managment system</p>
          </div>
        </div>
      </div>
     </div>
  </div>
  <div id="findme">
    <p> Follow me <a href="http://twitter.com/MrSimonBennett">@MrSimonBennett</a></p>
    <p>Email me <script>mail2("hello","bennett",0,"","hello@bennett.im")</script> </p>
  </div>

<?php get_footer()?>
