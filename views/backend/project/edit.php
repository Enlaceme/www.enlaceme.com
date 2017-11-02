    <div class="container">
        
        <div class="row">
            <div class="col s12 m9 l9">
                <form method="post" id="form-project">
                    <div class="card">
                        <div class="card-content">
                            <h3 class="title-h3 thin-text deep-orange-text">Edición de Proyectos</h3>
                            <?php 
                                if(isset($this->vProjectInfo) && count($this->vProjectInfo)){
                                    for($i=0;$i<count($this->vProjectInfo);$i++){
                                        $this->vProjectName = $this->vProjectInfo[$i]['c_project_name'];
                                        $this->vProjectDescription = $this->vProjectInfo[$i]['c_project_name'];
                                    }
                                }
                            ?>                            
                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <input type="text" name="vUserOtherName" id="vUserOtherName" value="<?Php echo $this->vProjectName; ?>">
                                    <label>Nombre del Proyecto</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                  <textarea class="materialize-textarea" name="vUserDescription" id="vUserDescription"><?Php echo $this->vUserDescription; ?></textarea>
                                  <label>Descripción  del Proyecto</label>
                                </div>                                
                            </div>                            
                        </div>
                        <div class="card-action">
                            <input type="submit" class="waves-effect waves-light btn deep-orange" value="Guardar">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s12 m3 l3">
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
