    <div class="container">
        <div class="row">
            
            <div class="col s12 m12 l12">
                <h2 class="title-h2 thin-text deep-orange-text">Configuración de la cuenta</h2>
            </div>
            
            <div class="col s12 m3 l3">
                <div class="card">
                    <div class="card-image">
                        <img class="responsive-img" src="<?Php echo $vParamsViewProfile['root_profile_resources_img']; ?>men-profile.jpg">
                        <span class="card-title">Imagen Perfil</span>
                    </div>
                    <div class="card-action">
                        <input type="submit" class="waves-effect waves-light btn deep-orange" value="Cambiar">
                    </div>
                </div>                
            </div>
            
            <div class="col s12 m9 l9">
                <form class="col s12 m12 l12" method="post" id="form-accountdata">
                    <div class="card">
                        <div class="card-content">
                            <h3 class="title-h3 thin-text deep-orange-text">Información Principal</h3>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" name="vUserOtherName" id="vUserOtherName" value="<?Php echo $this->vUserOtherName; ?>">
                                    <label>Nombre del perfil</label>
                                </div>
                                <div class="input-field col s6">
                                    <p class="grey-text"><strong>Nombre perfil</strong> este nombre será visible de forma pública, además te permitirá ser único en la plataforma.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" name="vUserNames" id="vUserNames" value="<?Php echo $this->vUserNames; ?>">
                                    <label>Nombres</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" name="vUserLastNames" id="vUserLastNames" value="<?Php echo $this->vUserLastNames; ?>">
                                    <label>Apellidos</label>
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" name="vUserEmail" id="vUserEmail" value="<?Php echo $this->vUserEmail; ?>">
                                    <label>Correo electrónico</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" value="<?Php echo $this->vUserDateCreate; ?>" disabled>
                                    <label>Fecha de creación de cuenta</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="text" name="vUserDateBirth" id="datepicker" class="datepicker" value="<?Php echo $this->vUserDateBirth; ?>">
                                </div>
                                <div class="input-field col s6">
                                    <p class="grey-text"><strong>Fecha de nacimiento:</strong> Este dato no es primordial para el perfil, pero si puede considerarse como un punto a favor como dato informativo.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <label>País de Nacimiento</label>
                                    <input type="text" name="vUserCountry" id="vUserCountry" value="<?Php echo $this->vUserCountry; ?>">
                                </div>                                
                                <div class="input-field col s6">
                                    <label>Ciudad de Nacimiento</label>
                                    <input type="text" name="vUserCity" id="vUserCity" value="<?Php echo $this->vUserCity; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                  <textarea id="textarea1" class="materialize-textarea" name="vUserDescription" id="vUserDescription"><?Php echo $this->vUserDescription; ?></textarea>
                                  <label for="textarea1">Descripción Personal</label>
                                </div>                                
                            </div>                            
                        </div>
                        <div class="card-action">
                            <input type="hidden" name="vUserCode" id="vUserCode" value="<?Php echo $this->vUserCode; ?>">
                            <input type="submit" class="waves-effect waves-light btn deep-orange" value="Guardar">
                        </div>
                    </div>
                </form>
            </div>            
        </div>
        
        <div class="row">

            <div class="col s12 m6 l6">
                <form class="col s12 m12 l12" method="post" id="form-accountdata2">
                    <div class="card">
                        <div class="card-content">
                            <h3 class="title-h3 thin-text deep-orange-text">Información Principal</h3>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" class="validate">
                                    <label>Nombre del perfil</label>
                                </div>
                                <div class="input-field col s6">
                                    <p class="grey-text"><strong>Nombre perfil</strong> este nombre será visible de forma pública, además te permitirá ser único en la plataforma.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="first_name" type="text" class="validate">
                                    <label>Nombres</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label>Apellidos</label>
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="first_name" type="text" class="validate">
                                    <label>Correo electrónico</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label>Contraseña</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" value="" disabled>
                                    <label>Fecha de creación</label>
                                </div>
                                <div class="input-field col s6">
                                    <p class="grey-text"><strong>Nombre perfil</strong> este nombre será visible de forma pública, además te permitirá ser único en la plataforma.</p>
                                </div>
                            </div>                            
                        </div>
                        <div class="card-action">
                            <input type="submit" class="waves-effect waves-light btn deep-orange" value="Guardar">
                        </div>
                    </div>
                </form>
            </div>            
        </div>        
    </div>

    <!-- BEGIN FOOTER -->
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large deep-orange">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>
	
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
    <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_pages_scripts']; ?>account.min.js"></script>
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
