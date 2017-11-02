<?Php

class professionalsController extends IdEnController
	{		
		public function __construct(){
                parent::__construct();
            
                $this->vUsersData = $this->LoadModel('users');
                $this->vProfileData = $this->LoadModel('profile');
                $this->vProfessionData = $this->LoadModel('profession');
                $this->vUniverseData = $this->LoadModel('universe');            
			}
			
		public function index(){  
            
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
                }
                /* END SESSION ACCOUNT ACCESS */
            
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
            
                $this->vView->visualize('index');
			}
	}
?>