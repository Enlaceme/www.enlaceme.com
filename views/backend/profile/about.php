    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
            <?php                
                if($this->vBetterRegister == 1){
                    echo '<div class="col s12 m12 l12">';
                        echo '<div class="card-panel light-green lighten-1 white-text center-align">
                                <strong>¡No estas conectado!</strong> Para tener una mejor experiencia y utilizar al máximo la red puedes ingresar <a class="white-text" href="'.BASE_VIEW_URL.'access"><b><i>aquí</i></b></a>
                            </div>';
                    echo '</div>';
                }
            ?>                
            </div>
            
            <div class="col s12 m4 l3">
              <div class="card">
                <div class="card-image">
                    <?Php echo $this->vImageProfile; ?>
                    <?php
                        if($this->vAuthenticateUser == 1){
                            if($this->vImageProfileExists == 0){
                                echo '<div class="col s12 m12 l12">';
                                    echo '<div class="card-panel red darken-3 white-text center-align">
                                            <strong>¡UPS!</strong> No tienes imagen de perfil. Cargar una <a class="white-text" href="'.BASE_VIEW_URL.'profile/accountprofileimage"><b><i>aquí</i></b></a>
                                        </div>';
                                echo '</div>';  
                            }

                        }
                    ?>                    
                </div>
                <div class="card-content">
                    <span class="card-title deep-orange-text"><?Php echo ucwords($this->vUserNamesComplete); ?></span>
                    <p>
                        <?Php 
                            if($this->vUserDescription == NULL){
                                echo 'Este usuario no tiene una descripción personal, por favor sugierelé una.';
                            } else {
                                echo $this->vUserDescription;    
                            }                        
                        ?>
                    </p>
                </div>
                <div class="card-action center-align">
                <?Php 
                if(isset($this->vProfileContact) && count($this->vProfileContact)){
                   for($i=0;$i<count($this->vProfileContact);$i++){
                       
                        if($this->vBetterRegister == 1){
                            echo '<a href="'.BASE_VIEW_URL.'" class="waves-effect waves-light btn red darken-3 white-text">¡Registrate y contacta!</a>';
                        } else {
                            echo '<a href="whatsapp://send?text=Gracias por registrarte en al Red Enlaceme, estamos seguros que lograrás grandes cosas.&phone='.$this->vProfileContact[$i]['c_contact_whatsapp'].'" class="waves-effect waves-light btn green darken-3 white-text">Enviar Whatsapp</a>';
                        }
                    }
                }
                ?>
                </div>                  
              </div>
            </div>
            
            <div class="col s12 m9 l9">
                
                <div class="row">
                    <div class="col s12 m8 l8">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="title-h5 thin-text deep-orange-text">Profesión, Especialidad Técnica, Oficio y/o Pasatiempo registrados.</h5>
                                <?php 
                                    if(isset($this->vProfileProfessions) && count($this->vProfileProfessions)){
                                        for($i=0;$i<count($this->vProfileProfessions);$i++){
                                            //echo $this->vProfileProfessions[$i]['c_profession_name'];
                                            echo '<div class="chip deep-orange darken-4 white-text">
                                                        '.ucwords($this->vProfileProfessions[$i]['c_profession_name']).'
                                                </div>';
                                        }
                                    } else {
                                        echo 'Este usuario no ha registrado ninguna Profesión, Especialidad Técnica, Oficio y/o Pasatiempo, por favor sugierelé alguna.';
                                    }
                                ?>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-content">
                                <h5 class="title-h5 thin-text deep-orange-text">Descripción profesión, de especialidad técnica, de oficio y/o de pasatiempo.</h5>
                                <p>
                                    <?Php 
                                        if($this->vProfileDescription == NULL){
                                            echo 'Este usuario no ha realizado aún la descripción de su profesión, trabajo u oficio, por favor sugierelé una.';
                                        } else {
                                            echo $this->vProfileDescription;    
                                        }                        
                                    ?>                                    
                                </p>
                            </div>
                        </div>                        

                        
                        
                        <!--<div class="card">
                            <ul class="collection">
                                <li class="collection-item grey lighten-4"><?Php echo $this->vUserEmail; ?></li>
                                <li class="collection-item grey lighten-4"><?Php echo $this->vUserDateBirth; ?></li>
                                <li class="collection-item grey lighten-4"><?Php echo $this->vUserCountry; ?></li>
                                <li class="collection-item grey lighten-4"><?Php echo $this->vUserCity; ?></li>
                            </ul>
                        </div>
                        
                        <ul class="collapsible popout" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><span class="deep-orange-text">Áreas de Conocimiento</span></div>
                                <div class="collapsible-body"><span>Las áreas de conocimiento describen de forma general los temas que la persona realiza. </span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i>Desarrollo Web</div>
                                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i>Diseño Web</div>
                                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>                            
                            <li>
                                <div class="collapsible-header"><i class="material-icons">place</i>Diseño Gráfico</div>
                                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">whatshot</i>Marketing Digital</div>
                                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                        </ul>                        
                        
                        <div class="card">
                            <div class="card-image">
                                <div class="carousel carousel-slider center" data-indicators="true">
                                    <div class="carousel-fixed-item center">
                                        <a class="btn waves-effect white grey-text darken-text-2">button</a>
                                    </div>
                                    <div class="carousel-item red white-text" href="#one!">
                                        <h2>First Panel</h2>
                                        <p class="white-text">This is your first panel</p>
                                    </div>

                                    <div class="carousel-item amber white-text" href="#two!">
                                        <h2>Second Panel</h2>
                                        <p class="white-text">This is your second panel</p>
                                    </div>

                                    <div class="carousel-item green white-text" href="#three!">
                                        <h2>Third Panel</h2>
                                        <p class="white-text">This is your third panel</p>
                                    </div>

                                    <div class="carousel-item blue white-text" href="#four!">
                                        <h2>Fourth Panel</h2>
                                        <p class="white-text">This is your fourth panel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>-->                        
                    </div>

                    <div class="col s12 m4 l4">

                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12 m6"></div>
                </div>
                
            </div>            
        </div>
    </div>

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
