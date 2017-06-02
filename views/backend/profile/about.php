<link href="<?php echo $vParamsViewBackEndLayout['root_backend_pages_css'];?>about.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $vParamsViewBackEndLayout['root_backend_pages_css'];?>contact.min.css" rel="stylesheet" type="text/css" />
            <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo BASE_VIEW_URL; ?>">Incio</a>
                                    <i class="fa fa-angle-right"></i>
                                </li>
                                <li>
                                    <span>Perfil Profesional</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- END PAGE HEADER-->
                        <div class="row margin-bottom-40 about-header">                            
                            <div class="col-md-12">
                                <?Php
                                    if($this->vLoggedProfileImage == null){
                                        $vImageProfile = '<img src="'.$vParamsViewBackEndLayout['root_backend_profile_images'].'logo-profile.jpg" class="img-circle" style="width: 170px;height: 170px;margin: 70px 0 20px 0;border: 3px solid #fff;" />';
                                    } else {
                                        $vImageProfile = '<img src="data:image/jpeg;base64,'.$this->vLoggedProfileImage.'" class="img-circle" style="width: 170px;height: 170px;margin: 70px 0 20px 0;border: 3px solid #fff;"/>';
                                    }
                                    echo $vImageProfile;
                                ?>                                
                                <h1><?Php echo $this->vProfileName; ?></h1>
                                <h2>
                                    <?php 
                                        if(isset($this->vProfileProfession) && count($this->vProfileProfession)):
                                         for($i=0;$i<count($this->vProfileProfession);$i++):
                                            echo $this->vProfileProfession[$i]['c_profession_name'];
                                         endfor;
                                        endif;
                                    ?>
                                </h2>
                                <button type="button" class="btn enlaceme-orange">CONTACTARME</button>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="portlet light about-text">
                                            <h4><i class="fa fa-check icon-info"></i> Sobre <?Php echo $this->vProfileName; ?></h4>
                                            <p class="margin-top-20" style="font-size: 18px;"><?Php echo $this->vProfileDescription; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="well background-orange">
                                            <h3 class="font-white"><strong>¿Quieres contactarme?</strong></h3>
                                            <p class="font-white">Te invito a que me mandes un mensaje interno y me pondré en contacto contigo.</p>
                                            <form action="#">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Correo Electrónico" class="form-control input-md">
                                                </div>
                                                <div class="form-group">
                                                    <textarea rows="5" name="message" placeholder="escribe tu consulta..." class="form-control input-md"></textarea>
                                                </div>
                                                <button type="submit" class="btn grey">Enviar</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="portlet light">
                                            <div class="card-icon">
                                                <i class="icon-trophy font-green-haze theme-font"></i>
                                            </div>
                                            <div class="card-title">
                                                <span class="font-dark-orange" data-counter="counterup" data-value="25">0</span>
                                            </div>
                                            <div class="card-desc">
                                                <span class="font-dark-orange"> Contactos registrados</span>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>                                
                            </div>
                        </div>                                
<!----------------------------------------------------------------------------------------------------------------------------------------->                        
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
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_scripts'];?>app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_pages_scripts'];?>search.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>layout.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>demo.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>