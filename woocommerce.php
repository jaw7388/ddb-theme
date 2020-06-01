<?php get_header(); ?>

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
                <h1><?php the_title(); ?></h1>
            </div>    
        </div>
    </div>
</div>
<!-- End Hero section -->

<div id="main" class="row">
<div id="content" class="   col-md-6">
<?php woocommerce_content(); ?>
</div>
</div>
<?php get_footer(); ?>