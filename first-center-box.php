<?php 
	$ID = 20;
	$post = get_post( $ID ); 
	$content = $post->post_content;
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	$title = get_the_title( $ID );
	$status = get_post_status( $ID );


	if ($status != 'pending'):
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
	

