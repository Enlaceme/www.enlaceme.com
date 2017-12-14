<?Php

class actionprofileController extends IdEnController
	{		
		public function __construct(){
                parent::__construct();
            
                $this->vUsersData = $this->LoadModel('users');
                $this->vProfileData = $this->LoadModel('profile');
                $this->vProfessionData = $this->LoadModel('profession');
                $this->vImageData = $this->LoadModel('images');
                
			}
			
		public function index(){
                $this->redirect('profile');
			}
    
		public function actionAccountData(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                
                $vUserOtherName = (string) strtolower($_POST['vUserOtherName']);
                $vUserNames = (string) strtolower($_POST['vUserNames']);
                $vUserLastNames = (string) strtolower($_POST['vUserLastNames']);
                $vUserEmail = (string) strtolower($_POST['vUserEmail']);
                $vUserDateBirth = $_POST['vUserDateBirth'];
                $vUserCountry = (string) strtolower($_POST['vUserCountry']);
                $vUserCity = (string) strtolower($_POST['vUserCity']);
                $vUserDescription = (string) strtolower($_POST['vUserDescription']);
                
                $this->vUserOtherName = $this->vUsersData->getUserOtherNameFromUserCode($this->vUserCode);
                $this->vUserDescription = $this->vUsersData->getUserDescriptionFromUserCode($this->vUserCode);
                $this->vUserNames = $this->vUsersData->getUserNamesFromUserCode($this->vUserCode);
                $this->vUserLastNames = $this->vUsersData->getUserLastNamesFromUserCode($this->vUserCode);            
                $this->vUserEmail = $this->vUsersData->getUserEmailFromUserCode($this->vUserCode);
                //$this->vUserDateBirth = date_format(date_create($this->vUsersData->getUserDateBirthFromUserCode($this->vUserCode)), 'Y/m/d');
                $this->vUserDateBirth = $this->vUsersData->getUserDateBirthFromUserCode($this->vUserCode);
                $this->vUserCountry = $this->vUsersData->getUserCountryFromUserCode($this->vUserCode);
                $this->vUserCity = $this->vUsersData->getUserCityFromUserCode($this->vUserCode);
                
                if($vUserOtherName != $this->vUserOtherName){
                    $this->vUsersData->updateUserOtherName($this->vUserCode, $vUserOtherName);
                }
                
                if($vUserNames != $this->vUserNames){
                    $this->vUsersData->updateUserNames($this->vUserCode, $vUserNames);
                }
                
                if($vUserLastNames != $this->vUserLastNames){
                    $this->vUsersData->updateUserLastNames($this->vUserCode, $vUserLastNames);
                }
                
                if($vUserEmail != $this->vUserEmail){
                    $this->vUsersData->updateUserEmail($this->vUserCode, $vUserEmail);
                }
                
                if($vUserDateBirth != $this->vUserDateBirth){
                    $this->vUsersData->updateUserBirthDate($this->vUserCode, $vUserDateBirth);
                }
                
                if($vUserCountry != $this->vUserCountry){
                    $this->vUsersData->updateUserCountry($this->vUserCode, $vUserCountry);   
                }
                
                if($vUserCity != $this->vUserCity){
                    $this->vUsersData->updateUserCity($this->vUserCode, $vUserCity);
                }
                
                if($vUserDescription != $this->vUserDescription){
                    $this->vUsersData->updateUserDescription($this->vUserCode, $vUserDescription);
                }
                
                //echo 'Estamos aqui';
            }
        }
    
		public function changePassword(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1);
                
                $vPassword = (string) $_POST['vPassword'];
                $vRePassword = (string) $_POST['vRePassword'];
                
                if($vPassword != $vRePassword){
                    $vFormProceed = 1;
                } else if((strlen($vPassword) <= 3) || (strlen($vRePassword) <= 3)){
                    $vFormProceed = 2;
                } else {
                    $this->vUsersData->updateUserPassword(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), $vPassword, $vRePassword);
                    $vFormProceed = 'ok';
                }
                
                echo $vFormProceed;
            }
        }    
    
		public function actionProfileData(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1);
                
                $vProfileDescription = (string) strtolower($_POST['vProfileDescription']);
                
                $this->vProfileDescriptionExists = $this->vProfileData->getProfileDescriptionExists($this->vProfileCode);
                
                if($this->vProfileDescriptionExists == 0){
                    $this->vProfileData->insertProfileDescription($this->vProfileCode, $vProfileDescription);                    
                } else {
                    $this->vProfileDescription = $this->vProfileData->getProfileDescriptionFromProfileCode($this->vProfileCode);
                    if($vProfileDescription != $this->vProfileDescription){
                        $this->vProfileData->updateProfileDescription($this->vProfileCode, $vProfileDescription);

                    }                    
                }
                
                //echo 'Estamos aqui';
            }
        }
    
		public function newProjectProfile(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1);
                
                $vProjectName = (string) strtolower($_POST['vProjectName']);
                
                $this->vProjectNameExists = $this->vProfileData->getProjectProfileNameExists($vProjectName);
                
                if($this->vProjectNameExists == 0){
                    $this->vProfileProjectCode = $this->vProfileData->insertProjectProfile($this->vProfileCode, $vProjectName, 0);
                    echo $this->vProfileProjectCode;
                }
                
                //echo 'Estamos aqui';
            }
        }
    
		public function newContactProfile(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1);
                
                $vCountryContact = (string) strtolower($_POST['vCountryContact']);
                $vCityContact = (string) strtolower($_POST['vCityContact']);
                $vWhatsapp = (string) $_POST['vWhatsapp'];
                
                $this->vProfileContactExists = $this->vProfileData->getProfileContactExists($this->vProfileCode, $vWhatsapp);
                
                if($this->vProfileContactExists == 0){
                    $this->vProfileProjectCode = $this->vProfileData->insertContactProfile($this->vProfileCode, $vCountryContact, $vCityContact, $vWhatsapp, 1);
                    echo $this->vProfileProjectCode;
                }
                
                //echo 'Estamos aqui';
            }
        }     
    
		public function actionProfessionData(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1);
                
                $vProfessionCode = (int) $_POST['vProfessionCode'];
                
                $vProfessionName = (string) strtolower($_POST['vNewProfession']);
                
                if($vProfessionCode != 0){
                    if($this->vProfileData->getProfileProfessionExists($this->vProfileCode, $vProfessionCode) == 0){
                        $this->vProfileData->insertProfileProfession($this->vProfileCode, $vProfessionCode);
                    }
                } else if($vProfessionCode == 0){
                    if($vProfessionName != '' && $vProfessionName != null){
                        if($this->vProfessionData->getProfessionExists($vProfessionName) == 0){
                            $vProfessionCode = $this->vProfessionData->insertProfession($vProfessionName, $vProfessionDescription);
                            $this->vProfileData->insertProfileProfession($this->vProfileCode, $vProfessionCode);
                        }
                        
                    }
                    
                }
                /*$this->vProfileDescriptionExists = $this->vProfileData->getProfileDescriptionExists($this->vProfileCode);
                
                if($this->vProfileDescriptionExists == 0){
                    $this->vProfileData->insertProfileDescription($this->vProfileCode, $vProfileDescription);
                } else {
                    $this->vProfileDescription = $this->vProfileData->getProfileDescriptionFromProfileCode($this->vProfileCode);
                    if($vProfileDescription != $this->vProfileDescription){
                        $this->vProfileData->updateProfileDescription($this->vProfileCode, $vProfileDescription);

                    }                    
                }*/
                
                //echo 'Estamos aqui';
            }
        }
    
		public function actionUploadProfileImg(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1);
                
                $vImageProfileRoot = ROOT_APPLICATION.'views'.DIR_SEPARATOR.'layout'.DIR_SEPARATOR.DEFAULT_VIEW_LAYOUT.DIR_SEPARATOR.'backend'.DIR_SEPARATOR.'resources'.DIR_SEPARATOR.'img'.DIR_SEPARATOR.$this->vProfileCode.DIR_SEPARATOR.'profile'.DIR_SEPARATOR;
                
                
                
                $allowed = array('png', 'jpg', 'gif');
                
                if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
                    
                    $vImageName = $_FILES['upl']['name'];
                    $vImageType = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
                    $vImageSize = $_FILES['upl']['size'];

                    $vImageContent = addslashes(base64_encode(file_get_contents($_FILES['upl']['tmp_name'])));
                    
                    if(!get_magic_quotes_gpc()){
                        $vImageName = addslashes($vImageName);
                    }                   

                    if(!in_array(strtolower($vImageType), $allowed)){
                        echo '{"status":"error"}';
                        exit;
                    }

                    $this->vImageCode = $this->vImageData->insertImage($this->vProfileCode, $vImageName, $vImageContent, $vImageSize, $vImageType, 1);

                    if(($this->vImageCode != 0) && ($this->vImageCode != '')){
                        
                        /* CHANGE PROFILE IMAGES STATUS TO CERO */
                        $this->vProfileImagesStatus = $this->vProfileData->updateProfileImagesStatus($this->vProfileCode, $vActive);
                        
                        /* INSERT IMAGE UPLOADED TO PROFILE */
                        $this->vProfileImageCode = $this->vProfileData->insertProfileImage($this->vProfileCode, $this->vImageCode, 0);

                        /* CHANGE PROFILE IMAGE UPLOADED STATUS TO ONE */
                        $this->vProfileData->updateProfileImageStatus($this->vProfileImageCode, $this->vProfileCode, 1);
                        exit;
                    }                    
                }

                echo '{"status":"error"}';
                exit;
            }
        }
    
        public function selectImageForProfile($vSelectedImageProfileCode = 0){
            
            $vSelectedImageProfileCode = (int) $vSelectedImageProfileCode;
            $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'),1);
            $this->vProfileImageCode = $this->vProfileData->getProfileImageCode($this->vProfileCode);
                                                                                  
            $this->vProfileData->updateProfileImageStatus($this->vProfileImageCode, $this->vProfileCode, 0);
            
            $this->vProfileData->updateProfileImageStatus($vSelectedImageProfileCode, $this->vProfileCode, 1);
            
            $this->redirect('profile/accountprofileimage');

        }
    
        public function deleteImageForProfile($vSelectedImageProfileCode = 0){
            
            $vSelectedImageProfileCode = (int) $vSelectedImageProfileCode;
            $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'),1);
            
            $this->vProfileData->getImageCodeFromProfileImageCode($vSelectedImageProfileCode);
            $this->vProfileData->deleteProfileImage($vSelectedImageProfileCode, $this->vProfileCode, 1);
            $this->vImageData->deleteImage($vSelectedImageProfileCode, 1);
            
            $this->redirect('profile/accountprofileimage');

        }    
    
        public function deleteContactProfile($vSelectedContactProfileCode = 0){
            
            $vSelectedContactProfileCode = (int) $vSelectedContactProfileCode;
            $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'),1);
            
            $this->vProfileData->deleteContactProfile($vSelectedContactProfileCode, $this->vProfileCode);
            
            $this->redirect('profile/account');

        }        
	}
?>