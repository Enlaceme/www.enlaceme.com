<?Php

class adminController extends IdEnController
	{		
		public function __construct(){
				
            parent::__construct();
            
                $this->vUsersData = $this->LoadModel('users');
                $this->vProfileData = $this->LoadModel('profile');
                $this->vProfessionData = $this->LoadModel('profession');
            
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
					IdEnSession::timeSession();
                    
                    if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Role') == 'superadmin'){
                        $this->redirect('superadmin');
                        echo 'es superadministrador!';
                    } else if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Role') == 'user'){
                        $this->redirect('profile/about/');               
                    }
                    
                } else if(!IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
					$this->redirect('universe');
				}
                /* END VALIDATION TIME SESSION USER */

			}
			
		public function index(){
                
                $this->vView->vRegisteredUsers = $this->vUsersData->getUsers();
                $this->vView->vRegisteredUsersActive = $this->vUsersData->getUsersActive();
                $this->vView->vRegisteredUsersInActive = $this->vUsersData->getUsersInActive();
                    
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

                /********************************/
                /* END AUTHENTICATE USER ACTIVE */
                /********************************/

                $this->vView->visualize('index');
			}       
	}
?>