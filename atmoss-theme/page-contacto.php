<?php
/**
* Template Name: Contacto
*/ 
get_header(); ?>

<?php $generalSettings = get_field('datos_de_contacto', 'options'); ?>
<main>
<!-- CONTACT
================================================== -->
<section class="contact-page hero">
    <div class="container-fluid px-0" style="overflow-x: hidden;">
        <div class="row">
            <div class="col-12 col-md-6 order-1 order-md-0">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1H-JMIhCEiI0aBKWFztJp5zcXH8kiq2VT" width="100%" height="90vh"></iframe>
            </div>
            <div class="col-12 col-md-6 py-5 pr-5 order-0 order-md-1">
                <header class="mb-4">
                    <h1 class="text-center">CONTACTO</h1>
                </header>

                <div class="row justify-content-center mb-4">
                    <div class="col-12 col-md-11 col-lg-10">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Lo sentimos, el formulario está fuera de funcionamiento.' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 text-center">
                        <i class="fas fa-envelope fa-3x green-text mb-3"></i> <br>
                        <a href="mailto:<?php echo $generalSettings['correo']; ?>" class="gray-text"><?php echo $generalSettings['correo']; ?></a>
                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <i class="fas fa-mobile-alt fa-3x green-text mb-3"></i> <br>
                        <a href="tel:<?php echo $generalSettings['telefono']; ?>" class="gray-text"><?php echo $generalSettings['telefono']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>