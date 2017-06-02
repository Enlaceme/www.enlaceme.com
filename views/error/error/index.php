<!DOCTYPE html>
<html>
    <head>
        <title>Red Social Enlaceme</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_css']; ?>error.min.css" />
    </head>
    <body>
        <div class="container text-center" id="error">
          <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <img class="logo-text-60" src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>logo-text-white.svg"/>
                </div>
                <h1 class="error-red">¡UPS!</h1>
                <p class="lead">No <strong>sabemos</strong> que paso, no es <strong>error</strong> conocido,</p>
                <p class="lead">te pedimos por favor, que lo reportes a nuestro <strong>Soporte Técnico</strong>,</p>
                <p class="lead">¡Gracias!</p>
                <div id="nav_iden_menu">
                    <ul>
                        <li><a href="<?php echo BASE_VIEW_URL; ?>">Inicio</a></li>
                    </ul>
                </div> 
            </div>
          </div>
        </div>
        <footer>
          Diseñado y desarrollado por <a href="http://www.ideas-envision.com/">Ideas-Envision</a> Servicios Integrales
        </footer>        
    </body>
</html>
