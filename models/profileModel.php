<?php

class profileModel extends IdEnModel
	{
		public function __construct()
			{
				parent::__construct();
			}
        /* BEGIN SELECT STATEMENT MYSQL QUERY */
		public function verifyExistenseProfile($vProfileCode)
			{
				$vProfileCode = (int) $vProfileCode;

				$vVerifyExistenseProfile = $this->vDataBase->query("SELECT
                                                                        count(*)
                                                                    FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_codprofile = $vProfileCode;");
				return $vVerifyExistenseProfile->fetchColumn();
				$vVerifyExistenseProfile->close();
			}
    
		public function getProfileUserNameCode($vUserCode)
			{
				$vUserCode = (int) $vUserCode;

				$vProfileUserNameCode = $this->vDataBase->query("SELECT
                                                            tb_enlaceme_usernames.n_codusername
                                                        FROM tb_enlaceme_users, tb_enlaceme_usernames
                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                    AND tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vProfileUserNameCode->fetchColumn();
				$vProfileUserNameCode->close();
			}
        
		public function getProfileNameURL($vProfileCode, $vProfileType)
			{
				$vProfileCode = (int) $vProfileCode;
                $vProfileType = (int) $vProfileType;

				$vProfileName = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profiles.c_profilename
                                                            FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_codprofile = $vProfileCode
                                                                    AND tb_enlaceme_profiles.n_profiletype = $vProfileType
                                                                    AND tb_enlaceme_profiles.n_active = 1;");
				return $vProfileName->fetchColumn();
				$vProfileName->close();
			}
        
		public function getProfileCodeFromProfileNameURL($vProfileNameURL, $vProfileType)
			{
				$vProfileNameURL = (string) $vProfileNameURL;
                $vProfileType = (int) $vProfileType;

				$vProfileCodeFromProfileNameURL = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profiles.n_codprofile
                                                            FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.c_profilename = '".$vProfileNameURL."'
                                                                    AND tb_enlaceme_profiles.n_profiletype = $vProfileType
                                                                    AND tb_enlaceme_profiles.n_active = 1;");
				return $vProfileCodeFromProfileNameURL->fetchColumn();
				$vProfileCodeFromProfileNameURL->close();
			}        
        
        public function getProfileImage($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
                
				$vProfileImage = $this->vDataBase->query("SELECT
                                                              (SELECT
                                                                  tb_enlaceme_images.b_image_content
                                                                FROM tb_enlaceme_images, tb_enlaceme_profileimages
                                                                  WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage
                                                                    AND tb_enlaceme_profileimages.n_active = 1
                                                                    AND tb_enlaceme_profileimages.n_codprofile = tb_enlaceme_profiles.n_codprofile) b_image_content
                                                            FROM tb_enlaceme_profiles
                                                              WHERE tb_enlaceme_profiles.n_codprofile = $vProfileCode;");
				return $vProfileImage->fetchColumn();
				$vProfileImage->close();
			}
        
        public function getProfileCropImage($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
                
				$vProfileCropImage = $this->vDataBase->query("SELECT
                                                              (SELECT
                                                                  tb_enlaceme_images.b_image_crop
                                                                FROM tb_enlaceme_images, tb_enlaceme_profileimages
                                                                  WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage
                                                                    AND tb_enlaceme_profileimages.n_active = 1
                                                                    AND tb_enlaceme_profileimages.n_codprofile = tb_enlaceme_profiles.n_codprofile) b_image_crop
                                                            FROM tb_enlaceme_profiles
                                                              WHERE tb_enlaceme_profiles.n_codprofile = $vProfileCode;");
				return $vProfileCropImage->fetchColumn();
				$vProfileCropImage->close();
			}        
        
        public function getProfileCodeImage($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
                
				$vProfileCodeImage = $this->vDataBase->query("SELECT
                                                              (SELECT
                                                                  tb_enlaceme_images.n_codimage
                                                                FROM tb_enlaceme_images, tb_enlaceme_profileimages
                                                                  WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage
                                                                    AND tb_enlaceme_profileimages.n_active = 1
                                                                    AND tb_enlaceme_profileimages.n_codprofile = tb_enlaceme_profiles.n_codprofile) n_codimage
                                                            FROM tb_enlaceme_profiles
                                                              WHERE tb_enlaceme_profiles.n_codprofile = $vProfileCode;");
				return $vProfileCodeImage->fetchColumn();
				$vProfileCodeImage->close();
			}        
        
        public function getProfilePortfolioImages($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
                
				$vProfilePortfolioImages= $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profileimages.n_codprofileimage,
                                                                (SELECT
                                                                    tb_enlaceme_images.c_image_name
                                                                  FROM tb_enlaceme_images
                                                                    WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage) c_image_name,
                                                                (SELECT
                                                                    tb_enlaceme_images.b_image_content
                                                                  FROM tb_enlaceme_images
                                                                    WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage) b_image_content
                                                            FROM tb_enlaceme_profileimages
                                                                WHERE tb_enlaceme_profileimages.n_codprofile = $vProfileCode;");
				return $vProfilePortfolioImages->fetchAll();
				$vProfilePortfolioImages->close();
			}
        
		public function getProfileCompleteNames($vUserCode)
			{
				$vUserCode = (int) $vUserCode;

				$vProfileCompleteNames = $this->vDataBase->query("SELECT
                                                            CONCAT(tb_enlaceme_usernames.c_names,' ',tb_enlaceme_usernames.c_lastnames) vUserNames
                                                        FROM tb_enlaceme_users, tb_enlaceme_usernames
                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                    AND tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vProfileCompleteNames->fetchColumn();
				$vProfileCompleteNames->close();
			}        
        
		public function getProfileOtherName($vUserCode)
			{
				$vUserCode = (int) $vUserCode;

				$vProfileOtherName = $this->vDataBase->query("SELECT tb_enlaceme_usernames.c_othername
                                                        FROM tb_enlaceme_users, tb_enlaceme_usernames
                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                    AND tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vProfileOtherName->fetchColumn();
				$vProfileOtherName->close();
			}
        
		public function getProfileNames($vUserCode)
			{
				$vUserCode = (int) $vUserCode;

				$vProfileNames = $this->vDataBase->query("SELECT tb_enlaceme_usernames.c_names
                                                        FROM tb_enlaceme_users, tb_enlaceme_usernames
                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                    AND tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vProfileNames->fetchColumn();
				$vProfileNames->close();
			}
        
		public function getProfileLastNames($vUserCode)
			{
				$vUserCode = (int) $vUserCode;

				$vProfileLastNames = $this->vDataBase->query("SELECT tb_enlaceme_usernames.c_lastnames
                                                        FROM tb_enlaceme_users, tb_enlaceme_usernames
                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                    AND tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vProfileLastNames->fetchColumn();
				$vProfileLastNames->close();
			}
        
		public function getProfileBirthDate($vUserCode)
			{
				$vUserCode = (int) $vUserCode;

				$vProfileLastNames = $this->vDataBase->query("SELECT tb_enlaceme_usernames.d_birthdate
                                                        FROM tb_enlaceme_users, tb_enlaceme_usernames
                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                    AND tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vProfileLastNames->fetchColumn();
				$vProfileLastNames->close();
			}
        
		public function getProfileCountry($vUserCode)
			{
				$vUserCode = (int) $vUserCode;

				$vProfileCountry = $this->vDataBase->query("SELECT tb_enlaceme_usernames.c_country
                                                        FROM tb_enlaceme_users, tb_enlaceme_usernames
                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                    AND tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vProfileCountry->fetchColumn();
				$vProfileCountry->close();
			}
        
		public function getProfileCity($vUserCode)
			{
				$vUserCode = (int) $vUserCode;

				$vProfileCity = $this->vDataBase->query("SELECT tb_enlaceme_usernames.c_city
                                                        FROM tb_enlaceme_users, tb_enlaceme_usernames
                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                    AND tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vProfileCity->fetchColumn();
				$vProfileCity->close();
			}        
        
		public function getProfileEmail($vUserCode)
			{
				$vUserCode = (int) $vUserCode;

				$vProfileEmail = $this->vDataBase->query("SELECT tb_enlaceme_users.c_email
                                                            FROM tb_enlaceme_users
                                                    WHERE tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vProfileEmail->fetchColumn();
				$vProfileEmail->close();
			}
        
		public function getProfileDescriptionCode($vProfileCode)
			{
				$vProfileCode = (int) $vProfileCode;

				$vProfileDescriptionCode = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_profiledescription.n_codprofiledescription
                                                                    FROM tb_enlaceme_profiledescription
                                                                        WHERE tb_enlaceme_profiledescription.n_codprofile = $vProfileCode");
				return $vProfileDescriptionCode->fetchColumn();
				$vProfileDescriptionCode->close();
			}
        
		public function getProfileDescription($vProfileCode)
			{
				$vProfileCode = (int) $vProfileCode;

				$vProfileDescription = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_profiledescription.c_profile_description
                                                                    FROM tb_enlaceme_profiledescription
                                                                        WHERE tb_enlaceme_profiledescription.n_codprofile = $vProfileCode");
				return $vProfileDescription->fetchColumn();
				$vProfileDescription->close();
			}
        
		public function getProfileActualLocationCode($vProfileCode)
			{
				$vProfileCode = (int) $vProfileCode;

				$vProfileActualLocationCode = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_profileactuallocation.n_codprofileactuallocation
                                                                      FROM tb_enlaceme_profileactuallocation
                                                                        WHERE tb_enlaceme_profileactuallocation.n_codprofile = $vProfileCode");
				return $vProfileActualLocationCode->fetchColumn();
				$vProfileActualLocationCode->close();
			}
        
		public function getProfileActualLocation($vProfileCode)
			{
				$vProfileCode = (int) $vProfileCode;

				$vProfileActualLocation = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_profileactuallocation.c_profile_livecountry,
                                                                        tb_enlaceme_profileactuallocation.c_profile_livecity,
                                                                        tb_enlaceme_profileactuallocation.c_profile_livezone
                                                                      FROM tb_enlaceme_profileactuallocation
                                                                        WHERE tb_enlaceme_profileactuallocation.n_codprofile = $vProfileCode");
				return $vProfileActualLocation->fetchAll();
				$vProfileActualLocation->close();
			}        
        
		public function getProfileProfessionCode($vProfileCode)
			{
				$vProfileCode = (int) $vProfileCode;

				$vProfileProfessionCode = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_profileprofessions.n_codprofileprofession
                                                                    FROM tb_enlaceme_profileprofessions
                                                                        WHERE tb_enlaceme_profileprofessions.n_codprofile = $vProfileCode;");
				return $vProfileProfessionCode->fetchColumn();
				$vProfileProfessionCode->close();
			}
        
		public function getProfileProfession($vProfileCode)
			{
				$vProfileCode = (int) $vProfileCode;

				$vProfileProfession = $this->vDataBase->query("SELECT
                                                                        (SELECT
                                                                                tb_enlaceme_professions.n_codprofession
                                                                            FROM tb_enlaceme_professions
                                                                                WHERE tb_enlaceme_professions.n_codprofession = tb_enlaceme_profileprofessions.n_codprofession) n_codprofession,
                                                                        (SELECT
                                                                                tb_enlaceme_professions.c_profession_name
                                                                            FROM tb_enlaceme_professions
                                                                                WHERE tb_enlaceme_professions.n_codprofession = tb_enlaceme_profileprofessions.n_codprofession) c_profession_name
                                                                    FROM tb_enlaceme_profileprofessions
                                                                        WHERE tb_enlaceme_profileprofessions.n_codprofile = $vProfileCode;");
				return $vProfileProfession->fetchAll();
				$vProfileProfession->close();
			}        
    
		public function getUserCodeFromProfileCode($vProfileCode)
			{
				$vProfileCode = (int) $vProfileCode;

				$vUserCodeFromProfileCode = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_profiles.n_coduser
                                                                    FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_codprofile = $vProfileCode
                                                                AND tb_enlaceme_profiles.n_profiletype = 1;");
				return $vUserCodeFromProfileCode->fetchColumn();
				$vUserCodeFromProfileCode->close();
			}

        public function getProfileCodeFromUserCode($vUserCode)
			{
				$vUserCode = (int) $vUserCode;

				$vProfileCodeFromUserCode = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_profiles.n_codprofile
                                                                    FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_coduser = $vUserCode
                                                                AND tb_enlaceme_profiles.n_profiletype = 1;");
				return $vProfileCodeFromUserCode->fetchColumn();
				$vProfileCodeFromUserCode->close();
			}
        /* END SELECT STATEMENT MYSQL QUERY */
        
        /* BEGIN INSERT STATEMENT MYSQL QUERY */
		public function regProfileImage($vProfileCode, $vImageCode, $vActive){
                $vProfileCode = (int) $vProfileCode;
                $vImageCode = (int) $vImageCode;
                $vActive = (int) $vActive;
                $vUserCreate = (string) IdEnSession::getSession('vSessionActiveUserName');

				$this->vDataBase->prepare("INSERT INTO tb_enlaceme_profileimages(n_codprofile, n_codimage, n_active, c_usercreate, d_datecreate)
																VALUES(:n_codprofile, :n_codimage, :n_active, :c_usercreate, NOW())")
                                        ->execute(
                                                array(
                                                    ':n_codprofile' => $vProfileCode,
                                                    ':n_codimage' => $vImageCode,
                                                    ':n_active' => $vActive,
                                                    ':c_usercreate' => $vUserCreate,
                                                ));            
            
                $vLastIdRegisterProfileImage = $this->vDataBase->lastInsertId();
                return $vLastIdRegisterProfileImage;
                $vLastIdRegisterProfileImage->close();
			}
        
		public function registerProfileData($vUserRegisterCode, $vProfileNameURL, $vProfileType, $vActive, $vUserCreate){
                $vUserRegisterCode = (int) $vUserRegisterCode;
                $vProfileNameURL = (string) $vProfileNameURL;
                $vProfileType = (int) $vProfileType;
                $vActive = (int) $vActive;
                $vUserCreate = (string) $vUserCreate;

				$this->vDataBase->prepare("INSERT INTO tb_enlaceme_profiles(n_coduser, c_profilename, n_profiletype, n_active, c_usercreate, d_datecreate)
																VALUES(:n_coduser, :c_profilename, :n_profiletype, :n_active, :c_usercreate, NOW())")
                                        ->execute(
                                                array(
                                                    ':n_coduser' => $vUserRegisterCode,
                                                    ':c_profilename' => $vProfileNameURL,
                                                    ':n_profiletype' => $vProfileType,
                                                    ':n_active' => $vActive,
                                                    ':c_usercreate' => $vUserCreate,
                                                ));            
            
                $vLastIdRegisterUser = $this->vDataBase->lastInsertId();
                return $vLastIdRegisterUser;
                $vLastIdRegisterUser->close();
			}
        
		public function regProfileDescription($vProfileCode, $vDescription, $vActive){
                $vProfileCode = (int) $vProfileCode;
                $vDescription = (string) $vDescription;
                $vActive = (int) $vActive;
                $vUserCreate = (string) IdEnSession::getSession('vSessionActiveUserName');

				$this->vDataBase->prepare("INSERT INTO tb_enlaceme_profiledescription(n_codprofile, c_profile_description, n_active, c_usercreate, d_datecreate)
																VALUES(:n_codprofile, :c_profile_description, :n_active, :c_usercreate, NOW())")
                                        ->execute(
                                                array(
                                                    ':n_codprofile' => $vProfileCode,
                                                    ':c_profile_description' => $vDescription,
                                                    ':n_active' => $vActive,
                                                    ':c_usercreate' => $vUserCreate,
                                                ));            
            
                $vLastIdRegisterProfileDescription = $this->vDataBase->lastInsertId();
                return $vLastIdRegisterProfileDescription;
                $vLastIdRegisterProfileDescription->close();
			}
        
		public function regProfileActualLocation($vProfileCode, $vLiveCountry, $vLiveCity, $vLiveZone, $vActive){
                $vProfileCode = (int) $vProfileCode;
                $vLiveCountry = (string) $vLiveCountry;
                $vLiveCity = (string) $vLiveCity;
                $vLiveZone = (string) $vLiveZone;
                $vActive = (int) $vActive;
                $vUserCreate = (string) IdEnSession::getSession('vSessionActiveUserName');

				$this->vDataBase->prepare("INSERT INTO tb_enlaceme_profileactuallocation(n_codprofile,
                                                                                        c_profile_livecountry, c_profile_livecity, c_profile_livezone,
                                                                                        n_active, c_usercreate, d_datecreate)
																                VALUES(:n_codprofile,
                                                                                        :c_profile_livecountry, :c_profile_livecity, :c_profile_livezone,
                                                                                        :n_active, :c_usercreate, NOW())")
                                        ->execute(
                                                array(
                                                    ':n_codprofile' => $vProfileCode,
                                                    ':c_profile_livecountry' => $vLiveCountry,
                                                    ':c_profile_livecity' => $vLiveCity,
                                                    ':c_profile_livezone' => $vLiveZone,
                                                    ':n_active' => $vActive,
                                                    ':c_usercreate' => $vUserCreate,
                                                ));            
            
                $vLastIdRegisterProfileActualLocation = $this->vDataBase->lastInsertId();
                return $vLastIdRegisterProfileActualLocation;
                $vLastIdRegisterProfileActualLocation->close();
			}        
        /* END INSERT STATEMENT MYSQL QUERY */
        
        /* BEGIN UPDATE STATEMENT MYSQL QUERY */
		public function updateProfileData($vUserNameCode, $vUserCode, $vNames, $vLastNames, $vOtherNames, $vBirthDate, $vCountry, $vCity){
                
                $vUserNameCode = (int) $vUserNameCode;
                $vUserCode = (int) $vUserCode;
                $vNames = (string) $vNames;
                $vLastNames = (string) $vLastNames;
                $vOtherNames = (string) $vOtherNames;
                $vBirthDate = $vBirthDate;
                $vCountry = (string) $vCountry;
                $vCity = (string) $vCity;

                $vUserMod = (string) IdEnSession::getSession('vSessionActiveUserName');
          
                $this->vDataBase->prepare("UPDATE tb_enlaceme_usernames SET c_names = :c_names,
                                                                        c_lastnames = :c_lastnames,
                                                                        c_othername = :c_othername,
                                                                        d_birthdate = :d_birthdate,
                                                                        c_country = :c_country,
                                                                        c_city = :c_city,
                                                                        c_usermod = :c_usermod,
                                                                        d_datemod = NOW()
                                                                        WHERE n_codusername = :n_codusername
                                                                        AND n_coduser = :n_coduser")
                                ->execute(
                                            array(
                                                    ':c_names'=>$vNames,
                                                    ':c_lastnames'=>$vLastNames,
                                                    ':c_othername'=>$vOtherNames,
                                                    ':d_birthdate'=>$vBirthDate,
                                                    ':c_country'=>$vCountry,
                                                    ':c_city'=>$vCity,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_codusername'=>$vUserNameCode,
                                                    ':n_coduser'=>$vUserCode
                                                 )
                                         );           
            
                $vUpdateProfileData = $this->vDataBase->lastInsertId();
                return $vUpdateProfileData;
                $vUpdateProfileData->close();
			}
        
		public function updateProfileDescription($vDescriptionCode, $vProfileCode, $vDescription, $vActive){
                
                $vDescriptionCode = (int) $vDescriptionCode;
                $vProfileCode = (int) $vProfileCode;
                $vDescription = (string) $vDescription;
                $vActive = (int) $vActive;

                $vUserMod = (string) IdEnSession::getSession('vSessionActiveUserName');
          
                $vProfileDescription = $this->vDataBase->prepare("UPDATE tb_enlaceme_profiledescription SET c_profile_description = :c_profile_description,
                                                                        c_usermod = :c_usermod,
                                                                        d_datemod = NOW()
                                                                        WHERE n_codprofile = :n_codprofile
                                                                        AND n_codprofiledescription = :n_codprofiledescription")
                                ->execute(
                                            array(
                                                    ':c_profile_description'=>$vDescription,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_codprofile'=>$vProfileCode,
                                                    ':n_codprofiledescription'=>$vDescriptionCode
                                                 )
                                         );           
            
                return $vProfileDescription;
                $vProfileDescription->close();
			} 
        
		public function updateProfileActualLocation($vActualLocationCode, $vProfileCode, $vLiveCountry, $vLiveCity, $vLiveZone, $vActive){
                
                $vActualLocationCode = (int) $vActualLocationCode;
                $vProfileCode = (int) $vProfileCode;
                $vLiveCountry = (string) $vLiveCountry;
                $vLiveCity = (string) $vLiveCity;
                $vLiveZone = (string) $vLiveZone;
                $vActive = (int) $vActive;

                $vUserMod = (string) IdEnSession::getSession('vSessionActiveUserName');
          
                $vProfileActualLocation = $this->vDataBase->prepare("UPDATE tb_enlaceme_profileactuallocation SET c_profile_livecountry = :c_profile_livecountry,
                                                                        c_profile_livecity = :c_profile_livecity,
                                                                        c_profile_livezone = :c_profile_livezone,
                                                                        c_usermod = :c_usermod,
                                                                        d_datemod = NOW()
                                                                        WHERE n_codprofile = :n_codprofile
                                                                        AND n_codprofileactuallocation = :n_codprofileactuallocation")
                                ->execute(
                                            array(
                                                    ':c_profile_livecountry'=>$vLiveCountry,
                                                    ':c_profile_livecity'=>$vLiveCity,
                                                    ':c_profile_livezone'=>$vLiveZone,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_codprofile'=>$vProfileCode,
                                                    ':n_codprofileactuallocation'=>$vActualLocationCode
                                                 )
                                         );           
            
                return $vProfileActualLocation;
                $vProfileActualLocation->close();
			}
        
		public function updateProfileImageActive($vProfileCode, $vActive){
                
                $vProfileCode = (int) $vProfileCode;
                $vActive = (int) $vActive;

                $vUserMod = (string) IdEnSession::getSession('vSessionActiveUserName');
          
                $vProfileActualLocation = $this->vDataBase->prepare("UPDATE tb_enlaceme_profileimages SET n_active = :n_active,
                                                                        c_usermod = :c_usermod,
                                                                        d_datemod = NOW()
                                                                        WHERE n_codprofile = :n_codprofile;")
                                ->execute(
                                            array(
                                                    ':n_active'=>$vActive,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_codprofile'=>$vProfileCode
                                                 )
                                         );           
            
                return $vProfileImageActive;
                $vProfileImageActive->close();
			}         
        /* END UPDATE STATEMENT MYSQL QUERY */

	}

?>