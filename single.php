<?php
/**
 * The template for displaying all single posts
 *
 */
get_header();?>

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
                <h1><?php the_title(); ?></h1>
            </div>    
        </div>
    </div>
</div>
<!-- End Hero section -->

<div class="container">
    <div class="row">
        <?php woocommerce_breadcrumb(); ?>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php get_template_part('includes/section', 'content') ?>
        </div>
        
        <div class="col-md-3">
            <?php if( is_active_sidebar('blog-sidebar')): ?>
                <?php dynamic_sidebar('blog-sidebar'); ?>
            <?php endif; ?>
        </div>    
    </div>
</div>


<?php get_footer(); ?>
