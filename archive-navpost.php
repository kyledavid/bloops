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

<?php
if (have_posts()) :
	while (have_posts()) : the_post();

	if (get_post_format() == false) {
		get_template_part('b-content');
	} else {
		get_template_part('content', get_post_format());
	}


	endwhile;

	else :
		echo '<p>No content found</p>';

	endif;

?>



<?php get_footer();  ?>
</body>
</html>