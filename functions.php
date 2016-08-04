<?php

/**
 * Загружаемые стили и скрипты
 **/
function load_style_scripttt() {
  wp_enqueue_script( 'js', get_template_directory_uri() . '/js/js.js', array(), null, true );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
}
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



/**
 * Удаление пунктов меню
 **/
function remove_menus(){
remove_menu_page( 'index.php' );                  //Консоль
//remove_menu_page( 'edit.php' );                   //Записи
remove_menu_page( 'upload.php' );                 //Медиафайлы
remove_menu_page( 'edit.php?post_type=page' );    //Страницы
remove_menu_page( 'edit-comments.php' );          //Комментарии
remove_menu_page( 'themes.php' );                 //Внешний вид
//remove_menu_page( 'plugins.php' );                //Плагины
remove_menu_page( 'users.php' );                  //Пользователи
remove_menu_page( 'tools.php' );                  //Инструменты
remove_menu_page( 'options-general.php' );        //Настройки
}
add_action( 'admin_menu', 'remove_menus' );


//удаление из панели элементов меню - начало
function wph_new_toolbar() {
global $wp_admin_bar;

	$wp_admin_bar->remove_menu('comments'); //меню "комментарии"
//	$wp_admin_bar->remove_menu('my-account'); //меню "мой профиль"
//	$wp_admin_bar->remove_menu('edit'); //меню "редактировать запись"
	$wp_admin_bar->remove_menu('new-content'); //меню "добавить"
//	$wp_admin_bar->remove_menu('updates'); //меню "обновления"
	$wp_admin_bar->remove_menu('wp-logo'); //меню "о wordpress"
//	$wp_admin_bar->remove_menu('site-name'); //меню "сайт"
}
add_action('wp_before_admin_bar_render', 'wph_new_toolbar');
//удаление из панели элементов меню – конец



	/**
	*	Запретить автоматичиское обновление ядра
	**/
add_filter( 'auto_update_core', '__return_false' );



/**
 *	Запретить автоматичиское обновление
 **/
//Запрет обновления Вордпресс
add_filter('pre_site_transient_update_core',create_function('$a', "return null;"));
wp_clear_scheduled_hook('wp_version_check');

//Запрет обновления плагинов
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
wp_clear_scheduled_hook( 'wp_update_plugins' );

//Запрет обновления шаблонов
remove_action('load-update-core.php','wp_update_themes');
add_filter('pre_site_transient_update_themes',create_function('$a', "return null;"));
wp_clear_scheduled_hook('wp_update_themes');




?>