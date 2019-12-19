<?php get_header(); ?>

<main>
<!-- SERVICE
================================================== -->
<section class="service hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-10">
                <header>
                    <h1 class="pb-4 pt-5"><?php the_title(); ?></h1>
                </header>
            </div>

            <div class="col-12 col-md-11 col-lg-10 mb-4">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Lo sentimos, no hay proyectos en éste momento.' ); ?></p>
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-11 col-lg-10">
                <div class="single-item">
                    <?php $catProjects = new WP_Query( array( 'cat' => 19, 'posts_per_page' => 5 ) ); ?>
                    <?php if ( $catProjects->have_posts() ) : while ( $catProjects->have_posts() ) : $catProjects->the_post(); ?>

                        <div>
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12 col-md-8">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail( 'full', array( 'class' => 'w-100 img-fluid' ) ); ?>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <h5 class="tk-berthold"><?php the_title(); ?></h5>
                                        <p class="font-italic gray-text"><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-atmoss btn-block btn-sm">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Lo sentimos, no hay proyectos en éste momento.' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>