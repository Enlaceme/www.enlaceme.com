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
                <img class="logo-text-55 padding-top-30" src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-text-white.svg" align="center">
            </a>
        </div>
        <div class="row center">
          <h5 class="col s12 white-text title-h5 weight200">Red social latinoamericana de trabajo, para profesionales, técnicos y/o personas de oficio.</h5>
        </div>
        <div class="row center">
          <a href="<?Php echo BASE_VIEW_URL; ?>access" id="download-button" class="btn-large waves-effect waves-light deep-orange">Comenzar a Usarla</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>head_bg.jpg" alt=""></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>professions.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Profesionales<i class="material-icons right">more_vert</i></span>
              <p><a href="<?Php echo BASE_VIEW_URL; ?>professionals">Mayor información</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Profesionales<i class="material-icons right">close</i></span>
                <p>Nosotros consideramos profesional, aquella persona que dedica el 100% de su esfuerzo a cualquier trabajo que realice en el tiempo que le tome.</p>
                <p>Pero para toda la humanidad, profesional es aquella persona que a logrado culminar los estudios teóricos dentro de una prestigiosa universidad, la cual le otorga un título académico el cual certifica que la persona mencionada tiene un grado de estudios.</p>
                <p>Nos encanta, que todas las personas estudien y amplien sus conocimientos basandose siempre en la enseñanza buena y con beneficios para toda la sociedad.</p>
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
              <p><a href="<?Php echo BASE_VIEW_URL; ?>tecnicos">Mayor información</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Técnicos<i class="material-icons right">close</i></span>
                <p>Como definición podemos decir que es un conjunto de procedimientos o recursos de los que se sirve una ciencia, un arte o un oficio específico.</p>
                <p>Se trata de un grado o calificación al que se accede a partir de la educación formal, donde se adquiere conocimientos muy específicos basados en diversas herramientas, ya sean intelectuales o físicas, que le permiten ejecutar un procedimiento.</p>
                <p>Consideramos que Latinoamerica alberga la mayor cantidad de recurso humano técnico, debido a que nos especializamos por nuestros propios medios en base a practicas y experiencias.</p>
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
              <p><a href="<?Php echo BASE_VIEW_URL; ?>jobs">Mayor información</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Oficio<i class="material-icons right">close</i></span>
                <p>El término suele utilizarse para hacer referencia a aquella actividad laboral que no requiere de estudios formales.</p>
                <p>Tambien podriamos decir que es una actividad laboral habitual, especialmente la que requiere habilidad manual o esfuerzo físico.</p>
                <p>Lo mejor de todo es que muchas veces hacemos cosas que nos gustan y no nos damos cuenta que estamos haciendo un trabajo como oficio y podemos ganar dinero por eso.</p>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>otros.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pasatiempos<i class="material-icons right">more_vert</i></span>
              <p><a href="<?Php echo BASE_VIEW_URL; ?>hobbies">Mayor información</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pasatiempos<i class="material-icons right">close</i></span>
              <p>Un pasatiempo, puede denominarse tambien afición o hobby, definida como actividad que se realiza por gusto o amor sin medir, ni escatimar en gustos, gastos y/o tiempo.</p>
                <p>Es algo que en Latinoamerica no le damos mucha importancia, hacemos cosas que pareciera que lo llevamos en la sangre, pero pensamos que no es algo que nos dará dinero.</p>
                <p>Animate, sabemos que tienes grandes habilidades, empieza por profundizar en lo que te gusta y saca provecho de eso.</p>
            </div>
          </div>
        </div>          
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row right-align">
            <h4 class="white-text text-darken-2 title-h4">¿Qué neceistas?</h4>
            <h5 class="col s6 offset-s6 white-text text-darken-2 title-h5 weight100">Un lugar donde puedes publicar toda tu trayectoria profesional, con la publicación de todos tus estudios, hasta los lugares en los que has trabajado, los proyectos que has colaborado.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>professionales.jpg" alt="Unsplashed background img 2"></div>
  </div>
<section class="grey darken-4">
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send"></i></h3>
          
            <h2 class="white-text title-h2">¿Porqué hacemos lo que hacemos?</h2>
          <p class="white-text title-p-1 weight100">Seguros que nosotros los latinoamericanos hacemos grandes cosas y podemos aún más, por lo que si apoyamos a nuestra gente, nuestro trabajo, nuestros servicios y mejoramos juntos día a día nuestros paises crecerán más y mejor con la gente que los hace grandes.</p>
        </div>
      </div>
        
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send"></i></h3>
          <h2 class="white-text title-h2">¿Cómo hacemos lo que ofrecemos</h2>
            <p class="white-text title-p-1 weight100">Bastante simple, creemos que tan solo con describir tu trabajo, especificar tus habilidades, registrar tus destrezas, compartir tu conocimiento y abrirte al mundo para ayudar a otras personas con sus problemas, necesidades y/o requerimientos, haciendolos de forma correcta, segura, de calidad y ofreciendo un excelente trato no solo mejoraremos latinoamerica si no tambien podremos recibir una remuneración económica a cambio de un buen trabajo hecho.</p>
        </div>
      </div>
        
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send"></i></h3>
          <h2 class="white-text title-h2">¿Para qué hacemos lo que ofrecemos?</h2>
            <p class="white-text title-p-1 weight100">Para que todas las personas que ofrecen un excelente servicio, un magnifico trato hacia los demás y sobre todo a las personas que realizan el trabajo con pasión y calidad, se hagan conocer, aumenten sus clientes y obtengan el pago justo y merecido por el excelente trabajo que realizan.</p>
        </div>
      </div>        

    </div>
  </div>
</section>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row left">
            <h4 class="white-text title-h4">¿Porqué queremos ayudarte?</h4>
            <p class="col l6 white-text title-p-1 weight100">Nosotros queremos que hagas lo que te gusta y además ganes dinero haciendolo, te damos algunas pautas para que mejores tu trabajo diario.</p>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>tecnicos_bg.jpg" alt="Unsplashed background img 3"></div>
  </div>

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
