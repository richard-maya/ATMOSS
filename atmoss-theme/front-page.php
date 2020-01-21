<?php get_header(); ?>

<main>
<!-- INTRO
================================================== -->
<section class="atmoss-intro">
    <div id="atmoss-intro-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div style="height: 90vh; width: 100%; background-image: url('<?php the_field('imagen_de_fondo_1'); ?>');"></div>
            </div>
            <?php if( have_rows('imagenes_slider_inicial') ):
                while ( have_rows('imagenes_slider_inicial') ) : the_row(); ?>

                <div class="carousel-item">
                    <div style="height: 90vh; width: 100%; background-image: url('<?php the_sub_field('imagen_de_fondo'); ?>');"></div>
                </div>

                <?php endwhile;
            else :
                
            endif; ?>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-6">
                        <header class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/ui/atmoss-arquitectura-construccion-toluca.png" alt="atmoss-arquitectura-construccion-logo" class="w-100 mb-3">
                            <h1 class="text-uppercase text-white"><?php the_field('titulo'); ?></h1>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#atmoss-intro-carousel" data-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#atmoss-intro-carousel" data-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


<!-- SERVICES
================================================== -->
<section class="services-intro py-5 my-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 mb-5">
                <h2>SERVICIOS</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php if( have_rows('servicios') ):
                while ( have_rows('servicios') ) : the_row(); ?>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card py-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <a href="<?php the_sub_field('link_servicio'); ?>" title="<?php the_sub_field('nombre_sservicio'); ?>">
                                            <?php $image = get_sub_field('imagen_servicio');
                                            if( !empty( $image ) ): ?>
                                                <img src='<?php echo esc_url($image['url']); ?>' alt='<?php echo esc_attr($image['alt']); ?>' class="card-img-top img-fluid w-100" />
                                            <?php endif; ?>
                                        </a>
                                        <div class="card-body">
                                            <a href="<?php the_sub_field('link_servicio'); ?>" title="<?php the_sub_field('nombre_sservicio'); ?>">
                                                <h3 class="card-title"><?php the_sub_field('nombre_servicio'); ?></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile;
            else : ?>
                <p>Por el momento no hay servicios.</p>
            <?php endif; ?>
        </div>
    </div>
</section>


<!-- PROJECTS
================================================== -->
<section class="projects-intro my-5 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-center mb-4">NUESTROS PROYECTOS</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid px-5" style="overflow-x:hidden;">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="your-class">
                    <?php $catProjects = new WP_Query( array( 'posts_per_page' => 5 ) ); ?>
                    <?php if ( $catProjects->have_posts() ) : while ( $catProjects->have_posts() ) : $catProjects->the_post(); ?>

                        <figure>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail( 'full', array( 'class' => 'w-100 img-fluid mb-3' ) ); ?>
                            </a>
                            <h6 class="tk-berthold green-text text-center"><?php the_title(); ?></h6>
                        </figure>

                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Lo sentimos, no hay noticias en éste momento.' ); ?></p>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQs
================================================== -->
<section class="faqs-intro py-5 my-5" style="overflow-x: hidden;">
    <div class="container-fluid px-3 px-md-0 d-none d-md-block">
        <div class="row no-gutters">
            <div class="col-12 col-md-4">
                <div class="header py-4 d-flex align-items-center justify-content-center">
                    <h3 class="white-text"><small>VENTAJAS</small></h3>
                </div>
            </div>
            <div class="col-12 col-md-4" style="border-left: 5px solid white; border-right: 5px solid white;">
                <div class="header py-4 d-flex align-items-center justify-content-center text-center">
                    <h3 class="white-text"><small>PREGUNTAS FRECUENTES</small></h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="header py-4 d-flex align-items-center justify-content-center">
                    <h3 class="white-text"><small>ÚLTIMOS TWEETS</small></h3>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12 col-md-4 text-center px-4 py-4">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">

                        <?php if( have_rows('ventajas') ):
                            while ( have_rows('ventajas') ) : the_row(); ?>
                                <?php $image = get_sub_field('imagen_ventaja');
                                if( !empty( $image ) ): ?>
                                    <img src='<?php echo esc_url($image['url']); ?>' alt='<?php echo esc_attr($image['alt']); ?>' class="w-25 my-4"/>
                                <?php endif; ?>

                                <p class="lead"><?php the_sub_field('texto_ventaja'); ?></p>
                            <?php endwhile;
                        else :
                            echo '<p>Por el momento no hay ventajas</p>';
                        endif; ?>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 px-4 py-4" style="border-left: 5px solid #2f3342; border-right: 5px solid #2f3342;">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">

                        <?php if( have_rows('preguntas_frecuentes') ):
                            while ( have_rows('preguntas_frecuentes') ) : the_row(); ?>
                                
                                <h5 class="tk-berthold"><?php the_sub_field('pregunta'); ?></h5>
                                <p class="mb-4"><?php the_sub_field('respuesta'); ?></p>

                            <?php endwhile;
                        else :
                            echo '<p>Por el momento no hay preguntas.</p>';
                        endif; ?>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 px-4 py-4">
                <a class="twitter-timeline" data-width="100%" data-height="500px" data-theme="light" href="https://twitter.com/AtmossMx?ref_src=twsrc%5Etfw">Tweets by AtmossMx</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>

    <!-- MOBILE VERSION -->
    <div class="container d-block d-md-none">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class='accordion' id='preguntas-frecuentes'>
                    <div class='card accordion-card'>
                        <div class='card-header' id='ventajas-tab'>
                            <h3 class='mb-0'>
                                <button class='btn btn-link tk-atmoss white-text' type='button' data-toggle='collapse' data-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>VENTAJAS</button>
                            </h3>
                        </div>
                        <div id='collapseOne' class='collapse show' aria-labelledby='ventajas-tab' data-parent='#preguntas-frecuentes'>
                            <div class='card-body text-center' style="background: white;">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-8">
                                        
                                    <?php if( have_rows('ventajas') ):
                                        while ( have_rows('ventajas') ) : the_row(); ?>
                                            <?php $image = get_sub_field('imagen_ventaja');
                                            if( !empty( $image ) ): ?>
                                                <img src='<?php echo esc_url($image['url']); ?>' alt='<?php echo esc_attr($image['alt']); ?>' class="w-25 my-4"/>
                                            <?php endif; ?>

                                            <p class="lead"><?php the_sub_field('texto_ventaja'); ?></p>
                                        <?php endwhile;
                                    else :
                                        echo '<p>Por el momento no hay ventajas</p>';
                                    endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='card accordion-card'>
                        <div class='card-header' id='faqs-tab'>
                            <h3 class='mb-0'>
                                <button class='btn btn-link tk-atmoss white-text collapsed' type='button' data-toggle='collapse' data-target='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'>PREGUNTAS FRECUENTES</button>
                            </h3>
                        </div>
                        <div id='collapseTwo' class='collapse' aria-labelledby='faqs-tab' data-parent='#preguntas-frecuentes'>
                            <div class='card-body' style="background: white;">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10">
                                        
                                    <?php if( have_rows('preguntas_frecuentes') ):
                                        while ( have_rows('preguntas_frecuentes') ) : the_row(); ?>
                                            
                                            <h5 class="tk-berthold"><?php the_sub_field('pregunta'); ?></h5>
                                            <p class="mb-4"><?php the_sub_field('respuesta'); ?></p>

                                        <?php endwhile;
                                    else :
                                        echo '<p>Por el momento no hay preguntas.</p>';
                                    endif; ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='card accordion-card'>
                        <div class='card-header' id='social-media-tab'>
                            <h3 class='mb-0'>
                                <button class='btn btn-link tk-atmoss white-text collapsed' type='button' data-toggle='collapse' data-target='#collapseThree' aria-expanded='false' aria-controls='collapseThree'>ÚLTIMOS TWEETS</button>
                            </h3>
                        </div>
                        <div id='collapseThree' class='collapse' aria-labelledby='social-media-tab' data-parent='#preguntas-frecuentes'>
                            <div class='card-body' style="background: white;">
                                <a class="twitter-timeline" data-width="100%" data-height="500px" data-theme="light" href="https://twitter.com/AtmossMx?ref_src=twsrc%5Etfw">Tweets by AtmossMx</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- OPTIONAL CONTENT
================================================== -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="py-3 my-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-11 col-lg-10">
                    <?php the_content(); ?>                    
                </div>
            </div>
        </div>
    </section>
<?php endwhile; else : ?>
<?php endif; ?>


<!-- CONTACTO
================================================== -->
<section class="contact-intro">
    <div class="container-fluid px-0" style="overflow-x: hidden;">
        <?php $generalSettings = get_field('datos_de_contacto', 'options'); ?>
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1H-JMIhCEiI0aBKWFztJp5zcXH8kiq2VT" width="100%" height="480"></iframe>
        <div class="row justify-content-center social-media-contact-section no-gutters py-0 my-0 d-flex align-items-end"></div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 contact-details d-flex align-items-center">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="mb-4">CONTACTO</h2>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <i class="fas fa-envelope fa-3x green-text mb-3"></i> <br>
                            <a href="mailto:<?php echo $generalSettings['correo'];?>"><?php echo $generalSettings['correo']; ?></a>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <i class="fas fa-mobile-alt fa-3x green-text mb-3"></i> <br>
                            <a href="tel:<?php echo $generalSettings['telefono']; ?>"><?php echo $generalSettings['telefono']; ?></a>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <i class="fas fa-map-marker-alt fa-3x green-text mb-3"></i> <br>
                            <address>
                                <p><?php echo $generalSettings['direccion']; ?></p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>