<?php get_header(); ?>

<main>
<!-- INTRO
================================================== -->
<section class="atmoss-intro d-flex align-items-center" style="height: 90vh; width: 100%; background-image: url('<?php the_field('imagen_de_fondo'); ?>');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6">
                <header class="text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/atmoss-logo.png" alt="atmoss-arquitectura-construccion-logo" class="w-100 mb-3">
                    <h1><small class="tk-berthold text-white"><?php the_field('titulo'); ?></small></h1>
                </header>
            </div>
        </div>
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
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card py-5">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-12">
                                <a href="servicios.html" title="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/diseno-arquitectonico-toluca.jpg" class="card-img-top w-100" alt="diseno-arquitectonico-toluca">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title"><?php the_field('servicio_1'); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card py-5">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-12">
                                <a href="servicios.html" title="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/supervision-construccion-toluca.jpg" class="card-img-top w-100" alt="supervision-construccion-toluca">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title"><?php the_field('servicio_2'); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card py-5">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-12">
                                <a href="servicios.html" title="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/modelado-3d-recorridos-virtuales-toluca.jpg" class="card-img-top w-100" alt="modelado-3d-recorridos-virtuales-toluca">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title">RECORRIDOS VIRTUALES</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card py-5">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-12">
                                <a href="servicios.html" title="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/gestoria-toluca.jpg" class="card-img-top w-100" alt="gestoria-toluca">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title">GESTORÍA DE PROYECTOS</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card py-5">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-12">
                                <a href="servicios.html" title="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/maquetas-profesionales-toluca.jpg" class="card-img-top w-100" alt="maquetas-profesionales-toluca">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title">MAQUETAS PROFESIONALES</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card py-5">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-12">
                                <a href="servicios.html" title="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ampliaciones-remodelaciones-toluca.jpg" class="card-img-top w-100" alt="ampliaciones-remodelaciones-toluca">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title">AMPLIACIONES Y REMODELACIONES</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card py-5">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-12">
                                <a href="servicios.html" title="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/diseno-estructural-toluca.jpg" class="card-img-top w-100" alt="diseno-estructural-toluca">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title">DISEÑO ESTRUCTURAL</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card py-5">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-12">
                                <a href="servicios.html" title="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/diseno-estructural-toluca.jpg" class="card-img-top w-100" alt="diseno-estructural-toluca">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title">INMOBILIARIA</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-10">
                <div class="your-class">
                    <?php query_posts( 'posts_per_page=5' ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <figure>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail( 'full', array( 'class' => 'w-100 img-fluid mb-3' ) ); ?>
                            </a>
                            <h6 class="tk-berthold green-text text-center"><?php the_title(); ?></h6>
                        </figure>

                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Lo sentimos, no hay noticias en éste momento.' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQs
================================================== -->
<section class="faqs-intro py-5 my-5" style="overflow-x: hidden;">
    <div class="container-fluid px-3 px-md-0">
        <div class="row no-gutters">
            <div class="col-12 col-md-4">
                <div class="header py-4 d-flex align-items-center justify-content-center">
                    <h3 class="white-text">VENTAJAS</h3>
                </div>
            </div>
            <div class="col-12 col-md-4" style="border-left: 5px solid white; border-right: 5px solid white;">
                <div class="header py-4 d-flex align-items-center justify-content-center text-center">
                    <h3 class="white-text">PREGUNTAS FRECUENTES</h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="header py-4 d-flex align-items-center justify-content-center">
                    <h3 class="white-text">REDES SOCIALES</h3>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12 col-md-4 text-center px-4 py-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/nuevas-tecnologias.png" alt="nuevas-tecnologias" class="w-25 my-4">
                <p class="lead">Implementación de nuevas tecnologías</p>

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/cuidado-medio-ambiente.png" alt="nuevas-tecnologias" class="w-25 my-4">
                <p class="lead">Cuidado del medio ambiente</p>

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/soluciones-rentables.png" alt="nuevas-tecnologias" class="w-25 my-4">
                <p class="lead">Soluciones rentables</p>
            </div>
            <div class="col-12 col-md-4 px-4 py-4" style="border-left: 5px solid #2f3342; border-right: 5px solid #2f3342;">
                <h5 class="tk-berthold">¿Cómo puedo hacer esto?</h5>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quasi ab dolor, vero eveniet quod eos maiores. Nihil, consequuntur dolores?</p class="mb-5">
                
                <h5 class="tk-berthold">¿Cómo puedo hacer esto?</h5>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quasi ab dolor, vero eveniet quod eos maiores. Nihil, consequuntur dolores?</p>
                
                <h5 class="tk-berthold">¿Cómo puedo hacer esto?</h5>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quasi ab dolor, vero eveniet quod eos maiores. Nihil, consequuntur dolores?</p>
            </div>
            <div class="col-12 col-md-4 px-4 py-4">

            </div>
        </div>
    </div>
</section>


<!-- CONTACTO
================================================== -->
<section class="contact-intro">
    <div class="container-fluid px-0" style="overflow-x: hidden;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.45712471048!2d-99.62332998499541!3d19.26247728698119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8a45761a8a35%3A0x73c997f589d7cf64!2sIconica%20Studio%20-%20Estudio%20de%20dise%C3%B1o%20y%20marketing%20digital!5e0!3m2!1sen!2smx!4v1576475904092!5m2!1sen!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
                            <a href="mailto:ycampuzano@atmoss.mx">ycampuzano@atmoss.mx</a>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <i class="fas fa-mobile-alt fa-3x green-text mb-3"></i> <br>
                            <a href="tel:5540219980">55 4021 9980</a>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <i class="fas fa-map-marker-alt fa-3x green-text mb-3"></i> <br>
                            <address>
                                <p>
                                    Calle, número, colonia <br>
                                    CP, Ciudad, Estado.
                                </p>
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