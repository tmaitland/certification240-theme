<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 hold-links">
                <?php wp_nav_menu(array("theme_location" => "footer")); ?>  
            </div>
            <div class="col-lg-6 col-md-12 hold-footer-logo">
                <?php 
                    if(has_custom_logo()){
                    the_custom_logo();
                    } else {
                    ?>
                    <a href="<?php echo home_url("/") ?>" class="footer-logo"><?php bloginfo("name"); ?></a>
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>  
</footer>