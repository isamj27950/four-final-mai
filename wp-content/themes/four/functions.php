<?php
require_once get_template_directory() . '/inc/register_assets.php';
require_once get_template_directory() . '/inc/register_supports.php';
require_once get_template_directory() . '/inc/register_cpt.php';



//add CPT
add_action('init', 'four_register_post_types_sucre');
add_action('init', 'four_register_post_types_sale');

// Add style  + JS
// Add style  + JS
add_action('wp_enqueue_scripts', 'four_register_assets');
add_action('after_setup_theme', 'four_supports');
