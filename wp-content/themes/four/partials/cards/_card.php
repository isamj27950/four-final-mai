 <!-- card1 -->
 <a href="<?php the_permalink() ?>">
   <div class="card_container">
     <!-- box image -->
     <div class="image">
     
 <img src="<?php the_post_thumbnail_url() ?> " alt="<?php the_title() ?>"/> 
     </div>
     <!-- card body -->
     <div class="card_body">
       <h3><?php the_title() ?></h3>
       <div class="card_description">
         <p>
          <?php the_excerpt()?>
         </p>
       </div>
       <div class="card_body_bottom text-gray-light">
         <p>3 avis</p>
         <p class="text-right text-sm">
           Note : <span class="text-bold-700">3/5</span>
         </p>
       </div>
     </div>
   </div>
 </a>