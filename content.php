	<article id="single-post" class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">


		<!-- post-thumbnail -->
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
		</div><!-- /post-thumbnail -->


		<div class="post-content">

			<?php if ( get_field('include_icon') ): ?>

				<span class="fa fa-<?php the_field('include_icon'); ?>"> </span>

			<?php endif; ?>

			<a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

			<p class="post-info">
				<span="by-line">By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>


				<?php echo the_time('F j, Y'); ?> 

			</p>


			<?php if ( is_search() OR is_archive() ) { ?>
				<p>
				<?php echo get_the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
				</p>
			<?php } else {
				if ($post->post_excerpt) { ?>

					<p>
					<?php echo get_the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
					</p>

				<?php } else {

					the_content();

				}
			} ?>
		</div>

	</article>