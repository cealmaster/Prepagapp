<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="utf-8">
    <title>Prepagapp</title>
    <?php include "./partes/head.php"; ?>
</head>

<body>
    <?php 
        include "./partes/header.php";
        include "./partes/conexion.php";
        include "./partes/funciones.php";
        
    ?>

    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Todas tus necesidades sexuales</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Somos profesionales</h2>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis
                                    debitis aut.</p>
                                <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section>
    <!-- #intro -->

    <main id="main">

        <!--==========================
      Featured Services Section
    ============================-->
        <section id="featured-services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 box">
                        <i class="ion-card"></i>
                        <h4 class="title"><a href="">Aceptamos todas las tarjetas</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="ion-ios-stopwatch-outline"></i>
                        <h4 class="title"><a href="">Servicio rapido y seguro</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>

                    <div class="col-lg-4 box">
                        <i class="ion-ios-heart-outline"></i>
                        <h4 class="title"><a href="">No querras que terminen</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- #featured-services -->

                <!--==========================
      Portfolio Section
    ============================-->
        <section id="portfolio" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Nuestra Seleccion</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todas</li>
                            <li data-filter=".filter-app">mona</li>
                            <li data-filter=".filter-card">Chica</li>
                            <li data-filter=".filter-web">Negra</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <?php imprimirPutas(); ?>
                </div>
            </div>
        </section>
        <!-- #portfolio -->


        <!--==========================
      About Us Section
    ============================-->
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>Solo las mejores putas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </header>

                <div class="row about-cols">

                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/nosotros-caliente.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-flame"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Tus deseos mas calientes</a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/nosotros-pagos.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-cash"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Diferentes medios de pago</a></h2>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/nosotros-seleccion.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Estrictos en la seleccion</a></h2>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- #about -->

        <!--==========================
      Services Section
    ============================-->
        <section id="services">
            <div class="container">

                <header class="section-header wow fadeInUp">
                    <h3>Servicios</h3>
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
                </header>

                <div class="row">

                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-wineglass-outline"></i></div>
                        <h4 class="title"><a href="">Licoreria</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-link"></i></div>
                        <h4 class="title"><a href="">Juguetes sexuales</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-heart-outline"></i></div>
                        <h4 class="title"><a href="">Disfraces eroticos</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        <h4 class="title"><a href="">Servicio a domicilio</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                        <h4 class="title"><a href="">Hoteles Asociados</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-people-outline"></i></div>
                        <h4 class="title"><a href="">Cualquier cosa que desee</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                    </div>

                </div>

            </div>
        </section>
        <!-- #services -->

        <!--==========================
      Call To Action Section
    ============================-->
        <section id="call-to-action" class="wow fadeIn">
            <div class="container text-center">
                <h3>Nuestra seleccion</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn" href="#">Mira nuestras chicas</a>
            </div>
        </section>
        <!-- #call-to-action -->

        <!--==========================
      Facts Section
    ============================-->
        <section id="facts" class="wow fadeIn">
            <div class="container">

                <header class="section-header">
                    <h3>Precios desde</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </header>

                <div class="row counters">

                    <div class="col-lg-4 col-6 text-center">
                        <span>$</span><span data-toggle="counter-up">80.000</span>
                        <p>Servicio Basico</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                        <span>$</span><span data-toggle="counter-up">160.000</span>
                        <p>Servicio Normal</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                        <span>$</span><span data-toggle="counter-up">250.000</span>
                        <p>Servicio Premium</p>
                    </div>

                </div>

                <div class="facts-img">
                    <img src="img/premium.png" alt="" class="img-fluid">
                </div>

            </div>
        </section>
        <!-- #facts -->


        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3>Contactanos</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Direccion</h3>
                            <address>Calle falsa 123</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Telefono</h3>
                            <p><a href="tel:+573123710865">+57 312 371 0865</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:v_ani_ivan@hotmail.com">v_ani_ivan@hotmail.com</a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <div id="sendmessage">Tu puta va en camino, gracias por usar nuestros servicios!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Servicio a escoger" data-rule="minlen:4" data-msg="Porfavor escoge un servicio valido" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Porfavor especifica el servicio deseado" placeholder="Especifica tu servicio"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Pedir Puta</button></div>
                    </form>
                </div>

            </div>
        </section>
        <!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Scorts Premium</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat
                            mauris nunc congue.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Link mas visitados</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Nuestras Chicas</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Servicios</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Terminos y condiciones</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Politica de privacidad de la informacion</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contactanos</h4>
                        <p>
                            Calle Falsa 123 <br> Bogota, Bogota D.C.<br> Colombia <br>
                            <strong>Telefono:</strong> +57 312 371 0865<br>
                            <strong>Email:</strong> v_ani_ivan@hotmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Nuevas puticas</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Suscribete">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Ivan Ruiz</strong>. Todos los derechos reservados
            </div>
        </div>
    </footer>
    <!-- #footer -->

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
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>