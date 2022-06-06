<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  

	<title> <?php echo get_bloginfo('title') ?> - 240 Certification</title>
  

  <script>window.FontAwesomeConfig = {searchPseudoElements: true}</script>
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; echo get_theme_mod('site_meta_description');
    }
    ?>" />
 <?php wp_head(); ?>
</head>

<body <?php echo body_class( ); ?>>
<!-- 
<a href="#main" id="skip-link" class="visuallyhidden focusable">Skip to main content</a>
   -->
  
<header class="uni-header">
  <nav class="primary-nav navbar navbar-expand-lg">
    
    <?php 
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

        if(has_custom_logo()){ ?>
        <img src="<?php echo esc_url( $logo[0]) ?>" alt="<?php get_bloginfo( 'name' ) ?>" class="mobile-logo"/>
        <?php } else { ?>
        <a href="<?php echo home_url("/") ?>" class="navbar-brand"><?php bloginfo("name"); ?></a>
        <?php
        }
          ?>
      <button class="navbar-toggler align-self-stretch" type="button" data-toggle="collapse" data-target="#siteMainNav" aria-controls="siteMainNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-lg fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse links container" id="siteMainNav">
            <?php 
              if(has_custom_logo()){
              the_custom_logo();
              } else {
              ?>
              <a href="<?php echo home_url("/") ?>" class="navbar-brand"><?php bloginfo("name"); ?></a>
              <?php
              }
              ?>
                <?php 
                  if(has_nav_menu('main')) {
                    $args = [
                      'menu_class'        => 'navbar-nav w-100 menu-main',
                      'container'         => '',
                      'container_class'   => 'collapse navbar-collapse align-items-lg-stretch',
                      'container_id'      => 'siteMainNav',
                      'fallback_cb'       => 'wp_page_menu',
                      'echo'              => true,
                      'before'            => '',
                      'after'             => '',
                      'link_before'       => '',
                      'link_after'        => '',
                      'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'depth'             => 0,
                      'walker'            => new Certification_240_Custom_Nav_Walker()
                    ];
                    wp_nav_menu($args);
                  }
                ?>
        </div>
        <button class="btn btn-secondary"></button>
    </nav>

</header>
  