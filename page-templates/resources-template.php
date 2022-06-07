<?php
/**
 * Template Name: Resources 
 * Template Post Type: page
 *
 */

get_header(); ?>

<main id="site-content" class="site-content" role="main"> 
    <div id="resource-template" class="temp-content resource-template">
    <?php get_template_part('./template-parts/custom-header'); ?>
        <div class="temp container-fluid">
            <div class="temp-content">
                <?php if( have_rows('resources') ): ?>
                    <ul>
                    <?php while ( have_rows('resources') ) : the_row(); ?>
                        <li><?php echo the_sub_field('detail_text'); ?></li>
                    <?php endwhile; ?>
                    </ul>
                <?php else : ?>
                    <p>No rows found.</p>
                <?php endif; ?>
            
            </div>
            <div class="block-content">
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