<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<main>

  <!-- Carousel
  ================================================== -->
  <section id="carousel" class="container-fluid">
    <div class="row">
      <div class="col-12 px-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" alt="First slide"
                   src="<?php echo esc_url(get_template_directory_uri().'/assets/images/carousel-1.png' );?>"
              />
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" alt="Second slide"
                   src="<?php echo esc_url(get_template_directory_uri().'/assets/images/carousel-1.png' );?>"
              />
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" alt="Third slide"
                   src="<?php echo esc_url(get_template_directory_uri().'/assets/images/carousel-1.png' );?>"
              />
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Carousel
  ================================================== -->



  <!-- Section 1
  ================================================== -->
  <section id="lines" class="container py-4">
    <div class="row">
      <div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-3 offset-md-0 text-center pt-2">
        <a href="#">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/section-1-1.png' );?>"
               class="img-fluid p-3"
          />
          <p class="font-weight-bold">Investigación y Aplicación de Conocimientos</p>
        </a>
      </div>
      <div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-3 offset-md-0 text-center pt-2">
        <a href="#">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/section-1-2.png' );?>"
               class="img-fluid p-3"
          />
          <p class="font-weight-bold">Democratización de Tecnologías de Información</p>
        </a>
      </div>
      <div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-3 offset-md-0 text-center pt-2">
        <a href="#">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/section-1-3.png' );?>"
               class="img-fluid p-3"
          />
          <p class="font-weight-bold">Comunalización de la Ciencia y la Innovación para la Producción</p>
        </a>
      </div>
      <div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-3 offset-md-0 text-center pt-2">
        <a href="#">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/section-1-4.png' );?>"
               class="img-fluid p-3"
          />
          <p class="font-weight-bold">Financiamiento Público</p>
        </a>
      </div>
    </div>
  </section>
  <!-- Section 1
  ================================================== -->



  <!-- Section 2
  ================================================== -->
  <section id="profiles" class="container">
    <h2 class="text-uppercase font-weight-bold text-dark">Perfiles</h2>
    <p class="text-uppercase">Convocatorias, programas, conocimientos y actividades, según tu esfera de interés.</p>

    <div class="row">
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/section-2-1.png' );?>" class="w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/section-2-2.png' );?>" class="w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/section-2-3.png' );?>" class="w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/section-2-4.png' );?>" class="w-100">
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Section 2
  ================================================== -->

  <br />

  <!-- Section Posts
  ================================================== -->
  <section id="posts" class="container">

    <?php if ( is_home() && ! is_front_page() ) : ?>
      <h2>Novedades</h2>
    <?php else : ?>
      <!--h2><?php _e( 'Posts', 'twentyseventeen' ); ?></h2-->
      <h2>Novedades</h2>
    <?php endif; ?>

    <?php
    echo '<div class="row">';
      if ( have_posts() ):
        /* Start the Loop */
        while ( have_posts() ) :
          echo '<div class="col-12 col-md-4">';
          the_post();
          /*
           * Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'template-parts/post/content', 'main' );
          echo '</div>';
        endwhile;
    echo '</div>';

    echo '<div class="row">';
      echo '<div class="col-12">';
        the_posts_pagination(
          array(
            'prev_text'      => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
            'next_text'      => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
          )
        );
      echo '</div>';
    echo '</div>';

      else :
        get_template_part( 'template-parts/post/content', 'none' );
      endif;

    ?>
  </section>

  <!-- Section Posts
  ================================================== -->


  <!-- Section 3
  ================================================== -->
  <section id="profiles" class="container">
    <h2 class="text-uppercase font-weight-bold text-dark">Nuestros programas</h2>
    <div class="row">
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/prueba.png' );?>" class="w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/prueba.png' );?>" class="w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/prueba.png' );?>" class="w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/prueba.png' );?>" class="w-100">
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Section 3
  ================================================== -->

  <br />

  <!-- Section 4
  ================================================== -->
  <section id="profiles" class="container">
    <h2 class="text-uppercase font-weight-bold text-dark">Galerías</h2>
    <div class="row">
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/prueba.png' );?>" class="w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/prueba.png' );?>" class="w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/prueba.png' );?>" class="w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-3 pb-3">
        <div class="text-center">
          <a class="league-of-shadows" href="#">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/prueba.png' );?>" class="w-100">
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Section 4
  ================================================== -->

  <br />

  <div class="text-center">
    <h1>Aquí va el carousel de los entes</h1>
  </div>



  <!-- Section Sidebar
  ================================================== -->

  <?php // get_sidebar(); ?>

  <!-- Section Sidebar
  ================================================== -->

</main>
<?php
get_footer();