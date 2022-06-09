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
        <div class="year-copy"> &copy;<span><?php echo date('Y'); ?></span> - 240Tutoring, Inc.</div>
    </div>
    <?php wp_footer(); ?>  
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>

</footer>