<?php 
	$post_22 = get_post(22); 
	$content = $post_22->post_content;
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	$title = get_the_title(22);


	if ($content):
?>
		<article class="c-box">
			<div class="box-header">
				<h2><span class="fa fa-shield"></span><?php echo ' ' . $title; ?></h2>
			</div><!-- box header -->

			<div class="box-content">
				
				<?php echo $content; ?>

			</div><!-- box content -->

		</article><!-- c box -->

<?php endif; ?>
	

