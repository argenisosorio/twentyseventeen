<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  if ( is_sticky() && is_home() ) :
    echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
  endif;
  ?>

  <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
    <div class="post-thumbnail">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
      </a>
    </div><!-- .post-thumbnail -->
  <?php else: ?>
    <div class="post-thumbnail">
      <a href="<?php the_permalink(); ?>">
        <img class="attachment-twentyseventeen-featured-image size-twentyseventeen-featured-image wp-post-image"
             src="<?php echo esc_url(get_template_directory_uri().'/assets/images/1440x810.png' );?>"
             alt="Default image"
        />
      </a>
    </div><!-- .post-thumbnail -->
  <?php endif; ?>

  <div class="entry-content">

    <?php
      if ( is_single() ) {
        the_title( '<h2 class="h6">', '</h2>' );
      } elseif ( is_front_page() && is_home() ) {
        the_title( '<h2 class="h6">', '</h2>' );
      } else {
        the_title( '<h2 class="h6">', '</h2>' );
      }
    ?>

    <p class="text-center">
      <a class="btn btn-link" href="<?php the_permalink(); ?>">Leer más</a>
    </p>
  </div><!-- .entry-content -->

  <?php
  if ( is_single() ) {
    twentyseventeen_entry_footer();
  }
  ?>

</article><!-- #post-<?php the_ID(); ?> -->
