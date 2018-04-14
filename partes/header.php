
 <header id="header">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
      <a href="index.php" class="scrollto"><img style="display: inline; height: 50px;" src="img/log.png" alt="Logo Prepagapp" title="Logo Prepagapp" /></a>  
        <h1 itemprop="name"><a href="index.php" class="scrollto">Prepagapp</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="index.php#services">Servicios</a></li>
          <li><a href="index.php#facts">Tienda</a></li>
          <li><a href="index.php#portfolio">Nuestras chicas</a></li>
          <li><a href="index.php#contact">Contactanos</a></li>
            <?php 
              if (isset($_SESSION["session_username"])) {
                echo "<li>".$_SESSION["session_name"]." "."<a href=\"./partes/cerrar-sesion.php\">(logout)</a></li>";
              }else{
                echo "<li><a href=\"inicio-sesion.php\">Iniciar Sesion</a></li>";
              }
             ?>
        </ul>
      </nav>
    </div>
  </header>	