<?php

get_header(); ?>

	<!-- site-content -->
	<div class="site-content clearfix">

		<!-- main-column -->
		<div class="main-column">

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				get_template_part('content', get_post_format());

				endwhile;

				echo paginate_links();

				else :
					echo '<p>No content found</p>';

				endif;
				?>

		</div><!-- /main-column -->


	</div><!-- /site-content -->

	<?php get_footer();

?>