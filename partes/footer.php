<footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Prepagapp</h3>
                        <p>Si te gusto lo que viste, recomiendanos a tus amigos. De esta forma podremos mejorar nuestros servicios.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Links mas visitados</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Inicio</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#portfolio">Nuestras Prepagos y puas</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#services">Servicios</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Terminos y condiciones</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Politica de privacidad de la informacion</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contactanos:</h4>
                        <p>
                            <br> Bogota, Bogota D.C.<br> Colombia <br>
                            <strong>Telefono:</strong> +57 302 230 7801<br>
                            <strong>Email:</strong> contacto@prepagapp.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/prepagapp/" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-nsewsletter">
                        <?php 
                            if (isset($_POST["enviar"])) {
                                $nombre2= "Prepagapp";
                                $email= "contacto@prepagapp.com";
                                $correo = $_POST['correo'];
                                $contenido2 = "Gracias por enviar tu correo para trabajar con nosotros! <br>";
                                $contenido2 .="<br>";
                                $contenido2 .= "Lo que tienes que hacer es muy facil. <br>";
                                $contenido2 .="Envia un correo adjuntando tus fotos, nombre y edad al correo chicasnuevas@prepagapp.com <br>";
                                $contenido2 .="<br>";
                                $contenido2 .="Una vez lo hayas hecho revisaremos tu perfil y te diremos el siguiente paso del proceso para que puedas empezar a trabajar con nosotros!<br>";
                                $contenido2 .="<br>";
                                $contenido2 .="Att// Equipo de Prepagapp <br>";
                                $headers2 =  'MIME-Version: 1.0' . "\r\n"; 
                                $headers2 .= 'From: '.$nombre2.' <'.$email.'>' . "\r\n";
                                $headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
                                //datos de envio para la chica nueva
                                $destinatario = "contacto@prepagapp.com";
                                if (mail($correo,"Trabaja con nosotros! | Equipo de Prepagapp",$contenido2,$headers2)) {
                                    $mensaje="el correo se envio exitosamente";
                                }else {
                                    $mensaje="problemas con el envio del correo";
                                }
                                //correo para nosotros
                            }
                        ?>
                        <h4>Trabaja con nosotros</h4>
                        <p>¿quieres tener ingresos espectaculares, tienes un hermoso cuerpo y una mente sucia?. Ingresa tu correo electronico de contacto y te daremos toda la informacion para trabajar con nosotros.</p>
                        <form action="" method="post">
                            <input class="form-control d-inline" type="email" name="correo" placeholder="Ingresa tu Correo"><hr> <div class="trabajaconnosotros"><input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></div>
                        </form>
                        <?php 
                            if (!empty($mensaje)) {
                                echo "<p> MENSAJE: ". $mensaje . "</p>";
                            } 
        	            ?>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>M4L Studios</strong>. Todos los derechos reservados
            </div>
        </div>
    </footer>
       <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->


  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>