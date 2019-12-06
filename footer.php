<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
<footer class="bg-dark py-5">
  <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3 class="footer-titles">Nosotros</h3>
    </div>
    <div class="col-sm-4">
      <h3 class="footer-titles">Ubicanos</h3>
    </div>
    <div class="col-sm-4">
      <h3 class="footer-titles">Redes sociales</h3>
    </div>
  </div>
    <div class="row">
      <div class="col-12">
        <?php
        get_template_part( 'template-parts/footer/footer', 'widgets' );
        if ( has_nav_menu( 'social' ) ) :
          ?>
          <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'social',
                  'menu_class'     => 'social-links-menu',
                  'depth'          => 1,
                  'link_before'    => '<span class="screen-reader-text">',
                  'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
                )
              );
            ?>
          </nav><!-- .social-navigation -->
          <?php
        endif;
        get_template_part( 'template-parts/footer/site', 'info' );
        ?>
      </div>
    </div>
  </div><!-- .wrap -->
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>