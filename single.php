<?php get_header();?>

  <div id="blog">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
    <h2><?php the_title(); ?></h2>
    <div class="post">
    <div id="meta" >Posted: <?php the_date(); ?></div>
      
      <?php the_content(); ?>  
      
    </div>
      <?php endwhile; endif; ?>  
    
  </div>
<?php get_footer();?>