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
            
            <?php             
                if(isset($this->vProfilesActives) && count($this->vProfilesActives)){
                    for($i=0;$i<count($this->vProfilesActives);$i++){
                        
                        if(!isset($this->vProfilesActives[$i]['b_image_content'])){
                            $this->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                        } else {
                            $this->vImageProfile = '<img class="materialboxed responsive-img" src="data:image/jpeg;base64,'.$this->vProfilesActives[$i]['b_image_content'].'">';
                        }                        
                        
                        echo '
                            <div class="col s12 m3">
                                <div class="card">
                                    <div class="card-image">
                                        '.$this->vImageProfile.'                                        
                                        <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">check_circle</i></a>
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title">'.ucwords($this->vProfilesActives[$i]['c_names']).'</span>
                                        <p>'.$this->cutLongText($this->vProfilesActives[$i]['c_profile_description'], 100).'</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="'.BASE_VIEW_URL.'profile/about/'.$this->vProfilesActives[$i]['c_profilename'].'"  class="waves-effect waves-light btn deep-orange darken-3 white-text">Visitar este Perfil</a>';
                        
                                        if($this->vBetterRegister == 1){
                                            echo '<a href="'.BASE_VIEW_URL.'" class="waves-effect waves-light btn red darken-3 white-text">¡Registrate y contacta!</a>';
                                        } else {
                                            echo '<a href="'.BASE_VIEW_URL.'" class="deep-orange-text">Contactar</a>';
                                        }
                                        
                                echo '</div>                                    
                                </div>               
                            </div>
                        ';
                    }
                }
            ?>
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