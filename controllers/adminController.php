<?Php

class adminController extends IdEnController
	{		
		public function __construct(){
                parent::__construct();
            
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
					IdEnSession::timeSession();
                    
                    if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Role') == 'superadmin'){
                        $this->redirect('superadmin');
                        echo 'es superadministrador!';
                    } else if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Role') == 'admin'){
                        $this->redirect('admin');
                        echo 'es administrador!';                        
                    } else if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Role') == 'user'){
                        $this->redirect('profile/about/');
                    }
                    
                } else if(!IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
					$this->redirect('universe');
				}
                /* END VALIDATION TIME SESSION USER */
            
                $this->vUsersData = $this->LoadModel('users');

			}
			
		public function index(){
            
            $this->vView->vUserNamesComplete = $this->vUsersData->getUserNamesComplete(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'));
            $this->vView->vProfileCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
            $this->vView->vUserEmail = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
            
            $this->vView->visualize('index');
			}       
	}
?>