<?php

/**
 * Plugin Name:       sem_fb_info
 * Plugin URI:        netu.net
 * Description:       Самый лучший плагин в мире, если Вы когда то задавались вопросом как узнать сколько подписчиков в группе в Faceboock - этот плагин и есть ответ ^_^
 * Version:           1.0.0
 * Author:            Sem
 * Author URI:        netu.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sem_fb_info
 */

 

add_action('admin_menu', 'register_sem_fb_info_page');

function register_sem_fb_info_page() {
	add_submenu_page( 'tools.php', 'Sem FB', 'Sem FB мини статистика', 'manage_options', 'my-custom-submenu-page', 'sem_fb_info_page_callback' ); 
}

include 'admin/class-sem_fb_info-admin.php';
wp_enqueue_script('newscript', plugins_url() . '/sem_fb_info/public/js/sem_fb_info-public.js');
