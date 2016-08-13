<?php get_header('home'); 



	while (have_posts()) : the_post();

		echo the_content();

	endwhile; ?>



<?php get_footer();  ?>
</body>
</html>