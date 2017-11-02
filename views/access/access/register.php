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
        <link href="<?Php echo $vParamsViewMaterialize['root_materialize_css']; ?>materialize.min.css" media="screen,projection" type="text/css" rel="stylesheet"/>
        <link href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_css']; ?>style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>    
    <section class="parallax-access">
        <center>
            <img class="responsive-img" style="width: 250px;" src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-text-dark.svg" />
            <h5 class="deep-orange-text">Por favor, registra tu información.</h5>
            
            <div class="section"></div>
            
            <div class="container">
                <div class="z-depth-1 grey lighten-4 row hoverable" style="display: inline-block; padding: 25px; border: 1px solid #EEE; width: 370px;">
                    <form class="col s12 m12 l12" method="post" id="access-form-register">
                        <div class="row">
                            <div class="input-field col s12">
                                <input class="validate" type="text" name="vName" id="vName" />
                                <label class="grey-darken-text">Nombres</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s12">
                                <input class="validate" type="text" name="vLastNames" id="vLastNames" />
                                <label class="grey-darken-text">Apellidos</label>
                            </div>
                        </div>                        

                        <div class="row">
                            <div class="input-field col s12">
                                <input class="validate" type="email" name="vEmail" id="vEmail" />
                                <label class="grey-darken-text">Correo electrónico</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input class="validate" type="password" name="vPassword" id="vPassword" placeholder="Contraseña" />
                                <label class="grey-darken-text">Contraseña</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s12">
                                <input class="validate" type="password" name="vRePassword" id="vRePassword" placeholder="Contraseña" />
                                <label class="grey-darken-text">Repetir Contraseña</label>
                            </div>
                        </div>                        
                        <br />
                        <center>
                            <div class="row">
                                <button type="submit" class="col s12 btn waves-effect deep-orange" id="btnRegister">Registrarme</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
            <a class="btn btn-small brown lighten-3" href="<?Php echo BASE_VIEW_URL; ?>">Inicio</a>
            <a class="btn btn-small deep-orange" href="<?php echo BASE_VIEW_URL; ?>access/">Ya tengo cuenta, acceder</a>
        </center>
        <div class="parallax"><img class="full-bg-1" src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>bg-login.jpg" alt=""></div>
    </section>

  <!--<section class="pre-footer grey darken-3">
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
</section>-->

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
    
    <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_pages_scripts']; ?>access.min.js"></script>
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