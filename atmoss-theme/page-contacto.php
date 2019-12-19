<?php
/**
* Template Name: Contacto
*/ 
get_header(); ?>

<main>
<!-- CONTACT
================================================== -->
<section class="contact-page hero">
    <div class="container-fluid px-0" style="overflow-x: hidden;">
        <div class="row">
            <div class="col-12 col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.45712471048!2d-99.62332998499541!3d19.26247728698119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8a45761a8a35%3A0x73c997f589d7cf64!2sIconica%20Studio%20-%20Estudio%20de%20dise%C3%B1o%20y%20marketing%20digital!5e0!3m2!1sen!2smx!4v1576475904092!5m2!1sen!2smx" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-12 col-md-6 py-5 pr-5">
                <header class="mb-4">
                    <h1 class="text-center">CONTACTO</h1>
                </header>

                <div class="row justify-content-center mb-4">
                    <div class="col-12 col-md-11 col-lg-10">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre *</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Teléfono *</label>
                                <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo *</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mensaje *</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="row justify-content-center py-3">
                                <button type="submit" class="btn btn-atmoss px-4">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 text-center">
                        <i class="fas fa-envelope fa-3x green-text mb-3"></i> <br>
                        <a href="mailto:ycampuzano@atmoss.mx">ycampuzano@atmoss.mx</a>
                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <i class="fas fa-mobile-alt fa-3x green-text mb-3"></i> <br>
                        <a href="tel:5540219980">55 4021 9980</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>