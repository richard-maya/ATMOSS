<?php get_header(); ?>

<main>
<!-- GALLERY
================================================== -->
<section class="projects-gallery py-4 my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-10">
                <header>
                    <h1 class="text-center pb-3">NUESTROS PROYECTOS</h1>
                    <h5 class="text-uppercase text-center pb-4 tk-atmoss" style="font-size: 2rem;"><?php the_category( ', ' ); ?></h5>
                </header>
            </div>
            <div class="col-12 col-md-11 col-lg-10">
                <div class="container">
                    <div class="row">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <div class="col-6 col-md-4 text-center mb-5">
                            <figure>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail( 'full', array( 'class' => 'w-100 img-fluid mb-4' ) ); ?>
                                </a>
                                <h6 class="tk-berthold blue-text mb-0"><?php the_title(); ?></h6>
                            </figure>
                        </div>

                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Lo sentimos, no hay noticias en éste momento.' ); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="row justify-content-center">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <span class="page-link"><?php previous_posts_link('Anterior'); ?></span>
                                </li>
                                <li class="page-item">
                                    <span class="page-link"><?php next_posts_link('Siguiente'); ?></span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>