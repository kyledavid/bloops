<?php get_header('home'); ?>
		<div id='f-left-col'>
			<div class='slick-wrap'>
				<nav class='slicknav'>
					<div class='slick-head'>Slick Nav
					</div>
					<?php $args = array(
					'theme_location' => 'primary'
				);
				?>

				<?php wp_nav_menu( $args ); ?>
				</nav>
			</div>
			
			

		</div><!-- END LEFT COLUMN -->
		<div id='f-center-col'>
			<div class='c-box'>
				<div class='box-header'>
					<h2><span class="fa fa-shield"></span>   Welcome to Valucre!</h2>
				</div>
				<div class='box-content'>
					<?php get_template_part('welcome'); ?>
				</div>
			</div>

			<div class='c-box'>
				<div class='box-header'>Box Header
				</div>
				<div class='box-content dif-height2'>
				</div>
			</div>
		</div><!-- END CENTER COLUMN -->
		<div id='f-right-col'>
			<div class='c-box'>
				<div class='box-header'>Featured Lore
				</div>
				<div class='box-content lore'>
					<img class="lore-img" src="http://i.imgur.com/ngKQ2vp.png">
					<a href="#">Renovatio</a>
					<p>
						Long before Renovatio had become a nation governed by Man, the 
						land once dwelled amongst the stars as a cosmic kingdom. Now the mobile kingdom casts 
						shadows over Valucre from the sky...<a href="#" style="color:white; text-decoration:underline;">read more</a>
					</p>
				</div>
			</div>

			<div class='c-box'>
				<div class='box-header'>Box Header
				</div>
				<div class='box-content'>
				</div>
			</div>

		</div><!-- END RIGHT COLUMN -->
	</div><!-- FRONT MAIN -->
</div><!-- PAGE CONTAINER -->

<?php get_footer(); ?>

</body>
</html>