<?Php

class universeController extends IdEnController
	{		
		public function __construct(){
                parent::__construct();
            
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
						IdEnSession::timeSession();
						//$this->redirect('profile/about/');
					}
                /* END VALIDATION TIME SESSION USER */
            
                $this->vUsersData = $this->LoadModel('users');
                $this->vProfileData = $this->LoadModel('profile');
                $this->vProfessionData = $this->LoadModel('profession');
                $this->vUniverseData = $this->LoadModel('universe');

			}
			
		public function index(){

                /* BEGIN SESSION ACCOUNT ACCESS */
                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                    //echo 'El Usuario esta logueado!';
                    if($vProfileName == null){
                        //echo 'El vProfileName es null';
                        $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                        $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                    } else if($vProfileName != null){
                        //echo 'El vProfileName no es null es '.$vProfileName;
                        if($this->vProfileData->getProfileCodeIfNameExists($vProfileName) != 0){
                            //echo 'El vProfileName existe en la DB con código: '.$this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code') == $this->vProfileData->getUserCodeFromProfileCode($this->vProfileData->getProfileCodeIfNameExists($vProfileName))){
                                //echo 'es el usuario logueado!';
                                $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                                $this->vAuthenticateUser = true;
                            } else {
                                //echo 'No es el usuario logueado!';
                                $this->vProfileCode = $this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                                $this->vUserCode = $this->vProfileData->getUserCodeFromProfileCode($this->vProfileCode);
                                $this->vAuthenticateUser = false;
                            }
                        } else {
                            echo 'El vProfileName no existe.';
                            //$this->redirect('universe');
                        }                        
                    }                    
                } else if(!IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                    //echo 'El Usuario no esta logueado!';
                    if($vProfileName == null){
                        //echo 'El vProfileName es null';
                        $this->vView->vBetterRegister = 1;
                    } else if($vProfileName != null){
                        //echo 'El vProfileName no es null es '.$vProfileName;
                        if($this->vProfileData->getProfileCodeIfNameExists($vProfileName) != 0){
                            //echo 'El vProfileName existe en la DB con código: '.$this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            $this->vProfileCode = $this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            $this->vUserCode = $this->vProfileData->getUserCodeFromProfileCode($this->vProfileCode);
                        } else {
                            //echo 'El vProfileName no existe.';
                            $this->vView->vBetterRegister = 1;
                        }                        
                    }
                }
                /* END SESSION ACCOUNT ACCESS */            
            
            
                $this->vView->vProfilesActives = $this->vUniverseData->getProfilesActives();

                /* BEGIN AUTHENTICATE USER ACTIVE */
                $this->vView->vUserNamesCompleteMenu = $this->vUsersData->getUserNamesComplete(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'));
                $this->vView->vUserEmailMenu = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $this->vView->vUserCodeMenu = $this->vUserCode;
                
                /* BEGIN PROFILE IMAGE */
                $this->vImageProfile = $this->vProfileData->getImageProfile($this->vProfileCode);
            
                if($this->vImageProfile == ''){
                    $this->vView->vImageProfileMenu = '<img class="responsive-img circle" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                    $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                } else {
                    $this->vView->vImageProfileMenu = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileCode).'">';
                    $this->vView->vImageProfile = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileCode).'">';
                }
                /* END PROFILE IMAGE */
                
                /* END AUTHENTICATE USER ACTIVE */
            
                $this->vView->visualize('index');
			}       
	}
?>