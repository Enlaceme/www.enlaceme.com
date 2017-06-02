<!DOCTYPE html>
<html>
    <head>
        <title>Red Social Enlaceme</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_css']; ?>error.min.css" />
    </head>
    <body>
        <div class="container text-center">
          <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <img class="logo" src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']; ?>logo-text-white.svg"/>
                </div>
                <h1 class="error-red">¡UPS - No hay controlador!</h1>
                <p class="lead"><strong>Terrible error</strong>, creo que lo estamos <strong>arreglando</strong>,</p>
                <p class="lead">vuelve en unas horas más, seguro lo resolveremos.</p>
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
