        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3>Contactanos</h3>
                    <p>¿Tienes segerencias, quejas, reclamos o cualquier peticion extra? Envianos un correo, llamanos o escribenos!</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-social-instagram-outline"></i>
                            <h3>Instagram</h3>
                            <address><a href="https://www.instagram.com/prepagapp/">www.instagram.com/prepagapp</a></address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-social-whatsapp-outline"></i>
                            <h3>WhatsApp</h3>
                            <p><a href="tel:+573022307801" itemprop="telephone" content="+573022307801">+57 302 230 7801</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:contacto@prepagapp.com" itemprop="email">contacto@prepagapp.com</a></p>
                        </div>
                    </div>

                </div>
                <?php 
                    if (isset($_POST["login"])) {
                        $nombre = $_POST['name'];
                        $mail = $_POST['email'];
                        $asunto = $_POST['subject'];
                        $contenido = "De: ".$nombre."\n";
                        $contenido .= "Email Cliente: ".$mail."\n";
                        $contenido .= "Mensaje: ".$_POST['message']."\n";
                        $headers =  'MIME-Version: 1.0' . "\r\n"; 
                        $headers .= 'From: '.$nombre.' <'.$mail.'>' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
                        //datos de envio
                        $destinatario = "contacto@prepagapp.com";
                        if (mail($destinatario,$asunto,$contenido,$headers)) {
                            $mensaje="el correo se envio exitosamente";
                        }else {
                            $mensaje="problemas con el envio del correo";
                        }
                        
                    }
                ?>
                <div class="form">
                    <div id="sendmessage">Revisaremos tu solicitud, gracios por comunicarte con nosotros!</div>
                    <div id="errormessage">Ha ocurrido un error, intenta Nuevamente!</div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:3" data-msg="Por favor ingresa un nombre de mas de 3 caracteres" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Por favor ingresa un Email Valido" />
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
                        <div class="text-center"><input type="submit" name="login" value="Enviar"></div>
                    </form>
                   
                </div>
                <?php 
        		if (!empty($mensaje)) {
        			echo "<p> MENSAJE: ". $mensaje . "</p>";
        		} 
        	    ?>
            </div>
        </section>