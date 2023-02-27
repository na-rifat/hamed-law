<?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @package iq3
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     */

?>

<footer id="footer" class="footer">
    <div class="container">
        <div class="wrapper">
            <div class="copyright">
                <?php echo carbon_get_theme_option( 'copyright' ) ?>
            </div>
            <div class="right">
                <div class="socials">
                    <?php foreach ( carbon_get_theme_option( 'social_icons' ) as $social ) {
                            printf( '<a href="%s" aria-label="%s">%s</a>', $social['url'], $social['title'], wp_get_attachment_image( $social['icon'], 'original' ) );
                    }?>
                </div>
                <div class="footer-nav">
                    <?php wp_nav_menu( [
                            'theme_location'  => 'footer',
                            'depth'           => 1,
                            'container'       => 'nav',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'nav navbar-nav',
                            'fallback_cb'     => 'cdc\Navwalker::fallback',
                            'walker'          => new hmd\Navwalker(),
                    ] );?>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer();?>
</body>

</html>