<?php
/**
 * The template for displaying single posts.
 */

 if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();

    }
}

get_header();
?>

<main id="site-content" class="site-content" role="main"> 
    <div id="post-content" class="post-content post-template container">
        <div class="row">
            <div class="col-lg-12">
                <div class="entry-title">
                    <?php 
                        if ( is_singular() ) {
                            the_title( '<h1 class="entry-title">', '</h1>' );
                        } else {
                            the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
                        }
                    ?>
                </div>
                <div class="entry-content">
                    <?php
                    if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
                        the_excerpt();
                    } else {
                        the_content( __( 'Continue reading', 'cert-240-theme' ) );
                    }
                    ?>
                </div><!-- .entry-content -->
            </div>
        </div>
    </div>
</main><!-- #site-content -->

<?php get_footer(); ?>