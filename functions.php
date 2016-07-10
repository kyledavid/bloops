<?php

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function carlozaharStyleResources(){
	wp_enqueue_script( 'slicknav-script', get_stylesheet_directory_uri() . '/assets/js/slicknav.js', array(), null, true );
	wp_enqueue_script( 'ips-scripts', get_stylesheet_directory_uri() . '/assets/js/ips.js', array(), null, true );
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
	wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}

//Theme setup
function carlozaharSetup(){

	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'secondary' => __( 'Secondary Menu'),
	));

	add_theme_support( 'post-thumbnails' ); 
}


add_action('after_setup_theme', 'carlozaharSetup');
add_action('wp_enqueue_scripts', 'carlozaharStyleResources');
// add_filter('show_admin_bar', '__return_false');

// Customize Appearance Options
function carlozahar_customize_register( $wp_customize ) {


	$wp_customize->add_setting('carl_main_bg', array(
		'default' => '#3d6a99',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('carl_content_bg', array(
		'default' => '#2b568a',
		'transport' => 'refresh',
		));

	$wp_customize->add_setting('carl_box_content_bg', array(
		'default' => '#3d6a99',
		'transport' => 'refresh',
		));

	$wp_customize->add_setting('carl_box_header_bg', array(
		'default' => '#143c64',
		'transport' => 'refresh',
		));

	$wp_customize->add_setting('carl_box_border', array(
		'default' => '#143c64',
		'transport' => 'refresh',
		));

	$wp_customize->add_setting('carl_text_color', array(
		'default' => '#eee',
		'transport' => 'refresh',
		));

	$wp_customize->add_setting('carl_slicknav_text_color', array(
		'default' => '#eee',
		'transport' => 'refresh',
		));

	$wp_customize->add_setting('carl_slicknav_bg', array(
		'default' => '#eee',
		'transport' => 'refresh',
		));

	$wp_customize->add_setting('carl_slicknav_border', array(
		'default' => '#000',
		'transport' => 'refresh',
		));

	$wp_customize->add_setting('carl_slicknav_text_size', array(
		'default' => 22,
		'transport' => 'refresh',
		));

	$wp_customize->add_setting('carl_post_bg', array(
		'default' => '#fff',
		'transport' => 'refresh',
		));

	$wp_customize->add_setting('carl_post_color', array(
		'default' => '#333',
		'transport' => 'refresh',
		));

	$wp_customize->add_setting('carl_post_fsize', array(
		'default' => '16',
		'transport' => 'refresh',
		));

	$wp_customize->add_section('carloz_bg_colors', array(
		'title' => __('Carlozahar Backgrounds', 'Carlozahar'),
		'priority' => 30,
	));

	$wp_customize->add_section('carloz_slicknav_colors', array(
		'title' => __('Carlozahar Slicknav', 'Carlozahar'),
		'priority' => 30,
		));

	$wp_customize->add_section('carloz_single_post', array(
		'title' => __('Carlozahar Single Post Styles', 'Carlozahar'),
		'priority' => 30,
		));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carloz_main_bg_control', array(
		'label' => __('Main Background', 'Carlozahar'),
		'section' => 'carloz_bg_colors',
		'settings' => 'carl_main_bg',
	)));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carloz_content_bg_control', array(
		'label' => __('Content Background', 'Carlozahar'),
		'section' => 'carloz_bg_colors',
		'settings' => 'carl_content_bg',
		)));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carloz_box_content_bg_control', array(
		'label' => __('Box Content Background', 'Carlozahar'),
		'section' => 'carloz_bg_colors',
		'settings' => 'carl_box_content_bg',
		)));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carloz_box_header_bg_control', array(
		'label' => __('Box Header Background', 'Carlozahar'),
		'section' => 'carloz_bg_colors',
		'settings' => 'carl_box_header_bg',
		)));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carloz_box_border_control', array(
		'label' => __('Box Border', 'Carlozahar'),
		'section' => 'carloz_bg_colors',
		'settings' => 'carl_box_border',
		)));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carloz_text_color_control', array(
		'label' => __('Site Text Color', 'Carlozahar'),
		'section' => 'carloz_bg_colors',
		'settings' => 'carl_text_color',
		)));


	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carloz_slicknav_bg_control', array(
		'label' => __('Slicknav Background', 'Carlozahar'),
		'section' => 'carloz_slicknav_colors',
		'settings' => 'carl_slicknav_bg',
		)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'carloz_slicknav_fontsize_control', array(
            'label'          => __( 'Font size for Slicknav', 'Carlozahar' ),
            'section'        => 'carloz_slicknav_colors',
            'settings'       => 'carl_slicknav_text_size',
            'type'           => 'number',
            'input_attrs'    => array(
                'min'        => 1,
                'max'        => 99,
            ),
        )
    )
);

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'carloz_single_fsize_control', array(
            'label'          => __( 'Font size for Single Post', 'Carlozahar' ),
            'section'        => 'carloz_single_post',
            'settings'       => 'carl_post_fsize',
            'type'           => 'number',
            'input_attrs'    => array(
                'min'        => 1,
                'max'        => 99,
            ),
        )
    )
);	

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carloz_slicknav_border_control', array(
		'label' => __('Slicknav Border', 'Carlozahar'),
		'section' => 'carloz_slicknav_colors',
		'settings' => 'carl_slicknav_border',
		)));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carloz_slicknav_text_color_control', array(
		'label' => __('Slicknav Text Color', 'Carlozahar'),
		'section' => 'carloz_slicknav_colors',
		'settings' => 'carl_slicknav_text_color',
		)));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carloz_post_bg_control', array(
		'label' => __('Single Post Background Color', 'Carlozahar'),
		'section' => 'carloz_single_post',
		'settings' => 'carl_post_bg',
		)));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carloz_post_color_control', array(
		'label' => __('Single Post Text Color', 'Carlozahar'),
		'section' => 'carloz_single_post',
		'settings' => 'carl_post_color',
		)));

}

add_action('customize_register', 'carlozahar_customize_register');



// Output Customize CSS
function carlozahar_customize_css() { ?>

	<style type="text/css">

		div#page-container {
			background-color: <?php echo get_theme_mod('carl_main_bg'); ?>;
		}

		div#front-main {
			background-color: <?php echo get_theme_mod('carl_content_bg'); ?>;
		}

		.c-box div.box-content {
			background-color: <?php echo get_theme_mod('carl_box_content_bg'); ?>;
		}

		.c-box div.box-header {
			background: url("http://www.valucre.com/uploads/set_resources_7/005d20f304c7929cbfdb3fe61d088022_mainPattern.png") 
			repeat 50% 100%, linear-gradient(to bottom, rgba(20, 60, 105, 0.5) 0%, <?php echo get_theme_mod('carl_box_header_bg'); ?> 100%);
		}

		div.c-box {
			border: 2px solid <?php echo get_theme_mod('carl_box_border'); ?>;
		}

		.slicknav li.menu-item, .slicknav .slick-head {
			background-color: <?php echo get_theme_mod('carl_slicknav_bg'); ?>;
			border: 1px solid <?php echo get_theme_mod('carl_slicknav_border'); ?>;
		}

		.slicknav .sub-menu .menu-item:first-of-type {
			border-top: 3px solid <?php echo get_theme_mod('carl_slicknav_border'); ?>;
		}

		nav.slicknav li.menu-item {
			font-size: <?php echo get_theme_mod('carl_slicknav_text_size') . 'px'; ?>;
		}

		.slicknav .menu-item a, .slicknav .menu-item a:link, 
		.slicknav .menu a:visited, .slicknav .menu a:hover {
			color: <?php echo get_theme_mod('carl_slicknav_text_color'); ?>;
		}

		body, .c-box, 
		.c-box .lore a, .c-box .lore a:link, .c-box .lore a:visited,
		.c-box a, .c-box a:link, .c-box a:visited {
			color: <?php echo get_theme_mod('carl_text_color'); ?>;
		}

		#post-main article#single-post.post {
			background-color: <?php echo get_theme_mod('carl_post_bg'); ?>;
			color : <?php echo get_theme_mod('carl_post_color'); ?> ;
			font-size: <?php echo get_theme_mod('carl_post_fsize') . 'px'; ?>;
		}

		#post-main article#single-post.post p {
			color : <?php echo get_theme_mod('carl_post_color'); ?> ;
			font-size: <?php echo get_theme_mod('carl_post_fsize') . 'px'; ?>;
		}


	</style>

<?php }

add_action('wp_head', 'carlozahar_customize_css');

function register_cpt_nav_post() {

    $labels = array( 
        'name' => _x( 'Nav Posts', 'nav_post' ),
        'singular_name' => _x( 'Nav Post', 'nav_post' ),
        'add_new' => _x( 'Add New', 'nav_post' ),
        'add_new_item' => _x( 'Add New Nav Post', 'nav_post' ),
        'edit_item' => _x( 'Edit Nav Post', 'nav_post' ),
        'new_item' => _x( 'New Nav Post', 'nav_post' ),
        'view_item' => _x( 'View Nav Post', 'nav_post' ),
        'search_items' => _x( 'Search Nav Posts', 'nav_post' ),
        'not_found' => _x( 'No Nav Posts found', 'nav_post' ),
        'not_found_in_trash' => _x( 'No Nav Posts found in Trash', 'nav_post' ),
        'parent_item_colon' => _x( 'Parent Nav Post:', 'nav_post' ),
        'menu_name' => _x( 'Nav Posts', 'nav_post' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'taxonomies' => array( 'navpost_categories' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 
            'slug' => 'navpost', 
            'with_front' => true,
            'feeds' => true,
            'pages' => true
        ),
        'capability_type' => 'post'
    );

    register_post_type( 'navpost', $args );
}


add_action( 'init', 'register_cpt_nav_post' );



?>