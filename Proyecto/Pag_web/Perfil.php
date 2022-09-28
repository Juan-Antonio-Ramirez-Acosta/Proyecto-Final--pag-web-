<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>¡ACERCA DEL COVID-19!-Perfil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="About.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="css/perfil.css">
    
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-d058"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
  <?php 
    session_start();
    if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == ''){
      header("location:Login.html"); 
      die();
    }
  ?>    
  <a href="Perfil.php" class="u-image u-logo u-image-1"><section class="perfil-usuario2"><div class="opcciones-perfil3"><button type="" style="bacground-color:#478ac9!important;"><i class="fas fa-info-circle"></i> Mi perfil :
  <?php 
    echo "".$_SESSION['usuario'];
  ?></button></div></section>
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Casa.php" style="padding: 10px 20px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Experiencias.php" style="padding: 10px 20px;">Experiencias</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Nuestras-Estadisticas.php" style="padding: 10px 20px;">Nuestras Estadisticas</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="php/cierre_sesion.php" style="padding: 10px 20px;"><section class="perfil-usuario2"><div class="opcciones-perfil2"><button type="">Cerrar Sesión <i class="fas fa-sign-out"></i></button></div></section></a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.php">Inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Experiencias.php">Experiencias</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Nuestras-Estadisticas.php">Nuestras Estadisticas</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="php/cierre_sesion.php" style="padding: 10px 20px;"><section class="perfil-usuario"><div class="opcciones-perfil2"><button type="">Cerrar Sesión <i class="fas fa-sign-out"></i></button></div></section></a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
<!-- ******************************************************************************************************************************* -->
<?php 
include("php/conexion.php"); //para llamar a un archivo  
$usuario = $_SESSION['usuario'];
$password = $_SESSION['password'];

$sql = "SELECT nombre FROM datosinforma JOIN usuarios ON usuarios.id = datosinforma.usuarios_id WHERE usuario = '$usuario' AND password = '$password'";
$result = mysqli_query($conexion, $sql);
$nombre = mysqli_fetch_assoc($result);

$sql2 = "SELECT email FROM datosinforma JOIN usuarios ON usuarios.id = datosinforma.usuarios_id WHERE usuario = '$usuario' AND password = '$password'";
$result2 = mysqli_query($conexion, $sql2);
$email = mysqli_fetch_assoc($result2);

$sql3 = "SELECT cel FROM datosinforma JOIN usuarios ON usuarios.id = datosinforma.usuarios_id WHERE usuario = '$usuario' AND password = '$password'";
$result3 = mysqli_query($conexion, $sql3);
$cel = mysqli_fetch_assoc($result3);
?>  
<!-- ******************************************************************************************************************************* -->
      <div class="comentarios">
        
      </div>
      <?php 
       // include("php/mostrar_perfil.php"); //para llamar a un archivo
      ?>
      <!-- ********************************************************************************************************************************-->
      <section class="perfil-usuario">
    <div class="contenedor-perfil">
        <div class="portada-perfil" style="background-image: url('images/perfil_bg.png');">
            <div class="sombra"></div>
            <div class="avatar-perfil">
                <img src="images/perfil_img.png" alt="img">
                <!--<a href="#" class="cambiar-foto">
                    <i class="fas fa-camera"></i> 
                    <span>Cambiar foto</span>
                </a> -->
            </div>
            <div class="datos-perfil">
                <h4 class="titulo-usuario"><?php echo "".$nombre['nombre']?></h4>
                <!-- <p class="bio-usuario">Lorem ipsum dolor sit, amet consectetur adipisicing.</p> -->
                <!--<ul class="lista-perfil">
                    <li>35 Seguidores</li>
                    <li>7 Seguidos</li>
                    <li>32 Publicaciones</li>
                </ul> -->
            </div>
            <div class="opcciones-perfil">
              <a href="Perfil.php">
                <button type="">Bienvenido a tú perfil</button>
              </a>
                <a href="Casa.php">
                  <button type=""><i class="fas fa-home"></i></button>
                </a>
            </div>
        </div>
        <div class="menu-perfil">
            <ul>
                <li><a title=""><i class="icono-perfil fas fa-info-circle"></i>Usuario : <?php echo "".$_SESSION['usuario'];?></a></li>
                <li><a title=""><i class="icono-perfil fas fa-envelope"></i>Email : <?php echo "".$email['email']?></a></li>
                <li><a title=""><i class="icono-perfil fas fa-mobile"></i>Celular : <?php echo "".$cel['cel']?></a></li>
            </ul>
        </div>
    </div>
</section>
<!--***************************************************************************************************************************************** -->
<?php 
        include("php/mostrar_perfil.php"); //para llamar a un archivo
  ?>
<section style="background-color: #f0f2f5; margin: 0px; padding: 0px;">
  
  <p style="background-color: #f0f2f5; margin: 0px; padding: 0px;">&nbsp;</p>
</section>     
<!-- ******************************************************************************************************************************* -->
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b14e"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Los derechos de autor de este sitio web corresponden a los estudiantes de Ing. en Sistemas Computacionales de la Universidad Autonoma del Carmen.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <p class="u-text">
        <span>Mas información acerca del tema en la pág. de la</span>
      </p>
      <a class="u-link" href="https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019/advice-for-public/q-a-coronaviruses" target="_blank">
        <span>OMS.</span>
      </a>. 
    </section>
  </body>
</html>
