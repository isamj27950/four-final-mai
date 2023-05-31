<!-- include header -->
<?php get_header() ?>
<section class="container">
    <h2 class="title_h2"><?php the_title()?></h2>
    <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title() ?>">
  <!-- box information de la recette -->
<?php get_template_part('partials/single/_box-info') ?> 
<div class="box_etape_recette">
<?php get_template_part('partials/cards/_card-etape')?>
<!-- etapes-->
<div class="box-etape">
<?php the_content() ?>
</div>
</section>

<!-- include footer -->
<?php get_footer() ?>


