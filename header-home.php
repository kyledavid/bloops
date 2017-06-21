<!DOCTYPE html>

<html lang="en-US" dir="ltr">

<head>



	<!-- redirect while we work on site 

	<?php if ( current_user_can( 'manage_options' ) == false ) { header('Location: http://www.valucre.com'); } ?> -->



	<link rel='stylesheet' type='text/css' href='<?php bloginfo('template_url');?>/assets/css/ips.css'/>

	<?php get_template_part('ips-header'); ?>

	



<?php get_template_part('ips-nav-condensed'); ?>

<?php wp_head(); ?>





<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>

</head>





<div id="page-container">

	<div class='slick-wrap' id="vertical-slick">

		<nav class='slicknav'>

			<?php $args = array(

			'theme_location' => 'secondary'

		);

		?>



		<?php wp_nav_menu( $args ); ?>

		</nav>

	</div>

	<div id="front-main" class="clearfix">
		<div id='front-banner'><img src="<?php bloginfo('template_url');?>/assets/img/2SVGColor.svg"></div>

		

		