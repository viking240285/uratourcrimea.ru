<?php
add_action('wp_enqueue_scripts', 'greenigma_removeScripts' , 20);
function greenigma_removeScripts() {
	//De-Queuing Styles sheet 
	wp_dequeue_style( 'default',get_template_directory_uri() .'/css/default.css'); 
	//EN-Queing Style sheet

	$parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('lite-brown', get_stylesheet_directory_uri() . '/green.css');
}

function greenigma_add_editor_styles() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
    add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'greenigma_add_editor_styles' );

add_action('widgets_init', 'greenigma_widgets_init');
function greenigma_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'greenigma'),
        'id'            => 'footer-widget-area',
        'description'   => esc_html__('footer widget area', 'greenigma'),
        'before_widget' => '<div class="col-md-3 col-sm-6 enigma_footer_widget_column %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="enigma_footer_widget_title">',
        'after_title'   => '<div class="enigma-footer-separator"></div></div>',
    ));
}