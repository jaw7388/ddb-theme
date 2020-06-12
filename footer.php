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
            <div class="col-md-4">
                <h5>Certificaciones</h5>
                <div class="footer-logo">
                        <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/06/Bureau-veritas-C0240563.png');?>" alt="" class="footer-logo">
                </div>
            </div>
            
            <div class="col-md-4">
                <h5>Mapa del sitio</h5>
                <ul>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contacto</h5>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i><a href="https://www.google.com/maps/place/Parque+Empresarial+Puerta+del+Sol/@4.6861636,-74.1238557,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f9b451d6a85f3:0x7213b2e152566ddf!8m2!3d4.6861583!4d-74.121667" target="_blank">
                            Transversal 93 # 51-98 
                            Parque Empresarial Puerta del Sol Bodega 18  . Bogotá-Colombia</a>
                    </li>
                    <li><i class="far fa-clock"></i>Mar - Sab 7am - 4pm</li>
                    <li><i class="fas fa-phone"></i><a href="tel:(1)7432597">(1) 743 25 97</a></li>
                    <li><i class="far fa-envelope"></i><a href="mailto:info@ddb.com.co">info@ddb.com.co</a></li>
                </ul>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 text-center social-footer">
            <a href="https://www.linkedin.com/company/dep%C3%B3sito-de-drogas-boyac%C3%A1/" target="_blank"><i class="fab fa-linkedin"></i></a>
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