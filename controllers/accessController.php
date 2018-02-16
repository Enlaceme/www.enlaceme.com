<?Php

class accessController extends IdEnController
	{		
		public function __construct(){
                parent::__construct();         
            
                $this->vAccessData = $this->LoadModel('access');
                $this->vUsersData = $this->LoadModel('users');
                $this->vProfileData = $this->LoadModel('profile');
			}
			
		public function index(){
            
				/* BEGIN VALIDATION TIME SESSION USER */
				/*if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE) == true){
                    $this->redirect('admin');
                } else {
                    $this->vView->visualize('login');
                }*/
                /* END VALIDATION TIME SESSION USER */            
                $this->vView->visualize('login');
			}
    
		public function facebookUserExists(){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $vFacebookUserData = json_decode($_POST['facebookUserData']);
                    if(!empty($vFacebookUserData)){

                        echo $this->vFacebookUserExists = $this->vAccessData->askIfFacebookUserExists($vFacebookUserData->id);
                    }   
                }
			}
        
        public function facebookRegisterMethod(){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $vFacebookUserData = json_decode($_POST['facebookUserData']);
                    if(!empty($vFacebookUserData)){
                        $vUserOauthProvider = 'Facebook';
                        $vUserFacebookId = $vFacebookUserData->id;
                        $vUserFacebookFirstName = strtolower($vFacebookUserData->first_name);
                        $vUserFacebookLastName = strtolower($vFacebookUserData->last_name);
                        $vUserFacebookEmail = strtolower($vFacebookUserData->email);
                        $vUserFacebookGender = strtolower($vFacebookUserData->gender);
                        $vUserFacebookLocale = strtolower($vFacebookUserData->locale);
                        $vUserFacebookImage = $vFacebookUserData->picture->data->url;
                        $vUserFacebookLink = $vFacebookUserData->link;
                        $vActive = 1;
                        
                        $vInsertUserFacebook = $this->vAccessData->insertUserFacebook($vUserOauthProvider,
                                                                                      $vUserFacebookId,
                                                                                      $vUserFacebookFirstName,
                                                                                      $vUserFacebookLastName,
                                                                                      $vUserFacebookEmail,
                                                                                      $vUserFacebookGender,
                                                                                      $vUserFacebookLocale,
                                                                                      $vUserFacebookImage,
                                                                                      $vUserFacebookLink);

                        $vPassword = '';
                        $vRePassword = '';
                        $vRole = (string) 'user';
                        $vActivationcode = rand(10000000, 99999999);
                        $vActive = 1;                          

                        $vCodUser = $this->vUsersData->userRegister($vInsertUserFacebook,
                                                                     $vUserFacebookEmail,
                                                                     $vPassword,
                                                                     $vRePassword,
                                                                     $vUserFacebookEmail,
                                                                     $vRole,
                                                                     $vActivationcode,
                                                                     $vActive);
                        
                        $vProfileName = (string) strtolower(str_replace(' ', '', $vUserFacebookFirstName).str_replace(' ', '', $vUserFacebookLastName));
                        
                        $vProfileType = 1;

                        $vProfileCode = $this->vProfileData->profileRegister($vCodUser, $vProfileName, $vUserFacebookFirstName, $vUserFacebookLastName, $vProfileType, $vActive);
                        
                        if($vProfileCode != 0){
                            $vCodUser = $this->vProfileData->getCodUserFromCodProfile($vCodProfile);
                            $vProfileName = $this->vProfileData->getProfileNameFromCodProfile($vCodProfile);
                            $vUserEmail = $this->vUsersData->getUserEmail($vCodUser);
                            $vUserRole = $this->vUsersData->getUserRole($vCodUser);
                            
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE, true);
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'UserCode', $vCodUser);
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode', $vProfileCode);
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'ProfileName', $vProfileName);
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Email', $vUserEmail);
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Role', $vUserRole);
                            IdEnSession::setSession('vTimeSessionUser', time());
                            
                            echo 'success';
                        } else {
                            echo 'fail';
                        }

                    }   
                }            
            }
    
		public function facebookLoginMethod(){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $vFacebookUserData = json_decode($_POST['facebookUserData']);
                    if(!empty($vFacebookUserData)){
                        
                        $vCodFacebookUser = $this->vAccessData->getCodFacebookUserFromFacebookId($vFacebookUserData->id);
                        $vCodUser = $this->vUsersData->getCodUserFromCodFacebookUser($vCodFacebookUser);
                        $vCodProfile = $this->vProfileData->getCodProfileFromCodUser($vCodUser, 1);
                        $vProfileName = $this->vProfileData->getProfileNameFromCodProfile($vCodProfile);
                        $vUserEmail = $this->vUsersData->getUserEmail($vCodUser);
                        $vUserRole = $this->vUsersData->getUserRole($vCodUser);
                        
                        if($vUserEmail === $vFacebookUserData->email){
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE, true);
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'UserCode', $vCodUser);
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode', $vCodProfile);
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'ProfileName', $vProfileName);
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Email', $vUserEmail);
                            IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Role', $vUserRole);
                            IdEnSession::setSession('vTimeSessionUser', time());
                        } else {
                            echo 'fail';
                        }

                        
                        if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE) == true){
                            echo 'success';
                        } else {
                            echo 'fail';
                        }                        
                    }
                }
			}
    
        public function LoginMethod(){
            
				/* BEGIN VALIDATION TIME SESSION USER */
				/*if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                        $this->redirect('admin');
                }*/
                /* END VALIDATION TIME SESSION USER */            
            
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $vEmail = (string) strtolower($_POST['vEmail']);
                    $vPassword = (string) $_POST['vPassword'];
                    
                    //echo $vEmail.'-'.$vPassword;
                    $vVerifyUserStatus = $this->vUsersData->getUserEmailExists($vEmail);
                    
                    if($vVerifyUserStatus == 0){
                        // Email not register in database.
                        echo '0';
                    } elseif($vVerifyUserStatus == 1){
                        // Email exists in database.
                        $vValidPassword = $this->vAccessData->getValidPassword($vEmail,$vPassword);
                        
                        if($vValidPassword == 1){
                            $vUserAccountStatus = $this->vUsersData->getUserAccountStatus($vEmail);

                            if($vUserAccountStatus == 0){
                                echo '3';
                            } elseif($vUserAccountStatus == 1){
                                $vAccessStatus = $this->vAccessData->getAccessStatus($vEmail,$vPassword);
                                $vProfileType = 1;
                                $vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($vAccessStatus['n_coduser'], $vProfileType);

                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE, true);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Code', $vAccessStatus['n_coduser']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Email', $vAccessStatus['c_email']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Role', $vAccessStatus['c_userrole']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode', $vProfileCode);
                                IdEnSession::setSession('vTimeSessionUser', time());

                                /*$arrayUserData = array(
                                                        'vUserCode' => $vUserLoginStatus['n_coduser'],
                                                        'vUserName' => $this->vLoginData->getUserCompleteNames($vUserLoginStatus['n_coduser'])
                                                    );

                                echo json_encode($arrayUserData);*/

                                echo '1';

                            } elseif($vUserAccountStatus == 2){
                                
                                $vAccessStatus = $this->vAccessData->getAccessStatus($vEmail,$vPassword);
                                $vProfileType = 1;
                                $vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($vAccessStatus['n_coduser'], $vProfileType);

                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE, true);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Code', $vAccessStatus['n_coduser']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Email', $vAccessStatus['c_email']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Role', $vAccessStatus['c_userrole']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode', $vProfileCode);
                                IdEnSession::setSession('vTimeSessionUser', time());
                                
                                echo '2';
                            }                            
                        } else {
                            echo 'invalid-pass';
                        }
                    }
                }
			}    
    
		public function LogoutMethod(){
                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE, false);
                IdEnSession::sessionDestroy(DEFAULT_USER_AUTHENTICATE);
                IdEnSession::sessionDestroy(DEFAULT_USER_AUTHENTICATE.'UserCode');
                IdEnSession::sessionDestroy(DEFAULT_USER_AUTHENTICATE.'ProfileCode');
                IdEnSession::sessionDestroy(DEFAULT_USER_AUTHENTICATE.'ProfileName');
                IdEnSession::sessionDestroy(DEFAULT_USER_AUTHENTICATE.'Email');
                IdEnSession::sessionDestroy(DEFAULT_USER_AUTHENTICATE.'Role');
				$this->redirect('access','login');
			}    
	}
?>