<?Php

class projectController extends IdEnController
	{		
		public function __construct(){
                
                parent::__construct();
            
                $this->vUsersData = $this->LoadModel('users');
                $this->vProfileData = $this->LoadModel('profile');
                $this->vProfessionData = $this->LoadModel('profession');
                $this->vProjectData = $this->LoadModel('project');
			}
			
		public function index(){
            $this->vView->visualize('index');
			}
        
		public function edit($vProjectCode = 0){
            
            $vProjectCode = (int) $vProjectCode;
            $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1);
            
            $this->vView->vProjectInfo = $this->vProjectData->getProjectData($vProjectCode,$this->vProfileCode);
            
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
            
            $this->vView->visualize('edit');
            
			}    
	}
?>