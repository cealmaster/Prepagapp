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
		if (isset($_SESSION["session_username"])) {
			header("location: index.php");
		}
		if (isset($_POST["login"])) {
			if (!empty($_POST['idCliente']) && !empty($_POST['celular']) && !empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['telefono']) && !empty($_POST['nickname']) && !empty($_POST['contrasena'])) {
				$nickname = $_POST['nickname'];
				$consulta=mysqli_query($conexion, "select * from cliente where nicknamecliente='".$nickname."'");
				$existe = mysqli_num_rows($consulta);
				if ($existe ==0) {
					$registros= mysqli_query($conexion,"insert into cliente (idcliente, telefono, nombre, apellido, telefonocliente, nicknamecliente, contrasenacliente) values 
                       ('$_REQUEST[idCliente]','$_REQUEST[celular]','$_REQUEST[nombres]','$_REQUEST[apellidos]', '$_REQUEST[telefono]', '$_REQUEST[nickname]','$_REQUEST[contrasena]')") or die("Problemas en el select".mysqli_error($conexion));
					if ($registros) {
						$mensaje = "cuenta creada exitosamente!";
					}else{
						$mensaje = "error al ingresar los datos";
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
				<form action="" method="POST">
					<div class="form-group">
						<label for="idCliente">Ingresa tu id:</label>
						<input type="number" class="form-control" placeholder="id" name="idCliente">
					</div>
					<div class="form-group">
						<label for="celular">Ingresa tu celular:</label>
						<input type="number" class="form-control" placeholder="celular" name="celular">
					</div>
					<div class="form-group">
						<label for="">Ingresa tu :</label>
						<input type="text" class="form-control" placeholder="Ingrese sus nombres" name="nombres">
					</div>
					<div class="form-group">
						<label for="">Ingresa tu :</label>
						<input type="text" class="form-control" placeholder="Ingrese sus apellidos" name="apellidos">
					</div>
					<div class="form-group">
						<label for="">Ingresa tu :</label>
						<input type="number" class="form-control" placeholder="telefono fijo" name="telefono">
					</div>
					<div class="form-group">
						<label for="">Ingresa tu :</label>
						<input type="text" class="form-control" placeholder="Ingrese su nickname" name="nickname">
					</div>
					<div class="form-group">
						<label for="">Ingresa tu :</label>
						<input type="password" class="form-control" placeholder="Ingrese su contraseña" name="contrasena">
					</div>
					<input type="submit" name="login" value="iniciar Sesion">
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