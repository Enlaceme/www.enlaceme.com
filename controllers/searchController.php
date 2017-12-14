<?Php

class searchController extends IdEnController
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
            
                $this->vView->visualize('index');
			}       
	}
?>