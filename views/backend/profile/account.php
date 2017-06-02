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
                        <h1 class="page-title">Configuración de Cuenta <small>Datos personales y de acceso.</small></h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-8">
                                <div id='message_img'></div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <div class="portlet light form-fit bordered">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-blue"></i>
                                                <span class="caption-subject font-blue sbold uppercase">Fotografía</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body form">
                                            <form id="form-upload-image-profile" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                <div class="form-body" align="center">                                               
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;"> 
                                                                <?Php
                                                                    if($this->vProfileImage == null){
                                                                        $vImageProfile = '<img src="'.$vParamsViewBackEndLayout['root_backend_profile_images'].'logo-profile.jpg" alt=""/>';
                                                                    } else {
                                                                        $vImageProfile = '<img src="data:image/jpeg;base64,'.$this->vProfileImage.'" class="img-responsive" alt=""/>';
                                                                    }
                                                                    echo $vImageProfile;
                                                                ?>
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new"> Seleccionar Imagen </span>
                                                                    <span class="fileinput-exists"> Cambiar </span>
                                                                    <input type="file" name="imageFile" id="imageFile"> </span>
                                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Eliminar </a>
                                                                <!--<a href="javascript:;" class="btn green"><i class="fa fa-check"></i> Enviar</a>-->
                                                                <button type="submit" class="btn green">Guardar Imagen</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>                               
                                <div class="col-md-6 ">
                                    <!-- BEGIN SAMPLE FORM PORTLET-->
                                    <div class="portlet light bordered">
                                        <div class="portlet-title">
                                            <div class="caption font-blue">
                                                <i class="icon-user font-blue"></i>
                                                <span class="caption-subject bold uppercase"> Información de la cuenta</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body form">
                                            <form class="form-register-profile" action="#" method="post">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Sobrenombre o Apodo</label>
                                                                <input class="form-control placeholder-no-fix" type="text" value="<?Php echo $this->vOtherNames; ?>" name="othername" />
                                                            </div>
                                                        </div>                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Nombres</label>
                                                                <input class="form-control placeholder-no-fix" type="text" value="<?Php echo $this->vNames; ?>" name="firstnames" />
                                                            </div>
                                                        </div>                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Apellidos</label>
                                                                <input class="form-control placeholder-no-fix" type="text" value="<?Php echo $this->vLastNames; ?>" name="lastnames" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Correo Electrónico</label>
                                                                        <input class="form-control placeholder-no-fix" type="text" value="<?Php echo $this->vEmail; ?>" name="email" />
                                                                    </div>                                                            
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Día</label>
                                                                        <select name="day" class="form-control select2me">
                                                                            <?Php
                                                                                if($this->vDayBirth != Null){
                                                                                    echo '<option value="'.$this->vDayBirth.'">'.$this->vDayBirth.'</option>';
                                                                                }
                                                                            ?>                                                                    
                                                                            <option value="0">Día</option>
                                                                            <?Php
                                                                                 for($i=0;$i<=31;$i++):
                                                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                                                 endfor;
                                                                            ?>
                                                                        </select>
                                                                    </div>                                                            
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Mes</label>
                                                                        <select name="month" class="form-control select2me">
                                                                            <?Php
                                                                                if($this->vMonthBirth != Null){
                                                                                    echo '<option value="'.$this->vMonthBirth.'">'.$this->vMonthBirth.'</option>';
                                                                                }
                                                                            ?>
                                                                            <option value="Ninguno">Mes</option>
                                                                            <option value="1">Enero</option>
                                                                            <option value="2">Febrero</option>
                                                                            <option value="3">Marzo</option>
                                                                            <option value="4">Abril</option>
                                                                            <option value="5">Mayo</option>
                                                                            <option value="6">Junio</option>
                                                                            <option value="7">Julio</option>
                                                                            <option value="8">Agosto</option>
                                                                            <option value="9">Septiembre</option>
                                                                            <option value="10">Octubre</option>
                                                                            <option value="11">Noviembre</option>
                                                                            <option value="12">Diciembre</option>
                                                                        </select>
                                                                    </div>                                                            
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Año</label>
                                                                        <select name="year" class="form-control select2me">
                                                                            <?Php
                                                                                if($this->vYearBirth != Null){
                                                                                    echo '<option value="'.$this->vYearBirth.'">'.$this->vYearBirth.'</option>';
                                                                                }
                                                                            ?>                                                                    
                                                                            <option value="0">A&ntilde;o</option>
                                                                            <?Php
                                                                                $vYearNow = date("Y");
                                                                                for($y=$vYearNow;$y>=1913;$y--):
                                                                                    echo '<option value="'.$y.'">'.$y.'</option>';
                                                                                endfor;
                                                                            ?>
                                                                        </select>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>País Nacimiento</label>
                                                                <select name="country" id="country_list" class="form-control select2me">
                                                                    <?Php
                                                                        if($this->vCountry != Null){
                                                                            echo '<option value="'.$this->vCountry.'" selected>'.$this->vCountry.'</option>';
                                                                        }
                                                                    ?>                                                                    
                                                                    <option value="Ninguno">País</option>
                                                                    <option value="AF">Afganistán</option> 
                                                                    <option value="AL">Albania</option> 
                                                                    <option value="DE">Alemania</option> 
                                                                    <option value="AD">Andorra</option> 
                                                                    <option value="AO">Angola</option> 
                                                                    <option value="AI">Anguilla</option> 
                                                                    <option value="AQ">Antártida</option> 
                                                                    <option value="AG">Antigua y Barbuda</option> 
                                                                    <option value="AN">Antillas Holandesas</option> 
                                                                    <option value="SA">Arabia Saudí</option> 
                                                                    <option value="DZ">Argelia</option> 
                                                                    <option value="AR">Argentina</option> 
                                                                    <option value="AM">Armenia</option> 
                                                                    <option value="AW">Aruba</option> 
                                                                    <option value="AU">Australia</option> 
                                                                    <option value="AT">Austria</option>  
                                                                    <option value="AZ">Azerbaiyán</option>  
                                                                    <option value="BS">Bahamas</option>  
                                                                    <option value="BH">Bahrein</option>  
                                                                    <option value="BD">Bangladesh</option>  
                                                                    <option value="BB">Barbados</option>  
                                                                    <option value="BE">Bélgica</option>  
                                                                    <option value="BZ">Belice</option>  
                                                                    <option value="BJ">Benin</option>  
                                                                    <option value="BM">Bermudas</option>  
                                                                    <option value="BY">Bielorrusia</option>  
                                                                    <option value="MM">Birmania</option>  
                                                                    <option value="BO">Bolivia</option>  
                                                                    <option value="BA">Bosnia y Herzegovina</option>  
                                                                    <option value="BW">Botswana</option>  
                                                                    <option value="BR">Brasil</option>  
                                                                    <option value="BN">Brunei</option>  
                                                                    <option value="BG">Bulgaria</option>  
                                                                    <option value="BF">Burkina Faso</option>  
                                                                    <option value="BI">Burundi</option>  
                                                                    <option value="BT">Bután</option>  
                                                                    <option value="CV">Cabo Verde</option>  
                                                                    <option value="KH">Camboya</option>  
                                                                    <option value="CM">Camerún</option>  
                                                                    <option value="CA">Canadá</option>  
                                                                    <option value="TD">Chad</option>  
                                                                    <option value="CL">Chile</option>  
                                                                    <option value="CN">China</option>  
                                                                    <option value="CY">Chipre</option>  
                                                                    <option value="VA">Ciudad del Vaticano (Santa Sede)</option>  
                                                                    <option value="CO">Colombia</option>  
                                                                    <option value="KM">Comores</option>  
                                                                    <option value="CG">Congo</option>  
                                                                    <option value="CD">Congo, República Democrática del</option>  
                                                                    <option value="KR">Corea</option>  
                                                                    <option value="KP">Corea del Norte</option>  
                                                                    <option value="CI">Costa de Marfíl</option>  
                                                                    <option value="CR">Costa Rica</option>  
                                                                    <option value="HR">Croacia (Hrvatska)</option>  
                                                                    <option value="CU">Cuba</option>  
                                                                    <option value="DK">Dinamarca</option>  
                                                                    <option value="DJ">Djibouti</option>  
                                                                    <option value="DM">Dominica</option>  
                                                                    <option value="EC">Ecuador</option>  
                                                                    <option value="EG">Egipto</option>  
                                                                    <option value="SV">El Salvador</option>  
                                                                    <option value="AE">Emiratos Árabes Unidos</option>  
                                                                    <option value="ER">Eritrea</option>  
                                                                    <option value="SI">Eslovenia</option>  
                                                                    <option value="ES">España</option>  
                                                                    <option value="US">Estados Unidos</option>  
                                                                    <option value="EE">Estonia</option>  
                                                                    <option value="ET">Etiopía</option>  
                                                                    <option value="FJ">Fiji</option>  
                                                                    <option value="PH">Filipinas</option>  
                                                                    <option value="FI">Finlandia</option>  
                                                                    <option value="FR">Francia</option>  
                                                                    <option value="GA">Gabón</option>  
                                                                    <option value="GM">Gambia</option>  
                                                                    <option value="GE">Georgia</option>  
                                                                    <option value="GH">Ghana</option>  
                                                                    <option value="GI">Gibraltar</option>  
                                                                    <option value="GD">Granada</option>  
                                                                    <option value="GR">Grecia</option>  
                                                                    <option value="GL">Groenlandia</option>  
                                                                    <option value="GP">Guadalupe</option>  
                                                                    <option value="GU">Guam</option>  
                                                                    <option value="GT">Guatemala</option>  
                                                                    <option value="GY">Guayana</option>  
                                                                    <option value="GF">Guayana Francesa</option>  
                                                                    <option value="GN">Guinea</option>  
                                                                    <option value="GQ">Guinea Ecuatorial</option>  
                                                                    <option value="GW">Guinea-Bissau</option>  
                                                                    <option value="HT">Haití</option>  
                                                                    <option value="HN">Honduras</option>  
                                                                    <option value="HU">Hungría</option>  
                                                                    <option value="IN">India</option>  
                                                                    <option value="ID">Indonesia</option>  
                                                                    <option value="IQ">Irak</option>  
                                                                    <option value="IR">Irán</option>  
                                                                    <option value="IE">Irlanda</option>  
                                                                    <option value="BV">Isla Bouvet</option>  
                                                                    <option value="CX">Isla de Christmas</option>  
                                                                    <option value="IS">Islandia</option>  
                                                                    <option value="KY">Islas Caimán</option>  
                                                                    <option value="CK">Islas Cook</option>  
                                                                    <option value="CC">Islas de Cocos o Keeling</option>  
                                                                    <option value="FO">Islas Faroe</option>  
                                                                    <option value="HM">Islas Heard y McDonald</option>  
                                                                    <option value="FK">Islas Malvinas</option>  
                                                                    <option value="MP">Islas Marianas del Norte</option>  
                                                                    <option value="MH">Islas Marshall</option>  
                                                                    <option value="UM">Islas menores de Estados Unidos</option>  
                                                                    <option value="PW">Islas Palau</option>  
                                                                    <option value="SB">Islas Salomón</option>  
                                                                    <option value="SJ">Islas Svalbard y Jan Mayen</option>  
                                                                    <option value="TK">Islas Tokelau</option>  
                                                                    <option value="TC">Islas Turks y Caicos</option>  
                                                                    <option value="VI">Islas Vírgenes (EE.UU.)</option>  
                                                                    <option value="VG">Islas Vírgenes (Reino Unido)</option>  
                                                                    <option value="WF">Islas Wallis y Futuna</option>  
                                                                    <option value="IL">Israel</option>  
                                                                    <option value="IT">Italia</option>  
                                                                    <option value="JM">Jamaica</option>  
                                                                    <option value="JP">Japón</option>  
                                                                    <option value="JO">Jordania</option>  
                                                                    <option value="KZ">Kazajistán</option>  
                                                                    <option value="KE">Kenia</option>  
                                                                    <option value="KG">Kirguizistán</option>  
                                                                    <option value="KI">Kiribati</option>  
                                                                    <option value="KW">Kuwait</option>  
                                                                    <option value="LA">Laos</option>  
                                                                    <option value="LS">Lesotho</option>  
                                                                    <option value="LV">Letonia</option>  
                                                                    <option value="LB">Líbano</option>  
                                                                    <option value="LR">Liberia</option>  
                                                                    <option value="LY">Libia</option>  
                                                                    <option value="LI">Liechtenstein</option>  
                                                                    <option value="LT">Lituania</option>  
                                                                    <option value="LU">Luxemburgo</option>  
                                                                    <option value="MK">Macedonia, Ex-República Yugoslava de</option>  
                                                                    <option value="MG">Madagascar</option>  
                                                                    <option value="MY">Malasia</option>  
                                                                    <option value="MW">Malawi</option>  
                                                                    <option value="MV">Maldivas</option>  
                                                                    <option value="ML">Malí</option>  
                                                                    <option value="MT">Malta</option>  
                                                                    <option value="MA">Marruecos</option>  
                                                                    <option value="MQ">Martinica</option>  
                                                                    <option value="MU">Mauricio</option>  
                                                                    <option value="MR">Mauritania</option>  
                                                                    <option value="YT">Mayotte</option>  
                                                                    <option value="MX">México</option>  
                                                                    <option value="FM">Micronesia</option>  
                                                                    <option value="MD">Moldavia</option>  
                                                                    <option value="MC">Mónaco</option>  
                                                                    <option value="MN">Mongolia</option>  
                                                                    <option value="MS">Montserrat</option>  
                                                                    <option value="MZ">Mozambique</option>  
                                                                    <option value="NA">Namibia</option>  
                                                                    <option value="NR">Nauru</option>  
                                                                    <option value="NP">Nepal</option>  
                                                                    <option value="NI">Nicaragua</option>  
                                                                    <option value="NE">Níger</option>  
                                                                    <option value="NG">Nigeria</option>  
                                                                    <option value="NU">Niue</option>  
                                                                    <option value="NF">Norfolk</option>  
                                                                    <option value="NO">Noruega</option>  
                                                                    <option value="NC">Nueva Caledonia</option>  
                                                                    <option value="NZ">Nueva Zelanda</option>  
                                                                    <option value="OM">Omán</option>  
                                                                    <option value="NL">Países Bajos</option>  
                                                                    <option value="PA">Panamá</option>  
                                                                    <option value="PG">Papúa Nueva Guinea</option>  
                                                                    <option value="PK">Paquistán</option>  
                                                                    <option value="PY">Paraguay</option>  
                                                                    <option value="PE">Perú</option>  
                                                                    <option value="PN">Pitcairn</option>  
                                                                    <option value="PF">Polinesia Francesa</option>  
                                                                    <option value="PL">Polonia</option>  
                                                                    <option value="PT">Portugal</option>  
                                                                    <option value="PR">Puerto Rico</option>  
                                                                    <option value="QA">Qatar</option>  
                                                                    <option value="UK">Reino Unido</option>  
                                                                    <option value="CF">República Centroafricana</option>  
                                                                    <option value="CZ">República Checa</option>  
                                                                    <option value="ZA">República de Sudáfrica</option>  
                                                                    <option value="DO">República Dominicana</option>  
                                                                    <option value="SK">República Eslovaca</option>  
                                                                    <option value="RE">Reunión</option>  
                                                                    <option value="RW">Ruanda</option>  
                                                                    <option value="RO">Rumania</option>  
                                                                    <option value="RU">Rusia</option>  
                                                                    <option value="EH">Sahara Occidental</option>  
                                                                    <option value="KN">Saint Kitts y Nevis</option>  
                                                                    <option value="WS">Samoa</option>  
                                                                    <option value="AS">Samoa Americana</option>  
                                                                    <option value="SM">San Marino</option>  
                                                                    <option value="VC">San Vicente y Granadinas</option>  
                                                                    <option value="SH">Santa Helena</option>  
                                                                    <option value="LC">Santa Lucía</option>  
                                                                    <option value="ST">Santo Tomé y Príncipe</option>  
                                                                    <option value="SN">Senegal</option>  
                                                                    <option value="SC">Seychelles</option>  
                                                                    <option value="SL">Sierra Leona</option>  
                                                                    <option value="SG">Singapur</option>  
                                                                    <option value="SY">Siria</option>  
                                                                    <option value="SO">Somalia</option>  
                                                                    <option value="LK">Sri Lanka</option>  
                                                                    <option value="PM">St. Pierre y Miquelon</option>  
                                                                    <option value="SZ">Suazilandia</option>  
                                                                    <option value="SD">Sudán</option>  
                                                                    <option value="SE">Suecia</option>  
                                                                    <option value="CH">Suiza</option>  
                                                                    <option value="SR">Surinam</option>  
                                                                    <option value="TH">Tailandia</option>  
                                                                    <option value="TW">Taiwán</option>  
                                                                    <option value="TZ">Tanzania</option>  
                                                                    <option value="TJ">Tayikistán</option>  
                                                                    <option value="TF">Territorios franceses del Sur</option>  
                                                                    <option value="TP">Timor Oriental</option>  
                                                                    <option value="TG">Togo</option>  
                                                                    <option value="TO">Tonga</option>  
                                                                    <option value="TT">Trinidad y Tobago</option>  
                                                                    <option value="TN">Túnez</option>  
                                                                    <option value="TM">Turkmenistán</option>  
                                                                    <option value="TR">Turquía</option>  
                                                                    <option value="TV">Tuvalu</option>  
                                                                    <option value="UA">Ucrania</option>  
                                                                    <option value="UG">Uganda</option>  
                                                                    <option value="UY">Uruguay</option>  
                                                                    <option value="UZ">Uzbekistán</option>  
                                                                    <option value="VU">Vanuatu</option>  
                                                                    <option value="VE">Venezuela</option>  
                                                                    <option value="VN">Vietnam</option>  
                                                                    <option value="YE">Yemen</option>  
                                                                    <option value="YU">Yugoslavia</option>  
                                                                    <option value="ZM">Zambia</option>  
                                                                    <option value="ZW">Zimbabue</option>
                                                                </select>
                                                            </div>                                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Ciudad Nacimiento</label>
                                                                <input type="text" class="form-control" placeholder="Ciudad específica" value="<?Php echo $this->vCity; ?>" name="city">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions noborder">
                                                    <input type="hidden" class="form-control" value="<?Php echo $this->vUserNameCode; ?>" name="userNameCode">
                                                    <button type="submit" class="btn blue">Guardar Cambios</button>
                                                </div>
                                            </form>                                                
                                                <hr>
                                            <form class="form-register-profession" method="post">                                            
                                                <div class="row">                                                    
                                                    <div class="col-md-12">
                                                        <div class="portlet-title">
                                                            <div class="caption font-blue">
                                                                <i class="icon-bulb font-blue"></i>
                                                                <span class="caption-subject bold uppercase"> Descripción Personal</span>
                                                            </div>
                                                        </div>
                                                        <div class="clear"><br></div>
                                                        <div class="well">
                                                            <h5><strong>¿Por qué deberias colocar estos datos?</strong></h5> Porque asi todas las personas interesadas en conocer tu trabajo o directamente contratar tus servicios podrán conocer algo sobre tí y sabrán exactamente en que país, ciudad y zona te encuentras o donde puedes trabajar.
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>¿En qué trabajas o cuál es tu oficio/profesión?</label>
                                                            <select name="professions" id="professions_list" class="form-control select2me">
                                                                <?Php
                                                                if(isset($this->vProfileProfession) && count($this->vProfileProfession)):
                                                                 for($i=0;$i<count($this->vProfileProfession);$i++):
                                                                    echo '<option value="'.$this->vProfileProfession[$i]['n_codprofession'].'">'.$this->vProfileProfession[$i]['c_profession_name'].'</option>';
                                                                 endfor;
                                                                endif;
                                                                
                                                                echo '<option value="0">Seleccionar</option>';
                                                                
                                                                if(isset($this->vProfessionsList) && count($this->vProfessionsList)):
                                                                 for($i=0;$i<count($this->vProfessionsList);$i++):
                                                                    echo '<option value="'.$this->vProfessionsList[$i]['n_codprofession'].'">'.$this->vProfessionsList[$i]['c_profession_name'].'</option>';
                                                                 endfor;
                                                                endif;
                                                                ?>                                                                
                                                            </select>
                                                            <input type="hidden" value="<?Php echo $this->vProfileProfessionCode; ?>" name="professioncode">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Si no encuentras en el listado puedes escribirlo aquí</label>
                                                            <input type="text" class="form-control" placeholder="Profesion/Oficio específico" name="newprofession">
                                                        </div>
                                                    </div>                                                    
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Escribe algo sobre tí</label>
                                                            <textarea class="form-control" name="description" rows="5"><?Php echo $this->vProfileDescription; ?></textarea>
                                                            <input type="hidden" value="<?Php echo $this->vProfileDescriptionCode; ?>" name="descriptioncode">
                                                        </div>
                                                    </div>                                                    
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>País Actual</label>
                                                            <input type="hidden" value="<?Php echo $this->vProfileActualLocationCode; ?>" name="actuallocationcode">
                                                            <?Php
                                                                if(isset($this->vProfileActualLocation) && count($this->vProfileActualLocation)):
                                                                 for($i=0;$i<count($this->vProfileActualLocation);$i++):
                                                                    $vLiveCountry = $this->vProfileActualLocation[$i]['c_profile_livecountry'];
                                                                    $vLiveCity = $this->vProfileActualLocation[$i]['c_profile_livecity'];
                                                                    $vLiveZone = $this->vProfileActualLocation[$i]['c_profile_livezone'];
                                                                 endfor;
                                                                endif;
                                                            ?>                                                            
                                                            <select name="livecountry" id="country_list" class="form-control select2me">
                                                                <option value="<?Php echo $vLiveCountry; ?>"><?Php echo $vLiveCountry; ?></option>
                                                                <option value="Ninguno">País</option>
                                                                <option value="AF">Afganistán</option> 
                                                                <option value="AL">Albania</option> 
                                                                <option value="DE">Alemania</option> 
                                                                <option value="AD">Andorra</option> 
                                                                <option value="AO">Angola</option> 
                                                                <option value="AI">Anguilla</option> 
                                                                <option value="AQ">Antártida</option> 
                                                                <option value="AG">Antigua y Barbuda</option> 
                                                                <option value="AN">Antillas Holandesas</option> 
                                                                <option value="SA">Arabia Saudí</option> 
                                                                <option value="DZ">Argelia</option> 
                                                                <option value="AR">Argentina</option> 
                                                                <option value="AM">Armenia</option> 
                                                                <option value="AW">Aruba</option> 
                                                                <option value="AU">Australia</option> 
                                                                <option value="AT">Austria</option>  
                                                                <option value="AZ">Azerbaiyán</option>  
                                                                <option value="BS">Bahamas</option>  
                                                                <option value="BH">Bahrein</option>  
                                                                <option value="BD">Bangladesh</option>  
                                                                <option value="BB">Barbados</option>  
                                                                <option value="BE">Bélgica</option>  
                                                                <option value="BZ">Belice</option>  
                                                                <option value="BJ">Benin</option>  
                                                                <option value="BM">Bermudas</option>  
                                                                <option value="BY">Bielorrusia</option>  
                                                                <option value="MM">Birmania</option>  
                                                                <option value="BO">Bolivia</option>  
                                                                <option value="BA">Bosnia y Herzegovina</option>  
                                                                <option value="BW">Botswana</option>  
                                                                <option value="BR">Brasil</option>  
                                                                <option value="BN">Brunei</option>  
                                                                <option value="BG">Bulgaria</option>  
                                                                <option value="BF">Burkina Faso</option>  
                                                                <option value="BI">Burundi</option>  
                                                                <option value="BT">Bután</option>  
                                                                <option value="CV">Cabo Verde</option>  
                                                                <option value="KH">Camboya</option>  
                                                                <option value="CM">Camerún</option>  
                                                                <option value="CA">Canadá</option>  
                                                                <option value="TD">Chad</option>  
                                                                <option value="CL">Chile</option>  
                                                                <option value="CN">China</option>  
                                                                <option value="CY">Chipre</option>  
                                                                <option value="VA">Ciudad del Vaticano (Santa Sede)</option>  
                                                                <option value="CO">Colombia</option>  
                                                                <option value="KM">Comores</option>  
                                                                <option value="CG">Congo</option>  
                                                                <option value="CD">Congo, República Democrática del</option>  
                                                                <option value="KR">Corea</option>  
                                                                <option value="KP">Corea del Norte</option>  
                                                                <option value="CI">Costa de Marfíl</option>  
                                                                <option value="CR">Costa Rica</option>  
                                                                <option value="HR">Croacia (Hrvatska)</option>  
                                                                <option value="CU">Cuba</option>  
                                                                <option value="DK">Dinamarca</option>  
                                                                <option value="DJ">Djibouti</option>  
                                                                <option value="DM">Dominica</option>  
                                                                <option value="EC">Ecuador</option>  
                                                                <option value="EG">Egipto</option>  
                                                                <option value="SV">El Salvador</option>  
                                                                <option value="AE">Emiratos Árabes Unidos</option>  
                                                                <option value="ER">Eritrea</option>  
                                                                <option value="SI">Eslovenia</option>  
                                                                <option value="ES">España</option>  
                                                                <option value="US">Estados Unidos</option>  
                                                                <option value="EE">Estonia</option>  
                                                                <option value="ET">Etiopía</option>  
                                                                <option value="FJ">Fiji</option>  
                                                                <option value="PH">Filipinas</option>  
                                                                <option value="FI">Finlandia</option>  
                                                                <option value="FR">Francia</option>  
                                                                <option value="GA">Gabón</option>  
                                                                <option value="GM">Gambia</option>  
                                                                <option value="GE">Georgia</option>  
                                                                <option value="GH">Ghana</option>  
                                                                <option value="GI">Gibraltar</option>  
                                                                <option value="GD">Granada</option>  
                                                                <option value="GR">Grecia</option>  
                                                                <option value="GL">Groenlandia</option>  
                                                                <option value="GP">Guadalupe</option>  
                                                                <option value="GU">Guam</option>  
                                                                <option value="GT">Guatemala</option>  
                                                                <option value="GY">Guayana</option>  
                                                                <option value="GF">Guayana Francesa</option>  
                                                                <option value="GN">Guinea</option>  
                                                                <option value="GQ">Guinea Ecuatorial</option>  
                                                                <option value="GW">Guinea-Bissau</option>  
                                                                <option value="HT">Haití</option>  
                                                                <option value="HN">Honduras</option>  
                                                                <option value="HU">Hungría</option>  
                                                                <option value="IN">India</option>  
                                                                <option value="ID">Indonesia</option>  
                                                                <option value="IQ">Irak</option>  
                                                                <option value="IR">Irán</option>  
                                                                <option value="IE">Irlanda</option>  
                                                                <option value="BV">Isla Bouvet</option>  
                                                                <option value="CX">Isla de Christmas</option>  
                                                                <option value="IS">Islandia</option>  
                                                                <option value="KY">Islas Caimán</option>  
                                                                <option value="CK">Islas Cook</option>  
                                                                <option value="CC">Islas de Cocos o Keeling</option>  
                                                                <option value="FO">Islas Faroe</option>  
                                                                <option value="HM">Islas Heard y McDonald</option>  
                                                                <option value="FK">Islas Malvinas</option>  
                                                                <option value="MP">Islas Marianas del Norte</option>  
                                                                <option value="MH">Islas Marshall</option>  
                                                                <option value="UM">Islas menores de Estados Unidos</option>  
                                                                <option value="PW">Islas Palau</option>  
                                                                <option value="SB">Islas Salomón</option>  
                                                                <option value="SJ">Islas Svalbard y Jan Mayen</option>  
                                                                <option value="TK">Islas Tokelau</option>  
                                                                <option value="TC">Islas Turks y Caicos</option>  
                                                                <option value="VI">Islas Vírgenes (EE.UU.)</option>  
                                                                <option value="VG">Islas Vírgenes (Reino Unido)</option>  
                                                                <option value="WF">Islas Wallis y Futuna</option>  
                                                                <option value="IL">Israel</option>  
                                                                <option value="IT">Italia</option>  
                                                                <option value="JM">Jamaica</option>  
                                                                <option value="JP">Japón</option>  
                                                                <option value="JO">Jordania</option>  
                                                                <option value="KZ">Kazajistán</option>  
                                                                <option value="KE">Kenia</option>  
                                                                <option value="KG">Kirguizistán</option>  
                                                                <option value="KI">Kiribati</option>  
                                                                <option value="KW">Kuwait</option>  
                                                                <option value="LA">Laos</option>  
                                                                <option value="LS">Lesotho</option>  
                                                                <option value="LV">Letonia</option>  
                                                                <option value="LB">Líbano</option>  
                                                                <option value="LR">Liberia</option>  
                                                                <option value="LY">Libia</option>  
                                                                <option value="LI">Liechtenstein</option>  
                                                                <option value="LT">Lituania</option>  
                                                                <option value="LU">Luxemburgo</option>  
                                                                <option value="MK">Macedonia, Ex-República Yugoslava de</option>  
                                                                <option value="MG">Madagascar</option>  
                                                                <option value="MY">Malasia</option>  
                                                                <option value="MW">Malawi</option>  
                                                                <option value="MV">Maldivas</option>  
                                                                <option value="ML">Malí</option>  
                                                                <option value="MT">Malta</option>  
                                                                <option value="MA">Marruecos</option>  
                                                                <option value="MQ">Martinica</option>  
                                                                <option value="MU">Mauricio</option>  
                                                                <option value="MR">Mauritania</option>  
                                                                <option value="YT">Mayotte</option>  
                                                                <option value="MX">México</option>  
                                                                <option value="FM">Micronesia</option>  
                                                                <option value="MD">Moldavia</option>  
                                                                <option value="MC">Mónaco</option>  
                                                                <option value="MN">Mongolia</option>  
                                                                <option value="MS">Montserrat</option>  
                                                                <option value="MZ">Mozambique</option>  
                                                                <option value="NA">Namibia</option>  
                                                                <option value="NR">Nauru</option>  
                                                                <option value="NP">Nepal</option>  
                                                                <option value="NI">Nicaragua</option>  
                                                                <option value="NE">Níger</option>  
                                                                <option value="NG">Nigeria</option>  
                                                                <option value="NU">Niue</option>  
                                                                <option value="NF">Norfolk</option>  
                                                                <option value="NO">Noruega</option>  
                                                                <option value="NC">Nueva Caledonia</option>  
                                                                <option value="NZ">Nueva Zelanda</option>  
                                                                <option value="OM">Omán</option>  
                                                                <option value="NL">Países Bajos</option>  
                                                                <option value="PA">Panamá</option>  
                                                                <option value="PG">Papúa Nueva Guinea</option>  
                                                                <option value="PK">Paquistán</option>  
                                                                <option value="PY">Paraguay</option>  
                                                                <option value="PE">Perú</option>  
                                                                <option value="PN">Pitcairn</option>  
                                                                <option value="PF">Polinesia Francesa</option>  
                                                                <option value="PL">Polonia</option>  
                                                                <option value="PT">Portugal</option>  
                                                                <option value="PR">Puerto Rico</option>  
                                                                <option value="QA">Qatar</option>  
                                                                <option value="UK">Reino Unido</option>  
                                                                <option value="CF">República Centroafricana</option>  
                                                                <option value="CZ">República Checa</option>  
                                                                <option value="ZA">República de Sudáfrica</option>  
                                                                <option value="DO">República Dominicana</option>  
                                                                <option value="SK">República Eslovaca</option>  
                                                                <option value="RE">Reunión</option>  
                                                                <option value="RW">Ruanda</option>  
                                                                <option value="RO">Rumania</option>  
                                                                <option value="RU">Rusia</option>  
                                                                <option value="EH">Sahara Occidental</option>  
                                                                <option value="KN">Saint Kitts y Nevis</option>  
                                                                <option value="WS">Samoa</option>  
                                                                <option value="AS">Samoa Americana</option>  
                                                                <option value="SM">San Marino</option>  
                                                                <option value="VC">San Vicente y Granadinas</option>  
                                                                <option value="SH">Santa Helena</option>  
                                                                <option value="LC">Santa Lucía</option>  
                                                                <option value="ST">Santo Tomé y Príncipe</option>  
                                                                <option value="SN">Senegal</option>  
                                                                <option value="SC">Seychelles</option>  
                                                                <option value="SL">Sierra Leona</option>  
                                                                <option value="SG">Singapur</option>  
                                                                <option value="SY">Siria</option>  
                                                                <option value="SO">Somalia</option>  
                                                                <option value="LK">Sri Lanka</option>  
                                                                <option value="PM">St. Pierre y Miquelon</option>  
                                                                <option value="SZ">Suazilandia</option>  
                                                                <option value="SD">Sudán</option>  
                                                                <option value="SE">Suecia</option>  
                                                                <option value="CH">Suiza</option>  
                                                                <option value="SR">Surinam</option>  
                                                                <option value="TH">Tailandia</option>  
                                                                <option value="TW">Taiwán</option>  
                                                                <option value="TZ">Tanzania</option>  
                                                                <option value="TJ">Tayikistán</option>  
                                                                <option value="TF">Territorios franceses del Sur</option>  
                                                                <option value="TP">Timor Oriental</option>  
                                                                <option value="TG">Togo</option>  
                                                                <option value="TO">Tonga</option>  
                                                                <option value="TT">Trinidad y Tobago</option>  
                                                                <option value="TN">Túnez</option>  
                                                                <option value="TM">Turkmenistán</option>  
                                                                <option value="TR">Turquía</option>  
                                                                <option value="TV">Tuvalu</option>  
                                                                <option value="UA">Ucrania</option>  
                                                                <option value="UG">Uganda</option>  
                                                                <option value="UY">Uruguay</option>  
                                                                <option value="UZ">Uzbekistán</option>  
                                                                <option value="VU">Vanuatu</option>  
                                                                <option value="VE">Venezuela</option>  
                                                                <option value="VN">Vietnam</option>  
                                                                <option value="YE">Yemen</option>  
                                                                <option value="YU">Yugoslavia</option>  
                                                                <option value="ZM">Zambia</option>  
                                                                <option value="ZW">Zimbabue</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Ciudad Actual</label>
                                                            <input type="text" class="form-control" placeholder="Ciudad específica" value="<?Php echo $vLiveCity; ?>" name="livecity">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Zona Actual</label>
                                                            <input type="text" class="form-control" placeholder="Ciudad específica" value="<?Php echo $vLiveZone; ?>" name="livezone">
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="form-actions noborder">
                                                    <input type="hidden" class="form-control" value="<?Php echo $this->vUserNameCode; ?>" name="userNameCode">
                                                    <button type="submit" class="btn blue">Guardar Cambios</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- END SAMPLE FORM PORTLET-->
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
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_plugins'];?>backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_global_scripts'];?>app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_pages_scripts'];?>profile.min.js" type="text/javascript"></script>
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_pages_scripts'];?>search.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>layout.min.js" type="text/javascript"></script>
        <script src="<?php echo $vParamsViewBackEndLayout['root_backend_layouts_scripts'];?>demo.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>