<!DOCTYPE html>
<html lang="es">
<head>
		<title>Red Social Enlaceme</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="Red social de trabajo, para personas profesionales, técnicos o que realizan un oficio."/>
        
		<link rel="canonical" href="http://enlaceme.com/" />
        
		<meta property="og:locale" content="es_ES" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Red Social Enlaceme" />
		<meta property="og:description" content="Red social de trabajo, para personas profesionales, técnicos o que realizan un oficio." />
		<meta property="og:url" content="http://enlaceme.com/" />
		<meta property="og:site_name" content="Red Social Enlaceme" />
		<meta property="article:publisher" content="https://www.facebook.com/redsocialenlaceme" />
		
        <meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:description" content="Red social de trabajo, para personas profesionales, técnicos o que realizan un oficio."/>
		<meta name="twitter:title" content="Red Social Enlaceme"/>
		<meta name="twitter:domain" content="Enlaceme"/>
        
        <link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?Php echo $vParamsViewMaterialize['root_materialize_css']; ?>materialize.min.css"  media="screen,projection"/>
        <link href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_css']; ?>style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="topbar" role="navigation">
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo"><img src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-text-white.svg" width="270px"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Ingresar</a></li>
        <li><a href="#">Registrarme</a></li>
        <li><a href="#">Información</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Ingresar</a></li>
        <li><a href="#">Registrarme</a></li>
        <li><a href="#">Información</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>   

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <!--<br><br>-->
            <a href="">
                <img class="logo-text-60" src="http://www.enlaceme.com/views/layout/assets/frontend/images-web/logo-text-white.svg" align="center">
            </a>          
        <!--<h1 class="header center teal-text text-lighten-2">Enlaceme.com</h1>-->
        <div class="row center">
          <h5 class="col s12 white-text title-h5">Red social latinoamericana de trabajo, para profesionales, técnicos y/o personas de oficio.</h5>
        </div>
        <div class="row center">
          <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Comenzar a Usarla</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>head_bg.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>profesionales.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Profesionales<i class="material-icons right">more_vert</i></span>
              <p><a href="#">Mayor información</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Profesionales<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>

        <div class="col s12 m6 last">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>tecnicos.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Técnicos<i class="material-icons right">more_vert</i></span>
              <p><a href="#">Mayor información</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Técnicos<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>ocupacion.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Oficio<i class="material-icons right">more_vert</i></span>
              <p><a href="#">Mayor información</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Oficio<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>otros.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Oficio<i class="material-icons right">more_vert</i></span>
              <p><a href="#">Mayor información</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Oficio<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>          
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="col s12">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>tecnicos.jpg" alt="Unsplashed background img 2"></div>
  </div>
<section class="grey darken-4">
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send"></i></h3>
          <h4 class="white-text title-h4">¿Qué es lo que hacemos realmente?</h4>
          <p class="white-text title-p-1">Enlaceme.com, es un portal web, diseñado exclusivamente sobre los principios de una red social; Orientada aquellas personas que deseen brindar servicios, profesionales, técnicos de oficio o simplemente de pasatiempo como ingreso económico extra; Principalmente deseamos facilitar el registro de información sobre el trabajo o especialidad que las personas realizán y desean promocionar estas habilidades, para que personas que están en busca de estos servicios puedan encontrar la solución a sus necesidades.</p>
        </div>
      </div>
        
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send"></i></h3>
          <h4 class="white-text title-h4">¿Eres profesional independiente?, ¿Deseas hacer conocer tu trabajo?, ¿Tienes experiencia, pero no tienes un título?, ¿Eres estudiante y quieres practicar, además de ganar algo de dinero? ¿Simplemente, quieres algo extra?</h4>
            <p class="white-text title-p-1">Si tu te haces todas estas preguntas y más, estas en el lugar correcto, esta es una red social de trabajo, donde podras registrar, cargar y mostrar con descripciones, fotografias, mapas y mucho más todo lo que haces, todo lo que puedes hacer y cual es el monto que cobras por el trabajo.</p>

            <p class="white-text title-p-1">Además, las personas que contraten tus servicios podrán realizar recomendaciones a otras personas, evaluando tu capacidad de trabajo, el trato que has brindado y lo mejor de todo valorará tu trabajo, agradeciendote!</p>

            <p class="white-text title-p-1">Y por favor, no lo olvides, esto no es solo para profesionales, tambien es para técnicos, personas que realizan algun oficio o simplemente para personas que deseen ganar dinero extra.</p>
        </div>
      </div>

    </div>
  </div>
</section>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="col s12">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>ocupacion.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5>¿Qué es Enlaceme.com?</h5>
          <p>Es una plataforma orientada al registro de personas que realizan actividades de trabajo de manera profesional o de oficio, para nuestra sociedad latinoamericana, la cual alberga grandes trabajadores.</p>


        </div>
        <div class="col l3 s12">
          <h5>Información</h5>
          <ul>
            <li><a href="#!">¿Como funciona?</a></li>
            <li><a href="#!">¿Como registrarme?</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5>Datos Legales</h5>
          <ul>
            <li><a href="#!">Políticas de Privacidad</a></li>
            <li><a href="#!">Términos de Uso</a></li>
          </ul>
        </div>
      </div>
    </div>

	<!-- BEGIN FOOTER -->
	<footer class="footer-copyright grey darken-4">
        <div class="container">
            <img class="footer-logo logo-200" src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-text-white.svg" alt="Logotipo Enlaceme.com">
            <p class="copyright">2017 Copyright &copy; Derechos reservados <a class="color-white" href="http://www.ideas-envision.com" target="_blank">Ideas-Envision Servicios Integrales</a></p>
        </div>
	</footer>
	<!-- END FOOTER -->      
  </footer>


    <!--  Scripts-->
    <script type="text/javascript" src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?Php echo $vParamsViewMaterialize['root_materialize_js']; ?>materialize.min.js"></script>    
    <script src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_js']; ?>init.js"></script>
    <!-- GoogleAnalytic -->  
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-55420692-1', 'auto');
        ga('send', 'pageview');

        if (top.location!= self.location)
        {
        top.location = self.location
        }
    </script>
  </body>
</html>
