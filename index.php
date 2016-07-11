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
<hr>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h3><?php the_title(); ?></h3>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">Читать далее...</a>

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

  <?php echo get_template_directory_uri() . ' <<< get_template_directory_uri()'; ?><br />
  <?php echo get_template_directory() . ' <<< get_template_directory()'; ?><br />


<?php //var_dump($posts); ?>

  <div id="cube" tabindex="0" style="height: 1px; width: 1px;"><div class="cubee"></div></div>

  
<?php wp_footer(); ?>
</body>
</html>