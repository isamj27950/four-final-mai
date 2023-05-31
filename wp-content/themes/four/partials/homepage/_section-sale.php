	<!-- section sucré -->
	<section class="bg-section-gray">
		<div class="container">
			<h2 class="section_h2">Nos gateaux salés</h2>
			<div class="section_card">
				<?php get_template_part('partials/cards/_card') ?>
				<?php get_template_part('partials/cards/_card') ?>
				<?php get_template_part('partials/cards/_card') ?>
			</div>
			<!-- button more ++ -->
			<?php
			$href = "/recettes-salees";
			include(get_template_directory() . '/partials/_btn-more.php');
			?>
		</div>
	</section>