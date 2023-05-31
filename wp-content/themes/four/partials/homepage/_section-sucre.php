<?php
//1
//
$args = [
	'post_type' => 'sucre',//name of the post_type
	'posts_per_page' => 3,//nber of recette
	'order' => 'ASC',
	'order_by'=>'date'
];
 $sucre_query = new WP_Query($args)
// echo '>pre>';
//print_r($sucre_query);
//echo '</pre>';
?>
	
	<!-- section sucré -->
	<section class="container">
		<h2 class="section_h2">Nos gateaux sucrés</h2>
		<div class="section_card">
			<!-- afffiche data from query -->
			<?php
			if($sucre_query->have_posts()): 
				while($sucre_query->have_posts()): $sucre_query->the_post();
				get_template_part('partials/cards/_card');
				//3 reset query 
				wp_reset_postdata();
			endwhile;
		endif;
			?>
		
		</div>
		<!-- button more ++ -->
		<?php
		$href = "/recettes-sucrees/";
		include(get_template_directory() . '/partials/_btn-more.php');
		?>
	</section>