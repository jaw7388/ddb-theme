<?php
/*
*
Template Name: Portafolio
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
                    Portafolio
                </h1>
            </div>    
        </div>
    </div>
</div>
<!-- End Hero section -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-4">Medicamentos</h1>
                <p>
                Productos farmacéuticos éticos y genéricos
                </p>
            </div>
        </div>
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/ABBOTT.jpg');?>" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/BAXTER.png');?>" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/BAYER.png');?>" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/B-BRAUN.jpg');?>" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/CHALVER.png');?>" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/BIOGEN.png');?>" alt="" class="img-fluid">
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-4">Kits de Toma de Muestras</h1>
                <p>
                El proceso de abordaje integral forense de la víctima en la investigación del delito sexual hace parte de un modelo de atención integral, interinstitucional e intersectorial, para garantizar la atención efectiva de sus necesidades de salud, protección y justicia.
                </p>
            </div>
        </div>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-4">Kits Violencia Sexual Menores y Adultos</h1>
                <h3 class="text-center">Menores de edad</h3>
                <p>
                Según LEY 1146 DE 2007 del CONGRESO DE LA REPÚBLICA, se expiden normas para la prevención de la violencia sexual y atención integral de los niños, niñas y adolescentes abusados sexualmente. Atención integral en salud, En caso de abuso sexual a niños, niñas y adolescentes, el Sistema General en Salud tanto público como privado, así como los hospitales y centros de salud de carácter público, están en la obligación de prestar atención médica de urgencia e integral en salud a través de profesionales y servicios especializados.
                </p>
                <h3 class="text-center">Mayores de edad</h3>
                <p>
                Según LEY 1146 DE 2007 del CONGRESO DE LA REPÚBLICA, se expiden normas para la prevención de la violencia sexual y atención integral de los niños, niñas y adolescentes abusados sexualmente. Atención integral en salud, En caso de abuso sexual a niños, niñas y adolescentes, el Sistema General en Salud tanto público como privado, así como los hospitales y centros de salud de carácter público, están en la obligación de prestar atención médica de urgencia e integral en salud a través de profesionales y servicios especializados.
                </p>
            </div>
        </div>
        

    </div>
    <hr>
</section>

<?php
get_footer();
?>


