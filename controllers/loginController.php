<?php

class loginController extends IdEnController
	{		
		public function __construct(){
			parent::__construct();

			$this->vLoginData = $this->LoadModel('login');
            $this->vRegisterData = $this->LoadModel('register');
            $this->vProfileData = $this->LoadModel('profile');
            
		}
		
		public function index(){
                /* BEGIN VALIDATION TIME SESSION USER */
                if(IdEnSession::getSession('vAuthenticatedEnlacemeUser')){
                    $this->redireccionar('profile/about/');
                }
                /* END VALIDATION TIME SESSION USER */            
                $this->vView->visualizar('index','login');
			}
			
		public function logout(){								
				IdEnSession::sessionDestroy();
				$this->redireccionar('login','index');
			}			


		public function access(){
            /* BEGIN VALIDATION TIME SESSION USER */
            if(IdEnSession::getSession('vAuthenticatedEnlacemeUser')){
                $this->redireccionar('profile/about/');
            }
            /* END VALIDATION TIME SESSION USER */
            
			if($_SERVER['REQUEST_METHOD'] == 'POST')
				{				
					$vEmailRequest = (string) trim(strtolower($_POST['usermail']));
					$vPasswordRequest = (string) trim($_POST['password']);
                
                    $vVerifyEmailStatus = $this->vLoginData->getVerifyEmail($vEmailRequest);

					if($vVerifyEmailStatus == 0){
						echo 0;
                    } elseif($vVerifyEmailStatus == 1) {
                        $vUserLoginStatus = $this->vLoginData->getUserLoginStatus($vEmailRequest,$vPasswordRequest);
                
                        if($vEmailRequest == $vUserLoginStatus['c_email']){
                
                            IdEnSession::setSession('vAuthenticatedEnlacemeUser', true);
                            IdEnSession::setSession('vSessionActiveUserCode', $vUserLoginStatus['n_coduser']);
                            IdEnSession::setSession('vSessionActiveUserName', $vUserLoginStatus['c_username']);
                            IdEnSession::setSession('vSessionActiveProfileCode', $vUserLoginStatus['n_codprofile']);
                            IdEnSession::setSession('vSessionActiveUserEmail', $vUserLoginStatus['c_email']);
                            IdEnSession::setSession('vSessionActiveProfileName', $this->vLoginData->getUserCompleteNames($vUserLoginStatus['n_coduser']));

                            IdEnSession::setSession('vAuthenticatedEnlacemeUser', time());
                
                            $arrayUserData = array(
                                                    'vUserCode' => $vUserLoginStatus['n_coduser'],
                                                    'vUserName' => ucwords($this->vLoginData->getUserCompleteNames($vUserLoginStatus['n_coduser']))
                                                );
                                
                            echo json_encode($arrayUserData);
                        } else {
                            echo 2;
                        }               
                    }                
				}				
			}
        
		public function register(){
            /* BEGIN VALIDATION TIME SESSION USER */
            if(IdEnSession::getSession('vAuthenticatedEnlacemeUser')){
                $this->redireccionar('profile/about/');
            }
            /* END VALIDATION TIME SESSION USER */
            
			if($_SERVER['REQUEST_METHOD'] == 'POST')
				{				
					$vFirstNames = (string) trim(strtolower($_POST['firstnames']));
					$vLastNames = (string) trim(strtolower($_POST['lastnames']));
                    $vEmail = (string) trim(strtolower($_POST['email']));
                    $vCountry = (string) trim(strtolower($_POST['country']));
                    $vPassword = (string) trim($_POST['password']);
                    $vRePassword = (string) trim($_POST['rpassword']);
                    if($_POST['tnc'] == true){
                        $vTnc = 1;    
                    } else {
                        $vTnc = 0;
                    }                    
                    $vActive = 1;
                    $vUserCreate = (string) $vEmail;
                    $vProfileType = 1;
                
                    $vVerifyEmailStatus = $this->vLoginData->getVerifyEmail($vEmail);

					if($vVerifyEmailStatus == 0){
                        $vProfileNameURL = $this->cleanAllSpaces($vFirstNames.$vLastNames);
                        $vUserRegisterCode = $this->vRegisterData->registerUser($vEmail, $vPassword, $vRePassword, $vTnc, $vActive, $vUserCreate);
                        $vUserDataRegisterStatus = $this->vRegisterData->registerUserData($vUserRegisterCode, $vFirstNames, $vLastNames, $vCountry, $vActive, $vUserCreate);
                        $vProfileRegisterStatus = $this->vProfileData->registerProfileData($vUserRegisterCode, $vProfileNameURL, $vProfileType, $vActive, $vUserCreate);
                        
                        $vUserLoginStatus = $this->vLoginData->getUserLoginStatus($vEmail,$vPassword);
                
                        if($vEmail == $vUserLoginStatus['c_email']){
                
                            IdEnSession::setSession('vAuthenticatedEnlacemeUser', true);
                            IdEnSession::setSession('vSessionActiveUserCode', $vUserLoginStatus['n_coduser']);
                            IdEnSession::setSession('vSessionActiveProfileCode', $vUserLoginStatus['n_codprofile']);
                            IdEnSession::setSession('vSessionActiveUserEmail', $vUserLoginStatus['c_email']);
                            IdEnSession::setSession('vSessionActiveProfileName', $this->vLoginData->getUserCompleteNames($vUserLoginStatus['n_coduser']));

                            IdEnSession::setSession('vTimeSessionUser', time());
                
                            $arrayUserData = array(
                                                    'vUserCode' => $vUserLoginStatus['n_coduser'],
                                                    'vUserName' => ucwords($this->vLoginData->getUserCompleteNames($vUserLoginStatus['n_coduser']))
                                                );
                                
                            echo json_encode($arrayUserData);
                        }
                    } elseif($vVerifyEmailStatus == 1) {
                        echo 1;
                    }               
				}				
			}         

		public function userTimeExpired(){
				IdEnSession::sessionDestroy();
				$this->redireccionar('login');
			}
	}

?>
