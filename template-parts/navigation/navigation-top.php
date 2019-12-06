<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="navbar navbar-expand-lg" role="navigation"
     aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>"
>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarItems"
          aria-controls="navbarItems" aria-expanded="false" aria-label="Toggle navigation"
  >
    <?php
    echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
    _e( ' Menu', 'twentyseventeen' );
    ?>
  </button>
  <div class="collapse navbar-collapse" id="navbarItems">
    <?php
    wp_nav_menu(
      array(
        'container' => false,
        'theme_location' => 'top',
        'menu_id'        => 'top-menu',
        'menu_class'     => 'navbar-nav mr-auto',
      )
    );
    ?>

    <?php get_search_form(); ?>

  </div>
</nav><!-- #site-navigation -->