<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>¡ACERCA DEL COVID-19!-Nuestras Estadisticas</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Contact.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contact">
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
  <a href="Perfil.php" class="u-image u-logo u-image-1"><section class="perfil-usuario2"><div class="opcciones-perfil4"><button type="" style="bacground-color:#478ac9!important;"><i class="fas fa-info-circle"></i> Mi perfil :
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="php/cierre_sesion.php" style="padding: 10px 20px;"><section class="perfil-usuario2"><div class="opcciones-perfil2"><button type="">Cerrar Sesión <i class="fas fa-sign-out"></i></button></div></section></a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
    
      <div style="background-color: #f0f2f5; margin: 0px; padding: 0px;">
        <p>&nbsp;</p>
        <h6 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡Resultados: ¿Se encuentra vacunado(a)? !</h2>
        <center>
          <button>
          <a href="php/grafica_vacunas.php" target="_blank">Ver resultados</a>
          </button>
        </center>
        <p>&nbsp;</p>
        <h6 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡Resultados: ¿Qué piensa usted sobre las vacunas? !</h2>
        <center>
          <button>
          <a href="php/grafica_opi_vacuna.php" target="_blank">Ver resultados</a>
          </button>
        </center>
        <p>&nbsp;</p>
        <h6 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡Resultados: Al salir, ¿Usa de forma correcta su cubrebocas? !</h2>
        <center>
          <button>
          <a href="php/grafica_cubrebocas.php" target="_blank">Ver resultados</a>
          </button>
        </center>
        <p>&nbsp;</p>
        <h6 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡Resultados: ¿Sigue las medidas de sanitización en su hogar? !</h2>
        <center>
          <button>
          <a href="php/grafica_casa_limp.php" target="_blank">Ver resultados</a>
          </button>
        </center>
        <p>&nbsp;</p>
        <h6 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡Resultados: ¿Algún familiar contrajo esta enfermedad o la tuvo? !</h2>
        <center>
          <button>
          <a href="php/grafica_cont_enferme.php" target="_blank">Ver resultados</a>
          </button>
        </center>
        <p>&nbsp;</p>
        <h6 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡Resultados: Durante la pandemia, ¿Usted estuvo saliendo? !</h2>
        <center>
          <button>
          <a href="php/grafica_estuv_saliend.php" target="_blank"" target="_blank">Ver resultados</a>
          </button>
        </center>
        <p>&nbsp;</p>
        <h6 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡Resultados: Usted, ¿Se hace pruebas constantes para saber si tiene COVID-19 !</h2>
        <center>
          <button>
          <a href="php/grafica_prueb_covid.php" target="_blank">Ver resultados</a>
          </button>
        </center>
        <p>&nbsp;</p>
        <h6 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡Resultados: A causa de la contingencia ¿a tenido problemas en su trabajo? !</h2>
        <center>
          <button>
          <a href="php/grafica_prob_trabaj.php" target="_blank">Ver resultados</a>
          </button>
        </center>
        <p>&nbsp;</p>
        <h6 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡Resultados: ¿Le sirvió la información que se le otorgo? !</h2>
        <center>
          <button>
          <a href="php/grafica_test_ayuda.php" target="_blank">Ver resultados</a>
          </button>
        </center>
        <p style ="padding : 0px; margin: 0px;">&nbsp;</p>
      </div>  

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