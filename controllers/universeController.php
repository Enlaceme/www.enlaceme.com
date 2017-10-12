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
            
                if($vProfileName == null){
                    if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                        //echo 'Debe agarrar el usuario logueado!';
                        $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                        $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                    } else if(!IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                        $this->redirect('admin');
                    }
                } else if($vProfileName != null){
                    if($this->vProfileData->getProfileCodeIfNameExists($vProfileName) != 0){
                        //echo 'el nombre '.$vProfileName.' existe!';
                        $this->vProfileCode = $this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                        $this->vUserCode = $this->vProfileData->getUserCodeFromProfileCode($this->vProfileCode);
                    } else {
                        //echo 'el nombre '.$vProfileName.' no existe!';
                        $this->redirect('admin');
                    }
                }
            
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