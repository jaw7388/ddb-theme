<?php
/*
*
Template Name: Contacto
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
                    Contacto
                </h1>
            </div>    
        </div>
    </div>
</div>
<!-- End Hero section -->

<section class="section-without-background">
    <div class="container">

        <h1>
            Contacto
        </h1>
        <div class="row">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.4809669830456!2d-74.12385568523767!3d4.686158296596175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b451d6a85f3%3A0x7213b2e152566ddf!2sParque%20Empresarial%20Puerta%20del%20Sol!5e0!3m2!1ses-419!2sco!4v1590555054990!5m2!1ses-419!2sco" width="100%" height="90%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="168" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
