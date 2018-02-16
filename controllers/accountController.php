<?Php

class accountController extends IdEnController
	{		
		public function __construct(){
                parent::__construct();
                $this->vUsersData = $this->LoadModel('users');
                $this->vProfileData = $this->LoadModel('profile');
			}
		public function index(){
                
                $vCodProfile = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode');
                $vCodUser = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'UserCode');
            
                $this->vView->vImageProfile = $this->vUsersData->getFacebookProfileImage($vCodUser);
            
                $this->vView->vProfileNameToShow = $this->vProfileData->getProfileNameToShow($vCodProfile, $vCodUser);
                $this->vView->vNames = ucwords($this->vProfileData->getNames($vCodProfile));
                $this->vView->vLastNames = ucwords($this->vProfileData->getLastNames($vCodProfile));
                $this->vView->vUserEmail = $this->vUsersData->getUserEmail($vCodUser);
                $this->vView->vDateBirth = $this->vProfileData->getDateBirth($vCodProfile);
                $this->vView->vDescription = $this->vProfileData->getDescription($vCodProfile);
                
                $this->vPassword = $this->vUsersData->getPassword($vCodUser);
                $this->vRePassword = $this->vUsersData->getRePassword($vCodUser);
            
                if(($this->vPassword === IdEnHash::getHash('sha1','',DEFAULT_HASH_KEY)) && ($this->vRePassword === IdEnHash::getHash('sha1','',DEFAULT_HASH_KEY))){
                    $this->vView->vPasswordState = 0;
                } else {
                    $this->vView->vPasswordState = 1;
                }
            
                $this->vView->vLocation = $this->vProfileData->getLocation($vCodProfile, $vCodUser);
                $this->vView->vLocationId = $this->vProfileData->getLocationId($vCodProfile, $vCodUser);
                $this->vView->vCountry = ucwords($this->vProfileData->getCountry($vCodProfile));
                $this->vView->vCity = ucwords($this->vProfileData->getCity($vCodProfile));
                $this->vView->vAddress = ucwords($this->vProfileData->getAddress($vCodProfile));
            
                $this->vView->vPhones = $this->vProfileData->getPhones($vCodProfile, $vCodUser);
                
                $this->vView->vProfileName = ucwords($this->vProfileData->getNames($vCodProfile).' '.$this->vProfileData->getLastNames($vCodProfile));
                
                $this->vView->visualize('settings');
			}
		public function updateAccountProfile(){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $vCodProfile = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode');
                    $vCodUser = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'UserCode');
                    
                    $vProfileName = (string) strtolower($_POST['vProfileName']);
                    $vName = (string) strtolower($_POST['vName']);
                    $vLastName = (string) strtolower($_POST['vLastName']);
                    $vEmail = (string) strtolower($_POST['vEmail']);
                    $vDateBirth = $_POST['vDateBirth'];
                    $vDescription = (string) strtolower($_POST['vDescription']);

                    if($this->vProfileData->getProfileNameToShow($vCodProfile, $vCodUser) != $vProfileName):
                        IdEnSession::sessionDestroy(DEFAULT_USER_AUTHENTICATE.'ProfileName');
                        IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'ProfileName', $vProfileName);
                        $vUpdateProfileName = $this->vProfileData->updateAccountProfileName($vCodProfile, $vCodUser, $vProfileName);
                    endif;
                    
                    if($this->vUsersData->getUserEmail($vCodUser) != $vEmail):
                        IdEnSession::sessionDestroy(DEFAULT_USER_AUTHENTICATE.'Email');
                        IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Email', $vEmail);
                        $vUpdateEmail = $this->vUsersData->updateEmailProfile($vCodUser, $vEmail);
                    endif;
                    
                    $vUpdateProfileData = $this->vProfileData->updateAccountProfile($vCodProfile, $vCodUser, $vName, $vLastName, $vDateBirth, $vDescription);
                    
                    echo 'Datos Actualizados: '.$vCodProfile.' - '.$vCodUser.' - '.$vName.' - '.$vLastName.' - '.$vDateBirth.' - '.$vDescription;
                }
			}
		public function insertLocationProfile(){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $vCodProfile = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode');
                    $vCodUser = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'UserCode');
                    
                    $vCountry = (string) strtolower($_POST['vCountry']);
                    $vCity = (string) strtolower($_POST['vCity']);
                    $vAddress = (string) strtolower($_POST['vAddress']);
                    $vActive = 1;
                    
                    $vInsertLocation = $this->vProfileData->insertLocationProfile($vCodProfile, $vCodUser, $vCountry, $vCity, $vAddress, $vActive);
                    
                    echo 'Datos Registrados: '.$vCodProfile.' - '.$vCodUser.' - '.$vCountry.' - '.$vCity.' - '.$vAddress;
                }
			}
		public function updateLocationProfile(){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $vCodProfile = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode');
                    $vCodUser = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'UserCode');
                    
                    $vLocationId = (int) $_POST['vLocationId'];
                    $vCountry = (string) strtolower($_POST['vCountry']);
                    $vCity = (string) strtolower($_POST['vCity']);
                    $vAddress = (string) strtolower($_POST['vAddress']);
                    $vActive = 1;
                    
                    $vUpdateLocation = $this->vProfileData->updateLocationProfile($vLocationId, $vCodProfile, $vCodUser, $vCountry, $vCity, $vAddress, $vActive);
                    
                    echo 'Datos Actualizados: '.$vCodProfile.' - '.$vCodUser.' - '.$vCountry.' - '.$vCity.' - '.$vAddress;
                }
			}
		public function insertPhonesProfile(){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $vCodProfile = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode');
                    $vCodUser = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'UserCode');
                    
                    $vTypePhone = (int) $_POST['vTypePhone'];
                    $vNumberPhone = (string) $_POST['vNumberPhone'];
                    $vActive = 1;
                    
                    $vInsertPhones = $this->vProfileData->insertPhonesProfile($vCodProfile, $vCodUser, $vTypePhone, $vNumberPhone, $vActive);
                    
                    echo 'Datos Registrados: '.$vCodProfile.' - '.$vCodUser.' - '.$vTypePhone.' - '.$vNumberPhone;
                }
			}
		public function updatePhoneProfile(){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $vCodProfile = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode');
                    $vCodUser = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'UserCode');
                    
                    $vCodeModal = (int) $_POST['vCodeModal'];
                    $vTypePhone = (int) $_POST['vTypePhoneModal'];
                    $vNumberPhone = (string) $_POST['vNumberPhoneModal'];
                    $vActive = 1;
                    
                    $vUpdatePhone = $this->vProfileData->updatePhoneProfile($vCodProfile, $vCodUser, $vCodeModal, $vTypePhone, $vNumberPhone, $vActive);
                    
                    echo 'Datos Actualizados: '.$vCodProfile.' - '.$vCodUser.' - '.$vCodeModal.' - '.$vTypePhone.' - '.$vNumberPhone;
                }
			}
		public function updatePasswordProfile(){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $vCodProfile = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode');
                    $vCodUser = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'UserCode');
                    
                    $vPassword = (string) $_POST['vPassword'];
                    $vRePassword = (string) $_POST['vRePassword'];
                    
                    $vUpdatePassword = $this->vUsersData->updatePasswordProfile($vCodUser, $vPassword, $vRePassword);
                    
                    echo 'Datos Actualizados: '.$vCodProfile.' - '.$vCodUser;
                }
			}    
	}
?>