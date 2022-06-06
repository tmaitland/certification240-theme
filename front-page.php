<?php
get_header(); ?>

<main id="site-content" class="site-content" role="main"> 
    <div id="main-content" class="main-content main-template container-fluid">
        <div class="row">
            <div class="col-lg-12">
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