<?php get_header(); ?>

<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- PROJECT
================================================== -->
<section class="single-project hero">
    <div class="container-fluid px-0" style="overflow-x: hidden;">
        <div class="row">
            <div class="col-12 col-md-6 order-1 order-md-0">
                <!-- Carrusel -->
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div style="background: url('<?php the_field('primer_imagen'); ?>'); background-size: cover; height: 95vh; width: 100%;"></div>
                        </div>
                        <?php if( have_rows('galeria') ):
                            while ( have_rows('galeria') ) : the_row(); ?>
                                <div class="carousel-item">
                                    <div style="background: url('<?php the_sub_field('imagen'); ?>'); background-size: cover; height: 95vh; width: 100%;"></div>
                                </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


            <!-- Descripción -->
            <div class="col-12 col-md-6 py-5 pr-5 order-0 order-md-1">
                <header class="mb-4">
                    <h1 class="text-uppercase"><?php the_title(); ?></h1>
                    <h2 class="tk-berthold"><?php the_category( ', ' ); ?></h2>
                    <h5><small class="tk-berthold"><?php the_field('ciudad'); ?>, <?php the_field('estado'); ?></small></h5>
                </header>

                <p class="mb-4 gray-text"><?php the_content(); ?></p>

                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td><?php the_field('ano'); ?></td>
                            <td><?php the_field('medidas'); ?></td>
                            <td><?php the_field('status'); ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr style="border-top: 3px solid #bed630;">
                            <th class="gray-text font-italic">Año</th>
                            <th class="gray-text font-italic">Medidas</th>
                            <th class="gray-text font-italic">Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Lo sentimos, no hay proyectos en la galería en éste momento.' ); ?></p>
<?php endif; ?>
</main>

<?php get_footer(); ?>