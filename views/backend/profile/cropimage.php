<link href="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jcrop/css/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $vParamsViewBackEndLayout['root_backend_pages_css'];?>image-crop.min.css" rel="stylesheet" type="text/css" />
<!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->

                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li><a href="<?Php echo BASE_VIEW_URL;?>">Actualizaciones</a><i class="fa fa-circle"></i></li>
                                <li><span>Perfil</span><i class="fa fa-circle"></i></li>
                                <li><span>Configuración de Cuenta</span></li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">Edición de Imagen <small>Corta la imagen para que se vea correctamente en tu perfil.</small></h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-8">
                                <div id='message_img'></div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">                             
                                <div class="col-md-6 ">
                                    <div class="portlet light portlet-fit bordered">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-red"></i>
                                                <span class="caption-subject font-red sbold uppercase">Fotografía del Perfil</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row">
                                                <form id="form-cropimage" action="#" method="post">
                                                    <div class="col-md-7 responsive-1024">
                                                        <?Php
                                                            if($this->vLoggedProfileImage == null){
                                                                $vImageProfile = '<img id="idCropImage" src="'.$vParamsViewBackEndLayout['root_backend_profile_images'].'logo-profile.jpg" class="img-responsive"/>';
                                                            } else {
                                                                $vImageProfile = '<img id="idCropImage" src="data:image/jpeg;base64,'.$this->vLoggedProfileImage.'" class="img-responsive" />';
                                                            }
                                                            echo $vImageProfile;
                                                        ?>                                                    
                                                    </div>
                                                    <div class="col-md-5 responsive-1024">
                                                        <h4>An example server-side crop script.</h4>
                                                        <p> Hidden form values are set when a selection is made. If you press the <i>Crop Image</i> button, the form will be submitted and a 150x150 thumbnail will be dumped to the browser. Try it! </p>
                                                            <input type="hidden" id="imgcode" name="imgcode" value="<?Php echo $this->vLoggedProfileCodeImage; ?>" />
                                                            <input type="hidden" id="crop_x" name="x" />
                                                            <input type="hidden" id="crop_y" name="y" />
                                                            <input type="hidden" id="crop_w" name="w" />
                                                            <input type="hidden" id="crop_h" name="h" />
                                                            <input type="submit" value="Guardar Imagen" class="btn btn-large green" />
                                                    </div>
                                                </form>
                                            </div>
                                            <br/>
                                                <?Php
                                                    if($this->vLoggedProfileCropImage == null){
                                                        $vImageProfileCrop = '<img src="'.$vParamsViewBackEndLayout['root_backend_profile_images'].'logo-profile.jpg" class="img-responsive"/>';
                                                    } else {
                                                        $vImageProfileCrop = '<img src="data:image/jpeg;base64,'.$this->vLoggedProfileCropImage.'" class="img-responsive" />';
                                                    }
                                                    echo $vImageProfileCrop;
                                                ?>                                            
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2016 &copy; <a target="_blank" href="<?php echo BASE_VIEW_URL;?>">Enlaceme.com</a> implementado por
                    <a target="_blank" href="htpp://www.ideas-envision.com">Ideas-Envision</a> &nbsp;
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!--[if lt IE 9]>
<script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>respond.min.js"></script>
<script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>excanvas.min.js"></script> 
<script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jquery.blockui.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jcrop/js/jquery.color.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jcrop/js/jquery.Jcrop.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_scripts'];?>app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_pages_scripts'];?>form-image-crop.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_pages_scripts'];?>profile.min.js" type="text/javascript"></script>
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_pages_scripts'];?>search.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>layout.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>demo.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>