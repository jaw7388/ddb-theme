<?php

get_header('test');?>

<!-- <div class="container">
    <h1>
        <?php //the_title(); ?>
    </h1>
    <?php //get_template_part('includes/section', 'content') ?>
</div> -->

<section class="container-fluid main">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="wp-content/uploads/2020/06/Sin-título-1.jpg" class="d-block w-100" alt="...">
        <div class="container wrap-animation">
                <div class="row">
                    <div class="col-4 header-message">
                        <h1>NUESTRO TRABAJO SALVA VIDAS</h1>
                        <div class="title-separator mt-4"></div>
                        <div class="mt-4">
                            <h3>
                                <span class="header-sub-text">
                                    Comprometidos con la salud de todos los colombianos
                                </span>
                            </h3>    
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="carousel-item">
        <img src="wp-content/uploads/2020/06/Sin-título-1.jpg" class="d-block w-100" alt="...">
        <div class="container wrap-animation">
                <div class="row">
                    <div class="col-4 header-message">
                        <h1>NUESTRO TRABAJO SALVA VIDAS</h1>
                        <div class="title-separator mt-4"></div>
                        <div class="mt-4">
                            <h3>
                                <span class="header-sub-text">
                                    Comprometidos con la salud de todos los colombianos
                                </span>
                            </h3>    
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="carousel-item">
        <img src="wp-content/uploads/2020/06/Sin-título-1.jpg" class="d-block w-100" alt="...">
        <div class="container wrap-animation">
                <div class="row">
                    <div class="col-4 header-message">
                        <h1>NUESTRO TRABAJO SALVA VIDAS</h1>
                        <div class="title-separator mt-4"></div>
                        <div class="mt-4">
                            <h3>
                                <span class="header-sub-text">
                                    Comprometidos con la salud de todos los colombianos
                                </span>
                            </h3>    
                        </div>
                    </div>
                </div>    
            </div>
        </div>
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

</section>

<section class="section-with-background background-redddb">
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-12 text-center" >
                <h3>Comercialización y distribución de medicamentos a la medida</h3>
            </div>
            <p class="mt-3">
            Nos especializamos en la comercialización y distribución de productos farmacéuticos éticos y genéricos, dispositivos médicos y kits institucionales a entidades estatales y privadas
            </p>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 text-center border-right border-light service">
                <i class="far fa-clock"></i>
                <div class="mt-3"></div>
                <h6>SERVICIO 7 DÍAS</h6>
                <span class="icon-text">Entrega de medicamentos en las instituciones y redes de distribución especializada</span>   
            </div>
            <div class="col-md-3 text-center border-right border-light service">
                <i class="fas fa-chalkboard-teacher"></i>
                <div class="mt-3"></div>
                <h6>ASESORÍA EN CALIDAD</h6>
                <span class="icon-text">Modelos conceptuales donde se identifique las fallas de la atención en salud y probabilidades de riesgo</span>   
            </div>
            <div class="col-md-3 text-center border-right border-light service">
                <i class="fas fa-phone-volume"></i>
                <div class="mt-3"></div>
                <h6>LINEA NARANJA</h6>
                <span class="icon-text">Suplimos con los productos en tiempo más reducido en caso de urgencias</span>   
            </div>
            <div class="col-md-3 text-center service">
                <i class="fas fa-globe"></i>
                <div class="mt-3"></div>
                <h6>SOMOS ISO 6001</h6>
                <span class="icon-text">NTC 6001:2008 desde el año 2014 y vigente a la fecha. Mostrando nuestra calidad en los procesos</span>   
            </div>
        </div>
    </div>
</section>

<section class="section-without-background">
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-12 text-center">
                <h3>Productos</h3>
            </div>    
        </div>
        <div class="row mt-5">
            <div class="col-md-4 text-center home-products-wraper">
                <a href="<?php echo(get_site_url() . '/productos#medicamentos');?>">
                    <img src="wp-content/uploads/2020/05/medicamentos.jpg" alt="">
                    <div class="mt-3"></div>
                    <h4>MEDICAMENTOS</h4>
                    Productos farmaceúticos, éticos y genéricos con el respaldo de los mejores laboratorios
                </a>
            </div>
            <div class="col-md-4 text-center home-products-wraper">
                <a href="<?php echo(get_site_url() . '/productos#kits');?>">
                    <img src="wp-content/uploads/2020/05/dispositivos.jpg" alt="">
                    <div class="mt-3"></div>
                    <h4>DISPOSITIVOS MÉDICOS</h4>
                    Dispositivos médicos de alta calidad. Canales de distribución y asesoría en calidad
                </a>
            </div>
            <div class="col-md-4 text-center home-products-wraper">
                <a href="<?php echo(get_site_url() . '/productos#kits');?>">
                    <img src="wp-content/uploads/2020/05/kits.jpg" alt=""> 
                    <div class="mt-3"></div>
                    <h4>KITS</h4>
                    Kits de emergencia materna, Kits de violencia sexual a menores y adultos, Kits de glucometría
                </a>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container mb-5 pt-5 border-top border-danger">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/ABBOTT.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/BAXTER.png" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/BAYER.png" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/B-BRAUN.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/CHALVER.png" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/BIOGEN.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="section-testimonial section-with-background">
    <div class="row ">
        <div class="col-md-12 text-center">
            <h3>Clientes satisfechos</h3>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4 text-center">
            <p><i>"Cumplimiento con los tiempos de entrega y amabilidad en el servicio"</i></p>
            <p><strong>Camilo Perez</strong> </p>
            <p>Hospital San Rafael de Fusa</p>
        </div>
        <div class="col-md-4 text-center">
            <p><i>"Lograron atendernos cuando más lo necesitabamos y con toda disposición"</i></p>
            <p><strong>David Lara</strong> </p>
            <p>Fudación Cardio Infantil</p>
        </div>
        <div class="col-md-4 text-center">
            <p><i>"Son una empresa que comple con precios competitivos y valores agregados"</i></p>
            <p><strong>Mary Wells</strong> </p>
            <p>Hospital San Rafael de Fusa</p>
        </div>
    </div> 
</section>

<section>
    <div class="container mb-5 pt-5" >
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/HOSP-SIMON-B.png" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/HOSP-TUNAL.png" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/HOSP-MEDERI.png" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/CLINICA-NUEVA.png" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/OSP-S-IGNACIO.png" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="wp-content/uploads/2020/05/HOSP-MEISSEN.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
