        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3>Contactanos</h3>
                    <p>¿Tienes segerencias, quejas, reclamos o cualquier peticion extra? Envianos un correo, llamanos o escribenos!</p>
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
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Especifica si es queja, sugerencia etc.." data-rule="minlen:4" data-msg="Porfavor escoge un servicio valido" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Porfavor especifica tu petición" placeholder="Especifica tu peticion"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar</button></div>
                    </form>
                </div>

            </div>
        </section>