    <div class="container">
        
        <div class="row">
            <div class="col s12 m12 l12">
                <h2 class="title-h2 thin-text deep-orange-text">Configuración de la cuenta</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col s12 m12 l12">
                
                <div class="col s12 m3 l3">
                    
                    <div class="card">
                        <ul class="collection menu">
                            <li class="collection-item menu deep-orange" id="activeSectionImageProfile"><a href="javascript();" class="white-text">Imagen Perfil</a></li>
                            <li class="collection-item menu deep-orange" id="activeSectionAccount"><a href="javascript();" class="white-text">Datos de Cuenta</a></li>
                            <li class="collection-item deep-orange" id="activeSectionProfession"><a href="javascript();" class="white-text">Profesión, Trabajo u oficio</a></li>
                            <li class="collection-item deep-orange" id="activeSectionProjects"><a href="javascript();" class="white-text">Proyectos</a></li>
                        </ul>
                    </div>
                                       
                </div>
                
                <div class="col s12 m9 l9">

                    
                    <div class="col s12 m4 l4" id="sectionImageProfile">
                        <div class="card">
                            <div class="card-image">
                                <?Php echo $this->vImageProfile; ?>
                            </div>
                            <div class="card-action">
                                <a href="<?Php echo  BASE_VIEW_URL.'profile/accountprofileimage'; ?>" class="waves-effect waves-light btn deep-orange">Cambiar</a>
                            </div>                    
                        </div>                
                    </div>
                    
                    <div class="col s12 m12 l12" id="sectionAccount">
                        <form method="post" id="form-accountdata">
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
                                          <textarea class="materialize-textarea" name="vUserDescription" id="vUserDescription"><?Php echo $this->vUserDescription; ?></textarea>
                                          <label>Descripción Personal</label>
                                        </div>                                
                                    </div>                            
                                </div>
                                <div class="card-action">
                                    <input type="submit" class="waves-effect waves-light btn deep-orange" value="Guardar">
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div id="sectionProfession">
                    
                        <div class="col s12 m12 l12">
                            <form method="post" id="form-professiondata">
                                <div class="card">
                                    <div class="card-content">
                                        <h3 class="title-h3 thin-text deep-orange-text">Información Profesional o de Trabajo</h3>
                                        <div class="row">
                                            <div class="col s12">
                                            <?php 
                                                if(isset($this->vUserProfessions) && count($this->vUserProfessions)){
                                                    for($i=0;$i<count($this->vUserProfessions);$i++){
                                                        echo '<div class="chip">'.$this->vUserProfessions[$i]['c_profession_name'].'
                                                                <i class="close material-icons" id="chip-professions-'.$this->vUserProfessions[$i]['n_codprofileprofession'].'" code="'.$this->vUserProfessions[$i]['n_codprofileprofession'].'">close</i>
                                                            </div>';
                                                    }
                                                }
                                            ?>                                    

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <label>Seleccionar Profesión, oficio ó Trabajo</label>
                                                <select class="browser-default" id="vProfessionCode" name="vProfessionCode">
                                                    <option value="0">Seleccionar</option>
                                                    <?php 
                                                        if(isset($this->vProfessions) && count($this->vProfessions)){
                                                            for($i=0;$i<count($this->vProfessions);$i++){
                                                                echo '<option value="'.$this->vProfessions[$i]['n_codprofession'].'">'.$this->vProfessions[$i]['c_profession_name'].'</option>';
                                                            }
                                                        }
                                                    ?>                                        
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label>Escribir Profesión, oficio ó trabajo</label>
                                                <input type="text" name="vNewProfession" id="vNewProfession" value="<?Php echo $this->vNewProfession; ?>">
                                            </div>                              
                                        </div> 
                                    </div>
                                    <div class="card-action">
                                        <input type="submit" class="waves-effect waves-light btn deep-orange" value="Guardar">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col s12 m12 l12">
                            <form method="post" id="form-profiledata">
                                <div class="card">
                                    <div class="card-content">
                                        <h3 class="title-h3 thin-text deep-orange-text">Descripción Profesional o del Trabajo que realiza</h3>
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <textarea class="materialize-textarea" name="vProfileDescription" id="vProfileDescription"><?Php echo $this->vProfileDescription; ?></textarea>
                                              <label>Debes realizar una descripción de el trabajo que realizas.</label>
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
                    
                    <div id="sectionProjects">
                        <div class="col s12 m12 l12">
                            <form method="post" id="form-projectdata">
                                <div class="card">
                                    <div class="card-content">
                                        <h3 class="title-h3 thin-text deep-orange-text">Información de Proyectos</h3>
                                        <div class="row">
                                            <div class="input-field col s8">
                                                <input type="text" name="vProjectName" id="vProjectName" value="">
                                                <label>Nombre del Proyecto</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <input type="submit" class="waves-effect waves-light btn deep-orange" value="Nuevo">
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title">Nombre Proyecto</span>
                                    <p>Breve descripción del proyecto que ha realizado.</p>
                                </div>
                                <a class="btn-floating halfway-fab waves-effect waves-light deep-orange"><i class="material-icons">check_circle</i></a>                               
                            </div>
                        </div>
                    </div>
                    
                </div>
                
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
    <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_pages_scripts']; ?>menu.actions.min.js"></script>

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
