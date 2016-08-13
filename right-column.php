<?php 
	


	// WP_Query arguments
	$args = array (
		'post_type'              => array( 'navpost' ),
		'order'                  => 'ASC',
		'orderby'                => 'menu_order',
		'posts_per_page'         => 4,
	);



	// The Query
	$nav_posts = new WP_Query( $args );

	// The Loop
	if ( $nav_posts->have_posts() ) {
		while ( $nav_posts->have_posts() ) {
			$nav_posts->the_post();
			// do something 

			$content = $post->post_content;
			 if ( strlen($content) > 0 ): ?>


				<article class="c-box">
					<div class="box-header">

						<?php 

						$icon = get_field('include_icon');

						if ( get_field('include_icon') ): ?>

							<img class="header-icon" src="<?php echo $icon['url']; ?>"/> 

						<?php endif; ?>


						<a href="<?php the_permalink(); ?>"><?php echo ' ' . the_title(); ?></a>
					</div><!-- box header -->

					<div class="box-content r-content">
						
						<?php echo $content; ?>

					</div><!-- box content -->

				</article><!-- c box -->

			<?php endif; ?>

		<?php }

		 

	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();

?>

