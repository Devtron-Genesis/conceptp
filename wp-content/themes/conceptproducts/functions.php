<?php	include( 'vision.php' );		function theme_slug_widgets_init() {		register_sidebar( array(
        'name' => 'Footer box 1',
        'id' => 'footer-1',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget-container">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
		) );
		register_sidebar( array(
        'name' => 'Footer box 2',
        'id' => 'footer-2',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget-container">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
		) );		
		register_sidebar( array(
        'name' => 'Footer box 3',
        'id' => 'footer-3',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget-container">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
		) );		register_sidebar( array(
        'name' => 'Footer box 4',
        'id' => 'footer-4',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget-container">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
		) );		
	}	add_action( 'widgets_init', 'theme_slug_widgets_init' );function theme_enque(){	wp_enqueue_style( 'core-style', get_stylesheet_uri() );	wp_enqueue_style( 'bxslidermincss', get_stylesheet_directory_uri().'/css/jquery.bxslider.min.css' );	wp_enqueue_style( 'normalize', get_stylesheet_directory_uri().'/css/normalize.css' );		wp_enqueue_script( 'flux-script', get_template_directory_uri() . '/js/flux.min.js', array('jquery'), false, true );	wp_enqueue_script( 'app-script', get_template_directory_uri() . '/js/app.js', array('jquery'), false, true );	wp_enqueue_script( 'bxslider-script', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), false, true );				}add_action( 'wp_enqueue_scripts', 'theme_enque' );
	
	
