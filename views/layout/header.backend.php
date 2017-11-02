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
        <link rel="stylesheet" href="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_css']; ?>style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <div class="navbar-fixed">
        <nav class="topbar" role="navigation">
            <div class="nav-wrapper container">
                <a href="#!" class="brand-logo"><img src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-text-white.svg" width="230px"></a>
                    <?Php
                        if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                            echo '<ul class="right hide-on-med-and-down">
                                    <li><a href="'.BASE_VIEW_URL.'">Más Información</a></li>
                                    <li><a href="'.BASE_VIEW_URL.'universe">Universo</a></li>
                                    <li><a href="#" data-activates="slide-out" id="navbar-menu">'.ucwords($this->vUserNamesCompleteMenu).'</a></li>
                                  </ul>';
                        } else {
                            echo '<ul class="right hide-on-med-and-down">
                                    <li><a href="'.BASE_VIEW_URL.'">Más Información</a></li>
                                    <li><a href="'.BASE_VIEW_URL.'universe">Universo</a></li>
                                    <li><a href="'.BASE_VIEW_URL.'access">Acceder</a></li>
                                  </ul>';
                        }
                    ?>
                
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                
                <?Php
                
                    if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
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
                            </ul>';
                    } else {
                        echo '<ul id="slide-out" class="side-nav">
                                <li>
                                    <div class="userView deep-orange">
                                        '.$this->vImageProfileMenu.'
                                        <span class="white-text name">Red Social Enlaceme</span>
                                        <span class="white-text email">info@enlaceme.com</span>
                                    </div>
                                </li>
                                <li><a href="'.BASE_VIEW_URL.'">Más Información</a></li>
                                <li><a href="'.BASE_VIEW_URL.'universe">Universo</a></li>
                                <li><a href="'.BASE_VIEW_URL.'access">Acceder</a></li>
                            </ul>';
                    }
                ?>
            </div>
        </nav>
    </div>