<?php 
	function imprimirPutas(){
		$conexion=mysqli_connect("localhost","root","","prepagapp") or
    	die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select p.idputa, p.nombreputa, p.linkfotoperfil, p.descripcion, GROUP_CONCAT(c.nombrecaracteristica) as caracteristicas from puta p LEFT JOIN putacaracteristicas pc ON p.idputa=pc.idputa LEFT JOIN caracteristicas c ON c.idcaracteristica=pc.idcaracteristica GROUP BY p.idputa") or die("Problemas en el select:".mysqli_error($conexion));
        $numeroRegistros = mysqli_num_rows($registros);
        $contador=0;
        if ($numeroRegistros!=0) {
            while ($reg=mysqli_fetch_array($registros)){
            	$nombreChica = $reg['nombreputa'];
            	$foto = $reg['linkfotoperfil'];
				$descripcion = $reg['descripcion'];
				$caracteristicas = $reg['caracteristicas'];
				if ($caracteristicas=== null) {
					echo "";
				}
            	if ($contador % 3 == 0) {
					$msg = "";	
            	}elseif ($contador % 2 == 0) {
					$msg="data-wow-delay=\"0.2s\"";
            	}elseif ($contador % 2 == 1) {
					$msg="data-wow-delay=\"0.1s\"";
            	}
                echo "<div class=\"col-lg-4 col-md-6 portfolio-item ".categoriasPuta($caracteristicas)." wow fadeInUp\"".$msg.">";
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
            mysqli_close($conexion);
        }else{
			$mensajeChicas = "no se encontraron chicas disponibles";
			echo "<h3 class=\"text-center text-muted\">".$mensajeChicas."</h3>";
        }
	}
	
	function mostrarCategorias(){
		$conexion=mysqli_connect("localhost","root","","prepagapp") or
    	die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select c.nombrecaracteristica, GROUP_CONCAT(p.idputa) as putasasociadas from caracteristicas c LEFT JOIN putacaracteristicas pc ON c.idcaracteristica=pc.idcaracteristica LEFT JOIN puta p ON p.idputa=pc.idputa GROUP BY c.idcaracteristica") or die("Problemas en el select:".mysqli_error($conexion));
        $numeroRegistros = mysqli_num_rows($registros);
		$contador=0;
		if ($numeroRegistros!=0) {
			while ($reg=mysqli_fetch_array($registros)) {
				$putasAsociadas =$reg['putasasociadas'];
				$nombreCaracteristica = $reg['nombrecaracteristica'];
				if ($putasAsociadas!==NULL) {
					echo "<li data-filter=\".".$nombreCaracteristica."\">".$nombreCaracteristica."</li>";
				}
				
			}
		}
	}

	function categoriasPuta($carac){
		$retorno ="";
		if ($carac !== null ) {
			$caracteristicas = explode(",", $carac);
			foreach($caracteristicas as $caracteristica){
				$retorno .= $caracteristica;
				$retorno .= " ";
			}
		}
		return $retorno;
	}

 ?>