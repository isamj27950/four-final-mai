<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- afficher les script et style de WP -->
  <?php wp_head()  ?>
</head>

<body>
  <header>
    <a href="<?= home_url('/') ?>" class="logo">FOUR</a>
    <nav class="">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'main', // id du menu
        'container' => "ul", // default div mais nous on veut des ul
        // 'menu_class' => 'nav_padding_left' // class des li 
      ))
      ?>
    </nav>
  </header>
