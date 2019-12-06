<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( twentyseventeen_unique_id( 'search-form-' ) ); ?>

<form id="searchform" class="my-2 my-lg-0" role="search" method="get"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label class="sr-only"  for="<?php echo $unique_id; ?>">
    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentyseventeen' ); ?></span>
  </label>
  <div class="input-group">
    <input id="<?php echo $unique_id; ?>" class="form-control" type="search" name="s"
           placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentyseventeen' ); ?>"
           value="<?php echo get_search_query(); ?>" aria-describedby="button-search" />
    <div class="input-group-append">
      <button id="button-search" class="btn btn-search my-2 my-sm-0" type="submit">
        <?php echo twentyseventeen_get_svg( array( 'icon' => 'search' ) ); ?>
        <span class="screen-reader-text">
          <?php echo _x( 'Search', 'submit button', 'twentyseventeen' ); ?>
        </span>
      </button>
    </div>
  </div>
</form>