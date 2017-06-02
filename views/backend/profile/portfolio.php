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
<!----------------------------------------------------------------------------------------------------------------------------------------->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Perfil Profesional
                            <small></small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">                                
                                <!-- BEGIN PROFILE SIDEBAR -->
                                <div class="profile-sidebar">                                  
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light profile-sidebar-portlet">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                            <?Php
                                                if($this->vLoggedProfileImage == null){
                                                    $vImageProfileCrop = '<img src="'.$vParamsViewBackEndLayout['root_backend_profile_images'].'logo-profile.jpg" class="img-responsive"/>';
                                                } else {
                                                    $vImageProfileCrop = '<img src="data:image/jpeg;base64,'.$this->vLoggedProfileImage.'" class="img-responsive" />';
                                                }
                                                echo $vImageProfileCrop;
                                            ?>
                                        </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR MENU -->
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li>
                                                    <a href="<?Php echo BASE_VIEW_URL; ?>profile/about/<?Php echo $this->vProfileNameURL; ?>">
                                                        <i class="icon-graduation"></i>Sobre Mi
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="<?Php echo BASE_VIEW_URL; ?>profile/portfolio/<?Php echo $this->vProfileNameURL; ?>">
                                                        <i class="icon-briefcase"></i>Portafolio
                                                    </a>
                                                </li>
                                                <!--<li><a href="<?Php echo BASE_VIEW_URL; ?>profile/blog/<?Php echo $this->vProfileNameURL; ?>"><i class="icon-paper-clip"></i>Artículos</a></li>
                                                <li><a href="<?Php echo BASE_VIEW_URL; ?>profile/contact/<?Php echo $this->vProfileNameURL; ?>"><i class="icon-call-in"></i>Contácto</a></li>-->
                                            </ul>
                                        </div>
                                        <!-- END MENU -->
                                    </div>                                    
                                    <!-- END PORTLET MAIN -->

                                </div>
                                <!-- END BEGIN PROFILE SIDEBAR -->
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="portlet light profile-sidebar-portlet">
                                                <div class="profile-usertitle">
                                                    <div class="profile-usertitle-name"><?Php echo $this->vProfileName; ?></div>
                                                    <?php 
                                                        if(isset($this->vProfileProfession) && count($this->vProfileProfession)):
                                                         for($i=0;$i<count($this->vProfileProfession);$i++):
                                                            echo '<div class="profile-usertitle-job">'.$this->vProfileProfession[$i]['c_profession_name'].'</div>';
                                                         endfor;
                                                        endif;
                                                    ?>
                                                </div>
                                                <div class="profile-userdescription">
                                                    <p><?Php echo $this->vProfileDescription; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portfolio-content portfolio-2">
                                                <div id="js-filters-mosaic" class="cbp-l-filters-button">
                                                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn green btn-outline uppercase"> Todas
                                                        <div class="cbp-filter-counter"></div>
                                                    </div>
                                                    <div data-filter=".profile" class="cbp-filter-item btn green btn-outline uppercase"> Perfil
                                                        <div class="cbp-filter-counter"></div>
                                                    </div>
                                                </div>
                                                <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                                                    <?php 
                                                        if(isset($this->vProfilePortfolioImages) && count($this->vProfilePortfolioImages)):
                                                         for($i=0;$i<count($this->vProfilePortfolioImages);$i++):
                                                            $vImagePortfolio = 'data:image/jpeg;base64,'.$this->vProfilePortfolioImages[$i]['b_image_content'];
                                                            echo '<div class="cbp-item profile" style="width:40%;height:40%;">
                                                                    <a href="#" class="cbp-caption">
                                                                        <div class="cbp-caption-defaultWrap">
                                                                            <img src="'.$vImagePortfolio.'"/>
                                                                        </div>
                                                                        <div class="cbp-caption-activeWrap">
                                                                            <div class="cbp-l-caption-alignCenter">
                                                                                <div class="cbp-l-caption-body">
                                                                                    <div class="cbp-l-caption-title">Bolt UI</div>
                                                                                    <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>';                                                                
                                                         endfor;
                                                        endif;
                                                    ?>
                                                </div>
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
        <!-- END CORE PLUGINS -->
        <!-- BEGIN SCRIPTS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>portfolio-2.min.js" type="text/javascript"></script>
        <!-- END SCRIPTS -->        
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
