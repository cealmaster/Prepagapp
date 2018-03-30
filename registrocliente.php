<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include './partes/head.php'; ?>
</head>
<body>
	<?php 
		include './partes/header.php';
		include './partes/conexion.php';
		if (isset($_SESSION["session_username"])) {
			header("location: index.php");
		}
		if (isset($_POST["login"])) {
			if (!empty($_POST['nombres']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['nickname']) && !empty($_POST['contrasena'])) {
				$nickname = $_POST['nickname'];
				$consulta=mysqli_query($conexion, "select * from cliente where nicknamecliente='".$nickname."'");
				$existe = mysqli_num_rows($consulta);
				if ($existe ==0) {
					$registros= mysqli_query($conexion,"insert into cliente (nombrecliente, correocliente, telefonocliente, nicknamecliente, contrasenacliente) values 
                       ('$_REQUEST[nombres]','$_REQUEST[correo]', '$_REQUEST[telefono]', '$_REQUEST[nickname]','$_REQUEST[contrasena]')") or die("Problemas en el select".mysqli_error($conexion));
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
					<input type="text" class="form-control" placeholder="Ingrese sus nombres" name="nombres">
					<input type="text" class="form-control" placeholder="Ingrese su correo" name="correo">
					<input type="number" class="form-control" placeholder="Ingrese su celular" name="telefono">
					<input type="text" class="form-control" placeholder="Ingrese su nickname" name="nickname">
					<input type="password" class="form-control" placeholder="Ingrese su contraseña" name="contrasena">
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