<?php get_header();?>
<div id="container">
  <header>
    <h2>Simon Bennett</h2>
    <h1>Web Developer</h1>
     <a href="/" ><img alt="Web Development Simon Bennett" src="<?php bloginfo('template_directory'); ?>/images/logo.jpg"></a>
    <nav>
      <ul>
        <li> <a href="/blog">Blog</a> </li>
      </ul>
    </nav>
  </header>
  <div id="blog">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
    <h2><?php the_title(); ?></h2>
    <div class="post">
      
      <?php the_content(); ?>  
    </div>
    <?php endwhile; endif; ?>  
    
  </div>
</div>
</body>
</html>