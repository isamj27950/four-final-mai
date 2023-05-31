<?php get_header() ?>

<section class ="container">
    <h2 class="section_h2">Nos gateaux salés</h2>
    <div class="section_card">
        <?php 
        if(have_posts()):
        while (have_posts()) : the_post();
         get_template_part('partials/cards/_card');
        endwhile;
    endif;
    ?>
    </div>
</section>

<?php get_footer() ?>