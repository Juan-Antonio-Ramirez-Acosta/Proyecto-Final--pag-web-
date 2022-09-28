<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="¡CUIDEMOS NUESTRA SALUD ANTE EL COVID-19!, NEUROLOGICAL, CARDIOLOGICAL, 24 hrs emergency, INFÓRMESE SOBRE EL COVID-19 (CORONAVIRUS)., MEDIDAS DE PREVENCIÓN., ACERCA DE LAS VACUNAS, COMPARTENOS TU OPINIÓN, PRESENCIA GLOBAL., CONSIGA EL CUIDADO QUE NECESITA., COMPARTENOS TU EXPERIENCIA.">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>¡ACERCA DEL COVID-19!</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Casa.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Casa">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Casa.html" data-home-page-title="Casa" class="u-body"><header class="u-clearfix u-header u-header" id="sec-d058"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
  <?php 
    session_start();
    if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == ''){
      header("location:Login.html"); 
      die();
    }

    include("php/conexion.php"); //para llamar a un archivo  
    $usuario = $_SESSION['usuario'];
    $password = $_SESSION['password'];

    $sql = "SELECT nombre FROM datosinforma JOIN usuarios ON usuarios.id = datosinforma.usuarios_id WHERE usuario = '$usuario' AND password = '$password'";
    $result = mysqli_query($conexion, $sql);
    $nombre = mysqli_fetch_assoc($result);

    $sql2 = "SELECT email FROM datosinforma JOIN usuarios ON usuarios.id = datosinforma.usuarios_id WHERE usuario = '$usuario' AND password = '$password'";
    $result2 = mysqli_query($conexion, $sql2);
    $email = mysqli_fetch_assoc($result2);
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
    <section class="u-clearfix u-image u-section-1" id="carousel_92f4" data-image-width="626" data-image-height="417">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-custom-font u-font-oswald u-text u-text-white u-title u-text-1">¡CUIDEMOS NUESTRA SALUD ANTE EL COVID-19!</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="carousel_e3cc">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-palette-5-light-1 u-size-20 u-size-20-md u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1"><span class="u-icon u-icon-circle u-text-body-alt-color u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 420.8 420.8"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-69ef"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-69ef" x="0px" y="0px" viewBox="0 0 420.8 420.8" style="enable-background:new 0 0 420.8 420.8;" xml:space="preserve" class="u-svg-content"><g><g><path d="M413.6,204H378c14.8-33.6,13.2-60.8,7.6-79.2c-9.6-32.8-42-68.4-90-68.4c-12.8,0-25.6,2.4-38.8,7.2    C234,72,218.8,81.2,212,86c-6.8-4.8-21.6-14-44.8-22.4c-13.2-4.8-26.4-7.2-38.8-7.2c-48,0-80.4,35.6-90,68.4    c-5.6,19.6-7.6,49.2,11.2,86.4H6.4c-3.6,0-6.4,2.8-6.4,6.4c0,3.6,2.8,6.4,6.4,6.4h50.8c2,3.6,4.4,7.2,7.2,10.8    c41.6,60,132,125.2,148.4,129.2v0.4c0,0,0.4,0,0.8-0.4c0.4,0,0.8,0,1.2,0v-0.4c14-6.8,100.8-62.8,146.4-129.2c4.4-6,8-12,11.2-18    h42c3.6,0,6.4-2.8,6.4-6.4C420.8,206.4,417.2,204,413.6,204z M349.6,227.6c-42.4,62-120.4,112-137.2,122.8    c-17.2-10.8-94.8-61.2-137.6-122.8c-0.8-1.2-1.6-2.4-2.4-3.6h58.8c2.4,0,4.8-1.2,6-3.6l26.8-52.8l42,107.6c0.8,2.4,3.6,4,6,4    c0,0,0,0,0.4,0c2.8,0,5.2-2,6-4.8l36.8-126l19.6,63.6c0.8,2.4,2.8,4,5.2,4.4c2.4,0.4,4.8-0.8,6.4-2.8l15.6-22.8l13.2,22.4    c1.2,2,3.2,3.2,5.6,3.2h36C354.4,220.4,352,224,349.6,227.6z M364,204h-39.2l-16.4-28c-1.2-2-3.2-3.2-5.6-3.2    c-2.4,0-4.4,0.8-5.6,2.8l-13.6,20l-22-71.6c-0.8-2.8-3.6-4.4-6.4-4.8c-2.8,0-5.6,2-6.4,4.8l-37.2,128.4l-40.4-103.2    c-0.8-2.4-3.2-4-5.6-4c-2.8,0-4.8,1.2-6,3.6l-31.6,62H64.4c-16-29.2-20.4-57.2-13.2-82.4c8.4-28.4,36-58.8,77.6-58.8    c11.2,0,22.8,2.4,34.4,6.4c29.2,10.8,44.8,23.2,45.2,23.2c2.4,2,5.6,2,8,0c0,0,15.6-12.4,45.2-23.2c11.6-4.4,23.2-6.4,34.4-6.4    c41.2,0,69.2,30.4,77.6,58.8C380.4,151.6,376.8,177.2,364,204z"></path>
</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                  <h3 class="u-align-center u-text u-text-body-alt-color u-text-1"> Manténgase sano y hágase una prueba</h3>
                  <p class="u-align-center u-text u-text-body-alt-color u-text-2"> Esté atento a los síntomas. En caso de presentaar algunos síntomas, acuda su centro de salud mas cercano.</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-palette-5-dark-1 u-size-20 u-size-20-md u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2"><span class="u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-2"><img src="images/inyeccion.png" alt=""></span>
                  <h3 class="u-align-center u-text u-text-body-alt-color u-text-3"> Vacúnese</h3>
                  <p class="u-align-center u-text u-text-body-alt-color u-text-4"> Las vacunas autorizadas contra el&nbsp;COVID-19 pueden ayudar a protegerlo del&nbsp;COVID-19.</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-palette-5-dark-2 u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3"><span class="u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-3"><img src="images/mascarilla1.png" alt=""></span>
                  <h3 class="u-align-center u-text u-text-body-alt-color u-text-5"> Use cubrebocas</h3>
                  <p class="u-align-center u-text u-text-body-alt-color u-text-6"> Usar un Cubrebocas que cumpla con la recomendación por la <a href="https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019/advice-for-public/when-and-how-to-use-masks" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" target="_blank">OMS</a>, en lugares públicos cerrados.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="carousel_fab1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width-md u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-1">INFÓRMESE SOBRE EL COVID-19 (CORONAVIRUS).</h2>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle-md">
                      <p class="u-align-left u-text u-text-2"> Los coronavirus son una familia de virus que causan enfermedades (desde el resfriado común hasta enfermedades respiratorias más graves) y circulan entre humanos y animales.<br>
                        <br>En este caso, se trata del SARS-COV2. Apareció en China en diciembre pasado y provoca una enfermedad llamada COVID-19, que se extendió por el mundo y fue declarada pandemia global por la Organización Mundial de la Salud.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-2">
                    <div class="u-container-layout">
                      <img class="u-expanded-width-sm u-expanded-width-xs u-image u-image-1" src="images/ff8d8bc18ea3d33187ee1aa300a5f9f7.jpeg">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-5-dark-1 u-section-4" id="sec-56ed">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-1">SÍNTOMAS</h2>
            <p class="u-text u-text-2"> Una persona debe sospechar de COVID-19 cuando presenta al menos dos de los siguientes síntomas:</p>
          </div>
        </div>
        <img class="u-image u-image-round u-radius-10 u-image-1" src="images/Aparicion-sintomas.png" alt="" data-image-width="304" data-image-height="73">
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-container-layout-2">
                <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-image u-image-circle u-preserve-proportions u-image-2" alt="" data-image-width="155" data-image-height="155"></div>
                <img class="u-image u-image-default u-preserve-proportions u-image-3" src="images/Fiebre.png" alt="" data-image-width="155" data-image-height="155">
                <h4 class="u-custom-font u-font-open-sans u-text u-text-3">Fiebre</h4>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-container-layout-3">
                <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-image u-image-circle u-preserve-proportions u-image-4" alt="" data-image-width="155" data-image-height="155"></div>
                <img class="u-image u-image-default u-preserve-proportions u-image-5" src="images/Tos.png" alt="" data-image-width="155" data-image-height="155">
                <h4 class="u-custom-font u-font-open-sans u-text u-text-4">Tos</h4>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-container-layout-4">
                <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-image u-image-circle u-preserve-proportions u-image-6" alt="" data-image-width="155" data-image-height="155"></div>
                <img class="u-image u-image-default u-preserve-proportions u-image-7" src="images/Faltadeaire.png" alt="" data-image-width="155" data-image-height="155">
                <h4 class="u-custom-font u-font-open-sans u-text u-text-5">Falta de Aire</h4>
              </div>
            </div>
          </div>
        </div>
        <img class="u-expanded-width-xs u-image u-image-round u-radius-10 u-image-8" src="images/Modo-Transmision.png" alt="" data-image-width="305" data-image-height="168">
        <div class="u-align-center u-container-style u-expanded-width-xs u-group u-group-2">
          <div class="u-container-layout u-valign-middle u-container-layout-5">
            <h2 class="u-custom-font u-font-oswald u-text u-text-6">MEDIDAS DE PREVENCIÓN.</h2>
            <p class="u-text u-text-7"> Cómo protegerse y proteger a los demás.</p>
          </div>
        </div>
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-grid u-list u-list-2">
          <div class="u-repeater u-repeater-2">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-6">
                <img class="u-expanded-width u-image u-image-round u-preserve-proportions u-radius-10 u-image-9" src="images/No-Tocar-.png" alt="" data-image-width="122" data-image-height="123">
                <h4 class="u-custom-font u-font-open-sans u-text u-text-8">No toque ojos, nariz y boca con las manos sucias</h4>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-7">
                <img class="u-expanded-width u-image u-image-round u-preserve-proportions u-radius-10 u-image-10" src="images/Lavar-manos.png" alt="" data-image-width="150" data-image-height="150">
                <h4 class="u-custom-font u-font-open-sans u-text u-text-9">Lávese las manos concon agua y jabon o utilice gel antibacterial por lo menos 20 segundos</h4>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-8">
                <img class="u-expanded-width u-image u-image-round u-preserve-proportions u-radius-10 u-image-11" src="images/Evitar-Contacto.png" alt="" data-image-width="150" data-image-height="150">
                <h4 class="u-custom-font u-font-open-sans u-text u-text-10">Evite contacto con&nbsp; otras personas</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-3">
          <div class="u-repeater u-repeater-3">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-9">
                <img class="u-expanded-width u-image u-image-round u-preserve-proportions u-radius-10 u-image-12" src="images/Mantenga-limpio.png" alt="" data-image-width="150" data-image-height="149">
                <h4 class="u-custom-font u-text u-text-font u-text-11">Mantenga limpio objetos y superficies</h4>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-10">
                <img class="u-expanded-width u-image u-image-round u-preserve-proportions u-radius-10 u-image-13" src="images/Usar-mascarillas.png" alt="" data-image-width="150" data-image-height="150">
                <h4 class="u-custom-font u-text u-text-font u-text-12">Utilice Mascarillas Quirúrgicas</h4>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-11">
                <img class="u-expanded-width u-image u-image-round u-preserve-proportions u-radius-10 u-image-14" src="images/Permanecer-en-casa.png" alt="" data-image-width="150" data-image-height="148">
                <h4 class="u-custom-font u-text u-text-font u-text-13">Permanezca en casa, a menos que se muy necesario&nbsp; salir</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_bf06">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-50 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" data-image-width="1420" data-image-height="800">
                <div class="u-container-layout"></div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout">
                  <h2 class="u-custom-font u-font-oswald u-text u-text-1">ACERCA DE LAS VACUNAS</h2>
                  <p class="u-text u-text-2"> El acceso equitativo a vacunas seguras y eficaces es fundamental para poner fin a la pandemia de COVID-19, por lo que es enormemente alentador ver que hay tantas vacunas en fase de prueba y desarrollo.&nbsp;<br>
                    <br>La OMS está trabajando incansablemente con sus asociados para desarrollar, fabricar y desplegar vacunas seguras y eficaces.Las vacunas seguras y eficaces son una herramienta que cambia las reglas del juego; sin embargo, en el futuro inmediato debemos seguir usando mascarillas, limpiándonos las manos, ventilando bien los espacios interiores, manteniendo el distanciamiento físico y evitando los lugares concurridos.<br>
                    <br>Estar vacunados no significa que podamos dejar de lado las medidas de precaución y ponernos en riesgo a nosotros mismos y a los demás, sobre todo porque todavía se está investigando en qué medida las vacunas protegen no solo contra la enfermedad, sino también contra la infección y la transmisión.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="u-text u-text-3"> El primer programa de vacunación colectiva se puso en marcha a principios de diciembre de 2020&nbsp;y el número de dosis vacunales administradas se actualiza&nbsp;<a href="https://covid19.who.int/" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" target="_blank">aquí</a>&nbsp;a diario. Se han administrado al menos 13 vacunas distintas (a través de cuatro plataformas).<br>
          <br>El 31 de diciembre de 2020, la OMS dio luz verde a la inclusión en la&nbsp;Lista para uso en emergencias&nbsp;(EUL, por sus siglas en inglés) de la vacuna Comirnaty de Pfizer/BioNTech.&nbsp;<br>
          <br>El 15 de febrero incluyó también en esa lista la vacuna Covishield del SII y la vacuna AZD1222 AstraZeneca (desarrolladas por AstraZeneca/Oxford y fabricadas por el Serum Institute de la India y SK Bio, respectivamente).<br>
          <br>Posteriormente, el 12 de marzo, aceptó la inclusión de la vacuna Janssen/Ad26.COV2.S desarrollada por Johnson &amp; Johnson. El 30 de abril se añadió a la lista la vacuna mRNA-1273 de Moderna, y el 7 de mayo, la vacuna de Sinopharm. Que fabrica el Beijing Bio-Institute of Biological Products Co Ltd, una filial del China National Biotec Group (CNBG).&nbsp;<br>
          <br>Por último, el 1 de junio se autorizó el uso de emergencia de la vacuna CoronaVac de Sinovac.<br>
          <br>Para más información sobre el desarrollo de vacunas contra la COVID-19, consúltese este&nbsp;<a href="https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-(covid-19)-vaccines?adgroupsurvey={adgroupsurvey}&amp;gclid=Cj0KCQiAhf2MBhDNARIsAKXU5GTMyf-OjnPy3LCjFF_I29y7qIxrjocCRurwG6bbDjqOMu7hfTsiosgaAvvdEALw_wcB" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" target="_blank">enlace.</a>
          <br>
        </p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-6" id="sec-783d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-carousel u-expanded-width-xs u-gallery u-layout-thumbnails u-lightbox u-no-transition u-show-text-always u-gallery-1" id="carousel-e131" data-interval="5000" data-u-ride="carousel">
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="580" data-image-height="330">
                <img class="u-back-image u-expanded" src="images/Aplicacion-vacuna.jpg">
              </div>
              <div class="u-over-slide u-over-slide-1">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-2">
              <div class="u-back-slide" data-image-width="1320" data-image-height="741">
                <img class="u-back-image u-expanded" src="images/pfizer.jpg">
              </div>
              <div class="u-over-slide u-over-slide-2">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-3" data-image-width="1160" data-image-height="650">
              <div class="u-back-slide" data-image-width="1160" data-image-height="650">
                <img class="u-back-image u-expanded" src="images/Aplicacion-vacuna-2.jpg">
              </div>
              <div class="u-over-slide u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-4" data-image-width="2836" data-image-height="1875">
              <div class="u-back-slide" data-image-width="1600" data-image-height="1063">
                <img class="u-back-image u-expanded" src="images/Aztrazeneca.jpg">
              </div>
              <div class="u-over-slide u-over-slide-4">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-5" data-image-width="840" data-image-height="560">
              <div class="u-back-slide" data-image-width="1200" data-image-height="675">
                <img class="u-back-image u-expanded" src="images/Aplicacion-vacuna-3.jpg">
              </div>
              <div class="u-over-slide u-over-slide-5">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-6" data-image-width="840" data-image-height="560">
              <div class="u-back-slide" data-image-width="1280" data-image-height="720">
                <img class="u-back-image u-expanded" src="images/jhonson.jpg">
              </div>
              <div class="u-over-slide u-over-slide-6">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-7" data-image-width="580" data-image-height="330">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/Aplicacion-vacuna-4.jpg">
              </div>
              <div class="u-over-slide u-over-slide-7">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-8" data-image-width="840" data-image-height="560">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/sinovac.jpg">
              </div>
              <div class="u-over-slide u-over-slide-8">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-e131" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-e131" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
          <ol class="u-carousel-thumbnails u-spacing-10 u-carousel-thumbnails-1">
            <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="0">
              <img class="u-carousel-thumbnail-image u-image" src="images/Aplicacion-vacuna.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-2" data-u-target="#carousel-e131" data-u-slide-to="1">
              <img class="u-carousel-thumbnail-image u-image" src="images/pfizer.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-3" data-u-target="#carousel-e131" data-u-slide-to="2">
              <img class="u-carousel-thumbnail-image u-image" src="images/Aplicacion-vacuna-2.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="3">
              <img class="u-carousel-thumbnail-image u-image" src="images/Aztrazeneca.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="4">
              <img class="u-carousel-thumbnail-image u-image" src="images/Aplicacion-vacuna-3.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="5">
              <img class="u-carousel-thumbnail-image u-image" src="images/jhonson.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="6">
              <img class="u-carousel-thumbnail-image u-image" src="images/Aplicacion-vacuna-4.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="7">
              <img class="u-carousel-thumbnail-image u-image" src="images/sinovac.jpg">
            </li>
          </ol>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-5-light-2 u-section-7" id="carousel_39d1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-1">COMPARTENOS TU OPINIÓN</h2>
            <p class="u-text u-text-2">Compártenos tu opinión, mediante la resolución de un test que tenemos preparado para ti.</p>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-20 u-size-20-md u-white u-layout-cell-2">
                <div class="u-container-layout">
                  <img class="u-expanded-width u-image u-image-2" src="./images/formulario.jpeg">
                  <h3 class="u-text u-text-5">Test Covid-19</h3>
                  <p class="u-text u-text-6">El test es acerca del covid-19, consta de preguntas para conocer su opinión respecto a este tema y de la información presentada.</p>
                  <a href="./Test.html" target="_blank" class="u-border-2 u-border-hover-palette-1-base u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-none u-radius-50 u-btn-2">Ir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-5-dark-200 u-section-8" id="carousel_295a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-custom-font u-font-oswald u-text u-text-1">PRESENCIA GLOBAL.</h2>
          </div>
        </div>
      </div>
      <style>.embed-container {position: relative; padding-bottom: 70%; height: 500px; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style><div class="embed-container"><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="COVID-19" src="https://www.arcgis.com/apps/opsdashboard/index.html#/85320e2ea5424dfaaa75ae62e5c06e61"></iframe></div>
      <p>&nbsp;</p>
    </section>
    <section class="u-clearfix u-section-9" id="carousel_7592">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-1">CONSIGA EL CUIDADO QUE NECESITA.</h2>
          </div>
        </div>
        <p class="u-text u-text-2">Para obtener mas informacion<span style="font-weight: 700;"> llame al 800 00 44 800</span>, será atentido por personal capacitado de la secretaria de salud.​Si tiene síntomas de COVID-19&nbsp;&nbsp;como son gripe como fiebre, tos o falta de aire llame u <span style="font-weight: 700;">acuda a su centro de salud a la brevedad.</span>
          <br>
          <br>Recuerde que es importante recibir la atención que necesita, especialmente si tiene una condición crónica.Si perteneces a alguno de los grupos de mayor riesgo para complicarse, como las personas de 60 años y más, personas que viven con enfermedades como hipertensión o diabetes, las mujeres embarazadas, menores de cinco años y personas que viven con cáncer o VIH,&nbsp;<span style="font-weight: 700;">DEBES ACUDIR A RECIBIR ATENCIÓN&nbsp;MÉDICA.</span>
        </p>
        <div class="u-clearfix u-gutter-46 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-size-60 u-image-1">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
        <h4 class="u-text u-text-3">
          <span style="font-size: 1.10rem;">&nbsp;&nbsp;&nbsp;"​Si te cuidas<b>&nbsp;tú</b>,&nbsp;nos cuidamos&nbsp;
          </span><b>
            <span style="font-size: 1.10rem;">to​dos"</span></b>
        </h4>
      </div>
    </section>
    <section class="u-clearfix u-palette-5-dark-1 u-section-10" id="carousel_6dbf">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-1">COMPARTENOS TU EXPERIENCIA.</h2>
            <p class="u-text u-text-2">Brindanos la oportunidad de saber, si has tenido algunza experencia relaciona al tema del coronavirus, ya una experencia propia o cercana de algún familiar, comopañero, amigo, etc.</p>
          </div>
        </div>
        <div class="u-form u-form-1">
          

          <form action="php/alta_usuario.php" method="POST" class="u-block-5e1f-8 u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" source="custom"><!-- hidden inputs for siteId and pageId -->
            
            <div class="u-form-group u-form-name">
              <label for="name-b93e" class="u-form-control-hidden u-label">Name</label>
              <input type="text" placeholder="Ingrese su nombre" disabled value="<?php echo "".$nombre['nombre']?>" id="name-b93e" name="nombre" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-palette-5-dark-2" required="">
            </div><!-- always visible -->

            <div class="u-form-email u-form-group">
              <label for="email-b93e" class="u-form-control-hidden u-label">Email</label>
              <input type="email" placeholder="Ingrese un email valido" disabled value="<?php echo "".$email['email']?>" id="email-b93e" name="email" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-palette-5-dark-2" required="">
            </div>

            <div class="u-form-group u-form-message">
              <label for="message-b93e" class="u-form-control-hidden u-label">Message</label>
              <textarea placeholder="Ingrese su mensaje" rows="4" cols="50" id="message-b93e" name="mensaje" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-palette-5-dark-2" required=""></textarea>
            </div>

            <div class="u-align-center u-form-group u-form-submit u-form-group-4">
              <a href="#" class="u-btn u-btn-submit u-button-style u-palette-5-light-2 u-btn-1">Enviar</a>
              <input type="submit" name="enviar" value="Contactar" class="u-form-control-hidden">

            </div>

            <div class="u-form-send-message u-form-send-success"> Gracias! tu comentario ha sido enviado. </div>
            <div class="u-form-send-error u-form-send-message"> Gracias! tu comentario ha sido enviado. </div>
            <input type="hidden" value="" name="recaptchaResponse">
            
    
          </form>


        </div>
      </div>
    </section>
    
    
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