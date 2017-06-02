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
                                                <li class="active"><a href="<?Php echo BASE_VIEW_URL; ?>profile/blog/<?Php echo $this->vProfileCode; ?>"><i class="icon-paper-clip"></i>Artículos</a></li>
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
                                    <div class="row">
                                        <div class="col-md-12">
                        <!-- END PAGE HEADER-->
                        <div class="blog-page blog-content-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-post-lg bordered blog-container">
                                        <div class="blog-img-thumb">
                                            <a href="javascript:;">
                                                <img src="<?php echo $vParamsViewBackEndLayout['root_backend_global_images'];?>page_general_search/5.jpg" />
                                            </a>
                                        </div>
                                        <div class="blog-post-content">
                                            <h2 class="blog-title blog-post-title">
                                                <a href="javascript:;">Metronic Blog Post</a>
                                            </h2>
                                            <p class="blog-post-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                                            <div class="blog-post-foot">
                                                <ul class="blog-post-tags">
                                                    <li class="uppercase">
                                                        <a href="javascript:;">Bootstrap</a>
                                                    </li>
                                                    <li class="uppercase">
                                                        <a href="javascript:;">Sass</a>
                                                    </li>
                                                    <li class="uppercase">
                                                        <a href="javascript:;">HTML</a>
                                                    </li>
                                                </ul>
                                                <div class="blog-post-meta">
                                                    <i class="icon-calendar font-blue"></i>
                                                    <a href="javascript:;">Oct 24, 2015</a>
                                                </div>
                                                <div class="blog-post-meta">
                                                    <i class="icon-bubble font-blue"></i>
                                                    <a href="javascript:;">14 Comments</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-post-lg bordered blog-container">
                                        <div class="blog-img-thumb">
                                            <a href="javascript:;">
                                                <img src="<?php echo $vParamsViewBackEndLayout['root_backend_global_images'];?>page_general_search/05.jpg" />
                                            </a>
                                        </div>
                                        <div class="blog-post-content">
                                            <h2 class="blog-title blog-post-title">
                                                <a href="javascript:;">New Metronic Features</a>
                                            </h2>
                                            <p class="blog-post-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                                            <div class="blog-post-foot">
                                                <ul class="blog-post-tags">
                                                    <li class="uppercase">
                                                        <a href="javascript:;">Bootstrap</a>
                                                    </li>
                                                    <li class="uppercase">
                                                        <a href="javascript:;">Sass</a>
                                                    </li>
                                                    <li class="uppercase">
                                                        <a href="javascript:;">HTML</a>
                                                    </li>
                                                </ul>
                                                <div class="blog-post-meta">
                                                    <i class="icon-calendar font-blue"></i>
                                                    <a href="javascript:;">Oct 22, 2015</a>
                                                </div>
                                                <div class="blog-post-meta">
                                                    <i class="icon-bubble font-blue"></i>
                                                    <a href="javascript:;">8 Comments</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="blog-quote bordered blog-container">
                                                <div class="blog-quote-label bg-green-jungle">
                                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolore siat amet consectetuer adipiscing eliot sed diam nonummy nih siad euismod laoreet dolore </div>
                                                <div class="blog-quote-avatar">
                                                    <a href="javascript:;">
                                                        <img src="<?php echo $vParamsViewBackEndLayout['root_backend_global_images'];?>page_general_search/team12.jpg" />
                                                    </a>
                                                </div>
                                                <div class="blog-quote-author">
                                                    <h3 class="blog-title blog-quote-title">
                                                        <a href="javascript:;">Rob Robson</a>
                                                    </h3>
                                                    <p class="blog-quote-desc">Senior Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="blog-video bordered blog-container">
                                                <div class="blog-img-thumb">
                                                    <a href="javascript:;">
                                                        <img src="<?php echo $vParamsViewBackEndLayout['root_backend_global_images'];?>page_general_search/4.jpg" />
                                                    </a>
                                                </div>
                                                <a href="javascript:;" class="blog-video-play">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                                <div class="blog-video-content">
                                                    <h3 class="blog-title blog-video-title">
                                                        <a href="javascript:;">Awesome Video</a>
                                                    </h3>
                                                    <p class="blog-video-desc">Software</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="blog-banner blog-container" style="background-image:url(<?php echo $vParamsViewBackEndLayout['root_backend_global_images'];?>page_general_search/back_4.jpg);">
                                                <h2 class="blog-title blog-banner-title">
                                                    <a href="javascript:;">Metronic Latest Features</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="blog-post-sm bordered blog-container">
                                                <div class="blog-img-thumb">
                                                    <a href="javascript:;">
                                                        <img src="<?php echo $vParamsViewBackEndLayout['root_backend_global_images'];?>page_general_search/1.jpg" />
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <h2 class="blog-title blog-post-title">
                                                        <a href="javascript:;">Metronic Blog Post</a>
                                                    </h2>
                                                    <p class="blog-post-desc"> Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy </p>
                                                    <div class="blog-post-foot">
                                                        <div class="blog-post-meta">
                                                            <i class="icon-calendar font-blue"></i>
                                                            <a href="javascript:;">Oct 24, 2015</a>
                                                        </div>
                                                        <div class="blog-post-meta">
                                                            <i class="icon-bubble font-blue"></i>
                                                            <a href="javascript:;">14 Comments</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="blog-post-sm bordered blog-container">
                                                <div class="blog-img-thumb">
                                                    <a href="javascript:;">
                                                        <img src="<?php echo $vParamsViewBackEndLayout['root_backend_global_images'];?>page_general_search/02.jpg" />
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <h2 class="blog-title blog-post-title">
                                                        <a href="javascript:;">Metronic Blog Post</a>
                                                    </h2>
                                                    <p class="blog-post-desc"> Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy </p>
                                                    <div class="blog-post-foot">
                                                        <div class="blog-post-meta">
                                                            <i class="icon-calendar font-blue"></i>
                                                            <a href="javascript:;">Oct 24, 2015</a>
                                                        </div>
                                                        <div class="blog-post-meta">
                                                            <i class="icon-bubble font-blue"></i>
                                                            <a href="javascript:;">14 Comments</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="blog-post-sm bordered blog-container">
                                                <div class="blog-img-thumb">
                                                    <a href="javascript:;">
                                                        <img src="<?php echo $vParamsViewBackEndLayout['root_backend_global_images'];?>page_general_search/2.jpg" />
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <h2 class="blog-title blog-post-title">
                                                        <a href="javascript:;">Metronic Blog Post</a>
                                                    </h2>
                                                    <p class="blog-post-desc"> Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy </p>
                                                    <div class="blog-post-foot">
                                                        <div class="blog-post-meta">
                                                            <i class="icon-calendar font-blue"></i>
                                                            <a href="javascript:;">Oct 24, 2015</a>
                                                        </div>
                                                        <div class="blog-post-meta">
                                                            <i class="icon-bubble font-blue"></i>
                                                            <a href="javascript:;">14 Comments</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="blog-post-sm bordered blog-container">
                                                <div class="blog-img-thumb">
                                                    <a href="javascript:;">
                                                        <img src="<?php echo $vParamsViewBackEndLayout['root_backend_global_images'];?>page_general_search/03.jpg" />
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <h2 class="blog-title blog-post-title">
                                                        <a href="javascript:;">Metronic Blog Post</a>
                                                    </h2>
                                                    <p class="blog-post-desc"> Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy </p>
                                                    <div class="blog-post-foot">
                                                        <div class="blog-post-meta">
                                                            <i class="icon-calendar font-blue"></i>
                                                            <a href="javascript:;">Oct 24, 2015</a>
                                                        </div>
                                                        <div class="blog-post-meta">
                                                            <i class="icon-bubble font-blue"></i>
                                                            <a href="javascript:;">14 Comments</a>
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