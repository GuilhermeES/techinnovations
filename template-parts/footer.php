    <footer class="footer text-center text-md-start ">
        <div class="container">
            <div class="footer__top row justify-content-between">
                <div class="col-md-6 mb-4">
                    <h3 class="footer__logo"> Tech Innovations </h3>
                    <div class="footer__social d-flex justify-content-center justify-content-md-start mb-3 mt-3">
                        <a href="#" target="_blank" class="me-3" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" target="_blank" aria-label="Linkedin">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                    <a href="<?php echo get_home_url() ?>/contato" class="btn btn-standard"> Entre em contato </a>
                </div>
                <div class="col-md-4">
                    <?php wp_nav_menu(array(
                        'container' => false,
                        'menu_class' => 'footer__nav',
                        'add_li_class' => 'nav-link',
                        'theme_location' => 'footer',
                    ));
                    ?>
                </div>
            </div>
            <div class="footer__divisor"></div>
            <div class="footer__bot">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nam scelerisque tortor sed elit sodales lacinia. Quisque vehicula ultrices lorem at commodo. 
                    Sed hendrerit felis risus, sit amet malesuada tortor pulvinar a. Mauris sed orci orci. 
                    Nunc faucibus mauris et ornare tincidunt. Mauris eget tortor nec leo finibus lobortis. 
                    Mauris nec lacus odio. Vivamus consequat convallis dolor vel posuere. 
                    Etiam rutrum mi vel consequat dapibus. Praesent vel libero diam. Duis nec tempus ex, a varius dui.
                </p>
                <p>
                    Copyright © <?php echo get_bloginfo('name') . ' ' . date('Y'); ?>
                </p>
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>
</main>
</body>

</html>