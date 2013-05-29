<?php get_header();?>

  <div id="blog">
    <p>Simon Bennett's <a class="title" href="/blog">Blog</a>.
    <?php if ( is_home() ) { query_posts( 'cat=-18' ); } ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
   
    <div class="post">
      <h3><a href="<?php the_permalink(); ?>  " ><?php the_title(); ?></a></h3>
     <hr />
      <?php the_content(); ?>  
    </div>
    
    <?php endwhile; endif; ?>  
    <?php
    global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );?>
  </div>
<?php get_footer();?>