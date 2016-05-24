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
	<div id="front-main3" class="clearfix">
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
		
		<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us13.list-manage.com","uuid":"042e0aa5112c678091d7a7012","lid":"4967688682"}) })</script>