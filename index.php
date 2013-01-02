<?php get_header();?>

  <div id="blog">
    <p>Simon Bennett's <strong>Blog</strong>.
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
    <div class="post">
      <h3><a href="<?php the_permalink(); ?>  " ><?php the_title(); ?></a></h3>
     <hr />
      <?php the_content(); ?>  
    </div>
    <?php endwhile; endif; ?>  
    
  </div>
<?php get_footer();?>