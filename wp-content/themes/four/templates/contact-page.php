<?php
/*
Template Name: Contact
*/
?>
<?php get_header() ?>
<div class="contact_container" id="contact"> 
    <h1 >Contact Page</h1>
    <?php
    if(have_posts()):
            while (have_posts()) : the_post();?>
            <div class="form_container">
                <?php the_content(); ?>
            </div>    
        <?php endwhile;
        endif;
        ?>
    </div>
<?php get_footer() ?>