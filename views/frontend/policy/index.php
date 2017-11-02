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
                <img class="logo-text-75 padding-top-100" src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-politicas-text.svg" align="center">
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
    <div class="parallax"><img src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>policy_bg.jpg" alt=""></div>
  </div>

    <section class="grey lighten-4">
      <div class="container">
        <div class="section">

        <div class="row">
            <h3><i class="mdi-content-send"></i></h3>
            <p class="title-p-4 weight100"><i><strong>Fecha de la última revisión:</strong> 31 de octubre de 2017</i></p>
            <h3 class="title-h1 weight200">Política de Datos y Privacidad</h3>            
        </div>
            
        <div class="row">
            <!--<div class="col s12 m3 l3">
                <div class="card">
                    <ul class="collection menu">
                        <li class="collection-item menu deep-orange" id="activeSectionImageProfile"><a href="javascript();" class="white-text">Imagen Perfil</a></li>
                        <li class="collection-item menu deep-orange" id="activeSectionAccount"><a href="javascript();" class="white-text">Datos de Cuenta</a></li>
                        <li class="collection-item deep-orange" id="activeSectionProfession"><a href="javascript();" class="white-text">Profesión, Trabajo u oficio</a></li>
                        <li class="collection-item deep-orange" id="activeSectionProjects"><a href="javascript();" class="white-text">Proyectos</a></li>
                    </ul>
                </div>                
            </div>-->
            <div class="col s12 m12 l12">
                
                <blockquote>
                    Las personas o usuarios que acceden al registro voluntario en el formulario de inscripción de Enlaceme.com, aceptan plena y expresamente y de forma libre e inequívoca que sus datos personales sean tratados por Enlaceme.com para las siguientes finalidades:
                </blockquote>
                
                <h1 class="title-h1 weight200">¿Qué información se recopila en Enlaceme.com?</h1>
                
                <p class="title-p-3 weight100 text-justify">Toda la información que se registra en Enlaceme.com, desde el llenado de registro a Enlaceme.com, como nombres y apellidos, correo electrónico, y contraseñas, luego una vez registrado en Enlaceme.com, deberás llenar información relacionada a tu vida profesional, laboral o de oficio, además el país y ciudad donde ofreces los servicios por medio de Enlaceme.com. Sin embargo, las personas podrán acceder a Enlaceme.com sin necesidad de registrarse y solo podrán ver los datos públicos que se encuetnrán disponibles.</p>
                
                <h1 class="title-h1 weight200">¿Para qué recopilamos la información en Enlaceme.com?</h1>
                
                <p class="title-p-3 weight100 text-justify">Para mejorar nuestra plataforma de modo que realmente pueda ser de utilidad tanto a los usuarios internos como a los externos.</p>
                
                <p class="title-p-3 weight100 text-justify">Para conocer mejor las necesidades de los usuarios que utilizan la plataforma de Enlaceme.com</p>
                
                <p class="title-p-3 weight100 text-justify">Para poder ordenar la información que permita a los usuarios de Enlaceme.com ofrecer sus servicios de forma segura y util a las demás personas tanto dentro  y/o fuera de Enlaceme.com</p>
                
                <p class="title-p-3 weight100 text-justify">Para que Enlaceme.com pueda realizar envios de correos electrónicos periódicos con avisos, solicitudes, actualizaciones, promociones y/o recordatorios entre otros.</p>

                <p class="title-p-3 weight100 text-justify">Verificar la información del Usuario cuando este accede a Enlaceme.com de tal manera que este disponga de una versión personalizada del contenido.</p>
                
                <p class="title-p-3 weight100 text-justify">Remisión de comunicaciones comerciales publicitarias por e-mail, fax, SMS, MMS, comunidades sociales o cualesquier otro medio electrónico o físico, presente o futuro, que posibilite realizar comunicaciones comerciales. Dichas comunicaciones comerciales serán relacionadas sobre productos o servicios ofrecidos por Enlaceme.com e intereses del usuario, así como por parte de los colaboradores con los que éste hubiera alcanzado algún acuerdo de promoción comercial entre sus clientes. En este caso, los terceros nunca tendrán acceso a los datos personales. En todo caso las comunicaciones comerciales serán realizadas por parte de Enlaceme.com y serán de productos y servicios relacionados con el rubro e intereses del usuario.</p>
                
                <p class="title-p-3 weight100 text-justify">Realizar estudios estadísticos para mejorar el contenido y los servicios de Enlaceme.com.</p>
                
                <p class="title-p-3 weight100 text-justify">Tramitar encargos, solicitudes o cualquier tipo de petición que sea realizada por el Usuario a través de cualquiera de las formas de contacto que se ponen a disposición del Usuario en Enlaceme.com.</p>
                
                <p class="title-p-3 weight100 text-justify">Remitir el boletín de noticias de Enlaceme.com.</p>

                <p class="title-p-3 weight100 text-justify">Enlaceme.com informa, asegura y garantiza expresamente a los Usuarios que sus datos personales no serán cedidos en ningún caso a terceras compañías, y que siempre que fuera a realizarse algún tipo de cesión de datos personales, de forma previa, se solicitará el consentimiento expreso, informado, e inequívoco por parte de los titulares salvo en el caso de una orden judicial emanada de una autoridad competente. EN CASO DE QUE EL USUARIO DIVULGUE INFORMACIÓN PERSONAL A TERCEROS EN Enlaceme.com, EL PRESTADOR NO SE HACE RESPONSABLE POR EL USO QUE ESTOS LE PUEDAN DAR A ESTA INFORMACIÓN PERSONAL.</p>

                <p class="title-p-3 weight100 text-justify">Todos los datos solicitados en Enlaceme.com en el registro inicial son obligatorios, ya que son necesarios para la prestación de un servicio óptimo al usuario. En caso de que no sean facilitados todos los datos, Enlaceme.com no garantiza que la información y servicios facilitados sean completamente ajustados a sus necesidades.</p>

                <p class="title-p-3 weight100 text-justify">Enlaceme.com garantiza en todo caso al usuario el ejercicio de los derechos de acceso, rectificación, cancelación, información y oposición. Por ello, podrá ejercer sus derechos remitiendo una solicitud expresa, a través de los siguientes medios: Correo electrónico info@enlaceme.com</p>
                
                <h1 class="title-h1 weight200 text-justify">¿Comó solicitar más información a Enlaceme.com?</h1>
                
                <p class="title-p-3 weight100 text-justify">Para obtener más información sobre cómo funciona las polítacas de datos y privacidad de Enlaceme.com, puedes ponerte en contacto con nosotros usando la siguiente información:</p>
                
                <p class="title-p-1 weight300">
                    Red Social Enlaceme.com<br/>
                    Calle Pinilla edificio Arcadia #2588<br/>
                    Mezzanine torre B Oficina 109<br/>
                    La Paz, Bolivia
                </p>
                
                <p class="title-p-4 weight100"><i><strong>Fecha de la última revisión:</strong> 31 de octubre de 2017</i></p>

<!--<p class="title-p-1 weight100">Del mismo modo, el Usuario podrá darse de baja de cualquiera de los
servicios de subscripción facilitados por Enlaceme.com haciendo clic en
el enlace correspondiente incluido en todos los correos electrónicos
remitidos por parte del Prestador.</p>

<p class="title-p-1 weight100">De igual manera, si el Usuario desea cancelar su cuenta en Enlaceme.com,
este debe hacer clic en el enlace "Dar de baja" en la sección de "Editar
Cuenta". Una vez recibida la solicitud, Enlaceme.com mantendrá en el
sistema los datos del Usuario por un período de seis meses. Sin embargo,
los datos del Usuario se mantendrán en estado inactivo durante este
periodo y no serán visibles para otros Usuarios en Enlaceme.com.</p>

<p class="title-p-1 weight100">Del mismo modo, el Prestador ha adoptado todas las medidas técnicas y de
organizaciones necesarias para garantizar la seguridad e integridad de
los datos de carácter personal que trate, así como para evitar su
pérdida, alteración y/o acceso por parte de terceros no autorizados.
Uso de Cookies y del Fichero de Actividad</p>

<p class="title-p-1 weight100">El Prestador por su propia cuenta o la de terceros contratados para la
prestación de servicios de medición y publicidad, incluyendo Google ® y
Facebook ®, pueden utilizar cookies cuando un Usuario navega por
Enlaceme.com. Las cookies son ficheros enviados al navegador por medio
de un servidor web con la finalidad de registrar las actividades del
Usuario durante su tiempo de navegación.</p>

<p class="title-p-1 weight100">Las cookies utilizadas por Enlaceme.com se asocian únicamente con un
Usuario anónimo y su ordenador, y no proporcionan por sí mismas los
datos personales del Usuario.</p>

<p class="title-p-1 weight100">Mediante el uso de las cookies resulta posible que el servidor donde se
encuentra la web, reconozca el navegador web utilizado por el Usuario
con la finalidad de que la navegación sea más sencilla, permitiendo, por
ejemplo, el acceso a los Usuarios que se hayan registrado previamente,
acceder a las áreas, servicios, promociones o concursos reservados
exclusivamente a ellos sin tener que registrarse en cada visita. Se
utilizan también para medir la audiencia y parámetros del tráfico,
controlar el progreso y número de entradas.</p>

<p class="title-p-1 weight100">El Usuario tiene la posibilidad de configurar su navegador para ser
avisado de la recepción de cookies y para impedir su instalación en su
equipo. Por favor, consulte las instrucciones y manuales de su navegador
para ampliar esta información.</p>

<p class="title-p-1 weight100">Si el Usuario opta por rechazar todas las cookies en su navegador, no
conseguirá utilizar todos los recursos y servicios ofrecidos por
Enlaceme.com.</p>

<p class="title-p-1 weight100">Las cookies utilizadas en Enlaceme.com, incluyendo aquellas utilizadas
por terceros contratados para los servicios de medición y publicidad,
tienen carácter temporal, con una duración máxima de hasta 18 meses. En
ningún caso se utilizarán las cookies para recoger información de
carácter personal.</p>
                <h4 class="title-h4">Direcciónes IP [Protocolo de Internet]</h4>

<p class="title-p-1 weight100">Los servidores de Enlaceme.com podrán detectar de manera automática la
dirección IP y el nombre de dominio utilizados por el Usuario. Una
dirección IP es un número asignado automáticamente a un ordenador cuando
éste se conecta a Internet. Toda esta información es registrada en un
fichero de actividad del servidor que permite el posterior procesamiento
de los datos con el fin de obtener mediciones únicamente estadísticas
que permitan conocer el número de impresiones de páginas, el número de
visitas realizadas a los servicios web, el orden de visitas, el punto de
acceso, etc.</p>
                <h4 class="title-h4">Seguridad de Enlaceme.com</h4>

<p class="title-p-1 weight100">Enlaceme.com utiliza técnicas de seguridad de la información
generalmente aceptadas en la industria, tales como firewalls,
procedimientos de control de acceso y mecanismos criptográficos, todo
ello con el objeto de evitar el acceso no autorizado a los datos. Para
lograr estos fines, el Usuario acepta que el Prestador obtenga datos
para efectos de la correspondiente autenticación de los controles de
acceso.</p>-->
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
