<?php
function green_theme_widgets(){
	register_sidebar( array(
		'name'          => 'Footer widgets',
		'id'            => 'footer_col_widget',
		'before_widget' => '<div class="col-md-3"><div class="single-footer">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
    ) );
    
	register_sidebar( array(
		'name'          => 'Social icon widgets',
		'id'            => 'social_widget',
		'before_widget' => '<div class="">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );
	register_sidebar( array(
		'name'          => 'Blog Sidebar Widget',
		'id'            => 'blog_sidebar_widget',
		'before_widget' => '<div class="singel_blog_side_bar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );
}
add_action('widgets_init', 'green_theme_widgets');