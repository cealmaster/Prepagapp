<!DOCTYPE html>
<?php 
	session_start();
 ?>
<html lang="es">
<head> 
    <meta charset="utf-8">
<<<<<<< HEAD
    <meta content="prepagapp, prepagos, putas a domicilio, prepagos a domicilio" name="keywords">
=======
    <meta content="prepagapp, prepagos, putas a domicilio" name="keywords">
>>>>>>> 2b0e3b20197e6191404ef79911994bc97f94e074
	<meta content="Prepagos a domicilio" name="subject" >
    <meta content="https://www.prepagapp.com" name="url">
    <meta content="Las mejores prepagos y putas en Bogota a domicilio, dispuestas a satisfacer tus deseos mas calientes." name="description">
    <title>Prepagapp | Prepagos y putas a Domicilio</title>
    <?php include "./partes/head.php"; ?>
</head>

<body>
    <div itemscope itemtype="http://schema.org/Store">
        <?php 
            
            include "./partes/funciones.php";
            include "./partes/header.php";
            include "./partes/conexion.php";
            include "./partes/intro.php";
            
        ?>
        
        <main id="main">
        <?php 
            include "./partes/servicios-principales.php";
            include "./partes/portafolio.php";
            include "./partes/nosotros.php";
            include "./partes/servicios.php";
            include "./partes/seleccion.php";
            include "./partes/precios.php";
            include "./partes/contacto.php";
        ?>
        </main>
        <?php include "./partes/footer.php"; ?>
    </div>
    
    
</body>

</html>