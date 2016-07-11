<?php

/**
 * Загружаемые стили и скрипты
 **/
function load_style_scripttt() {
  wp_enqueue_script( 'js', get_template_directory_uri() . '/js/js.js', array(), null, true );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
}

/**
 * Загружаем стили и скрипты
 **/
add_action( 'wp_enqueue_scripts', 'load_style_scripttt' );

/**
 * Меню
 **/
register_nav_menu('menu', 'Меню' );

/**
 * сайдбар
**/
register_sidebar(array(
  'name' => 'Сайдбар',
  'id' => 'sidebar',
  'description' => 'Описание',
  'before_widget' => '<div>',
  'after_widget' => '</div>'

));

?>