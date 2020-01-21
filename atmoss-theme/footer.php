<!-- FOOTER
================================================== -->
<footer class="my-0 py-3">
    <div class="container-fluid">
        <div class="row justify-content-between px-3">
            <div class="col-12 col-md-3 text-center text-md-left mb-3 mb-md-0">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/ui/atmoss-arquitectura-construccion-logo.png" alt="atmoss-arquitectura-construccion-logo" class="w-50">
            </div>
            <div class="col-12 col-md-3 text-center mb-3 mb-md-0">
                <a href="<?php $footerSettings = get_field('footer', 'options'); if( $footerSettings ): ?>
                    <?php echo $footerSettings['facebook']; endif; ?>" target="_blank">
                    <i class="fab fa-facebook-square fa-lg white-text px-2"></i>
                </a>
                <a href="<?php echo $footerSettings['instagram']; ?>" target="_blank">
                    <i class="fab fa-instagram fa-lg white-text px-2"></i>
                </a>
                <a href="<?php echo $footerSettings['twitter']; ?>" target="_blank">
                    <i class="fab fa-twitter-square fa-lg white-text px-2"></i>
                </a>
            </div>
            <div class="col-12 col-md-3 text-center text-md-right">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> ATMOSS. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://kit.fontawesome.com/2ac572db93.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>