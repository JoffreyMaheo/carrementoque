<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="container">

			<?php get_template_part('loop-featured'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
