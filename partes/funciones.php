<?php 
	function imprimirPutas(){
		$conexion=mysqli_connect("localhost","root","","prepagapp") or
    	die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select nombreputa, linkfotoperfil, descripcion from puta") or die("Problemas en el select:".mysqli_error($conexion));
        $numeroRegistros = mysqli_num_rows($registros);
        $contador=0;
        if ($numeroRegistros!=0) {
            while ($reg=mysqli_fetch_array($registros)){
            	$nombreChica = $reg['nombres'];
            	$foto = $reg['linkfotoperfil'];
            	$descripcion = $reg['descripcion'];
            	if ($contador % 3 == 0) {
            		echo "<div class=\"col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp\">";
	                echo "<div class=\"portfolio-wrap\">";
	                echo "<figure>";
	                echo "<img src=\"".$foto."\" class=\"img-fluid\" alt=\"\">";
	                echo "<a href=\"".$foto."\" data-lightbox=\"portfolio\" data-title=\"App 1\" class=\"link-preview\" title=\"Vista Previa\"><i class=\"ion ion-eye\"></i></a>";
	                echo "<a href=\"chicaespecifica.php\" class=\"link-details\" title=\"Mas Detalles\"><i class=\"ion ion-android-open\"></i></a>";
	                echo "</figure>";
	                echo "<div class=\"portfolio-info\">";
	                echo "<h4><a href=\"chicaespecifica.php\">".$nombreChica."</a></h4>";
	                echo "<p>".$descripcion."</p>";
	                echo "</div></div></div>";
            	}elseif ($contador % 2 == 0) {
            		echo "<div class=\"col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp\" data-wow-delay=\"0.2s\">";
	                echo "<div class=\"portfolio-wrap\">";
	                echo "<figure>";
	                echo "<img src=\"".$foto."\" class=\"img-fluid\" alt=\"\">";
	                echo "<a href=\"".$foto."\" data-lightbox=\"portfolio\" data-title=\"App 1\" class=\"link-preview\" title=\"Vista Previa\"><i class=\"ion ion-eye\"></i></a>";
	                echo "<a href=\"chicaespecifica.php\" class=\"link-details\" title=\"Mas Detalles\"><i class=\"ion ion-android-open\"></i></a>";
	                echo "</figure>";
	                echo "<div class=\"portfolio-info\">";
	                echo "<h4><a href=\"chicaespecifica.php\">".$nombreChica."</a></h4>";
	                echo "<p>".$descripcion."</p>";
	                echo "</div></div></div>";
            	}elseif ($contador % 2 == 1) {
            		echo "<div class=\"col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp\" data-wow-delay=\"0.1s\">";
		            echo "<div class=\"portfolio-wrap\">";
		            echo "<figure>";
		            echo "<img src=\"".$foto."\" class=\"img-fluid\" alt=\"\">";
		            echo "<a href=\"".$foto."\" data-lightbox=\"portfolio\" data-title=\"App 1\" class=\"link-preview\" title=\"Vista Previa\"><i class=\"ion ion-eye\"></i></a>";
		            echo "<a href=\"chicaespecifica.php\" class=\"link-details\" title=\"Mas Detalles\"><i class=\"ion ion-android-open\"></i></a>";
		            echo "</figure>";
		            echo "<div class=\"portfolio-info\">";
		            echo "<h4><a href=\"chicaespecifica.php\">".$nombreChica."</a></h4>";
		            echo "<p>".$descripcion."</p>";
		            echo "</div></div></div>";
            	}
                      
            }
            mysqli_close($conexion);
        }else{
            $mensajeChicas = "no se encontraron chicas disponibles";
        }
    }

 ?>