<div class="row block-content">                
    <!-- <//?php
        if ( have_posts() ) {
            wp_reset_query();
            setup_postdata($post); 
            echo esc_attr(htmlentities(the_content()));
        } else {
            echo "No text defined.";
        }
    ?> -->
    <?php
        $args = array(
            'parent' => 1
        );
        $page_query = new WP_Query( $args );
        while ( $page_query->have_posts() ) :  $page_query->the_post();
        esc_attr(htmlentities(the_content()));
        endwhile;
        // reset post data (important!)
        wp_reset_postdata();
    ?>
</div>