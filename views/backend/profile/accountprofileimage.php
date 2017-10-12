<link href="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>mini-upload/css/upload.form.min.css" rel='stylesheet' />
    <div class="container">
        <div class="row">
            
            <div class="col s12 m12 l12">
                <h2 class="title-h2 thin-text deep-orange-text">Imágenes del Perfil</h2>
            </div>
            
            <div class="col s12 m12 l4">
                <div class="card-panel grey darken-3">
                    <form id="upload" method="post" action="<?Php echo BASE_VIEW_URL; ?>actionprofile/actionUploadProfileImg/" enctype="multipart/form-data">
                        <div id="drop">
                            Arrastrar imagen aquí
                            <br/><br/><a class="waves-effect waves-light btn deep-orange white-text">Seleccionar Imagen</a>
                            <input type="file" name="upl" multiple />
                        </div>
                        <ul><!-- The file uploads will be shown here --></ul>
                    </form>
                </div>
            </div>
            
            <div class="col s12 m12 l8">
            <?php
                if(isset($this->vProfileImagesList) && count($this->vProfileImagesList)){
                    for($i=0;$i<count($this->vProfileImagesList);$i++){
                        
                        $vSizeImage = round($this->vProfileImagesList[$i]['n_image_size']/1024,2).' KB';
                        
                        if($this->vProfileImagesList[$i]['n_active'] == 0){
                            $vColorImageSelected = 'red';
                        } else if($this->vProfileImagesList[$i]['n_active'] == 1){
                            $vColorImageSelected = 'green';
                        } else {
                            $vColorImageSelected = 'orange';
                        }
                        
                        $vDateImageList = date_create($this->vProfileImagesList[$i]['d_datecreate']);
                        $vDateImageList = date_format($vDateImageList, 'Y-m-d H:i:s');                        
                        
                        echo '
                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-image">
                                    <img class="materialboxed responsive-img" src="data:image/jpeg;base64,'.$this->vProfileImagesList[$i]['b_image_content'].'" data-caption="'.$this->vProfileImagesList[$i]['c_image_name'].'">
                                    <a href="'.BASE_VIEW_URL.'actionprofile/selectImageForProfile/'.$this->vProfileImagesList[$i]['n_codprofileimage'].'" class="btn-floating halfway-fab waves-effect waves-light '.$vColorImageSelected.'">
                                        <i class="material-icons">check_circle</i>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p class="image-info"><strong>Tamaño: </strong>'.$vSizeImage.'</p>
                                    <p class="image-info"><strong>Tipo: </strong>'.$this->vProfileImagesList[$i]['c_image_type'].'</p>
                                    <p class="image-info"><strong>Fecha: </strong>'.$vDateImageList.'</p>
                                </div>                                   
                            </div>               
                        </div>
                        ';                        
                    }
                }
            ?>              
            </div>            
                   
        </div>
        
        <div class="row">
           
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

    <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>mini-upload/js/jquery.knob.js"></script>
    <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>mini-upload/js/jquery.ui.widget.js"></script>
    <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>mini-upload/js/jquery.iframe-transport.js"></script>
    <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>mini-upload/js/jquery.fileupload.js"></script>
    <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>mini-upload/js/script.js"></script>

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
