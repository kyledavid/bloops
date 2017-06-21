<?php get_header(); ?>

<div id="slick-column">
	
	<div class='slick-wrap'>
		<nav class='slicknav'>
			<?php $args = array(
			'theme_location' => 'primary'
		);
		?>

		<?php wp_nav_menu( $args ); ?>
		</nav>
	</div>
</div>


<?php // WP_Query arguments

$args = array(
	'post_type'              => array( 'navpost' ),
	'nopaging'               => true,
	'orderby'		 => 'date',
	'order'			 => 'DESC',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		if (get_post_format() == false) {
			get_template_part('b-content');
		} else {
			get_template_part('content', get_post_format());
		}
	}
} else {
	echo '<p>No content found</p>';
}

// Restore original Post Data
wp_reset_postdata();

?>



<?php get_footer();  ?>
</body>
</html>