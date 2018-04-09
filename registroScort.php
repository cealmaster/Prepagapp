<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de nueva Scort</title>
    <?php include './partes/head.php' ?>
</head>
<body>
<?php 
		include './partes/header.php';
		include './partes/conexion.php';
		include './partes/creacionChica.php';
		function obtenerCategorias(){
			$conexion=mysqli_connect("localhost","root","","prepagapp") or
    		die("Problemas con la conexión");
        	$registros=mysqli_query($conexion,"select nombrecaracteristica from caracteristicas") or die("Problemas en el select:".mysqli_error($conexion));
        	$numeroRegistros = mysqli_num_rows($registros);
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_array($registros)) {
					$nombreCaracteristica = $reg['nombrecaracteristica'];
					echo "<div class=\"form-check form-check-inline\">";
					echo"<input class=\"form-check-input\" type=\"checkbox\" name=\"cara[]\" id=\"".$nombreCaracteristica."\" value=\"".$nombreCaracteristica."\">";
					echo "<label class=\"form-check-label\" for=\"".$nombreCaracteristica."\">".$nombreCaracteristica."</label>";
					echo"</div>";			
				}
			}
		}
		function obtenerServicios(){
			$conexion=mysqli_connect("localhost","root","","prepagapp") or
    		die("Problemas con la conexión");
        	$registros=mysqli_query($conexion,"select nombreservicio from servicios") or die("Problemas en el select:".mysqli_error($conexion));
        	$numeroRegistros = mysqli_num_rows($registros);
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_array($registros)) {
					$nombreServicio = $reg['nombreservicio'];
					echo "<div class=\"form-check form-check-inline\">";
					echo"<input class=\"form-check-input\" type=\"checkbox\" name=\"servi[]\" id=\"".$nombreServicio."\" value=\"".$nombreServicio."\">";
					echo "<label class=\"form-check-label\" for=\"".$nombreServicio."\">".$nombreServicio."</label>";
					echo"</div>";			
				}
			}
		}
		if (isset($_SESSION["session_username"])) {
			header("location: index.php");
		}
		if (isset($_POST["login"])) {
			if (!empty($_POST['nombre']) && !empty($_POST['descripcion']) && !empty($_POST['precio']) && !empty($_POST['telefono']) && !empty($_POST['nickname']) && !empty($_POST['contrasena'])) {
				$nickname = $_POST['nickname'];
				$consulta=mysqli_query($conexion, "select * from puta where nicknameputa='".$nickname."'");
				$existe = mysqli_num_rows($consulta);		
				if ($existe ==0) {
					$carpeta = 'img/portfolio/'.$_POST['nickname'];
					if (!file_exists($carpeta)) {
						mkdir($carpeta, 0777, true);
					}
					
					$uploadedfileload="true";
					if (!($_FILES['fotoperfil']['type'] =="image/jpeg" OR $_FILES['fotoperfil']['type'] =="image/gif" OR $_FILES['fotoperfil']['type'] =="image/png")){
						$msg ="";
						$msg=$msg." Tu archivo tiene que ser JPG o GIF o PNG. Otros archivos no son permitidos<BR>";
						$uploadedfileload="false";
					}
					$target_path = $carpeta;
					$target_path = $target_path ."/perfil.jpg"; 
					if($uploadedfileload=="true"){
						if(move_uploaded_file($_FILES['fotoperfil']['tmp_name'], $target_path)) {
							$registros= mysqli_query($conexion,"insert into puta (nombreputa, descripcion, linkfotoperfil, edadputa, correoputa, preciohora, telefonoputa, nicknameputa, contrasenaputa, videoputa, localidad) values ('$_REQUEST[nombre]','$_REQUEST[descripcion]','$target_path','$_REQUEST[edad]', '$_REQUEST[correo]', '$_REQUEST[precio]', '$_REQUEST[telefono]', '$_REQUEST[nickname]','$_REQUEST[contrasena]', '$_REQUEST[video]', '$_REQUEST[localidad]')") or die("Problemas en el insert".mysqli_error($conexion));
							if ($registros) {
								$mensaje = "cuenta creada exitosamente!";
								$consulta=mysqli_query($conexion, "select idputa from puta where nicknameputa='".$nickname."'");
								$fila = mysqli_fetch_row($consulta);
								$idputa = $fila[0];	
								//se suben a la BD sus caracterisiticas
								if (!empty($_POST['cara'])) {
									foreach($_POST['cara'] as $seleccionada) {
										$consulta2=mysqli_query($conexion, "select idcaracteristica from caracteristicas where nombrecaracteristica='".$seleccionada."'");
										$fila2 = mysqli_fetch_row($consulta2);
										$idCaracteristica = $fila2[0];
										$insercionCaracteristicas = mysqli_query($conexion, "insert into putacaracteristicas (idputa, idcaracteristica) values (".$idputa.",'".$idCaracteristica."')");
										if ($insercionCaracteristicas) {
										}else {
											echo "no se ingreso las caracteristicas en la BD";
										}
									}
								}
								//se suben a la BD los servicios que ofrece
								if (!empty($_POST['servi'])) {
									foreach($_POST['servi'] as $seleccionada2) {
										$consulta3=mysqli_query($conexion, "select idServicio from servicios where nombreservicio='".$seleccionada2."'");
										$fila3 = mysqli_fetch_row($consulta3);
										$idServicio = $fila3[0];
										$insercionServicios = mysqli_query($conexion, "insert into putaServicios (idputa, idServicio) values (".$idputa.",'".$idServicio."')");
										if ($insercionServicios) {
											echo "si ingreso el valor".$seleccionada2;
										}else {
											echo "no se ingreso los servicios en la BD";
										}
									}
								}

								//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
								foreach($_FILES["fotos"]['tmp_name'] as $key => $tmp_name){
									//Validamos que el archivo exista
									if($_FILES["fotos"]["name"][$key]) {
										$filename = $_FILES["fotos"]["name"][$key]; //Obtenemos el nombre original del archivo
										$source = $_FILES["fotos"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
										$directorio = $carpeta; //Declaramos un  variable con la ruta donde guardaremos los archivos	
										$target_path2 = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
										//Movemos y validamos que el archivo se haya cargado correctamente
										//El primer campo es el origen y el segundo el destino
										if(move_uploaded_file($source, $target_path2)) {		
											$registros= mysqli_query($conexion,"insert into fotos (idputa, linkfoto) values ($idputa, '$target_path2')") or die("Problemas en el insert ".mysqli_error($conexion));
											if ($registros) {
											}else{
												$mensaje = "error al ingresar las fotos de la galeria";
											}
											} else {	
											echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
										}
									}
								}
								crearArchivoScort($nickname);
							}else{
								$mensaje = "error al ingresar la prepago";
							}
						} 
						else{
							echo "No has puesto foto de perfil, trata de nuevo!";
						}
					}else{
						echo "<br><br><br><br>";
						echo $msg;
					}	
				}else{
					$mensaje="el nickname ya existe, prueba con otro";
				}
				
			}else{
				$mensaje="todos los campos deben ser ingresados";
			}
		}
	 ?>
<br>
<br>
<br>
<br>
<br>
	<main id="main">
		<div class="container">
			<div class="section-header">
				<h3>Registrate</h3>
			</div>
			
			<div class="form">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nombres">Ingresa tu nombre:</label>
						<input type="text" class="form-control" placeholder="Ingrese sus nombres" name="nombre">
					</div>
					<div class="form-group">
						<label for="fotoperfil">Ingresa tu foto de perfil: </label>
						<input type="file" name="fotoperfil" id="fotoperfil" class="btn btn-danger" >
					</div>
					<div class="form-group">
						<label for="descripcion">Ingresa una descripcion (quien eres, que haces, describete):</label>
						<textarea class="form-control" placeholder="Ingresa tu descripcion" name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label for="caracteristicas">Ingresa tus Caracteristicas: </label>
						<br>
						<?php obtenerCategorias(); ?>
					</div>
					<div class="form-group">
						<label for="servicios">Ingresa los servicios que ofreces: </label>
						<br>
						<?php obtenerServicios(); ?>
					</div>
					<div class="form-group">
						<label for="edad">(opcional) Ingresa tu edad (ej: 18) :</label>
						<input type="number" class="form-control" placeholder="Ingresa tu edad" name="edad">
					</div>
					<div class="form-group">
						<label for="localidad">(opcional) Ingresa tu localidad (ej: Barrios Unidos) :</label>
						<input type="text" class="form-control" placeholder="Ingresa tu Localidad" name="localidad">
					</div>

					<div class="form-group">
						<label for="correo">(opcional) Ingresa tu correo:</label>
						<input type="email" class="form-control" placeholder="Ingresa tu correo" name="correo">
					</div>

					<div class="form-group">
						<label for="precio">Ingresa tu precio por hora: (ej: si cobras 100 mil escribe 100000)</label>
						<input type="number" class="form-control" placeholder="Ingresa tus precio hora" name="precio">
					</div>
					<div class="form-group">
						<label for="telefono">Ingresa tu telefono celular (esto para contactarte)</label>
						<input type="number" class="form-control" placeholder="Ingresa tu telefono" name="telefono">
					</div>
					<div class="form-group">
						<label for="nickname">Ingresa tu nombre de usuario:</label>
						<input type="text" class="form-control" placeholder="Ingrese su nickname" name="nickname">
					</div>
					<div class="form-group">
						<label for="contrasena">Ingresa tu Contraseña:</label>
						<input type="password" class="form-control" placeholder="Ingrese su contraseña" name="contrasena">
					</div>
					<div class="form-group">
						<label for="fotos[]">¿tienes fotos para mostrar? subelas!</label>
						<input type="file" class="form-control btn btn-danger" placeholder="Ingrese sus fotos" name="fotos[]" multiple="">
					</div>
					<hr>
					<h3 class="text-center">consideraciones para en dado caso tengas video</h3>
					<p>si tienes un video que quieras mostrar, primero tienes que subirlo a la plataforma <a href="https://www.xvideos.com">xvideos</a>. despues copia la url de tu video y pegala en el recuadro siguiente:</p>
					<div class="form-group">
						<label for="video">(opcional) Ingresa la direccion de tu video:</label>
						<input type="text" class="form-control" placeholder="Ingresa tu video" name="video">
					</div>
					<input type="submit" class="btn btn-danger" name="login" value="Registrarse">
					<p>Ya tienes una cuenta? <a href="inicio-sesion.php" >Entra Aquí!</a>!</p>
				</form>
			</div>
			
        	<?php 
        		if (!empty($mensaje)) {
        			echo "<p> MENSAJE: ". $mensaje . "</p>";
        		} 
        	?>
		</div>
	</main>
	<br>
	<?php include './partes/footer.php'; ?>
</body>
</html>