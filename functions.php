<?php

	//----//
	function add_custom_css_js() 
	{
		// Registrar los estilos css
	    wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all' );
	    wp_register_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array(), '3.4.5', 'all' );	    
	    wp_register_style( 'style-css', get_stylesheet_directory_uri() . '/style.css', array(), '1.1', 'all' );
	    wp_register_style( 'normalize-css', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '8.0.1', 'all' );
	    wp_register_style( 'owlcarousel-css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', array(), '2.3.4', 'all' );		    
	    wp_register_style( 'owlthemedefault-css', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.3.4', 'all' );

	    // Registrar los scripts js
    	wp_register_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', '', '', true );
    	wp_register_script( 'popper-bs-js', get_template_directory_uri().'/js/popper.min.js', '', '', true );    	
    	wp_register_script( 'owlcarousel-js', get_template_directory_uri().'/js/owl.carousel.min.js', '', '', true );    	
    	wp_register_script( 'cargar-js', get_template_directory_uri().'/js/cargar.js', '', '', true );   

    	// css
		wp_enqueue_style('bootstrap');    	
		wp_enqueue_style('font-awesome');		
		wp_enqueue_style('style-css');
		wp_enqueue_style('normalize-css');
		wp_enqueue_style('owlcarousel-css');
		wp_enqueue_style('owlthemedefault-css');

		// js
	    wp_enqueue_script('bootstrap-js');
	    wp_enqueue_script('popper-bs-js');
	    wp_enqueue_script('owlcarousel-js');
	    wp_enqueue_script('cargar-js');

	}
	add_action( 'wp_enqueue_scripts', 'add_custom_css_js' );	

	function add_scripts() {
	        wp_deregister_script('jquery');
	        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', '3.3.1', false);
	        wp_enqueue_script( 'jquery' );
	}
	add_action('wp_enqueue_scripts', 'add_scripts');
	//----//	
