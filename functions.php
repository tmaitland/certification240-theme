<?php   

   // Custom logo.
   $logo_width  = 120;
   $logo_height = 90;

   // If the retina setting is active, double the recommended width and height.
   if ( get_theme_mod( 'retina_logo', false ) ) {
      $logo_width  = floor( $logo_width * 2 );
      $logo_height = floor( $logo_height * 2 );
   }
    
   //theme support 
   add_theme_support( 'post-thumbnails' );

   add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

   // includes
   include(get_theme_file_path('/classes/custom-walker-nav.php'));
   



   // enqueues
   function cert240_enqueue_styles() {
       wp_enqueue_style( 'cert-bootstrap-grid-css', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', [], time(), 'all' );
       wp_enqueue_style( 'cert-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], time(), 'all' );
       wp_enqueue_style( 'cert-custom-css', get_template_directory_uri() . '/style.css', [], time(), 'all' );
   }

   function cert240_enqueue_scripts(){
      wp_enqueue_script( 'cert-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], time(), true );
   }

   // setup
   function cert240_nav_setup() {
      register_nav_menu( 'main', __('Main Menu', 'cert-240-theme'));
      register_nav_menu( 'footer', __('Footer menu', 'cert-240-theme'));
   }

   // hooks
   add_action( 'wp_enqueue_scripts', 'cert240_enqueue_styles' );
   add_action( 'wp_enqueue_scripts', 'cert240_enqueue_scripts' );
   add_action( 'after_setup_theme', 'cert240_nav_setup' );




   

   // Customizer additions.
//    require get_template_directory() . '/classes/uf-experts-customize.php';
//    new UF_Experts_Customize();
