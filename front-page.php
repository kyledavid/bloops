<?php get_header('home'); ?>
		 
		<div id='f-left-col'>
			<div class='slick-wrap'>
				<nav class='slicknav'>
					<?php $args = array(
					'theme_location' => 'primary'
				);
				?>

				<?php wp_nav_menu( $args ); ?>
				</nav>
			</div>
			
			

		</div><!-- END LEFT COLUMN -->

		


		<div id='f-center-col'>

			

			<?php get_template_part('first-center-box'); ?>
			<?php get_template_part('center-box-2'); ?>
			<?php get_template_part('center-box-3'); ?>
			<?php get_template_part('center-box-4'); ?>
			<?php get_template_part('center-box-5'); ?>



			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				get_template_part('b-content');

				endwhile; 

				the_posts_pagination( $args ); 
			endif; ?>


		</div><!-- END CENTER COLUMN -->

		<hr id="posts-divider">

		<div id='f-right-col'>
			<?php get_template_part('right-column'); ?>

		</div><!-- END RIGHT COLUMN -->
	</div><!-- FRONT MAIN -->
</div><!-- PAGE CONTAINER -->

<?php get_footer(); ?>

</body>
</html>