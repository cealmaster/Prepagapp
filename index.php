<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="utf-8">
    <title>Prepagapp - Prepagos y putas a domicilio</title>
    <?php include "./partes/head.php"; ?>
</head>

<body>
    <?php 
        include "./partes/header.php";
        include "./partes/conexion.php";
        include "./partes/funciones.php";
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

</body>

</html>