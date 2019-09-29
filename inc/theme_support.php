<?php
function green_theme_init(){
    add_theme_support( 'html5');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header-main_menu' => 'Header Main Menu',
        'other_menu' => 'Other Menu'
    ));

}
add_action('after_setup_theme','green_theme_init');
