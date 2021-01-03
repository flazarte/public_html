<?php
	function _add_javascripts()
	{
		
		wp_enqueue_script('3.4.1-min-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true );
		wp_enqueue_script('1.12.9 popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true );
		wp_enqueue_script('boot-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), null, true );
		//wp_enqueue_script('jquery-js-meme','http://code.jquery.com/jquery-1.11.3.min.js', array(), null, true );
		wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/dist/js/custom.js', array(), null, true );
		wp_localize_script( 'custom-js', 'base64custom', array('ajax_url' => admin_url('admin-ajax.php')));
		
	}
	add_action('wp_enqueue_scripts', '_add_javascripts', 100);

	function _add_stylesheets()
	{	
		//wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', array(), null, 'all' );
		wp_enqueue_style('bootsrap-css', get_template_directory_uri() . '/assets/dist/css/bootstrap.min.css', array(), null, 'all' );
		wp_enqueue_style('font-awesome', 'https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap', array(), null, 'all' );
		wp_enqueue_style('blogs-csss', get_template_directory_uri() . '/assets/dist/blog.css', array(), null, 'all' );
		wp_enqueue_style('custom-csss', get_template_directory_uri() . '/style.css', array(), null, 'all' );
	}
	add_action('wp_enqueue_scripts', '_add_stylesheets');
	