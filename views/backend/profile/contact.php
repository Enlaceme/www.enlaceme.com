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
                                                <li><a href="<?Php echo BASE_VIEW_URL; ?>profile/about/<?Php echo $this->vProfileCode; ?>"><i class="icon-graduation"></i>Sobre Mi</a></li>
                                                <li><a href="<?Php echo BASE_VIEW_URL; ?>profile/portfolio/<?Php echo $this->vProfileCode; ?>"><i class="icon-briefcase"></i>Portafolio</a></li>
                                                <li><a href="<?Php echo BASE_VIEW_URL; ?>profile/blog/<?Php echo $this->vProfileCode; ?>"><i class="icon-paper-clip"></i>Artículos</a></li>
                                                <li class="active"><a href="<?Php echo BASE_VIEW_URL; ?>profile/contact/<?Php echo $this->vProfileCode; ?>"><i class="icon-call-in"></i>Contácto</a></li>
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
                                                    <div class="profile-usertitle-job"> Desarrollador Web </div>
                                                </div>
                                                <div class="profile-userdescription">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
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
