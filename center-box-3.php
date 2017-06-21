<?php 

	$ID = 82;

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

				<h2>

					<?php 



						$icon = get_field('include_icon');



						if ( get_field('include_icon') ): ?>



							<img class="header-icon" src="<?php echo $icon['url']; ?>"/> 



						<?php endif; ?>

					<?php echo ' ' . $title; ?>

				</h2>

			</div><!-- box header -->



			<div class="box-content">

				

				<div class="post-body">

					<?php echo $content; ?>

				</div>



			</div><!-- box content -->



		</article><!-- c box -->



<?php endif; ?>

	



