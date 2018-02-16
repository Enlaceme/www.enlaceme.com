                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="#">Universo</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Perfil de usuario</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <?Php echo $this->vProfileName; ?> <small>perfil de usuario <?Php echo IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'ProfileName'); ?></small></h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Información Personal</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#personal_info_1" data-toggle="tab">Información Personal</a>
                                                        </li>
                                                        <li>
                                                            <a href="#personal_info_2" data-toggle="tab">Imagen Personal</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="personal_info_1">
                                                            <form role="form" action="#" id="form-settings-information">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Nombre Perfil</label>
                                                                            <input type="text" class="form-control" value="<?Php echo $this->vProfileNameToShow; ?>" name="vProfileName" id="vProfileName" />
                                                                        </div>                                                                            
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Nombres</label>
                                                                            <input type="text" class="form-control" value="<?Php echo $this->vNames; ?>" name="vName" id="vName" />
                                                                        </div>                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Apellidos</label>
                                                                            <input type="text" class="form-control" value="<?Php echo $this->vLastNames; ?>" name="vLastName" id="vLastName" />
                                                                        </div>                                                                            
                                                                    </div>                                                                        
                                                                </div>                                                                
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Correo Electrónico</label>
                                                                            <input type="text" class="form-control" value="<?Php echo $this->vUserEmail; ?>" name="vEmail" id="vEmail" />
                                                                        </div>                                                                            
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Fecha Nacimiento</label>
                                                                            <div class="input-group input-medium date date-picker" data-date="<?Php echo date('Y-m-d'); ?>" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                                                                <input type="text" class="form-control" name="vDateBirth" id="vDateBirth" value="<?Php echo $this->vDateBirth; ?>" readonly>
                                                                                <span class="input-group-btn">
                                                                                    <button class="btn default" type="button">
                                                                                        <i class="fa fa-calendar"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </div>
                                                                        </div>                                                                            
                                                                    </div>                                                                        
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Descripción Personal</label>
                                                                    <textarea class="form-control" rows="3" name="vDescription" id="vDescription" ><?Php echo $this->vDescription; ?></textarea>
                                                                </div>
                                                                <div class="margiv-top-10">
                                                                   <button type="submit" class="btn green">Actualizar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END PERSONAL INFO TAB -->
                                                        <!-- CHANGE AVATAR TAB -->
                                                        <div class="tab-pane" id="personal_info_2">
                                                           <div class="row">
                                                            <div class="col-md-7">
                                                                <p>Por favor debes cargar una imagen a tu perfil.</p>
                                                                <form action="#" role="form">
                                                                    <div class="form-group">
                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                            <div>
                                                                                <span class="btn default btn-file">
                                                                                    <span class="fileinput-new"> Seleccionar Imagen </span>
                                                                                    <span class="fileinput-exists"> Cambiar </span>
                                                                                    <input type="file" name="..."> </span>
                                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remover </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="margin-top-10">
                                                                        <a href="javascript:;" class="btn green"> Guardar </a>
                                                                        <a href="javascript:;" class="btn default"> Cancelar </a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-4">
                                                               <p>Actualmente estas con la fotografía de perfil de facebook.</p>
                                                                <img alt="" class="img-circle" src="<?Php echo $this->vImageProfile; ?>" width="150px" />
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <!-- END CHANGE AVATAR TAB -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-red bold uppercase">Seguridad de la Cuenta</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#account_password" data-toggle="tab">Contraseña</a>
                                                        </li>
                                                        <li>
                                                            <a href="#account_settings" data-toggle="tab">Configuración de Privacidad</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- CHANGE PASSWORD TAB -->
                                                        <div class="tab-pane active" id="account_password">
                                                            <?Php
                                                                if($this->vPasswordState === 0){
                                                                    echo '<div class="alert alert-danger"><strong>¡CAMBIO NECESARIO!</strong> Por favor debes cambiar tu contraseña.</div>';
                                                                }
                                                            ?>
                                                            <form role="form" action="#" id="form-settings-password" autocomplete="off">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Nueva Contraseña</label>
                                                                            <input type="password" class="form-control" name="vPassword" id="vPassword" />
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div id="passwordMessage"></div>
                                                                    </div>                                                                
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Repetir Contraseña</label>
                                                                            <input type="password" class="form-control" name="vRePassword" id="vRePassword" />
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div id="rePasswordMessage"></div>
                                                                    </div>                                                                
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="margin-top-10">
                                                                            <button type="submit" class="btn red" id="submitChangePassword">Cambiar Contraseña</button>
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <div id="submitMessage"></div>
                                                                    </div>                                                                
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE PASSWORD TAB -->
                                                        <!-- PRIVACY SETTINGS TAB -->
                                                        <div class="tab-pane" id="account_settings">
                                                            <form action="#">
                                                                <table class="table table-light table-hover">
                                                                    <tr>
                                                                        <td>Mostrar mi correo electrónico de forma pública.</td>
                                                                        <td>
                                                                            <div class="mt-radio-inline">
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="optionsRadios1" value="option1" /> Si
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="optionsRadios1" value="option2" checked/> No
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> Mostrar mi número de whatsapp de forma pública.</td>
                                                                        <td>
                                                                            <div class="mt-radio-inline">
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="optionsRadios11" value="option1" /> Si
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="optionsRadios11" value="option2" checked/> No
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> Mostrar los enlaces de mis redes sociales de forma pública.</td>
                                                                        <td>
                                                                            <div class="mt-radio-inline">
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="optionsRadios21" value="option1" /> Si
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="optionsRadios21" value="option2" checked/> No
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Permitir que todas las personas me contacten.</td>
                                                                        <td>
                                                                            <div class="mt-radio-inline">
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="optionsRadios31" value="option1" /> Si
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="optionsRadios31" value="option2" checked/> No
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!--end profile-settings-->
                                                                <div class="margin-top-10">
                                                                    <a href="javascript:;" class="btn red"> Guardar </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END PRIVACY SETTINGS TAB -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Información de Contacto</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#location_info_1" data-toggle="tab">Ubicación</a>
                                                        </li>
                                                        <li>
                                                            <a href="#location_info_2" data-toggle="tab">Teléfonos</a>
                                                        </li>                                                        
                                                    </ul>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="location_info_1">
                                                            <?Php
                                                                if($this->vLocation == 1){
                                                            ?>
                                                                    <form role="form" action="#" id="form-settings-updlocation">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">País</label>
                                                                                    <input type="text" class="form-control" name="vCountry" id="vCountry" value="<?Php echo $this->vCountry; ?>" />
                                                                                </div>                                                                            
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Ciudad</label>
                                                                                    <input type="text" class="form-control" name="vCity" id="vCity" value="<?Php echo $this->vCity; ?>" />
                                                                                </div>                                                                            
                                                                            </div>                                                                        
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label">Dirección</label>
                                                                            <textarea class="form-control" rows="3" name="vAddress" id="vAddress"><?Php echo $this->vAddress; ?></textarea>
                                                                        </div>
                                                                        <div class="margiv-top-10">
                                                                            <input type="hidden" name="vLocationId" id="vLocationId" value="<?Php echo $this->vLocationId; ?>" />
                                                                           <button type="submit" class="btn green">Actualizar</button>
                                                                        </div>
                                                                    </form>                                                            
                                                            <?Php
                                                                } else {
                                                            ?>
                                                                    <form role="form" action="#" id="form-settings-location">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">País</label>
                                                                                    <input type="text" class="form-control" name="vCountry" id="vCountry" />
                                                                                </div>                                                                            
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Ciudad</label>
                                                                                    <input type="text" class="form-control" name="vCity" id="vCity" />
                                                                                </div>                                                                            
                                                                            </div>                                                                        
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label">Dirección</label>
                                                                            <textarea class="form-control" rows="3" name="vAddress" id="vAddress"></textarea>
                                                                        </div>
                                                                        <div class="margiv-top-10">
                                                                           <button type="submit" class="btn green">Registrar</button>
                                                                        </div>
                                                                    </form>
                                                            <?Php
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="tab-pane" id="location_info_2">
                                                            <form role="form" action="#" id="form-settings-phones">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Contacto</label>
                                                                            <select class="form-control" name="vTypePhone" id="vTypePhone" >
                                                                                <option value="0">Seleccionar</option>
                                                                                <option value="1">Telefono Fijo</option>
                                                                                <option value="2">Telefono Celular</option>
                                                                                <option value="3">WhatsApp</option>
                                                                            </select>
                                                                        </div>                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Número</label>
                                                                            <input type="text" class="form-control" name="vNumberPhone" id="vNumberPhone" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="margiv-top-10">
                                                                    <button type="submit" class="btn green">Registrar</button>
                                                                </div>
                                                            </form>
                                                            <div class="clearfix"></div>
                                                            <?Php                                                
                                                               if(isset($this->vPhones) && count($this->vPhones)){
                                                                    $vCount = 1;
                                                                   echo '<h3>Telefonos Registrados</h3>
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Nº</th>
                                                                                    <th>Tipo</th>
                                                                                    <th>Número</th>
                                                                                    <th>Acción</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>';                                                                   
                                                                    for($i=0;$i<count($this->vPhones);$i++){
                                                                        
                                                                            if($this->vPhones[$i]['n_type'] == 0){
                                                                                $vType = '<span class="label label-sm label-danger"> No Seleccionado</span>';
                                                                            } else if($this->vPhones[$i]['n_type'] == 1){
                                                                                $vType = '<span class="label label-sm label-info"> Telefono Fijo </span>';
                                                                            } else if($this->vPhones[$i]['n_type'] == 2){
                                                                                $vType = '<span class="label label-sm label-warning"> Telefono Celular </span>';
                                                                            } else if($this->vPhones[$i]['n_type'] == 3){
                                                                                $vType = '<span class="label label-sm label-success"> Whatsapp </span>';
                                                                            }
                                                                        
                                                                            echo '<tr>
                                                                                    <td>'.$vCount.'</td>
                                                                                    <td>'.$vType.'</td>
                                                                                    <td>'.$this->vPhones[$i]['t_number'].'</td>
                                                                                    <td>
                                                                                        <div class="btn-group">
                                                                                            <a class="btn default btn-xs" href="javascript:;" data-toggle="dropdown">
                                                                                                Acciones <i class="fa fa-angle-down"></i>
                                                                                            </a>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li>
                                                                                                    <a
                                                                                                        id="updatePhone-'.$this->vPhones[$i]['n_codprofilephone'].'"
                                                                                                        idCod="'.$this->vPhones[$i]['n_codprofilephone'].'"
                                                                                                        idType="'.$this->vPhones[$i]['n_type'].'"
                                                                                                        idNumber="'.$this->vPhones[$i]['t_number'].'"
                                                                                                        data-toggle="modal"
                                                                                                        href="#UpdatePhoneProfile">
                                                                                                            <i class="fa fa-pencil"></i> Editar
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li><a id="deletePhone-'.$this->vPhones[$i]['n_codprofilephone'].'" href="'.BASE_VIEW_URL.'account/deletePhoneProfile/'.$this->vPhones[$i]['n_codprofilephone'].'"><i class="fa fa-trash"></i> Eliminar </a></li>
                                                                                            </ul>
                                                                                        </div>                                                                                    
                                                                                    </td>
                                                                                </tr>';
                                                                        ++$vCount;
                                                                    }
                                                                   echo '</tbody>
                                                                    </table>';
                                                               }
                                                            ?>                                                            
                                                        </div>                                                        
                                                        
                                                        <!-- END PERSONAL INFO TAB -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>                                    
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->


            <div class="modal fade" id="UpdatePhoneProfile" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                    <form role="form" action="#" id="form-settings-updateProfilePhone">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Modificar Telefono del Perfil</h4>
                            </div>
                            <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Contacto</label>
                                                <select class="form-control" name="vTypePhoneModal" id="vTypePhoneModal" >
                                                    <option value="0">Seleccionar</option>
                                                    <option value="1">Telefono Fijo</option>
                                                    <option value="2">Telefono Celular</option>
                                                    <option value="3">WhatsApp</option>
                                                </select>
                                            </div>                                                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Número</label>
                                                <input type="text" class="form-control" name="vNumberPhoneModal" id="vNumberPhoneModal" />
                                                <input type="hidden" name="vCodeModal" id="vCodeModal" />
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn green">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2018 &copy; Enlaceme.com
                    <a target="_blank" href="">Ideas-Envision</a> &nbsp;|&nbsp;
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!--[if lt IE 9]>
<script src="../<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>respond.min.js"></script>
<script src="../<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>excanvas.min.js"></script> 
<script src="../<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>jquery.min.js" type="text/javascript"></script>
        <script src="<?Php echo $vParamsViewBootstrap['root_bootstrap_js']; ?>bootstrap.min.js" type="text/javascript"></script>
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>js.cookie.min.js" type="text/javascript"></script>
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>moment2.min.js" type="text/javascript"></script>
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->        
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_scripts']; ?>app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_pages_scripts']; ?>components-date-time-pickers.min.js" type="text/javascript"></script>
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_pages_scripts']; ?>account.min.js" type="text/javascript"></script>
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_pages_scripts']; ?>pass.min.js" type="text/javascript"></script>
        
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts']; ?>layout.min.js" type="text/javascript"></script>
        <script src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts']; ?>demo.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
</html>