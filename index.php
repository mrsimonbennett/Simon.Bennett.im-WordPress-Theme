<?php get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args= array(
  'cat' => 1,
  'paged' => $paged
);
if(preg_match("/\/random-photos\//",$_SERVER['REQUEST_URI'])){
  $args= array(
  'cat' => 18,
  'paged' => $paged
);
}else if(preg_match("/\/final-major-project\//",$_SERVER['REQUEST_URI']))
{
   $args= array(
    'cat' => 19,
   'paged' => $paged
  );
}
query_posts($args);
?>

  <div id="blog">
    <?php if($args['cat'] == 18):?>
    <p><a class="title" href="/blog/category/random-photos/">Random Photos</a>

    <?php elseif($args['cat'] == 19):?>
      <p><a class="title" href="/blog/category/final-major-project/">Final Major Project</a>
    <?php else:?>
    <p><a class="title" href="/blog">Blog</a></p>
<?php endif;?>
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
