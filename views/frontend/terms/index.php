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
                <img class="logo-text-75 padding-top-100" src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-terminos-text.svg" align="center">
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
    <div class="parallax"><img src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>terminos_bg.jpg" alt=""></div>
  </div>

    <section class="grey lighten-4">
      <div class="container">
        <div class="section">

          <div class="row">
            <div class="col s12">
              <h3><i class="mdi-content-send"></i></h3>
                
              <h1 class="title-h1 weight200">Términos y Condiciones de Uso</h1>
            <h3 class="title-h3 weight200">Información Empresarial y de Registro de Empresa</h3>

<blockquote>Enlaceme.com incluyendo todos los perfiles, herramientas y servicios ofrecidos dentro de la misma son de propiedad intelectual única y legitima de la empresa Ideas-Envision Servicios Integrales, con
Matrícula de Comercio No. 192486 y Número de Identificación Tributaria No. 4826454016, con domicilio legal en la calle Pinilla edificio Arcadia Nº 2588, mezzanine torre B, oficina 109, de la ciudad de La Paz del
Estado Plurinacional de Bolivia.</blockquote>
                
                <h1 class="title-h1 weight200">Aceptación de los Términos y Condiciones de Uso</h1>

<p class="title-p-3 weight100 text-justify">El Uso de Nuestros Servicios Implica la Aceptación de estos Términos y Condiciones de Uso (TCU). Recomendamos a usted leerlos detenidamente.</p>

<p class="title-p-3 weight100 text-justify">Al Registrarse como Nuevo Usuario, al Ingresar con una cuenta ya Registrada o simplemente al Visitar Enlaceme.com, usted otorga plena conformidad y acepta los presentes términos y condiciones de uso (TCU).</p>

                <h1 class="title-h1 weight200">Uso del Servicio de Enlaceme.com</h1>

<p class="title-p-3 weight100 text-justify">No debes usar nuestro servicio de manera inapropiada, fraudulenta, racista, discriminatoria, ilícita, con mala intención y/o dolo, menos aún que vaya en contra de la ley, las buenas costumbres o altere el orden público.</p>

<p class="title-p-3 weight100 text-justify">Enlaceme.com es la primera plataforma de red social orientada a profesionales, técnicos, trabajo de oficio y/o trabajo como hobby en latinoamerica, lanzada desde La Paz, Bolivia por Internet que proporciona un servicio de información, comunicación, interrelación entre personas y los diferentes negocios o rubros con la libertad para compartir y conectarse a la tecnología del internet.</p>

<p class="title-p-3 weight100 text-justify">El registro de usuarios es gratuito en Enlaceme.com, y todos los usuarios se rigen por estos TCU, no obstante, existen servicios de pago que pueden tener sus propias condiciones de uso o contratos que deben ser aceptadas por separado.</p>
    
                <h1 class="title-h1 weight200">Datos, Información y Contenidos Publicados</h1>

<p class="title-p-3 weight100 text-justify">Enlaceme.com respeta los derechos de todos sus usuarios, y tiene opciones de modificación, rectificación y eliminación de datos personales, en caso de que usted tenga algún problema en realizar cualquiera de éstas acciones desde su perfil, deberá comunicarse con nosotros enviando un correo electrónico a soporte@Enlaceme.com.</p>

<p class="title-p-3 weight100 text-justify">Si Ud. es un usuario registrado como una persona natural o particular, autoriza expresamente para que Enlaceme.com haga un uso comercial y
publicitario de los siguientes datos personales (nombres, apellidos, nacionalidad, fecha de nacimiento, genero, estado civil, y foto personal) además del currículum profesional que Ud. publique cumpliendo con los parametros de su configuración de privacidad, de forma interna y no así de forma externa.</p>

<p class="title-p-3 weight100 text-justify">Esto quiere decir que Enlaceme.com, podrá utilizar los datos anteriormente mencionados de forma interna en sus procesos, funciones y estructuras lógicas de funcionamiento para crear y desarrollar herramientas que ayuden al beneficio de la Red Social Enlaceme en si y que ayude principalmente a los usuarios registrados y sobre todo empresas para poder realizar promociones, publicidad y propagandas según las caracteristicas de los servicios ofrecidos, sin necesidad de conocer a profundidad los datos personales de cada persona registrada.</p>

<p class="title-p-3 weight100 text-justify">Si es un usuario registrado como una empresa o institución, entendemos que la persona responsable que realiza la administración del perfil empresarial, tiene la plena facultad para autorizar expresamente a Enlaceme.com sobre el uso comercial y publicitario del nombre comercial, razón social, nombre de la empresa, marca(s), logotipo(s), dirección, teléfonos, y descripción de su empresa y de otros datos que sean publicados en el perfil, esto, según la configuración de privacidad que tengan los perfiles relacionados al comercio.</p>

<p class="title-p-3 weight100 text-justify">Las empresas e instituciones que publiquen anuncios, ofertas, servicios o cualquier publicación de negocios en Enlaceme.com, libre y voluntariamente, otorgan una autorización de publicación - licencia de uso - de sus anuncios o publicaciones, quién podrá difundirlos a través de sus páginas web u otros sitios web conectados o vinculados con Enlaceme.com. Asimismo los usuarios, empresas e instituciones autorizan a Enlaceme.com a reclamar, denunciar, iniciar un arbitraje o demandar contra los titulares de otros sitios web que incumplan estos TCU por la vía judicial que corresponda.</p>

<p class="title-p-3 weight100 text-justify">Cada usuario está obligado a utilizar sus datos reales, personales o corporativos y de contacto (teléfono, dirección y correo electrónico), al registrarse y a mantenerlos actualizados, Enlaceme.com no se hace responsable ni garantiza que los datos de sus usuarios sean veraces o se hallen actualizados.</p>
                
                <h1 class="title-h1 weight200">Condiciones de Uso</h1>

<p class="title-p-3 weight100 text-justify">Enlaceme.com constantemente trata de hacer el sitio más seguro para todos sus usuarios, pero es muy importante la colaboración y ayuda de los mismos, teniendo la obligación de seguir los términos de condiciones de uso siguientes. Al usar nuestros servicios te comprometes libremente a que:</p>

<p class="title-p-3 weight100 text-justify">No recopilará nuestros anuncios y los reenviará por correo
electrónico a terceros destinatarios o los repetirás en otros sitios
web, excepto si cuenta con la autorización el propietario del artículo o
publicación y de Enlaceme.com respectivamente.</p>
<p class="title-p-3 weight100 text-justify">No recopilará contenido o información de otros usuarios, utilizando
medios automáticos (como harvesting bots, exploids, robots, arañas o
scrapers) sin autorización escrita por Enlaceme.com.</p>
<p class="title-p-3 weight100 text-justify">No cargará virus ni código malintencionado de ningún tipo, mediante
nuestros formularios de registro o en opciones de carga de archivos que
se encuentren a disposición de todos los usuarios a través de cualquiera
de los perfiles existentes y ofrecidos dentro de Enlaceme.com.</p>
<p class="title-p-3 weight100 text-justify">No solicitará información de inicio de sesión ni accederá a una
cuenta perteneciente a otro usuario, salvo que cuente con su
autorización expresa por escrito o verbalmente, desligando completamente
la responsabilidad de esta acción a Enlaceme.com.</p>
<p class="title-p-3 weight100 text-justify">No molestará, amedrentará, intimidará ni acosará a ningún usuario o
empresa registrada debidamente en Enlaceme.com.</p>
<p class="title-p-3 weight100 text-justify">No publicará contenido que resulte hiriente, intimidatorio o
pornográfico, que incite a la violencia o que contenga desnudos o
violencia gráfica o injustificada y/o que atente a la moral y a las
buenas costumbres.</p>
<p class="title-p-3 weight100 text-justify">No publicará anuncios o creará perfiles de usuario para actos
ilícitos, engañosos, malintencionados o discriminatorios.</p>
<p class="title-p-3 weight100 text-justify">No realizará ninguna acción que pudiera inhabilitar, sobrecargar o
afectar al funcionamiento correcto de web, como, por ejemplo, un ataque
de denegación de servicio.</p>
<p class="title-p-3 weight100 text-justify">No facilitará ni fomentará la violación de estos TCU.</p>
<p class="title-p-3 weight100 text-justify">No proporcionará información personal falsa, ni creará una cuenta
para otras personas sin su autorización expresa y escrita.</p>
<p class="title-p-3 weight100 text-justify">Si inhabilitamos o bloqueamos su cuenta, temporalmente o
definitivamente no creará otra sin nuestro permiso expreso de
Enlaceme.com.</p>
<p class="title-p-3 weight100 text-justify">No utilizarás Enlaceme.com si eres menor de 18 años.</p>
<p class="title-p-3 weight100 text-justify">No compartirá la contraseña ni permitirá que otra persona acceda a
su cuenta, ni realizará cualquier acción que pueda poner en peligro la
seguridad de su cuenta.</p>
<p class="title-p-3 weight100 text-justify">No transferirá la cuenta a otra persona natural y/o jurídica sin
nuestro consentimiento expreso previo y por escrito.</p>
<p class="title-p-3 weight100 text-justify">Si selecciona un nombre de usuario para su cuenta, nos reservamos el
derecho a eliminarlo o reclamarlo si lo consideramos oportuno (por
ejemplo, si el propietario de una marca comercial se queja por un nombre
de usuario que no está relacionado estrechamente con el nombre real del
usuario), es causal inobjetable para dicha acción.</p>
<p class="title-p-3 weight100 text-justify">No utilizará nuestros Derechos de Autor (Copyright) o marcas
registradas (™) (Enlaceme.com) ni alguna marca que se parezca a las
nuestras sin nuestro permiso por escrito.</p>
<p class="title-p-3 weight100 text-justify">No publicará los documentos de identificación, certificados de
nacimiento, licencia de conducir, ni información financiera de ninguna
persona y/o entidad a excepción que Ud. mismo publique esta o cualquier
otra información bajo su responsabilidad.</p>
<p class="title-p-3 weight100 text-justify">Denunciará los contenidos que sean inapropiados o que no cumplen con
estos TCU al correo electrónico info@enlaceme.com.</p>
<p class="title-p-3 weight100 text-justify">No publicará anuncios de empleo que se relacionen con negocios
piramidales, multinivel, o similares (Ver Descripción Explícita).</p>
<p class="title-p-3 weight100 text-justify">No publicará anuncios de empleo que se relacionen a menores de edad,
pornografía o explotación sexual, trata o similar.</p>
<p class="title-p-3 weight100 text-justify">Cada Usuario que comparta cualquier contenido e información y/o
archivos, es el propietario y responsable de todo el contenido y la
información que publica en Enlaceme.com, y puede controlar cómo se
comparte a través de la configuración de privacidad.</p>

<p class="title-p-3 weight100 text-justify">Si no cumples estas condiciones y Enlaceme.com no toma ninguna medida o
acción al respecto de forma inmediata, no se entenderá que Enlaceme.com
renuncia a los derechos de los que pueda disponer de manera posterior,
tales como iniciar o interponer denuncias, reclamaciones, recursos,
acciones, o demandas en el futuro así como inhabilitar o bloquear la
cuenta, suspender o cancelar el servicio parcial o totalmente, entre
otros.</p>
    
                <h1 class="title-h1 weight200">Terminación del Servicio</h1>

<p class="title-p-3 weight100 text-justify">Si viola o infringe los TCU, o de algún otro modo ocasiona riesgos y/o
perjuicios a Enlaceme.com o causa que nos expongamos legalmente,
podríamos dejar de proporcionarle todo o parte de nuestros servicios.</p>

<p class="title-p-3 weight100 text-justify">La desactivación, inhabilitación, bloqueo temporal o indefinido de sus
perfiles puede ser realizado a discreción y sin previo aviso por parte
de Enlaceme.com, ésta disposición es aplicable tanto a usuarios
gratuitos como pagantes.</p>

<p class="title-p-3 weight100 text-justify">Puede dar de baja sus perfiles ingresando a su cuenta y haciendo clic en
configuración de perfiles dar de baja, Enlaceme.com asume que ha
obtenido una copia de sus datos, contenidos en general y preferencias.
Cuando elimina su perfil, entendemos que ha dado por terminada la
prestación de nuestros servicios y con ello, toda obligación y
responsabilidad que podamos tener con Ud.</p>
    
                <h1 class="title-h1 weight200">Solución de Controversias</h1>

<p class="title-p-3 weight100 text-justify">Si alguien interpone una demanda o denuncia contra nosotros relacionada
con tus acciones u omisiones, su contenido, datos o su información
publicada en Enlaceme.com, se hará pasible al resarcimiento de daños y
por lo tanto de indemnizarnos, además que nos librará de la
responsabilidad por todos los posibles daños, pérdidas y gastos de
cualquier tipo (incluidos los honorarios profesionales, costes,
peritajes, gastos legales, judiciales, arbitrales o conciliatorios)
relacionados con dicha demanda o denuncia.</p>

<p class="title-p-3 weight100 text-justify">Las partes, el usuario y Enlaceme.com, acuerdan que toda controversia o
divergencia que pueda surgir con relación a la interpretación,
aplicación, cumplimiento y ejecución de los presentes TCU, será resuelta
en forma definitiva mediante Conciliación y/o Arbitraje de acuerdo con
los Reglamentos del Centro de Conciliación y Arbitraje de la Cámara de
Industria y Comercio, Servicios y Turismo de Bolivia. Este acuerdo
implica la renuncia expresa a iniciar cualquier proceso judicial en
contra de Enlaceme.com.</p>

<p class="title-p-3 weight100 text-justify">La Ley aplicable para cualquier controversia que surja o emerja de estos
TCU es la que se encuentra vigente en el Estado Plurinacional de
Bolivia, si para cualquier caso fuera necesario acudir a un juez o
tribunal judicial las partes, el usuario y Enlaceme.com, aceptan acudir
a los Tribunales Judiciales de la ciudad de La Paz - Bolivia.</p>

<p class="title-p-3 weight100 text-justify">El servicio es prestado desde la ciudad de La Paz - Bolivia,
independientemente de la ubicación de nuestros servidores y de manera
autónoma a terceros sitios web con los cuales nos vinculamos.
Modificaciones a los Términos y Condiciones de Uso por parte de
Enlaceme.com</p>

<p class="title-p-3 weight100 text-justify">Enlaceme.com se reserva el derecho a modificar, enmendar, o corregir el
presente acuerdo de términos y condiciones de uso por diferentes motivos
sean estos administrativos, comerciales, legales o de otra índole.</p>

<p class="title-p-3 weight100 text-justify">Al utilizar o acceder (por ejemplo, iniciar sesión, o simplemente
visitar) a Enlaceme.com, o al no responder, pidiendo la terminación del
servicio o algo equivalente en la que se solicite que exprese su
desacuerdo con los TCU modificados en el plazo previsto en la
comunicación, demuestra su conformidad y aceptación con los TCU
modificados y vigentes.</p>

<p class="title-p-3 weight100 text-justify">Le recomendamos revisar ésta página Web de los TCU constantemente para
    conocer el acuerdo que le une y vincula en todo momento.</p>

                
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
