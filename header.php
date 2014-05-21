<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php if (is_home()){  bloginfo('description'); } else if (is_page('homepage')){ echo "Web Developer"; } else{ wp_title('');};?> | <?php bloginfo('name'); ?> </title>
<!-- KKPLvHekoF7fRKmfhFYf7crEJOU -->
<meta name="author" content="Simon Bennett">
<meta property="twitter:account_id" content="4503599627736148" />
<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php if(is_page('homepage')):?>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-carousel.js"></script>
<script language="javascript" src="<?php bloginfo('template_directory'); ?>/js/mail.js"></script>
<script>

$(function(){

   $('#myCarousel').carousel({

	    interval:4000

   });

});

</script>
<?php endif;?>
<?php wp_head();?>
</head>
<body>
<div class="container">
  <header>
    <h2>Simon Bennett</h2>
    <h1>Web Developer</h1>
    <a href="/" ><img alt="Web Development Simon Bennett" src="<?php bloginfo('template_directory'); ?>/images/logo-white<?=current_user_can( 'manage_options' ) ? '-fire': ''?>.jpg"></a>
    <nav>
      <ul>
        <li> <a href="/blog" class="<?=is_home('blog')||is_single() ? 'active' : '';?>">Blog</a> </li>
         <li> <a href="/available-stuff-free-donation-borrow/" class="<?=is_page('available-stuff-free-donation-borrow') ? 'active' : '';?>">Stuff</a> </li>
         
         <li> <a href="/blog/category/random-photos/" class="<?=is_category('random-photos') ? 'active' : '';?>">Photos</a> </li>
           <li> <a href="/blog/category/final-major-project/" class="<?=is_category('final-major-project') ? 'active' : '';?>">Project</a> </li>
      </ul>
    </nav>
  </header>
</div>
<div class="redbar"></div>
<div class="container">
