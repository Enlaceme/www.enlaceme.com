<?Php

class profileController extends IdEnController
	{		
		public function __construct(){
            
				parent::__construct();
            
                $this->vUsersData = $this->LoadModel('users');
                $this->vProfileData = $this->LoadModel('profile');
                $this->vProfessionData = $this->LoadModel('profession');
			}    
    
		public function index(){
            
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
						IdEnSession::timeSession();
						$this->redirect('profile/about/');
					}
				else if(!IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
						$this->redirect('access');
					}
                /* END VALIDATION TIME SESSION USER */
			}
    
		public function sample($vSample = null){
                
                /* BEGIN SESSION ACCOUNT ACCESS */
                /*if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                    IdEnSession::timeSession();	
                    //echo 'El Usuario esta logueado!';
                    if($vProfileName == null){
                        //echo 'El vProfileName es null';
                        $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                        $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                        
                        $this->vAuthenticateUser = true;
                        $this->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileCode);
                    } else if($vProfileName != null){
                        //echo 'El vProfileName no es null es '.$vProfileName;
                        if($this->vProfileData->getProfileCodeIfNameExists($vProfileName) != 0){
                            //echo 'El vProfileName existe en la DB con código: '.$this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code') == $this->vProfileData->getUserCodeFromProfileCode($this->vProfileData->getProfileCodeIfNameExists($vProfileName))){
                                //echo 'es el usuario logueado!';
                                $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                                $this->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileCode);
                                $this->vAuthenticateUser = true;
                            } else {
                                //echo 'No es el usuario logueado!';
                                $this->vProfileCode = $this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                                $this->vUserCode = $this->vProfileData->getUserCodeFromProfileCode($this->vProfileCode);
                                $this->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileCode);
                                $this->vAuthenticateUser = false;
                            }
                        } else {
                            //echo 'El vProfileName no existe.';
                            $this->redirect('universe');
                        }                        
                    }                    
                } else if(!IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                    //echo 'El Usuario no esta logueado!';
                    if($vProfileName == null){
                        //echo 'El vProfileName es null';
                        $this->redirect('universe');
                    } else if($vProfileName != null){
                        //echo 'El vProfileName no es null es '.$vProfileName;
                        if($this->vProfileData->getProfileCodeIfNameExists($vProfileName) != 0){
                            //echo 'El vProfileName existe en la DB con código: '.$this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            $this->vProfileCode = $this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            $this->vUserCode = $this->vProfileData->getUserCodeFromProfileCode($this->vProfileCode);
                            
                        } else {
                            //echo 'El vProfileName no existe.';
                            $this->redirect('universe');
                        }                        
                    }
                    $this->vView->vBetterRegister = 1;
                }*/
                /* END SESSION ACCOUNT ACCESS */
                switch($vSample){
                    case 'fontanero':
                        /* BEGIN USER ACCOUNT INFORMATION */
                        $this->vView->vUserNamesComplete = 'Excelente Plomero';
                        $this->vView->vUserOtherName = 'Excelente Plomero';
                        $this->vView->vUserDescription = 'Me considero un plomero de excelencia, debido a que me concentro en solucionar los problemas de plomeria de todas las personas que solicitan mis servicios, solo ofrezco soluciones y no peros.';
                        $this->vView->vUserEmail = 'ejemplo@enlaceme.com';
                        $this->vView->vUserDateBirth = '03/11/1982';                
                        $this->vView->vUserCountry = ucwords('mexico');
                        $this->vView->vUserCity = ucwords('monterrey');
                        /* END USER ACCOUNT INFORMATION */

                        /* BEGIN PROFILE ACCOUNT INFORMATION */
                        $this->vView->vProfileProfessions = '<div class="chip deep-orange darken-4 white-text">Fontanero</div><div class="chip deep-orange darken-4 white-text">Plomero</div>';
                        $this->vView->vProfileDescription = 'El fontanero es el que realiza instalaciones de agua potable, agua no potable y la recogida de aguas pluviales y de aguas residuales en las viviendas, locales comerciales o industrias y talleres. Limpieza de: Tuberías, bajantes, arquetas, sifones Inspección de tuberías con cámara';
                        $this->vView->vProfileContact = '<a href="#" class="waves-effect waves-light btn green darken-3 white-text">Enviar Whatsapp</a>';
                        /* END PROFILE ACCOUNT INFORMATION */

                        /* BEGIN PROFILE IMAGE */
                        $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/plumber1.jpg">';
                        /* END PROFILE IMAGE */
                    break;
                    case 'electrico':
                        /* BEGIN USER ACCOUNT INFORMATION */
                        $this->vView->vUserNamesComplete = 'Gran Electricista';
                        $this->vView->vUserOtherName = 'Gran Electricista';
                        $this->vView->vUserDescription = 'Me considero un electricista de excelencia, debido a que me concentro en solucionar los problemas de electricidad de todas las personas que solicitan mis servicios, solo ofrezco soluciones y no peros.';
                        $this->vView->vUserEmail = 'ejemplo@enlaceme.com';
                        $this->vView->vUserDateBirth = '03/11/1982';                
                        $this->vView->vUserCountry = ucwords('Colombia');
                        $this->vView->vUserCity = ucwords('Antioquia');
                        /* END USER ACCOUNT INFORMATION */

                        /* BEGIN PROFILE ACCOUNT INFORMATION */
                        $this->vView->vProfileProfessions = '<div class="chip deep-orange darken-4 white-text">Eléctrico</div><div class="chip deep-orange darken-4 white-text">Electricista</div>';
                        $this->vView->vProfileDescription = 'Los técnicos electricistas se encargan de arreglar desde enchufes hasta instalaciones de centros de carga, paneles eléctricos industriales, líneas de alta tensión, etc. El trabajo del electricista no se limita a trabajar en viviendas o edificios, con el crecimiento de la industria los electricistas se forman y capacitan para realizar trabajos come el de reparación y mantenimiento preventivo de todo tipo motores eléctricos monofásicos y trifásicos, contactores, limitadores eléctricos, arrancadores suaves(soft start), variadores de frecuencia, temporizadores, electroválvulas, conexiones en estrella y delta de transformadores, manejo adecuado de ductos y tuberías para uso en instalaciones eléctricas, y respetando la normativa de seguridad que sugiere el código nacional eléctrico (código NEC). Para trabajar en la industria y fabricas los técnicos electricistas deben tener también conocimientos de electrónica, conocer sobre automatización que incluye saber de sensorica, transductores y actuadores, saber también sobre señales digitales y analógicas y conocer de sobre controladores lógicos programables llamados Plcs, programar Plcs es el nivel más alto en conocimiento que un técnico electricista puede alcanzar en lo que a la industria se refiere.';
                        $this->vView->vProfileContact = '<a href="#" class="waves-effect waves-light btn green darken-3 white-text">Enviar Whatsapp</a>';
                        /* END PROFILE ACCOUNT INFORMATION */

                        /* BEGIN PROFILE IMAGE */
                        $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/electrician1.jpg">';
                        /* END PROFILE IMAGE */
                    break;
                    case 'electrico':
                        /* BEGIN USER ACCOUNT INFORMATION */
                        $this->vView->vUserNamesComplete = 'Gran Electricista';
                        $this->vView->vUserOtherName = 'Gran Electricista';
                        $this->vView->vUserDescription = 'Me considero un electricista de excelencia, debido a que me concentro en solucionar los problemas de electricidad de todas las personas que solicitan mis servicios, solo ofrezco soluciones y no peros.';
                        $this->vView->vUserEmail = 'ejemplo@enlaceme.com';
                        $this->vView->vUserDateBirth = '03/11/1982';                
                        $this->vView->vUserCountry = ucwords('Colombia');
                        $this->vView->vUserCity = ucwords('Antioquia');
                        /* END USER ACCOUNT INFORMATION */

                        /* BEGIN PROFILE ACCOUNT INFORMATION */
                        $this->vView->vProfileProfessions = '<div class="chip deep-orange darken-4 white-text">Eléctrico</div><div class="chip deep-orange darken-4 white-text">Electricista</div>';
                        $this->vView->vProfileDescription = 'Los técnicos electricistas se encargan de arreglar desde enchufes hasta instalaciones de centros de carga, paneles eléctricos industriales, líneas de alta tensión, etc. El trabajo del electricista no se limita a trabajar en viviendas o edificios, con el crecimiento de la industria los electricistas se forman y capacitan para realizar trabajos como el de reparación y mantenimiento preventivo de todo tipo motores eléctricos monofásicos y trifásicos, contactores, limitadores eléctricos, arrancadores suaves(soft start), variadores de frecuencia, temporizadores, electroválvulas, conexiones en estrella y delta de transformadores, manejo adecuado de ductos y tuberías para uso en instalaciones eléctricas, y respetando la normativa de seguridad que sugiere el código nacional eléctrico (código NEC). Para trabajar en la industria y fabricas los técnicos electricistas deben tener también conocimientos de electrónica, conocer sobre automatización que incluye saber de sensorica, transductores y actuadores, saber también sobre señales digitales y analógicas y conocer de sobre controladores lógicos programables llamados Plcs, programar Plcs es el nivel más alto en conocimiento que un técnico electricista puede alcanzar en lo que a la industria se refiere.';
                        $this->vView->vProfileContact = '<a href="#" class="waves-effect waves-light btn green darken-3 white-text">Enviar Whatsapp</a>';
                        /* END PROFILE ACCOUNT INFORMATION */

                        /* BEGIN PROFILE IMAGE */
                        $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/electrician1.jpg">';
                        /* END PROFILE IMAGE */
                    break;
                    case 'costurera':
                        /* BEGIN USER ACCOUNT INFORMATION */
                        $this->vView->vUserNamesComplete = 'Increible Costurera';
                        $this->vView->vUserOtherName = 'Increible Costurera';
                        $this->vView->vUserDescription = 'Me considero una costurera increible, debido a que me concentro en crear productos únicos y artísticos para todas las personas que solicitan mis servicios.';
                        $this->vView->vUserEmail = 'ejemplo@enlaceme.com';
                        $this->vView->vUserDateBirth = '03/11/1982';                
                        $this->vView->vUserCountry = ucwords('Oruro');
                        $this->vView->vUserCity = ucwords('Bolivia');
                        /* END USER ACCOUNT INFORMATION */

                        /* BEGIN PROFILE ACCOUNT INFORMATION */
                        $this->vView->vProfileProfessions = '<div class="chip deep-orange darken-4 white-text">Costurera</div><div class="chip deep-orange darken-4 white-text">Costurera Artística</div>';
                        $this->vView->vProfileDescription = 'La costura es un arte usada principalmente para producir ropa y artículos para la casa, tales come cortinas, ropa de cama, tapicería y mantelería. La mayoría de las costuras en el mundo industrial son hechas con máquinas de coser. Para confeccionar un pantalón vaquero, por ejemplo, son necesarias más de cinco máquinas de coser diferentes. Algunas personas cosen ropa para sí mismas y para su familia. Más a menudo las costuras caseras son para reparaciones tales';
                        $this->vView->vProfileContact = '<a href="#" class="waves-effect waves-light btn green darken-3 white-text">Enviar Whatsapp</a>';
                        /* END PROFILE ACCOUNT INFORMATION */

                        /* BEGIN PROFILE IMAGE */
                        $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/costurera1.jpg">';
                        /* END PROFILE IMAGE */
                    break;
                    case 'pintor':
                        /* BEGIN USER ACCOUNT INFORMATION */
                        $this->vView->vUserNamesComplete = 'Magnífico Pintor';
                        $this->vView->vUserOtherName = 'Magnífico Pintor';
                        $this->vView->vUserDescription = 'Me considero un magnifico pintor, debido a que me concentro en crear realizar un trabajo impecable de pintura para todas las personas que solicitan mis servicios.';
                        $this->vView->vUserEmail = 'ejemplo@enlaceme.com';
                        $this->vView->vUserDateBirth = '03/11/1982';                
                        $this->vView->vUserCountry = ucwords('Santiago');
                        $this->vView->vUserCity = ucwords('Chile');
                        /* END USER ACCOUNT INFORMATION */

                        /* BEGIN PROFILE ACCOUNT INFORMATION */
                        $this->vView->vProfileProfessions = '<div class="chip deep-orange darken-4 white-text">Pintor Profesional</div><div class="chip deep-orange darken-4 white-text">Pintor Exteriores e Interiores</div>';
                        $this->vView->vProfileDescription = 'El pintor utiliza diferentes tipos de pintura según las características de la habitación, el tipo de superficie y el resultado buscado. Así, emplea pintura metálica para cubrir tuberías y recipientes metálicos, esmalte para los radiadores o pintura acrílica para las zonas húmedas o afectadas por la grasa. Además, aplica barnices sobre las superficies de madera para protegerlas de la humedad y el deterioro. Coloca pintura al gotelé sobre las paredes utilizando una herramienta mecánica o manual con orificios a través de los cuales se proyecta sobre cruz azul. Encarga pintura del color acordado con el constructor o el dueño de la vivienda o mezcla diferentes tintes con pintura blanca hasta conseguir el tono deseado. Antes de comenzar el trabajo puede realizar diferentes pruebas de color sobre la pared para obtener la aprobación del dueño. Los pintores también colocan el papel pintado sobre las paredes. Para ello, miden y cortan los rollos según las dimensiones de la habitación, aplican la cola y los extienden evitando crear grumos o bolsas de aire. Combinan los diferentes rollos de papel de manera coordinada de manera que el diseño quede uniforme.';
                        $this->vView->vProfileContact = '<a href="#" class="waves-effect waves-light btn green darken-3 white-text">Enviar Whatsapp</a>';
                        /* END PROFILE ACCOUNT INFORMATION */

                        /* BEGIN PROFILE IMAGE */
                        $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/pintor1.jpg">';
                        /* END PROFILE IMAGE */
                    break;
                    case 'carpintero':
                        /* BEGIN USER ACCOUNT INFORMATION */
                        $this->vView->vUserNamesComplete = 'Creativo Carpintero';
                        $this->vView->vUserOtherName = 'Creativo Carpintero';
                        $this->vView->vUserDescription = 'Me considero un carpintero muy creativo, debido a que me concentro en realizar un trabajo impecable de carpinteria para todas las personas que solicitan mis servicios.';
                        $this->vView->vUserEmail = 'ejemplo@enlaceme.com';
                        $this->vView->vUserDateBirth = '03/11/1982';                
                        $this->vView->vUserCountry = ucwords('Santiago');
                        $this->vView->vUserCity = ucwords('Chile');
                        /* END USER ACCOUNT INFORMATION */

                        /* BEGIN PROFILE ACCOUNT INFORMATION */
                        $this->vView->vProfileProfessions = '<div class="chip deep-orange darken-4 white-text">Pintor Profesional</div><div class="chip deep-orange darken-4 white-text">Pintor Exteriores e Interiores</div>';
                        $this->vView->vProfileDescription = 'La carpintería es el nombre del oficio y del taller o lugar en donde se trabajan tanto la madera como sus derivados, y a quien lo ejerce se le denomina carpintero. Su objetivo es cambiar la forma física de la materia prima para crear objetos útiles al desarrollo humano, como pueden ser muebles para el hogar, marcos para puertas, molduras, juguetes, escritorios, librerías y otros.';
                        $this->vView->vProfileContact = '<a href="#" class="waves-effect waves-light btn green darken-3 white-text">Enviar Whatsapp</a>';
                        /* END PROFILE ACCOUNT INFORMATION */

                        /* BEGIN PROFILE IMAGE */
                        $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/carpintero1.jpg">';
                        /* END PROFILE IMAGE */
                    break;
                    case 'escultora':
                        /* BEGIN USER ACCOUNT INFORMATION */
                        $this->vView->vUserNamesComplete = 'Escultora Perfeccionista';
                        $this->vView->vUserOtherName = 'Escultora Perfeccionista';
                        $this->vView->vUserDescription = 'Me considero una escultora artística y perfeccionista, debido a que me concentro en realizar trabajos únicos para todas las personas que solicitan mis servicios.';
                        $this->vView->vUserEmail = 'ejemplo@enlaceme.com';
                        $this->vView->vUserDateBirth = '03/11/1982';                
                        $this->vView->vUserCountry = ucwords('Quito');
                        $this->vView->vUserCity = ucwords('Ecuador');
                        /* END USER ACCOUNT INFORMATION */

                        /* BEGIN PROFILE ACCOUNT INFORMATION */
                        $this->vView->vProfileProfessions = '<div class="chip deep-orange darken-4 white-text">Escultora Profesional</div><div class="chip deep-orange darken-4 white-text">Escultora Artística</div>';
                        $this->vView->vProfileDescription = 'Es uno de los materiales más antiguos utilizados por el hombre, por ser fácil de modelar y no necesitar de utensilios especiales, ya que se pueden utilizar simplemente las manos. Con el barro se pueden sacar moldes para después trabajar con otros materiales o hacer reproducciones. Si es empleado como material definitivo debe cocerse; en este caso recibe el nombre de terracota. Para la preparación del barro, los procesos de industrialización han modificado y aligerado el trabajo manual de prensado y desmenuzamiento de la arcilla. Se encuentran ya en el mercado bloques preparados para el uso de los escultores.';
                        $this->vView->vProfileContact = '<a href="#" class="waves-effect waves-light btn green darken-3 white-text">Enviar Whatsapp</a>';
                        /* END PROFILE ACCOUNT INFORMATION */

                        /* BEGIN PROFILE IMAGE */
                        $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/escultor1.jpg">';
                        /* END PROFILE IMAGE */
                    break;
                }            
            
                /**********************************/
                /* BEGIN AUTHENTICATE USER ACTIVE */
                /**********************************/
                $this->vView->vUserNamesCompleteMenu = $this->vUsersData->getUserNamesComplete(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'));
                $this->vView->vUserEmailMenu = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $this->vView->vUserCodeMenu = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                
                    /* BEGIN PROFILE IMAGE */
                    $this->vImageProfile = $this->vProfileData->getImageProfile($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1));
                    if($this->vImageProfile == ''){
                        $this->vView->vImageProfileMenu = '<img class="responsive-img circle" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                    } else {
                        $this->vView->vImageProfileMenu = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1)).'">';
                    }
                    /* END PROFILE IMAGE */
                
                /********************************/
                /* END AUTHENTICATE USER ACTIVE */
                /********************************/
            
                $this->vView->visualize('sample');
            }
    
		public function about($vProfileName = null){
                
                /* BEGIN SESSION ACCOUNT ACCESS */
                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                    IdEnSession::timeSession();	
                    //echo 'El Usuario esta logueado!';
                    if($vProfileName == null){
                        //echo 'El vProfileName es null';
                        $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                        $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                        
                        $this->vAuthenticateUser = true;
                        $this->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileCode);
                    } else if($vProfileName != null){
                        //echo 'El vProfileName no es null es '.$vProfileName;
                        if($this->vProfileData->getProfileCodeIfNameExists($vProfileName) != 0){
                            //echo 'El vProfileName existe en la DB con código: '.$this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code') == $this->vProfileData->getUserCodeFromProfileCode($this->vProfileData->getProfileCodeIfNameExists($vProfileName))){
                                //echo 'es el usuario logueado!';
                                $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                                $this->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileCode);
                                $this->vAuthenticateUser = true;
                            } else {
                                //echo 'No es el usuario logueado!';
                                $this->vProfileCode = $this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                                $this->vUserCode = $this->vProfileData->getUserCodeFromProfileCode($this->vProfileCode);
                                $this->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileCode);
                                $this->vAuthenticateUser = false;
                            }
                        } else {
                            //echo 'El vProfileName no existe.';
                            $this->redirect('universe');
                        }                        
                    }                    
                } else if(!IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                    //echo 'El Usuario no esta logueado!';
                    if($vProfileName == null){
                        //echo 'El vProfileName es null';
                        $this->redirect('universe');
                    } else if($vProfileName != null){
                        //echo 'El vProfileName no es null es '.$vProfileName;
                        if($this->vProfileData->getProfileCodeIfNameExists($vProfileName) != 0){
                            //echo 'El vProfileName existe en la DB con código: '.$this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            $this->vProfileCode = $this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            $this->vUserCode = $this->vProfileData->getUserCodeFromProfileCode($this->vProfileCode);
                            
                        } else {
                            //echo 'El vProfileName no existe.';
                            $this->redirect('universe');
                        }                        
                    }
                    $this->vView->vBetterRegister = 1;
                }
                /* END SESSION ACCOUNT ACCESS */
                
                /* BEGIN USER ACCOUNT INFORMATION */
                $this->vView->vAuthenticateUser = $this->vAuthenticateUser;
                $this->vView->vImageProfileExists = $this->vImageProfileExists;
                $this->vView->vUserNamesComplete = $this->vUsersData->getUserNamesComplete($this->vUserCode);
                $this->vView->vUserOtherName = $this->vUsersData->getUserOtherNameFromUserCode($this->vUserCode);
                $this->vView->vUserDescription = $this->vUsersData->getUserDescriptionFromUserCode($this->vUserCode);
                $this->vView->vUserNames = ucwords($this->vUsersData->getUserNamesFromUserCode($this->vUserCode));
                $this->vView->vUserLastNames = ucwords($this->vUsersData->getUserLastNamesFromUserCode($this->vUserCode));            
                $this->vView->vUserEmail = $this->vUsersData->getUserEmailFromUserCode($this->vUserCode);
                $this->vView->vUserDateCreate = date_format(date_create($this->vUsersData->getUserDateCreateFromUserCode($this->vUserCode)), 'd/m/Y H:m:s');
                
                if($this->vUsersData->getUserDateBirthFromUserCode($this->vUserCode) == null){
                    $this->vView->vUserDateBirth = '';
                } else {
                    $this->vView->vUserDateBirth = $this->vUsersData->getUserDateBirthFromUserCode($this->vUserCode);
                }
                
                $this->vView->vUserCountry = ucwords($this->vUsersData->getUserCountryFromUserCode($this->vUserCode));
                $this->vView->vUserCity = ucwords($this->vUsersData->getUserCityFromUserCode($this->vUserCode));
                /* END USER ACCOUNT INFORMATION */
            
                /* BEGIN PROFILE ACCOUNT INFORMATION */
                $this->vView->vProfileProfessions = $this->vProfileData->getProfileProfessions($this->vProfileCode);
                $this->vView->vProfileDescription = $this->vProfileData->getProfileDescriptionFromProfileCode($this->vProfileCode);
                $this->vView->vProfileContact = $this->vProfileData->getProfileContact($this->vProfileCode);
                /* END PROFILE ACCOUNT INFORMATION */
            
                /* BEGIN PROFILE IMAGE */
                $this->vImageProfile = $this->vProfileData->getImageProfile($this->vProfileCode);
                if($this->vImageProfile == ''){
                    $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                } else {
                    $this->vView->vImageProfile = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileCode).'">';
                }
                /* END PROFILE IMAGE */            
            
                /**********************************/
                /* BEGIN AUTHENTICATE USER ACTIVE */
                /**********************************/
                $this->vView->vUserNamesCompleteMenu = $this->vUsersData->getUserNamesComplete(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'));
                $this->vView->vUserEmailMenu = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $this->vView->vUserCodeMenu = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                
                    /* BEGIN PROFILE IMAGE */
                    $this->vImageProfile = $this->vProfileData->getImageProfile($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1));
                    if($this->vImageProfile == ''){
                        $this->vView->vImageProfileMenu = '<img class="responsive-img circle" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                    } else {
                        $this->vView->vImageProfileMenu = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1)).'">';
                    }
                    /* END PROFILE IMAGE */
                
                /********************************/
                /* END AUTHENTICATE USER ACTIVE */
                /********************************/
            
                $this->vView->visualize('about');
            }    
    
		public function account(){
				
                /* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
						IdEnSession::timeSession();	
				} else {
                    $this->redirect('access');
                }
                /* END VALIDATION TIME SESSION USER */           
            
                $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                
                /* BEGIN USER ACCOUNT INFORMATION */
                $this->vView->vUserOtherName = $this->vUsersData->getUserOtherNameFromUserCode($this->vUserCode);
                $this->vView->vUserDescription = $this->vUsersData->getUserDescriptionFromUserCode($this->vUserCode);
                $this->vView->vUserNames = ucwords($this->vUsersData->getUserNamesFromUserCode($this->vUserCode));
                $this->vView->vUserLastNames = ucwords($this->vUsersData->getUserLastNamesFromUserCode($this->vUserCode));            
                $this->vView->vUserEmail = $this->vUsersData->getUserEmailFromUserCode($this->vUserCode);
                $this->vView->vUserDateCreate = date_format(date_create($this->vUsersData->getUserDateCreateFromUserCode($this->vUserCode)), 'd/m/Y H:m:s');
                
                if($this->vUsersData->getUserDateBirthFromUserCode($this->vUserCode) == null){
                    $this->vView->vUserDateBirth = '';
                } else {
                    $this->vView->vUserDateBirth = $this->vUsersData->getUserDateBirthFromUserCode($this->vUserCode);
                }
                
                $this->vView->vUserCountry = ucwords($this->vUsersData->getUserCountryFromUserCode($this->vUserCode));
                $this->vView->vUserCity = ucwords($this->vUsersData->getUserCityFromUserCode($this->vUserCode));
                /* END USER ACCOUNT INFORMATION */
            
                /* BEGIN PROFILE ACCOUNT INFORMATION */
                $this->vView->vProfessions = $this->vProfessionData->getProfessions();
                $this->vView->vUserProfessions = $this->vProfileData->getProfileProfessions($this->vProfileCode);
                $this->vView->vProfileDescription = $this->vProfileData->getProfileDescriptionFromProfileCode($this->vProfileCode);
                $this->vView->vProfileContact = $this->vProfileData->getProfileContact($this->vProfileCode);
                /* END PROFILE ACCOUNT INFORMATION */
            
                /* BEGIN PROFILE IMAGE */
                $this->vImageProfile = $this->vProfileData->getImageProfile($this->vProfileCode);
                if($this->vImageProfile == ''){
                    $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                } else {
                    $this->vView->vImageProfile = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileCode).'">';
                }
                /* END PROFILE IMAGE */            
            
                /**********************************/
                /* BEGIN AUTHENTICATE USER ACTIVE */
                /**********************************/
                $this->vView->vUserNamesCompleteMenu = $this->vUsersData->getUserNamesComplete(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'));
                $this->vView->vUserEmailMenu = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $this->vView->vUserCodeMenu = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                $this->vView->vProfileCodeMenu = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1);
                
                    /* BEGIN PROFILE IMAGE */
                    $this->vImageProfile = $this->vProfileData->getImageProfile($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1));
                    if($this->vImageProfile == ''){
                        $this->vView->vImageProfileMenu = '<img class="responsive-img circle" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                    } else {
                        $this->vView->vImageProfileMenu = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1)).'">';
                    }
                    /* END PROFILE IMAGE */
            
                $this->vView->vUserStatusAccount = $this->vUsersData->getUserStatusAccount(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1), 1);            
                
                /********************************/
                /* END AUTHENTICATE USER ACTIVE */
                /********************************/            
            
                $this->vView->visualize('account');
            }
    
		public function accountProfileImage(){
				
                /* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
						IdEnSession::timeSession();	
				} else {
                    $this->redirect('access');
                }
                /* END VALIDATION TIME SESSION USER */
            
                $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                
                $this->vView->vProfileImagesList = $this->vProfileData->getProfileImages($this->vProfileCode);
                $this->vView->vProfileCode = $this->vProfileCode;
            
                /* BEGIN PROFILE IMAGE */
                $this->vImageProfile = $this->vProfileData->getImageProfile($this->vProfileCode);
                if($this->vImageProfile == ''){
                    $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                } else {
                    $this->vView->vImageProfile = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileCode).'">';
                }
                /* END PROFILE IMAGE */            
                
                /**********************************/
                /* BEGIN AUTHENTICATE USER ACTIVE */
                /**********************************/
                $this->vView->vUserNamesCompleteMenu = $this->vUsersData->getUserNamesComplete(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'));
                $this->vView->vUserEmailMenu = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $this->vView->vUserCodeMenu = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                $this->vView->vProfileCodeMenu = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1);
                
                    /* BEGIN PROFILE IMAGE */
                    $this->vImageProfile = $this->vProfileData->getImageProfile($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1));
                    if($this->vImageProfile == ''){
                        $this->vView->vImageProfileMenu = '<img class="responsive-img circle" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                        $this->vView->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1));
                    } else {
                        $this->vView->vImageProfileMenu = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1)).'">';
                        $this->vView->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1));
                    }
                    /* END PROFILE IMAGE */
                
                /********************************/
                /* END AUTHENTICATE USER ACTIVE */
                /********************************/ 
            
                $this->vView->visualize('accountprofileimage');
            }    

        
	}
?>