<?Php

class actionprofileController extends IdEnController
	{		
		public function __construct(){
                parent::__construct();
            
                $this->vUsersData = $this->LoadModel('users');
                $this->vProfileData = $this->LoadModel('profile');            
			}
			
		public function index(){
                $this->redirect('profile');
			}
    
		public function actionAccountData(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $vUserCode = (int) $_POST['vUserCode'];
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
                $this->vUserDateBirth = date_format(date_create($this->vUsersData->getUserDateBirthFromUserCode($this->vUserCode)), 'd/m/Y');
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
                
                /*if($vUserDateBirth != $this->vUserDateBirth){
                    
                }
                
                if($vUserCountry != $this->vUserCountry){
                    
                }
                
                if($vUserCity != $this->vUserCity){
                    
                }
                
                if($vUserDescription != $this->vUserDescription){
                    
                }*/                
                
                //echo 'Estamos aqui';
            }
        }
	}
?>