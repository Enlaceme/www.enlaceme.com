<?Php

class profileController extends IdEnController
	{		
		public function __construct(){
            
				parent::__construct();
            
                $this->vUsersData = $this->LoadModel('users');
                $this->vProfileData = $this->LoadModel('profile');
                $this->vProfessionData = $this->LoadModel('profession');
			}    
    
		public function index(){
            
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
						IdEnSession::timeSession();
						$this->redirect('profile/about/');
					}
				else if(!IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
						$this->redirect('access');
					}
                /* END VALIDATION TIME SESSION USER */
			}
    
		public function about($vProfileName = null){
                
                /* BEGIN SESSION ACCOUNT ACCESS */
                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                    IdEnSession::timeSession();	
                    //echo 'El Usuario esta logueado!';
                    if($vProfileName == null){
                        //echo 'El vProfileName es null';
                        $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                        $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                        
                        $this->vAuthenticateUser = true;
                        $this->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileCode);
                    } else if($vProfileName != null){
                        //echo 'El vProfileName no es null es '.$vProfileName;
                        if($this->vProfileData->getProfileCodeIfNameExists($vProfileName) != 0){
                            //echo 'El vProfileName existe en la DB con código: '.$this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code') == $this->vProfileData->getUserCodeFromProfileCode($this->vProfileData->getProfileCodeIfNameExists($vProfileName))){
                                //echo 'es el usuario logueado!';
                                $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                                $this->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileCode);
                                $this->vAuthenticateUser = true;
                            } else {
                                //echo 'No es el usuario logueado!';
                                $this->vProfileCode = $this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                                $this->vUserCode = $this->vProfileData->getUserCodeFromProfileCode($this->vProfileCode);
                                $this->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileCode);
                                $this->vAuthenticateUser = false;
                            }
                        } else {
                            //echo 'El vProfileName no existe.';
                            $this->redirect('universe');
                        }                        
                    }                    
                } else if(!IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                    //echo 'El Usuario no esta logueado!';
                    if($vProfileName == null){
                        //echo 'El vProfileName es null';
                        $this->redirect('universe');
                    } else if($vProfileName != null){
                        //echo 'El vProfileName no es null es '.$vProfileName;
                        if($this->vProfileData->getProfileCodeIfNameExists($vProfileName) != 0){
                            //echo 'El vProfileName existe en la DB con código: '.$this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            $this->vProfileCode = $this->vProfileData->getProfileCodeIfNameExists($vProfileName);
                            $this->vUserCode = $this->vProfileData->getUserCodeFromProfileCode($this->vProfileCode);
                            
                        } else {
                            //echo 'El vProfileName no existe.';
                            $this->redirect('universe');
                        }                        
                    }
                    $this->vView->vBetterRegister = 1;
                }
                /* END SESSION ACCOUNT ACCESS */
                
                /* BEGIN USER ACCOUNT INFORMATION */
                $this->vView->vAuthenticateUser = $this->vAuthenticateUser;
                $this->vView->vImageProfileExists = $this->vImageProfileExists;
                $this->vView->vUserNamesComplete = $this->vUsersData->getUserNamesComplete($this->vUserCode);
                $this->vView->vUserOtherName = $this->vUsersData->getUserOtherNameFromUserCode($this->vUserCode);
                $this->vView->vUserDescription = $this->vUsersData->getUserDescriptionFromUserCode($this->vUserCode);
                $this->vView->vUserNames = ucwords($this->vUsersData->getUserNamesFromUserCode($this->vUserCode));
                $this->vView->vUserLastNames = ucwords($this->vUsersData->getUserLastNamesFromUserCode($this->vUserCode));            
                $this->vView->vUserEmail = $this->vUsersData->getUserEmailFromUserCode($this->vUserCode);
                $this->vView->vUserDateCreate = date_format(date_create($this->vUsersData->getUserDateCreateFromUserCode($this->vUserCode)), 'd/m/Y H:m:s');
                
                if($this->vUsersData->getUserDateBirthFromUserCode($this->vUserCode) == null){
                    $this->vView->vUserDateBirth = '';
                } else {
                    $this->vView->vUserDateBirth = $this->vUsersData->getUserDateBirthFromUserCode($this->vUserCode);
                }
                
                $this->vView->vUserCountry = ucwords($this->vUsersData->getUserCountryFromUserCode($this->vUserCode));
                $this->vView->vUserCity = ucwords($this->vUsersData->getUserCityFromUserCode($this->vUserCode));
                /* END USER ACCOUNT INFORMATION */
            
                /* BEGIN PROFILE ACCOUNT INFORMATION */
                $this->vView->vProfileProfessions = $this->vProfileData->getProfileProfessions($this->vProfileCode);
                $this->vView->vProfileDescription = $this->vProfileData->getProfileDescriptionFromProfileCode($this->vProfileCode);
                $this->vView->vProfileContact = $this->vProfileData->getProfileContact($this->vProfileCode);
                /* END PROFILE ACCOUNT INFORMATION */
            
                /* BEGIN PROFILE IMAGE */
                $this->vImageProfile = $this->vProfileData->getImageProfile($this->vProfileCode);
                if($this->vImageProfile == ''){
                    $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                } else {
                    $this->vView->vImageProfile = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileCode).'">';
                }
                /* END PROFILE IMAGE */            
            
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
            
                $this->vView->visualize('about');
            }
    
		public function account(){
				
                /* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
						IdEnSession::timeSession();	
				} else {
                    $this->redirect('access');
                }
                /* END VALIDATION TIME SESSION USER */           
            
                $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                
                /* BEGIN USER ACCOUNT INFORMATION */
                $this->vView->vUserOtherName = $this->vUsersData->getUserOtherNameFromUserCode($this->vUserCode);
                $this->vView->vUserDescription = $this->vUsersData->getUserDescriptionFromUserCode($this->vUserCode);
                $this->vView->vUserNames = ucwords($this->vUsersData->getUserNamesFromUserCode($this->vUserCode));
                $this->vView->vUserLastNames = ucwords($this->vUsersData->getUserLastNamesFromUserCode($this->vUserCode));            
                $this->vView->vUserEmail = $this->vUsersData->getUserEmailFromUserCode($this->vUserCode);
                $this->vView->vUserDateCreate = date_format(date_create($this->vUsersData->getUserDateCreateFromUserCode($this->vUserCode)), 'd/m/Y H:m:s');
                
                if($this->vUsersData->getUserDateBirthFromUserCode($this->vUserCode) == null){
                    $this->vView->vUserDateBirth = '';
                } else {
                    $this->vView->vUserDateBirth = $this->vUsersData->getUserDateBirthFromUserCode($this->vUserCode);
                }
                
                $this->vView->vUserCountry = ucwords($this->vUsersData->getUserCountryFromUserCode($this->vUserCode));
                $this->vView->vUserCity = ucwords($this->vUsersData->getUserCityFromUserCode($this->vUserCode));
                /* END USER ACCOUNT INFORMATION */
            
                /* BEGIN PROFILE ACCOUNT INFORMATION */
                $this->vView->vProfessions = $this->vProfessionData->getProfessions();
                $this->vView->vUserProfessions = $this->vProfileData->getProfileProfessions($this->vProfileCode);
                $this->vView->vProfileDescription = $this->vProfileData->getProfileDescriptionFromProfileCode($this->vProfileCode);
                $this->vView->vProfileContact = $this->vProfileData->getProfileContact($this->vProfileCode);
                /* END PROFILE ACCOUNT INFORMATION */
            
                /* BEGIN PROFILE IMAGE */
                $this->vImageProfile = $this->vProfileData->getImageProfile($this->vProfileCode);
                if($this->vImageProfile == ''){
                    $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                } else {
                    $this->vView->vImageProfile = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileCode).'">';
                }
                /* END PROFILE IMAGE */            
            
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
            
                $this->vView->visualize('account');
            }
    
		public function accountProfileImage(){
				
                /* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
						IdEnSession::timeSession();	
				} else {
                    $this->redirect('access');
                }
                /* END VALIDATION TIME SESSION USER */
            
                $this->vUserCode = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code');
                $this->vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($this->vUserCode, 1);
                
                $this->vView->vProfileImagesList = $this->vProfileData->getProfileImages($this->vProfileCode);
                $this->vView->vProfileCode = $this->vProfileCode;
            
                /* BEGIN PROFILE IMAGE */
                $this->vImageProfile = $this->vProfileData->getImageProfile($this->vProfileCode);
                if($this->vImageProfile == ''){
                    $this->vView->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                } else {
                    $this->vView->vImageProfile = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileCode).'">';
                }
                /* END PROFILE IMAGE */            
                
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
                        $this->vView->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1));
                    } else {
                        $this->vView->vImageProfileMenu = '<img class="responsive-img circle" src="data:image/jpeg;base64,'.$this->vProfileData->getImageProfile($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1)).'">';
                        $this->vView->vImageProfileExists = $this->vProfileData->getImageProfileExists($this->vProfileData->getProfileCodeFromUserCode(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Code'), 1));
                    }
                    /* END PROFILE IMAGE */
                
                /********************************/
                /* END AUTHENTICATE USER ACTIVE */
                /********************************/ 
            
                $this->vView->visualize('accountprofileimage');
            }    
/*******************************************************************************************************************************************/
/*******************************************************************************************************************************************/
/*******************************************************************************************************************************************/
/*******************************************************************************************************************************************/
/*******************************************************************************************************************************************/
/*******************************************************************************************************************************************/
		public function account2()
			{
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession('vAuthenticatedSocialNetworkEnlaceme')){
						IdEnSession::timeSession();	
				} else {
                    $this->redireccionar('login');
                }
                /* END VALIDATION TIME SESSION USER */

                $this->vView->vLoggedProfileCode = IdEnSession::getSession('vSessionActiveProfileCode');
                $this->vView->vLoggedProfileName = IdEnSession::getSession('vSessionActiveProfileName');
                $this->vView->vLoggedProfileImage = $this->vLoggedProfileImage;
                
                $this->vProfileCode = IdEnSession::getSession('vSessionActiveProfileCode');
                $this->vUserCode = IdEnSession::getSession('vSessionActiveUserCode');
                
                $this->vView->vProfileNameURL = $this->vProfileData->getProfileNameURL($this->vProfileCode,1);
                $this->vView->vProfileImage = $this->vProfileData->getProfileCropImage(IdEnSession::getSession('vSessionActiveProfileCode'));
                
                $this->vView->vUserNameCode = $this->vProfileData->getProfileUserNameCode($this->vUserCode);
                $this->vView->vOtherNames = $this->vProfileData->getProfileOtherName($this->vUserCode);
                $this->vView->vNames = ucwords($this->vProfileData->getProfileNames($this->vUserCode));
                $this->vView->vLastNames = ucwords($this->vProfileData->getProfileLastNames($this->vUserCode));
                $this->vView->vEmail = $this->vProfileData->getProfileEmail($this->vUserCode);
                $this->vView->vDayBirth = date('d', strtotime($this->vProfileData->getProfileBirthDate($this->vUserCode)));
                $this->vView->vMonthBirth = date('M', strtotime($this->vProfileData->getProfileBirthDate($this->vUserCode)));
                $this->vView->vYearBirth = date('Y', strtotime($this->vProfileData->getProfileBirthDate($this->vUserCode)));
                $this->vView->vCountry = ucwords($this->vProfileData->getProfileCountry($this->vUserCode));
                $this->vView->vCity = ucwords($this->vProfileData->getProfileCity($this->vUserCode));
                
                $this->vView->vProfileDescriptionCode = $this->vProfileData->getProfileDescriptionCode($this->vProfileCode);
                $this->vView->vProfileDescription = $this->vProfileData->getProfileDescription($this->vProfileCode);
                
                $this->vView->vProfileProfessionCode = $this->vProfileData->getProfileProfessionCode($this->vProfileCode);
                $this->vView->vProfileProfession = $this->vProfileData->getProfileProfession($this->vProfileCode);
                                
                $this->vView->vProfessionsList = $this->vProfessionsData->getProfessionsList();
                $this->vView->vProfileActualLocationCode = $this->vProfileData->getProfileActualLocationCode($this->vProfileCode);
                $this->vView->vProfileActualLocation = $this->vProfileData->getProfileActualLocation($this->vProfileCode);
                
				$this->vView->visualize('account');
			}
        
		public function cropimage()
			{
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession('vAuthenticatedSocialNetworkEnlaceme'))
					{
						IdEnSession::timeSession();	
					}
                /* END VALIDATION TIME SESSION USER */
                
                $this->vView->vLoggedProfileCode = IdEnSession::getSession('vSessionActiveProfileCode');
                $this->vView->vLoggedProfileName = IdEnSession::getSession('vSessionActiveProfileName');
                $this->vView->vLoggedProfileImage = $this->vProfileData->getProfileImage(IdEnSession::getSession('vSessionActiveProfileCode'));
                
                $this->vView->vLoggedProfileCodeImage = $this->vProfileData->getProfileCodeImage(IdEnSession::getSession('vSessionActiveProfileCode'));
                $this->vView->vLoggedProfileCropImage = $this->vProfileData->getProfileCropImage(IdEnSession::getSession('vSessionActiveProfileCode'));
                
                $this->vView->visualize('cropimage');
			}        
        
		public function about2($vProfileNameURL = null)
			{
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession('vAuthenticatedSocialNetworkEnlaceme'))
					{
						IdEnSession::timeSession();	
					}
                /* END VALIDATION TIME SESSION USER */
                
                $this->vView->vLoggedProfileCode = IdEnSession::getSession('vSessionActiveProfileCode');
                $this->vView->vLoggedProfileName = IdEnSession::getSession('vSessionActiveProfileName');
                $this->vView->vLoggedProfileImage = $this->vLoggedProfileImage;

                /* BEGIN PROFILE VALIDATION */
                $vProfileNameURL = (string) $vProfileNameURL;
                $vProfileCode = $this->vProfileData->getProfileCodeFromProfileNameURL($vProfileNameURL,1);
                
                
                if(($vProfileCode == null) || ($vProfileCode == '') || ($vProfileCode == 0)){
                    //$message = 'nulo, vacio, 0';
                    if(!IdEnSession::getSession('vAuthenticatedSocialNetworkEnlaceme')){
                            $this->redireccionar();
                        } else {
                        $vProfileCode = IdEnSession::getSession('vSessionActiveProfileCode');
                        $vUserCode = IdEnSession::getSession('vSessionActiveUserCode');                        
                    }
                } else {
                    if($this->vProfileData->verifyExistenseProfile($vProfileCode) == 0){
                        //$message = 'no existe';
                        $vProfileCode = IdEnSession::getSession('vSessionActiveProfileCode');
                        $vUserCode = IdEnSession::getSession('vSessionActiveUserCode');                        
                    } else {
                        //$message = 'es otro';
                        $vProfileCode = (int) $vProfileCode;
                        $vUserCode = $this->vProfileData->getUserCodeFromProfileCode($vProfileCode);
                    }
                }
                /* END PROFILE VALIDATION */
                $this->vView->vProfileNameURL = $this->vProfileData->getProfileNameURL($vProfileCode,1);
                $this->vView->vProfileImage = $this->vProfileData->getProfileImage($vProfileCode);
                $this->vView->vProfileName = $this->vProfileData->getProfileCompleteNames($vUserCode);
                $this->vView->vProfileProfession = $this->vProfileData->getProfileProfession($vProfileCode);
                $this->vView->vProfileDescription = $this->vProfileData->getProfileDescription($vProfileCode);
                $this->vView->vProfilePortfolioImages = $this->vProfileData->getProfilePortfolioImages($vProfileCode);    
                
				$this->vView->visualize('about');
			}
        
		public function portfolio($vProfileNameURL = null)
			{
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession('vAuthenticatedSocialNetworkEnlaceme'))
					{
						IdEnSession::timeSession();	
					}
                /* END VALIDATION TIME SESSION USER */
                
                $this->vView->vLoggedProfileCode = IdEnSession::getSession('vSessionActiveProfileCode');
                $this->vView->vLoggedProfileName = IdEnSession::getSession('vSessionActiveProfileName');
                $this->vView->vLoggedProfileImage = $this->vLoggedProfileImage;
                
                /* BEGIN PROFILE VALIDATION */
                $vProfileNameURL = (string) $vProfileNameURL;
                $vProfileCode = $this->vProfileData->getProfileCodeFromProfileNameURL($vProfileNameURL,1);
                
                
                if(($vProfileCode == null) || ($vProfileCode == '') || ($vProfileCode == 0)){
                    //$message = 'nulo, vacio, 0';
                    if(!IdEnSession::getSession('vAuthenticatedSocialNetworkEnlaceme')){
                            $this->redireccionar();
                        } else {
                        $vProfileCode = IdEnSession::getSession('vSessionActiveProfileCode');
                        $vUserCode = IdEnSession::getSession('vSessionActiveUserCode');                        
                    }
                } else {
                    if($this->vProfileData->verifyExistenseProfile($vProfileCode) == 0){
                        //$message = 'no existe';
                        $vProfileCode = IdEnSession::getSession('vSessionActiveProfileCode');
                        $vUserCode = IdEnSession::getSession('vSessionActiveUserCode');                        
                    } else {
                        //$message = 'es otro';
                        $vProfileCode = (int) $vProfileCode;
                        $vUserCode = $this->vProfileData->getUserCodeFromProfileCode($vProfileCode);
                    }
                }
                /* END PROFILE VALIDATION */
                
                $this->vView->vProfileNameURL = $this->vProfileData->getProfileNameURL($vProfileCode,1);
                $this->vView->vProfileImage = $this->vProfileData->getProfileImage($vProfileCode);
                $this->vView->vProfileName = $this->vProfileData->getProfileCompleteNames($vUserCode);
                $this->vView->vProfileProfession = $this->vProfileData->getProfileProfession($vProfileCode);
                $this->vView->vProfileDescription = $this->vProfileData->getProfileDescription($vProfileCode);
                $this->vView->vProfilePortfolioImages = $this->vProfileData->getProfilePortfolioImages($vProfileCode);
                
				$this->vView->visualize('portfolio');
			}       
        
		public function regProfileImage(){
            /* BEGIN VALIDATION TIME SESSION USER */
            if(IdEnSession::getSession('vAuthenticatedSocialNetworkEnlaceme')){
                    IdEnSession::timeSession();	
            } else {
                $this->redireccionar('login');
            }
            /* END VALIDATION TIME SESSION USER */
            
			if($_SERVER['REQUEST_METHOD'] == 'POST')
				{				
					$vImageCode = (int) $_POST['vImageCode'];
                    $vUserCode = IdEnSession::getSession('vSessionActiveUserCode');
                    $vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($vUserCode);
                    
                    $vActive = 2;
                    $vUpdateProfileImageActive = $this->vProfileData->updateProfileImageActive($vProfileCode, $vActive);
                    $vActive = 1;
                    
                    $vRegProfileImage = $this->vProfileData->regProfileImage($vProfileCode, $vImageCode, $vActive);
                    
                    echo $vRegProfileImage;             
				}
			}        
        
		public function regAccountProfileData(){
            /* BEGIN VALIDATION TIME SESSION USER */
            if(IdEnSession::getSession('vAuthenticatedSocialNetworkEnlaceme')){
                    IdEnSession::timeSession();	
            } else {
                $this->redireccionar('login');
            }
            /* END VALIDATION TIME SESSION USER */
            
			if($_SERVER['REQUEST_METHOD'] == 'POST')
				{				
					$vUserNameCode = (string) $_POST['userNameCode'];
                    $vUserCode = IdEnSession::getSession('vSessionActiveUserCode');
                    $vOtherNames = (string) trim(strtolower($_POST['othername']));
					$vNames  = (string) trim(strtolower($_POST['firstnames']));
                    $vLastNames = (string) trim(strtolower($_POST['lastnames']));
                    $vEmail = (string) trim(strtolower($_POST['email']));
                    $vBirthDate = $_POST['year'].'/'.$_POST['month'].'/'.$_POST['day'];
                    $vCountry = (string) trim(strtolower($_POST['country']));
                    $vCity = (string) trim(strtolower($_POST['city']));
                    
                    $vProfileCodeUpdated = $this->vProfileData->updateProfileData($vUserNameCode, $vUserCode, $vNames, $vLastNames, $vOtherNames, $vBirthDate, $vCountry, $vCity);
                    
                    echo json_encode($vProfileCodeUpdated);             
				}
			}
        
		public function regProfessionProfileData(){
            /* BEGIN VALIDATION TIME SESSION USER */
            if(IdEnSession::getSession('vAuthenticatedSocialNetworkEnlaceme')){
                    IdEnSession::timeSession();	
            } else {
                $this->redireccionar('login');
            }
            /* END VALIDATION TIME SESSION USER */
            
			if($_SERVER['REQUEST_METHOD'] == 'POST')
				{
                    $vProfileCode  = IdEnSession::getSession('vSessionActiveProfileCode');
                    $vUserCode = IdEnSession::getSession('vSessionActiveUserCode');
                    
					$vProfessionCode = (int) $_POST['professioncode'];
                    $vProfession = (int) $_POST['professions'];
                    $vNewProfession = (string) trim(strtolower($_POST['newprofession']));
                    
                    $vDescriptionCode = (int) $_POST['descriptioncode'];
					$vDescription  = (string) trim(strtolower($_POST['description']));
                    
                    $vActualLocationCode = (int) $_POST['actuallocationcode'];
                    $vLiveCountry = (string) trim(strtolower($_POST['livecountry']));
                    $vLiveCity = (string) trim(strtolower($_POST['livecity']));                   
                    $vLiveZone = (string) trim(strtolower($_POST['livezone']));
                    
                    $vActive = 1;
                    
                    // PROFESSION
                    if($vProfessionCode === 0){
                        if($vProfession === 0){
                            $vNewProfessionCode = $this->vProfessionsData->regNewProfession($vNewProfession, $vActive);
                            $vAddProfession = $this->vProfessionsData->regProfileProfession($vProfileCode, $vNewProfessionCode, $vActive);
                            echo json_encode('Nueva profesion registrada!');
                        } else {
                            $vAddProfession = $this->vProfessionsData->regProfileProfession($vProfileCode, $vProfession, $vActive);
                            echo json_encode('profesion registrada');
                        }
                    } elseif($vProfessionCode > 0){
                        if($vNewProfession != null){
                            $vNewProfessionCode = $this->vProfessionsData->regNewProfession($vNewProfession, $vActive);
                            $vUpdateProfession = $this->vProfessionsData->updateProfileProfession($vProfileCode, $vNewProfessionCode);
                            echo json_encode('nuevo profesion registrada y actualizada');
                        } else {
                            $vUpdateProfession = $this->vProfessionsData->updateProfileProfession($vProfileCode, $vProfession);
                            echo json_encode('profesion actualizada');
                        }
                    }
                    
                    // DESCRIPTION
                    if($vDescriptionCode == 0){
                        if($vDescription != '' || $vDescription != null){
                            $vRegDescription = $this->vProfileData->regProfileDescription($vProfileCode, $vDescription, $vActive);
                            echo json_encode('description registrada');
                        }
                    } elseif($vDescriptionCode > 0){
                        $vUpdateDescription = $this->vProfileData->updateProfileDescription($vDescriptionCode, $vProfileCode, $vDescription, $vActive);
                        echo json_encode('description actualizada');
                    }
                    
                    // ACTUAL LOCATION
                    if($vActualLocationCode == 0){
                        if(($vLiveCountry != '' || $vLiveCountry != null) || ($vLiveCity != '' || $vLiveCity != null) || ($vLiveZone != '' || $vLiveZone != null)){
                            $vRegActualLocation = $this->vProfileData->regProfileActualLocation($vProfileCode, $vLiveCountry, $vLiveCity, $vLiveZone, $vActive);
                            echo json_encode('ActualLocation registrada');
                        }
                    } elseif($vActualLocationCode > 0){
                        $vUpdateActualLocation = $this->vProfileData->updateProfileActualLocation($vActualLocationCode, $vProfileCode, $vLiveCountry, $vLiveCity, $vLiveZone, $vActive);
                        echo json_encode('ActualLocation actualizada');
                    }
                    
                    //echo json_encode('['.$vProfession.' - '.$vNewProfession.' - '.$vProfessionCode.']-['.$vDescriptionCode.' - '.$vDescription.']-['.$vActualLocationCode.' - '.$vLiveCountry.' - '.$vLiveCity.' - '.$vLiveZone.']');             
				}
			}        
        
	}
?>