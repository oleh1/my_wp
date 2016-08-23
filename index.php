<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <h1><?php bloginfo('name'); ?></h1>
  <?php bloginfo('description'); ?>
<br />
<?php echo home_url(); ?>
<br />
<?php bloginfo('template_url'); ?>
<br />
<?php bloginfo('stylesheet_url'); ?>
<hr><br>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h2 style="color: red">Posts-Title start</h2><h3><?php the_title(); ?></h3><h2 style="color: red">Posts-Title end</h2><br>
  <h2 style="color: red">Posts-Content start</h2><?php the_content(); ?><h2 style="color: red">Posts-Content end</h2><br>
<!--    <a href="--><?php //the_permalink(); ?><!--">Читать далее...</a>-->

  <?php endwhile; ?>

  <?php else: ?>

  <?php endif; ?>


<br />
<br />
<hr>

  <?php get_sidebar( 'sidebar' ); ?>

  <br />
  <br />
  <hr>

  <h2 style="color: green">Posts-One start</h2>

  <pre>
  <?php

  query_posts( array('post_type' => array('post', 'product' )  ) );
  if ( have_posts() ) : while ( have_posts() ) : the_post();

  the_content();

  endwhile;
  else:
  endif;

  ?>
  </pre>

  <h2 style="color: green">Posts-One end</h2>

<br />
<br />
<hr>

  <?php echo get_template_directory_uri() . ' <<< get_template_directory_uri()'; ?><br />
  <?php echo get_template_directory() . ' <<< get_template_directory()'; ?><br />


<?php //var_dump($posts); ?>

  <div id="cube" tabindex="0" style="height: 1px; width: 1px;"><div class="cubee"></div></div>



<!--<pre>--><?php //print_r( query_posts( '?product=aaaaaa' ) ); ?><!--</pre>-->

  
<?php wp_footer(); ?>
</body>
</html>