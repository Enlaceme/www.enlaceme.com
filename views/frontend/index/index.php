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
      <a href="#!" class="brand-logo"><img src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-text-white.svg" width="270px"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?Php echo BASE_VIEW_URL;?>login">Ingresar</a></li>
        <li><a href="#">Registrarme</a></li>
        <li><a href="#">Información</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="<?Php echo BASE_VIEW_URL;?>login">Ingresar</a></li>
        <li><a href="#">Registrarme</a></li>
        <li><a href="#">Información</a></li>
      </ul>
        
        <ul id="slide-out" class="side-nav">
            <li>
                <div class="user-view">
                    <div class="background deep-orange">
                        <!--<img src="images/office.jpg">-->
                    </div>
                    <!--<a href="#!user"><img class="circle" src="images/yuna.jpg"></a>-->
                    <a href="#!name"><span class="white-text name">John Doe</span></a>
                    <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
            </li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
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
          <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Comenzar a Usarla</a>
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
              <p><a href="#">Mayor información</a></p>
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
              <p><a href="#">Mayor información</a></p>
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
              <p><a href="#">Mayor información</a></p>
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
              <p><a href="#">Mayor información</a></p>
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
            <h4 class="grey-text text-darken-2 title-h4">Personas Profesionales</h4>
            <h5 class="col s6 offset-s6 grey-text text-darken-2 title-h5 weight100">Un lugar donde puedes publicar toda tu trayectoria profesional, con la publicación de todos tus estudios, hasta los lugares en los que has trabajado, los proyectos que has colaborado.</h5>
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
          
            <h4 class="white-text title-h4">¿Qué es lo que hacemos realmente?</h4>
          <p class="white-text title-p-1 weight100">Enlaceme.com, es un portal web, diseñado exclusivamente sobre los principios de una red social; Orientada aquellas personas que deseen brindar servicios, profesionales, técnicos de oficio o simplemente de pasatiempo como ingreso económico extra; Principalmente deseamos facilitar el registro de información sobre el trabajo o especialidad que las personas realizán y desean promocionar estas habilidades, para que personas que están en busca de estos servicios puedan encontrar la solución a sus necesidades.</p>
        </div>
      </div>
        
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send"></i></h3>
          <h4 class="white-text title-h4">¿Eres profesional independiente?, ¿Deseas hacer conocer tu trabajo?, ¿Tienes experiencia, pero no tienes un título?, ¿Eres estudiante y quieres practicar, además de ganar algo de dinero? ¿Simplemente, quieres algo extra?</h4>
            <p class="white-text title-p-1 weight100">Si tu te haces todas estas preguntas y más, estas en el lugar correcto, esta es una red social de trabajo, donde podras registrar, cargar y mostrar con descripciones, fotografias, mapas y mucho más todo lo que haces, todo lo que puedes hacer y cual es el monto que cobras por el trabajo.</p>

            <p class="white-text title-p-1 weight100">Además, las personas que contraten tus servicios podrán realizar recomendaciones a otras personas, evaluando tu capacidad de trabajo, el trato que has brindado y lo mejor de todo valorará tu trabajo, agradeciendote!</p>

            <p class="white-text title-p-1 weight100">Y por favor, no lo olvides, esto no es solo para profesionales, tambien es para técnicos, personas que realizan algun oficio o simplemente para personas que deseen ganar dinero extra.</p>
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
        <li><a class="link-1 white-text" href="#!">Políticas de Privacidad</a></li>
        <li><a class="link-1 white-text" href="#!">Términos de Uso</a></li>
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
