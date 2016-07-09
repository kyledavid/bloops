<?php 
	$post_22 = get_post(22); 
	$content = $post_22->post_content;
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	$title = get_the_title(22);
?>
<article class="c-box">
	<div class="box-header">
		<h2><span class="fa fa-shield"></span><?php echo ' ' . $title; ?></h2>
	</div><!-- box header -->

	<div class="box-content">
		

		<object type="image/svg+xml" data="<?php bloginfo('template_url');?>/assets/img/SVGtest1-01.svg" style="height:50px; width:50px">
		  Your browser does not support SVG
		</object>
		
		<?php echo $content; ?>

	</div><!-- box content -->

</article><!-- c box -->


	

