<?php 
    function crearArchivoScort($nickname){
        $conexion=mysqli_connect("localhost","root","","prepagapp") or
            die("Problemas con la conexión");
        $consulta=mysqli_query($conexion, "select * from puta where nicknameputa='".$nickname."'");
        $fila = mysqli_fetch_row($consulta);
        $idputa = $fila[0];	    
        $nombre = $fila[1];
        $descripcion = $fila[2];
        $fotoperfil = $fila[3];
        $medidas = $fila[4];
        $correo = $fila[5];
        $precio = $fila[6];
        $telefono = $fila[7];
        $video = $fila[10];
        
        
        $nombre_archivo = $nickname.".php"; 
        if(file_exists($nombre_archivo)){
            $mensaje = "El Archivo $nombre_archivo se ha modificado";
        }else{
            $mensaje = "El Archivo $nombre_archivo se ha creado";
        }
        if($archivo = fopen($nombre_archivo, "a")){
            if(fwrite($archivo, 
            "<!DOCTYPE html> 
            <html lang=\"en\"> 
            <head>
            <meta charset=\"utf-8\">
            <title>".$nombre."</title>
            <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
            <meta content=\"\" name=\"keywords\">
            <meta content=\"\" name=\"description\">
            <!-- Favicons -->
            <link href=\"img/favicon.png\" rel=\"icon\">
            <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">
            <!-- Google Fonts -->
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700\" rel=\"stylesheet\">
            <!-- Bootstrap CSS File -->
            <link href=\"lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
            <!-- Libraries CSS Files -->
            <link href=\"lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
            <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">
            <link href=\"lib/ionicons/css/ionicons.min.css\" rel=\"stylesheet\">
            <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
            <link href=\"lib/lightbox/css/lightbox.min.css\" rel=\"stylesheet\">
            <!-- Main Stylesheet File -->
            <link href=\"css/prepagapp.css\" rel=\"stylesheet\">
        </head>
        <body>
          <?php include './partes/header.php'?>
        <br>
        <br>
        <br>
        
          <main id=\"main\">
              <section id=\"team\">
              <div class=\"container\">
                <div class=\"section-header wow fadeInUp\">
                <h3>".$nombre."</h3>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"wow fadeInLeft\">
                            <img class=\"img-fluid\" src=\"".$fotoperfil."\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-lg-8 col-md-6\">
                        <div class=\"wow fadeInRight\">
                            <p class=\"texto\"><b class=\"subtitulo\">Edad:</b> 18 años</p>
                            <p class=\"texto\"><b class=\"subtitulo\">Medidas:</b> ".mostrarMedidas($nickname)."</p>
                            <p class=\"texto\"><b class=\"subtitulo\">descripció:</b> ".$descripcion."</p>
                            <p class=\"texto\"><b class=\"subtitulo\">nacionalidad: </b> colombiana</p>
                        </div>
                    </div>
                </div>
                <br>
                 <div class=\"section-header wow fadeInUp\">
                  <h4>Galeria de fotos</h4>
                </div>
        
                <div class=\"row\">".
                    desplegarGaleria($nickname).
                    "</div>

                    </div>
                  </section><!-- #team -->
                </main>
                <br>
	            <?php include './partes/footer.php'; ?>"
            )){
                echo "Se ha ejecutado correctamente";
            }else{
                echo "Ha habido un problema al crear el archivo";
            }
            fclose($archivo);
        }
    }
    function mostrarMedidas($nickname){
        $conexion=mysqli_connect("localhost","root","","prepagapp") or
            die("Problemas con la conexión");
        $consulta=mysqli_query($conexion, "select medidas from puta where nicknameputa='".$nickname."'");
        $fila = mysqli_fetch_row($consulta);
        $medidas = $fila[0];
        return $medidas;	
    }
    function desplegarGaleria($nickname){
        $retorno="";
        $conexion=mysqli_connect("localhost","root","","prepagapp") or
            die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select f.linkfoto from fotos f, puta p WHERE p.nicknameputa ='".$nickname."' and p.idputa=f.idputa") or die("Problemas en el select:".mysqli_error($conexion));
        $numeroRegistros = mysqli_num_rows($registros);
        $contador=0;
        if ($numeroRegistros!=0) {
            while ($reg=mysqli_fetch_array($registros)){ 
                $foto = $reg['linkfoto'];
                $retorno .= "<div class=\"col-lg-4 col-md-6 wow fadeInUp\">
                <div class=\"member\">
                  <img src=\"".$foto."\" class=\"img-fluid\" alt=\"\">
                  <div class=\"member-info\">
                    <div class=\"member-info-content\">
                      <div class=\"social\">
                        <a href=\"".$foto."\" data-lightbox=\"portfolio\" data-title=\"".$nickname."\" class=\"link-preview\" title=\"Vista Previa\"><i class=\"fa fa-search\"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              ";
            }
        }
        return $retorno;
    }
?>