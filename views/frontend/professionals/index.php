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
    <div class="navbar-fixed">
        <nav class="topbar" role="navigation">
            <div class="nav-wrapper container">
                <a href="<?Php echo BASE_VIEW_URL; ?>" class="brand-logo"><img src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-text-white.svg" width="270px"></a>
                <?Php
                    if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                        echo '<ul class="right hide-on-med-and-down">
                                <li><a href="'.BASE_VIEW_URL.'universe">Universo</a></li>
                                <li><a href="#" data-activates="slide-out" id="navbar-menu">'.ucwords($this->vUserNamesCompleteMenu).'</a></li>
                            </ul>';
                        
                        /*echo '<ul id="slide-out" class="side-nav">
                                <li><a href="'.BASE_VIEW_URL.'profile">'.ucwords($this->vUserNamesCompleteMenu).'</a></li>
                                <li><a href="'.BASE_VIEW_URL.'universe">Universo</a></li>
                                <li><a href="'.BASE_VIEW_URL.'">Más Información</a></li>
                            </ul>';*/
                        
                        echo '<ul id="slide-out" class="side-nav">
                                <li>
                                    <div class="userView deep-orange">
                                        '.$this->vImageProfileMenu.'
                                        <span class="white-text name">'.$this->vUserNamesCompleteMenu.'</span>
                                        <span class="white-text email">'.$this->vUserEmailMenu.'</span>
                                    </div>
                                </li>
                                <li><a href="'.BASE_VIEW_URL.'profile/account/"><i class="fa fa-user fa-2x"></i>Mi Cuenta</a></li>
                                <li><a href="'.BASE_VIEW_URL.'profile/about/"><i class="material-icons">cloud</i>Sobre Mi</a></li>
                                <li><div class="divider"></div></li>
                                <li><a class="subheader">Configuraciones</a></li>
                                <li><a class="waves-effect" href="#!">Mi Cuenta</a></li>
                                <li><a class="waves-effect" href="'.BASE_VIEW_URL.'access/LogoutMethod">Cerrar Sesión</a></li>
                            </ul>
                            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>';
                        
                    } else {
                        echo '<ul class="right hide-on-med-and-down">
                                <li><a href="'.BASE_VIEW_URL.'access">Acceder</a></li>
                                <li><a href="'.BASE_VIEW_URL.'universe">Universo</a></li>
                            </ul>';
                        
                        echo '<ul id="slide-out" class="side-nav">
                                <li><a href="'.BASE_VIEW_URL.'access">Acceder</a></li>
                                <li><a href="'.BASE_VIEW_URL.'universe">Universo</a></li>
                                <li><a href="'.BASE_VIEW_URL.'">Más Información</a></li>
                            </ul>
                            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>';
                    }
                ?>
            </div>
        </nav>
    </div>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="center">
            <a class="topbar-logo" href="#!">
                <img class="logo-text-55 padding-top-30" src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-professionals-text.svg" align="center">
            </a>
        </div>
        <!--<div class="row center">
          <h5 class="col s12 white-text title-h5 weight200">Red social para profesionales que desean posicionar su marca personal de trabajo y especialización.</h5>
        </div>-->
        <div class="row center">
          <a href="<?Php echo BASE_VIEW_URL; ?>access" id="download-button" class="btn-large waves-effect waves-light deep-orange">Comenzar a Usarla</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>professionales_bg.jpg" alt=""></div>
  </div>

    <section class="grey lighten-4">
      <div class="container">
        <div class="section">

          <div class="row">
            <div class="col s12">
              <h3><i class="mdi-content-send"></i></h3>

                <h4 class="title-h4">Profesionales en todos los rubros</h4>
              <p class="title-p-1 weight100">Estamos seguros que en latinoamerica se encuentra una fuente infinita de personas profesionales altamente capacitadas en todas las áreas, personas que a lo largo de su vida profesional han adquirido conocimientos en campos específicos, los cuales pueden ser respaldados por los títulos que estos han alcanzado.</p>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
                <h3><i class="mdi-content-send"></i></h3>
                <h4 class="title-h4">¿Eres profesional independiente?, ¿Deseas hacer conocer tu trabajo?, ¿Tienes experiencia, pero no tienes un título?, ¿Eres estudiante y quieres practicar, además de ganar algo de dinero? ¿Simplemente, quieres algo extra?</h4>
                <p class="title-p-1 weight100">Nosotros consideramos profesional, aquella persona que dedica el 100% de su esfuerzo a cualquier trabajo que realice en el tiempo que le tome.</p>
                <p class="title-p-1 weight100">Pero para toda la humanidad, profesional es aquella persona que a logrado culminar los estudios teóricos dentro de una prestigiosa universidad, la cual le otorga un título académico el cual certifica que la persona mencionada tiene un grado de estudios.</p>
                <p class="title-p-1 weight100">Nos encanta, que todas las personas estudien y amplien sus conocimientos basandose siempre en la enseñanza buena y con beneficios para toda la sociedad.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="pre-footer grey darken-3">
        <div class="container">
        <div class="row">
        <div class="col l6 s12">
        <h5 class="title-h5 white-text">¿Qué es Enlaceme.com?</h5>
        <p class="title-p-2 weight100 white-text">Es una plataforma orientada al registro de personas que realizan actividades de trabajo de manera profesional o de oficio, para nuestra sociedad latinoamericana, la cual alberga grandes trabajadores.</p>


        </div>
        <div class="col l3 s12">
        <h5 class="white-text">Información</h5>
        <ul>
        <li><a class="link-1 white-text" href="#!">¿Como funciona?</a></li>
        <li><a class="link-1 white-text" href="#!">¿Como registrarme?</a></li>
        </ul>
        </div>
        <div class="col l3 s12">
        <h5 class="white-text">Datos Legales</h5>
        <ul>
        <li><a class="link-1 white-text" href="<?Php echo BASE_VIEW_URL; ?>policy">Políticas de Privacidad</a></li>
        <li><a class="link-1 white-text" href="<?Php echo BASE_VIEW_URL; ?>terms">Términos de Uso</a></li>
        </ul>
        </div>
        </div>
        </div>
    </section>

	<!-- BEGIN FOOTER -->
	<footer class="footer-copyright grey darken-4">
        <div class="container">
            <img class="footer-logo logo-200" src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-text-white.svg" alt="Logotipo Enlaceme.com">
            <p class="copyright grey-text">2017 Copyright &copy; Derechos reservados <a class="footer-link-1 deep-orange-text" href="http://www.ideas-envision.com" target="_blank">Ideas-Envision Servicios Integrales</a></p>
        </div>
	</footer>
	<!-- END FOOTER -->

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
