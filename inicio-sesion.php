<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicia Sesion - Prepagapp</title>
	<?php include './partes/head.php' ?>
</head>
<body>
	<?php 
		include './partes/header.php'; 
		include './partes/conexion.php';
		if(isset($_SESSION["session_username"])){
			header("location: index.php");
		}
		if (isset($_POST["login"])) {
			if (!empty($_POST['nickname']) && !empty($_POST['contrasena'])) {
				$usuario= $_POST['nickname'];
				$password= $_POST['contrasena'];
				$registros=mysqli_query($conexion,"select nombrecliente, nicknamecliente, contrasenacliente, telefonocliente from cliente where nicknamecliente= '$_REQUEST[nickname]' and contrasenacliente='$_REQUEST[contrasena]'") or die("Problemas en el select:".mysqli_error($conexion));
				$numeroRegistros = mysqli_num_rows($registros);
				if ($numeroRegistros!=0) {
					while ($reg=mysqli_fetch_array($registros)){
			  			$dbnickname = $reg['nicknamecliente'];
			  			$dbcontrasena = $reg['contrasenacliente'];
			  			$dbnombre = $reg['nombrecliente'];
					}
					mysqli_close($conexion);
					if ($usuario == $dbnickname && $password == $dbcontrasena) {
						$_SESSION['session_username']=$usuario;
						$_SESSION['session_name']=$dbnombre;
						header("location: index.php");
					} 
				}else{
					$registros2=mysqli_query($conexion,"select nombreputa, nicknameputa, contrasenaputa from puta where nicknameputa= '$_REQUEST[nickname]' and contrasenaputa='$_REQUEST[contrasena]'") or die("Problemas en el select:".mysqli_error($conexion));
					$numeroRegistros2 = mysqli_num_rows($registros2);
					$mensaje = "Nombre de usuario o Contraseña Incorrectos!";
					if ($numeroRegistros2!=0) {
						while ($reg=mysqli_fetch_array($registros2)){
							  $dbnickname = $reg['nicknameputa'];
							  $dbcontrasena = $reg['contrasenaputa'];
							  $dbnombre = $reg['nombreputa'];
						}
						mysqli_close($conexion);
						if ($usuario == $dbnickname && $password == $dbcontrasena) {
							$_SESSION['session_username']=$usuario;
							$_SESSION['session_name']=$dbnombre;
							header("location: index.php");
						} 
					}else{
						$mensaje = "Nombre de usuario o Contraseña Incorrectos!";
					}
				}
			}else{
				$mensaje = "Todos los campos son requeridos!";
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
				<h3>inicio Sesion</h3>
			</div>
			<div class="form">
				<form action="" method="POST">
					<input type="text" class="form-control" placeholder="Ingrese su nickname" name="nickname">
					<input type="password" class="form-control" placeholder="Ingrese su contraseña" name="contrasena">
					<input type="submit" name="login" value="iniciar Sesion">
					<p>No estas registrado? <a href="registrocliente.php" >Registrate Aquí</a>!</p>
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