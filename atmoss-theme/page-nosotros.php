<?php
/**
* Template Name: Nosotros
*/ 
get_header(); ?>

<main>
<!-- ABOUT
================================================== -->
<?php $nosotros = get_field('nosotros'); if( $nosotros ): ?>
    <section class="nosotros-about hero d-flex align-items-center" style="background: url('<?php echo $nosotros['imagen_de_fondo']; ?>'); background-size: cover; background-position: center bottom;">
        <div class="container-fluid">
            <div class="row justify-content-center px-3">
                <div class="col-12 col-md-8 col-lg-6">
                    <h1><?php echo $nosotros['titulo']; ?></h1>
                    <p class="mb-4"><?php echo $nosotros['descripcion']; ?></p>
                    <blockquote class="w-50 px-3 py-2 white-text"><?php echo $nosotros['firma']; ?></blockquote>
                </div>
                <div class="col-12 col-md-4 col-lg-6"></div>
            </div>
            <div class="row justify-content-center">
                <a href="#team">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/ui/scroll-down.jpg" alt="scroll-down" height="160px">
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>


<!-- TEAM
================================================== -->
<section class="team-about py-4 my-5" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-4">NUESTRO EQUIPO</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="single-item">

                    <?php if( have_rows('nuestro_equipo') ):
                        while ( have_rows('nuestro_equipo') ) : the_row(); ?>
                            
                            <div>
                                <div class="container">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-12 col-md-6">
                                            <?php $image = get_sub_field('fotografia');
                                            if( !empty( $image ) ): ?>
                                                <img src='<?php echo esc_url($image['url']); ?>' alt='<?php echo esc_attr($image['alt']); ?>' class="w-100" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <h5 class="tk-berthold"><?php the_sub_field('nombre'); ?></h5>
                                            <h6 class="tk-berthold"><?php the_sub_field('puesto'); ?></h6>
                                            <p class="font-italic gray-text"><?php the_sub_field('frase'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile;
                    else :
                        echo '<p>No hay integrantes en el equipo por el momento.</p>';
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- MISSION STATEMENT
================================================== -->
<section class="mission-statement py-4 my-5">
    <div class="container">
    <?php $missionStatement = get_field('mision_y_vision'); if( $missionStatement ): ?>

        <div class="row justify-content-around d-flex align-items-center">
            <div class="col-12 col-md-5">
                <img src="<?php echo esc_url( $missionStatement['mision_imagen']['url'] ); ?>" alt="<?php echo esc_attr( $missionStatement['mision_imagen']['alt'] ); ?>" class="w-100" />
            </div>
            <div class="col-12 col-md-5 text-center">
                <h2>MISIÓN</h2>
                <p><?php echo $missionStatement['mision']; ?></p>
            </div>
        </div>
        <div class="row justify-content-around d-flex align-items-center">
            <div class="col-12 col-md-5 text-center order-1 order-md-0">
                <h2>VISIÓN</h2>
                <p><?php echo $missionStatement['vision']; ?></p>
            </div>
            <div class="col-12 col-md-5 order-0 order-md-1">
                <img src="<?php echo esc_url( $missionStatement['vision_imagen']['url'] ); ?>" alt="<?php echo esc_attr( $missionStatement['vision_imagen']['alt'] ); ?>" class="w-100" />
            </div>
        </div>

    <?php endif; ?>
    </div>
</section>
</main>

<?php get_footer(); ?>