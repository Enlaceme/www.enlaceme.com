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
                                            <img src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_images'];?>profile_user.jpg" class="img-responsive" alt="">
                                        </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR MENU -->
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li class="active"><a href="<?Php echo BASE_VIEW_URL; ?>profile/about/<?Php echo $this->vProfileCode; ?>"><i class="icon-graduation"></i>Sobre Mi</a></li>
                                                <li><a href="<?Php echo BASE_VIEW_URL; ?>profile/portfolio/<?Php echo $this->vProfileCode; ?>"><i class="icon-briefcase"></i>Portafolio</a></li>
                                                <li><a href="<?Php echo BASE_VIEW_URL; ?>profile/blog/<?Php echo $this->vProfileCode; ?>"><i class="icon-paper-clip"></i>Artículos</a></li>
                                                <li><a href="<?Php echo BASE_VIEW_URL; ?>profile/contact/<?Php echo $this->vProfileCode; ?>"><i class="icon-call-in"></i>Contácto</a></li>
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
                                        <div class="col-md-6">
                                            <div class="portlet light profile-sidebar-portlet">
                                                <div class="profile-usertitle">
                                                    <div class="profile-usertitle-name"><?Php echo $this->vProfileName; ?></div>
                                                    <div class="profile-usertitle-job"> Desarrollador Web </div>
                                                </div>
                                                <div class="profile-userdescription">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="portlet light">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="icon-puzzle font-grey-gallery"></i>
                                                        <span class="caption-subject bold font-grey-gallery uppercase">Habilidades Profesionales/Laborales</span>
                                                        <span class="caption-helper">...</span>
                                                    </div>
                                                    <div class="tools">
                                                        <a href="" class="collapse"> </a>
                                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                        <a href="" class="reload"> </a>
                                                        <a href="" class="fullscreen"> </a>
                                                        <a href="" class="remove"> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div>
                                                        <h3>PHP Developer</h3>
                                                        <div class="progress progress-striped active">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                                <span class="sr-only"> 40% Complete (success) </span>
                                                            </div>
                                                        </div>
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                    </div>
                                                    <div>
                                                        <h3>CSS Developer</h3>
                                                        <div class="progress progress-striped active">
                                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                                <span class="sr-only"> 60% Complete (success) </span>
                                                            </div>
                                                        </div>
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                    </div>
                                                    <div>
                                                        <h3>Angular Developer</h3>
                                                        <div class="progress progress-striped active">
                                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                                <span class="sr-only"> 30% Complete (success) </span>
                                                            </div>
                                                        </div>
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                    </div>
                                                    <div>
                                                        <h3>IOS Developer</h3>
                                                            <div class="progress progress-striped active">
                                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                                    <span class="sr-only"> 10% Complete (success) </span>
                                                                </div>
                                                            </div>
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="portlet light">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="icon-puzzle font-grey-gallery"></i>
                                                        <span class="caption-subject bold font-grey-gallery uppercase">Experiencia Profesional/Laboral</span>
                                                        <span class="caption-helper">...</span>
                                                    </div>
                                                    <div class="tools">
                                                        <a href="" class="collapse"> </a>
                                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                        <a href="" class="reload"> </a>
                                                        <a href="" class="fullscreen"> </a>
                                                        <a href="" class="remove"> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="panel-group accordion scrollable" id="accordion1">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1_1">Trabajo #4</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_1_1" class="panel-collapse in">
                                                                <div class="panel-body">
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1_2">Trabajo #3</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_1_2" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. </p>
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p>
                                                                        <a class="btn blue" href="ui_tabs_accordions_navs.html#collapse_2_2" target="_blank"> Activate this section via URL </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1_3">Trabajo #2</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_1_3" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. Brunch 3 wolf moon tempor. </p>
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p>
                                                                        <a class="btn green" href="ui_tabs_accordions_navs.html#collapse_2_3" target="_blank"> Activate this section via URL </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1_4">Trabajo #1</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_1_4" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. Brunch 3 wolf moon tempor. </p>
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p>
                                                                        <a class="btn red" href="ui_tabs_accordions_navs.html#collapse_2_4" target="_blank"> Activate this section via URL </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="portlet light">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="icon-puzzle font-grey-gallery"></i>
                                                        <span class="caption-subject bold font-grey-gallery uppercase">Educación Profesional/Laboral</span>
                                                        <span class="caption-helper">...</span>
                                                    </div>
                                                    <div class="tools">
                                                        <a href="" class="collapse"> </a>
                                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                        <a href="" class="reload"> </a>
                                                        <a href="" class="fullscreen"> </a>
                                                        <a href="" class="remove"> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="panel-group accordion scrollable" id="accordion2">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_1">Educación #4</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_2_1" class="panel-collapse in">
                                                                <div class="panel-body">
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_2">Educación #3</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_2_2" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. </p>
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p>
                                                                        <a class="btn blue" href="ui_tabs_accordions_navs.html#collapse_2_2" target="_blank"> Activate this section via URL </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_3">Educación #2</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_2_3" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. Brunch 3 wolf moon tempor. </p>
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p>
                                                                        <a class="btn green" href="ui_tabs_accordions_navs.html#collapse_2_3" target="_blank"> Activate this section via URL </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_4">Educación #1</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_2_4" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. Brunch 3 wolf moon tempor. </p>
                                                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                                    <p>
                                                                        <a class="btn red" href="ui_tabs_accordions_navs.html#collapse_2_4" target="_blank"> Activate this section via URL </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
        <!-- BEGIN QUICK NAV -->
        <nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
                <li>
                    <a href="#" target="_blank" class="active">
                        <span>Purchase Metronic</span>
                        <i class="icon-basket"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <span>Customer Reviews</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/showcast/" target="_blank">
                        <span>Showcase</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                        <span>Changelog</span>
                        <i class="icon-graph"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav>
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_scripts'];?>app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>layout.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>demo.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>