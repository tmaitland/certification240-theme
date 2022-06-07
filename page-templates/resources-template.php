<?php
/**
 * Template Name: Resources 
 * Template Post Type: page
 *
 */

get_header(); ?>

<main id="site-content" class="site-content" role="main"> 
    <div id="story-template" class="temp-content story-template">
    <?php get_template_part('./template-parts/custom-header'); ?>
        <div class="temp container">
            <div class="row">
            <?php
                if ( have_posts() ) {
                    wp_reset_query();
                    setup_postdata($post); 
                    echo esc_attr(htmlentities(the_content()));
                } else {
                    echo "No text defined.";
                }
            ?>
            </div>
        </div>
    </div>   
</main>
<?php get_footer(); ?>