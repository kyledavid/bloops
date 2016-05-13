<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body>
<div id="page-container">
	<div id="front-main" class="clearfix">
		<header id='front-header'>
			<nav id='front-nav'>

				<?php $args = array(
					'theme_location' => 'primary'
				);
				?>

				<?php wp_nav_menu( $args ); ?>
			</nav>
			<div id='site-banner'>
				<h1 id="site-header">CARLOZAHAR</h1>
			</div>
		</header>