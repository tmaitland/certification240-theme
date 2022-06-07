<?php
/**
 * Template Name: Stories 
 * Template Post Type: page
 *
 */


get_header(); ?>

<main id="site-content" class="site-content" role="main"> 
    <div id="story-template" class="temp-content story-template">
    <?php get_template_part('./template-parts/custom-header'); ?>
        <div class="temp container">
            <div class="row acf-content">

             <?php  
              $post_objects = get_fields();

                if( $post_objects ): ?>
                    <ul>
                    <?php foreach( $post_objects as $post_obj ): 
                        $permalink = get_permalink( $post_obj->ID );
                        $title = get_the_title( $post_obj->ID );

                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post_obj); ?>
                        <li>
                            <a href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
                            
                        </li>
                    <?php endforeach; ?>
                    </ul>
                    <?php 
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                    
                <?php endif; ?> 
                
              
             

                <!-- <//?php var_dump($post_objects); ?> -->
            </div>
            <div class="row block-content">                
                 <?php
                    if ( have_posts() ) {
                        wp_reset_query();
                        setup_postdata($post); 
                        echo esc_attr(htmlentities(the_content()));
                    } else {
                        echo "No text defined.";
                    }
                 wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>   
</main>
<?php get_footer(); ?>