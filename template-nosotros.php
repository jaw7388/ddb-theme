<?php
/*
*
Template Name: Nosotros
*/

get_header();
?>

<!-- Hero section -->
<div style="
background-color: rgba(255, 255, 255, 0);
background-image: linear-gradient(130deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.4) 100%), url(https://static9.depositphotos.com/1258191/1223/i/950/depositphotos_12233276-stock-photo-pharmacist-reaching-for-medicine.jpg);
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
color: #ffffff;
height: 60vh;
margin-bottom: 2em;">
    <div class="d-flex justify-content-center page-hero-text">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    sómos ddb
                </h1>
            </div>    
        </div>
    </div>
</div>
<!-- End Hero section -->
<section>
    <div class="container">
        <h1 class="text-center mb-4">Nosotros</h1>
        <div class="row">
            
            <div class="col-md-12">
                <p>
                    Depósito de Drogas Boyacá (DDB), es una compañía especializada en la comercialización y distribución de productos farmacéuticos éticos y genéricos a empresas sociales del estado, hospitales adscritos a la red distrital y numerosas clínicas, sociedades y fundaciones de orden privado o de economía mixta.
                </p>
                <p>Nace 40 años atrás buscando ofrecer una solución a las obligaciones del Sector Salud Colombiano, que por medio de un óptimo engranaje entre comercialización y distribución, le ha permitido consolidarse hasta el día de hoy como uno de los operadores logísticos más reconocidos del mercado, atendiendo satisfactoriamente el llamado de importantes instituciones públicas y privadas a nivel nacional en sus necesidades de productos farmacéuticos y hospitalarios.</p>
            </div>
            <div class="col-md-12 section-nosotros">
                <div>
                    <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/jefe-150x150-1.jpg');?>" alt="">
                    <p><i>"Hacemos posible que la gente pueda recibir sus tratamientos gracias a nuestro cumplimiento y compromiso"</i></p>
                    <p><strong>Rafael Salamanca</strong> </p>
                    <p><span class="mt-0">Gerente</span></p>
                </div>
            </div>
        </div>
        <hr>
        
        <h1 class="text-center mt-5 mb-4">Principios Corporativos</h1>
        <div class="row principios-corporativos">
            <div class="col-md-3 text-center">
                <i class="fas fa-users-cog"></i>
                <h3> Compromiso</h3>
            </div>                
            <div class="col-md-3 text-center">
                <i class="fas fa-users"></i>
                <h3>Respeto</h3>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-user-plus"></i>
                <h3>Responsabilidad</h3>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-hand-sparkles"></i>
                <h3>Transparencia</h3>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-4">Politica Ambiental</h1>
                <p>Desarrollar tecnologías más apropiadas, mecanismos y procedimientos de optimización en el manejo integral de residuos hospitalarios y similares, con el fin de prevenir y minimizar los impactos sanitarios y ambientales causados por las actividades del área operacional y administrativa. La gestión se fundamentará en la capacitación del recurso humano y el mejoramiento continuo de los procesos y procedimientos.</p>
            </div>
        </div>
    </div>
    <hr>
</section>





<?php
get_footer();
