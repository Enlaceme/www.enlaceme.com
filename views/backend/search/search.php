<link href="<?php echo $vParamsViewBackEndLayout['root_backend_pages_css'];?>search.min.css" rel="stylesheet" type="text/css" />
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
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Búsqueda de personas
                            <small>Todas las personas que se muestrán tienen perfiles habilitados correctamente.</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="search-page search-content-2">
                        <div class="search-bar bordered">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="buscar nombre...">
                                        <span class="input-group-btn">
                                            <button class="btn blue uppercase bold" type="button">Buscar</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <p class="search-desc clearfix">Esta sección de búsqueda es simple, solo debes ingresar el nombre de la persona que estas búscando, así Enlaceme.com te desplegará los resultados más exactos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="search-container bordered">
                                    <ul>
                                        <li class="search-item-header">
                                            <div class="row">
                                                <div class="col-sm-9 col-xs-8">
                                                    <h3>Resultados de la búsqueda...</h3>
                                                </div>
                                                <div class="col-sm-3 col-xs-4">
                                                    <div class="form-group">
                                                        <select class="bs-select form-control">
                                                            <option>Questions</option>
                                                            <option>Answers</option>
                                                            <option>Users</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?Php
                                            if(isset($this->vSearchResults) && count($this->vSearchResults)):
                                             for($i=0;$i<count($this->vSearchResults);$i++):
                                                if($this->vSearchResults[$i]['b_image_content'] == null){
                                                    $vImageProfile = '<img src="'.$vParamsViewBackEndLayout['root_backend_profile_images'].'logo-profile.jpg" class="img-responsive" alt=""/>';
                                                } else {
                                                    $vImageProfile = '<img src="data:image/jpeg;base64,'.$this->vSearchResults[$i]['b_image_content'].'" class="img-responsive" alt=""/>';
                                                }
                                                echo '<li class="search-item clearfix">
                                                        <div class="search-content">
                                                            <div class="row">
                                                                <div class="col-sm-2 col-xs-4">'.$vImageProfile.'</div>                                                            
                                                                <div class="col-sm-4 col-xs-12">
                                                                    <h2 class="search-title">
                                                                        <a href="'.BASE_VIEW_URL.'profile/about/'.$this->vSearchResults[$i]['c_profilename'].'">'.ucwords($this->vSearchResults[$i]['c_usernames']).'</a>
                                                                    </h2>
                                                                    <p>'.$this->vSearchResults[$i]['c_profile_description'].'</p>
                                                                    <div class="clear-fix"><br/></div>
                                                                    <p class="search-desc"> última actividad:
                                                                        <a href="javascript:;">Publicación</a> -
                                                                        <span class="font-grey-salt">25 mins</span>
                                                                    </p>
                                                                </div>
                                                                <div class="col-sm-2 col-xs-4">
                                                                    <p class="search-counter-number">362</p>
                                                                    <p class="search-counter-label uppercase">Questions</p>
                                                                </div>
                                                                <div class="col-sm-2 col-xs-4">
                                                                    <p class="search-counter-number">79</p>
                                                                    <p class="search-counter-label uppercase">Answers</p>
                                                                </div>
                                                                <div class="col-sm-2 col-xs-4">
                                                                    <p class="search-counter-number">8</p>
                                                                    <p class="search-counter-label uppercase">Users</p>
                                                                </div>
                                                            </div>
                                                    </li>';
                                             endfor;
                                            endif;
                                        ?>
                                    </ul>
                                    <div class="search-pagination">
                                        <ul class="pagination">
                                            <li class="page-active">
                                                <a href="javascript:;"> 1 </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 2 </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 3 </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 4 </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <!-- END PAGE BASE CONTENT -->
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
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_scripts'];?>app.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_pages_scripts'];?>search.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>layout.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>demo.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>quick-nav.min.js" type="text/javascript"></script>
    </body>
</html>