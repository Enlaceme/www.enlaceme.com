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
            
                $this->vUniverseData = $this->LoadModel('universe');

			}
			
		public function index(){
            
            /*$this->vView->vUserNamesComplete = $this->vUsersData->getUserNamesComplete(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'));
            $this->vView->vProfileCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
            $this->vView->vUserEmail = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');*/
            $this->vView->vProfilesActives = $this->vUniverseData->getProfilesActives();
            
            $this->vView->visualize('index');
			}       
	}
?>