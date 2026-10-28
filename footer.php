</div>

<?php get_template_part('template-parts/contact-section'); ?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="row py-5">
            <!-- Logo Section -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
    <img src="http://mycentralheating.co.uk/wp-content/uploads/2025/07/awo_logo-png.avif" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="header-nav-logo">
  </a>
            </div>
            
            <!-- Main Menu Navigation -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <h5 class="footer-header mb-3">Services</h5>
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'footer-menu list-unstyled',
                    'fallback_cb' => false,
                    'container' => false
                )); ?>
            </div>
            
            <!-- Company Section -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <h5 class="footer-header mb-3">Company</h5>
                <?php wp_nav_menu(array(
                    'theme_location' => 'company-menu',
                    'menu_class' => 'footer-menu list-unstyled',
                    'fallback_cb' => false,
                    'container' => false
                )); ?>
            </div>
            
            <!-- Policies Section -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <h5 class="footer-header mb-3">Policies</h5>
                <?php wp_nav_menu(array(
                    'theme_location' => 'policies-menu',
                    'menu_class' => 'footer-menu list-unstyled',
                    'fallback_cb' => false,
                    'container' => false
                )); ?>
            </div>
        </div>
    </div>
    
    <!-- Copyright Section -->
    <div class="border-top">
        <div class="container">
            <div class="row py-3">
                <div class="col-12">
                    <p class="mb-0 text-muted">&copy; <?php echo date('Y'); ?> Appliance World Online. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
