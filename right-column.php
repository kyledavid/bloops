<?php 
	

	// *********** Change number of nav posts displayed by editing the 'posts_per_page' value**********
	// WP_Query arguments
	$args = array (
		'post_type'              => array( 'navpost' ),
		'order'                  => 'DESC',
		'orderby'                => 'menu_order',
		'posts_per_page'         => 3,
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

						<?php

			$categories = get_the_category();
			$separator = ", ";
			$output = '';
			$title = get_the_title();

			if ($categories) {

				foreach ($categories as $category) {

					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $title . '</a>'  . $separator;

				}

				echo trim($output, $separator);

			}

			?>
						


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

