<?php
/*
function register assets to WP
*/
function four_register_assets()
{
  // tailwindcss
  // wp_enqueue_script(
  //   'four_tailwindcss',
  //   "https://cdn.tailwindcss.com"
  // );

  // font awesome
  wp_enqueue_style(
    'four_font-awesome',
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
  );

  // four style
  wp_enqueue_style(
    'four-style',
    get_template_directory_uri() . '/assets/css/style.css',
    [],
    '1.1',
  );

  // main csss
  wp_enqueue_style(
    'main-style',
    get_stylesheet_uri(),
    [],
    '1.1',
  );

  // google font
  wp_enqueue_style(
    'inter-font',
    "https://fonts.googleapis.com/css2?family=Inter:wght@100;200;400;500;600;700;800;900&display=swap",
    [],
    '1.0',
  );
}
