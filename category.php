<?php get_header(); 

$categories = get_the_category();
$cat = (String)$categories[0]->term_id;
?>
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




<div class="archive-wrappa">
<?php 
// WP_Query arguments
$args = array(
	'post_type'              => array( 'navpost' ),
	'order'                  => 'DESC',
	'orderby'                => 'date',
	'cat'			 => $cat,
	'posts_per_page'	 => -1,
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
	// no posts found
}

// Restore original Post Data
wp_reset_postdata(); ?>

</div>


<?php get_footer();  ?>
</body>
</html>