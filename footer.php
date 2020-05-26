<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 */

?>
<?php wp_footer(); ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="<?php echo home_url(); ?>">
                        <img src="https://ddb.com.co/img/logo.png" alt="" class="footer-logo">
                    </a>    
                </div>
            </div>
            <div class="col-md-3">
                <h5>Correo electrónico</h5>
                <ul>
                    <li><a href="mailto:info@ddb.com.co">info@ddb.com.co</a></li>
                    <li><a href="mailto:contacto@ddb.com.co">contacto@ddb.com.co</a></li>
                    <li><a href="mailto:ventas@ddb.com.co">ventas@ddb.com.co</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Dirección</h5>
                <a href="https://www.google.com/maps/place/Parque+Empresarial+Puerta+del+Sol/@4.6861636,-74.1238557,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f9b451d6a85f3:0x7213b2e152566ddf!8m2!3d4.6861583!4d-74.121667" target="_blank">
                    <i class="fas fa-map-marker-alt"></i>
                    Transversal 93 # 51-98 
                    Parque Empresarial Puerta del Sol Bodega 18  (Bogotá-Colombia)
                </a>
            </div>
            <div class="col-md-3">
                <h5>Teléfono</h5>
                <ul>
                    <li><a href="tel:(1)7432597">(1) 743 25 97</a></li>
                    <li><a href="tel:(310) 864 93 72">(310) 864 93 72</a></li>
                    <li><a href="tel:(300) 748 42 72">(300) 748 42 72</a></li>
                </ul>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 text-center social-footer">
                <a href="https://www.facebook.com/ddboyaca" target="_blank"> <i class="fab fa-facebook-square"></i></a>
                <a href="https://twitter.com/ddboyaca"  target="_blank"> <i class="fab fa-twitter-square"></i></a>
            </div>
        </div>
        <div class="row footer-copyright">
            <div class="col-md-12 text-center">
                © Copyright 2020 | DEPÓSITO DE DROGAS BOYACÁ | TODOS LOS DERECHOS RESERVADOS
            </div>
        </div>
    </div>
    
</footer>




</body>
</html>