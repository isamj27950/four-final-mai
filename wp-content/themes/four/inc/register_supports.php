<?php
/*
Supports 
*/
function four_supports()
{
  // show balise title dynamically
  add_theme_support('title-tag');
  // declarer emplacement de menu
  register_nav_menus(array(
    'main' => "Menu pricipal",
    'footer' => 'Menu Footer'
  ));
  // afficher featured image/ image a la une
  add_theme_support('post-thumbnails');
};
