<?php

class profileModel extends IdEnModel
	{
		public function __construct(){
				parent::__construct();
			}

        /* BEGIN SELECT STATEMENT QUERY  */
    
		public function getProfileCodeExists($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
            
				$vResultProfileCodeExists = $this->vDataBase->query("SELECT
                                                                COUNT(*)
                                                            FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_codprofile = $vProfileCode;");
				return $vResultProfileCodeExists->fetchColumn();
				$vResultProfileCodeExists->close();
			}    
    
		public function getProfileCodeIfNameExists($vProfileName)
            {
                $vProfileName = (string) $vProfileName;
            
				$vResultProfileNameExists = $this->vDataBase->query("SELECT
                                                                        IF(tb_enlaceme_profiles.n_codprofile IS NULL,0,tb_enlaceme_profiles.n_codprofile) AS n_codprofile
                                                                    FROM tb_enlaceme_users, tb_enlaceme_usernames, tb_enlaceme_profiles
                                                                        WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                                            AND tb_enlaceme_usernames.n_coduser = tb_enlaceme_profiles.n_coduser
                                                                            AND (tb_enlaceme_usernames.c_othername = '$vProfileName' OR tb_enlaceme_profiles.c_profilename = '$vProfileName');");
				return $vResultProfileNameExists->fetchColumn();
				$vResultProfileNameExists->close();
			}
    
		public function getUserCodeFromProfileCode($vProfileCode)
            {
                $vProfileCode = (int) $vProfileCode;
            
				$vResultUserCodeFromProfileCode = $this->vDataBase->query("SELECT
                                                                            tb_enlaceme_profiles.n_coduser
                                                                        FROM tb_enlaceme_profiles
                                                                            WHERE tb_enlaceme_profiles.n_codprofile = $vProfileCode
                                                                                AND tb_enlaceme_profiles.n_active = 1");
				return $vResultUserCodeFromProfileCode->fetchColumn();
				$vResultUserCodeFromProfileCode->close();
			}    
    
		public function getProfileCodeFromUserCode($vUserCode, $vProfileType)
			{
                $vUserCode = (int) $vUserCode;
                $vProfileType = (int) $vProfileType;
            
				$vResultProfileCodeFromUserCode = $this->vDataBase->query("SELECT
                                                                            tb_enlaceme_profiles.n_codprofile
                                                                        FROM tb_enlaceme_profiles
                                                                            WHERE tb_enlaceme_profiles.n_coduser = $vUserCode
                                                                                AND tb_enlaceme_profiles.n_profiletype = $vProfileType;");
				return $vResultProfileCodeFromUserCode->fetchColumn();
				$vResultProfileCodeFromUserCode->close();
			}
    
		public function getProfileDescriptionExists($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
				
				$vResultProfileDescriptionExists = $this->vDataBase->query("SELECT
                                                                                    count(tb_enlaceme_profiledescription.n_codprofiledescription)
                                                                                FROM tb_enlaceme_profiledescription
                                                                                    WHERE tb_enlaceme_profiledescription.n_codprofile = $vProfileCode
                                                                                        AND tb_enlaceme_profiledescription.n_active = 1");
				return $vResultProfileDescriptionExists->fetchColumn();
				$vResultProfileDescriptionExists->close();
			}     

		public function getProfileDescriptionFromProfileCode($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
				
				$vResultProfileDescriptionFromProfileCode = $this->vDataBase->query("SELECT
                                                                                        tb_enlaceme_profiledescription.c_profile_description
                                                                                    FROM tb_enlaceme_profiledescription
                                                                                        WHERE tb_enlaceme_profiledescription.n_codprofile = $vProfileCode
                                                                                            AND tb_enlaceme_profiledescription.n_active = 1");
				return $vResultProfileDescriptionFromProfileCode->fetchColumn();
				$vResultProfileDescriptionFromProfileCode->close();
			}
    
		public function getProfileProfessionExists($vProfileCode, $vProfessionCode)
			{
                $vProfileCode = (int) $vProfileCode;
                $vProfessionCode = (int) $vProfessionCode;
				
				$vResultProfileProfessionExists = $this->vDataBase->query("SELECT
                                                                                count(tb_enlaceme_profileprofessions.n_codprofileprofession)
                                                                            FROM tb_enlaceme_profileprofessions
                                                                                WHERE tb_enlaceme_profileprofessions.n_codprofile = $vProfileCode
                                                                                    AND tb_enlaceme_profileprofessions.n_codprofession = $vProfessionCode");
				return $vResultProfileProfessionExists->fetchColumn();
				$vResultProfileProfessionExists->close();
			}
    
		public function getProfileProfessions($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
            
				$vResultProfileProfessions = $this->vDataBase->query("SELECT
                                                                            tb_enlaceme_profileprofessions.n_codprofileprofession,
                                                                            tb_enlaceme_profileprofessions.n_codprofession,
                                                                            (SELECT
                                                                                  tb_enlaceme_professions.c_profession_name
                                                                                FROM tb_enlaceme_professions
                                                                                  WHERE tb_enlaceme_professions.n_codprofession = tb_enlaceme_profileprofessions.n_codprofession) AS c_profession_name
                                                                        FROM tb_enlaceme_profileprofessions
                                                                            WHERE tb_enlaceme_profileprofessions.n_codprofile = $vProfileCode;");
				return $vResultProfileProfessions->fetchAll();
				$vResultProfileProfessions->close();
			}
    
		public function getProfileImages($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
            
				$vResultProfileImages = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_profileimages.n_codprofileimage,
                                                                        (SELECT
                                                                          tb_enlaceme_images.n_codimage
                                                                            FROM tb_enlaceme_images
                                                                              WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage) AS n_codimage,
                                                                        (SELECT
                                                                          tb_enlaceme_images.c_image_name
                                                                            FROM tb_enlaceme_images
                                                                              WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage) AS c_image_name,
                                                                        (SELECT
                                                                          tb_enlaceme_images.b_image_content
                                                                            FROM tb_enlaceme_images
                                                                              WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage) AS b_image_content,
                                                                        (SELECT
                                                                          tb_enlaceme_images.n_image_size
                                                                            FROM tb_enlaceme_images
                                                                              WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage) AS n_image_size,
                                                                        (SELECT
                                                                          tb_enlaceme_images.c_image_type
                                                                            FROM tb_enlaceme_images
                                                                              WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage) AS c_image_type,
                                                                        (SELECT
                                                                          tb_enlaceme_images.n_active
                                                                            FROM tb_enlaceme_images
                                                                              WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage) AS n_activeimg,
                                                                        tb_enlaceme_profileimages.n_active,
                                                                        tb_enlaceme_profileimages.d_datecreate
                                                                    FROM tb_enlaceme_profileimages
                                                                        WHERE tb_enlaceme_profileimages.n_codprofile = $vProfileCode
                                                                            ORDER BY n_codprofileimage DESC;");
				return $vResultProfileImages->fetchAll();
				$vResultProfileImages->close();
			}
    
		public function getImageProfile($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
            
				$vResultImageProfile = $this->vDataBase->query("SELECT
                                                                    (SELECT
                                                                      tb_enlaceme_images.b_image_content
                                                                        FROM tb_enlaceme_images
                                                                          WHERE tb_enlaceme_images.n_codimage = tb_enlaceme_profileimages.n_codimage) AS b_image_content
                                                                    FROM tb_enlaceme_profileimages
                                                                        WHERE tb_enlaceme_profileimages.n_codprofile = $vProfileCode
                                                                            AND tb_enlaceme_profileimages.n_active = 1
                                                                                ORDER BY n_codprofileimage DESC;");
				return $vResultImageProfile->fetchColumn();
				$vResultImageProfile->close();
			}
    
		public function getImageProfileExists($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
            
				$vResultImageProfileExists = $this->vDataBase->query("SELECT
                                                                            COUNT(*)
                                                                        FROM tb_enlaceme_profileimages
                                                                            WHERE tb_enlaceme_profileimages.n_codprofile = $vProfileCode
                                                                                AND tb_enlaceme_profileimages.n_active = 1
                                                                                    ORDER BY n_codprofileimage DESC;");
				return $vResultImageProfileExists->fetchColumn();
				$vResultImageProfileExists->close();
			}    
    
		public function getProfileImageCode($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
            
				$vResultProfileImageCode = $this->vDataBase->query("SELECT
                                                                    IF(tb_enlaceme_profileimages.n_codprofileimage IS NULL,0,tb_enlaceme_profileimages.n_codprofileimage) AS n_codprofileimage
                                                                FROM tb_enlaceme_profileimages
                                                                    WHERE tb_enlaceme_profileimages.n_codprofile = $vProfileCode
                                                                        AND tb_enlaceme_profileimages.n_active = 1;");
				return $vResultProfileImageCode->fetchColumn();
				$vResultProfileImageCode->close();
			}
    
		public function getImageCodeFromProfileImageCode($vProfileImageCode)
			{
                $vProfileImageCode = (int) $vProfileImageCode;
            
				$vResultImageCodeFromProfileImageCode = $this->vDataBase->query("SELECT
                                                                    tb_enlaceme_profileimages.n_codimage
                                                                FROM tb_enlaceme_profileimages
                                                                    WHERE tb_enlaceme_profileimages.n_codprofileimage = $vProfileImageCode
                                                                        AND tb_enlaceme_profileimages.n_active = 1;");
				return $vResultImageCodeFromProfileImageCode->fetchColumn();
				$vResultImageCodeFromProfileImageCode->close();
			}    
    
		public function getProjectProfileNameExists($vProjectName)
			{
                $vProjectName = (string) $vProjectName;
				
				$vResultProjectProfileNameExists = $this->vDataBase->query("SELECT
                                                                                count(tb_enlaceme_projects.n_codproject) AS n_codproject
                                                                            FROM tb_enlaceme_projects
                                                                                WHERE tb_enlaceme_projects.c_project_name = '$vProjectName'
                                                                                    AND tb_enlaceme_projects.n_active = 1");
				return $vResultProjectProfileNameExists->fetchColumn();
				$vResultProjectProfileNameExists->close();
			}
    
		public function getProfileContactExists($vProfileCode, $vWhatsapp)
			{
                $vProfileCode = (int) $vProfileCode;
                $vWhatsapp = (string) $vWhatsapp;
				
				$vResultProfileContactExists = $this->vDataBase->query("SELECT
                                                                                COUNT(*)
                                                                            FROM tb_enlaceme_profilecontacts
                                                                                WHERE tb_enlaceme_profilecontacts.c_contact_whatsapp = '$vWhatsapp'
                                                                                    AND tb_enlaceme_profilecontacts.n_codprofile = $vProfileCode;");
				return $vResultProfileContactExists->fetchColumn();
				$vResultProfileContactExists->close();
			}
    
		public function getProfileContact($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
				
				$vResultProfileContact = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_profilecontacts.n_codprofilecontact,
                                                                        tb_enlaceme_profilecontacts.n_codprofile,
                                                                        tb_enlaceme_profilecontacts.c_contact_country,
                                                                        tb_enlaceme_profilecontacts.c_contact_city,
                                                                        tb_enlaceme_profilecontacts.c_contact_whatsapp,
                                                                        tb_enlaceme_profilecontacts.n_active,
                                                                        tb_enlaceme_profilecontacts.c_usercreate,
                                                                        tb_enlaceme_profilecontacts.d_datecreate,
                                                                        tb_enlaceme_profilecontacts.c_usermod,
                                                                        tb_enlaceme_profilecontacts.d_datemod
                                                                    FROM tb_enlaceme_profilecontacts
                                                                        WHERE tb_enlaceme_profilecontacts.n_codprofile = $vProfileCode;");
				return $vResultProfileContact->fetchAll();
				$vResultProfileContact->close();
			}    
    
		/*
		public function getProfile($vProfileCode)
			{
                $vProfileCode = (int) $vProfileCode;
            
				$vResultProfile = $this->vDataBase->query("SELECT
                                                                    tb_enlaceme_profiles.n_codprofile,
                                                                    tb_enlaceme_profiles.n_coduser,
                                                                    tb_enlaceme_profiles.c_profilename,
                                                                    tb_enlaceme_profiles.n_profiletype,
                                                                    tb_enlaceme_profiles.n_active,
                                                                    tb_enlaceme_profiles.c_usercreate,
                                                                    tb_enlaceme_profiles.d_datecreate,
                                                                    tb_enlaceme_profiles.c_usermod,
                                                                    tb_enlaceme_profiles.d_datemod
                                                                FROM tb_enlaceme_profiles
                                                                    WHERE tb_enlaceme_profiles.n_codprofile = $vProfileCode;");
				return $vResultProfile->fetchAll();
				$vResultProfile->close();
			}
    
		public function getProfiles()
			{            
				$vResultProfiles = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profiles.n_codprofile,
                                                                tb_enlaceme_profiles.n_coduser,
                                                                tb_enlaceme_profiles.c_profilename,
                                                                tb_enlaceme_profiles.n_profiletype,
                                                                tb_enlaceme_profiles.n_active,
                                                                tb_enlaceme_profiles.c_usercreate,
                                                                tb_enlaceme_profiles.d_datecreate,
                                                                tb_enlaceme_profiles.c_usermod,
                                                                tb_enlaceme_profiles.d_datemod
                                                            FROM tb_enlaceme_profiles;");
				return $vResultProfiles->fetchAll();
				$vResultProfiles->close();
			}    
        /* END SELECT STATEMENT QUERY  */
    
        /* BEGIN INSERT STATEMENT QUERY  */
		public function profileRegister($vUserCode, $vProfileName, $vProfileType, $vActive){
            
                $vUserCode = (int) $vUserCode;
                $vProfileName = (string) $vProfileName;
                $vProfileType = (int) $vProfileType;
                $vActive = (int) $vActive;
            
                if(IdEnSession::getSession('vSessionActiveUserName') == null){
                    $vUserCreate = 'system['.date('d.m.Y h:m:s').']';
                } else {
                    $vUserCreate = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                }

				$vResultProfileRegister = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_profiles(n_coduser, c_profilename, n_profiletype, n_active, c_usercreate, d_datecreate)
																VALUES(:n_coduser, :c_profilename, :n_profiletype, :n_active, :c_usercreate, NOW())")
								->execute(
										array(
                                            ':n_coduser' => $vUserCode,
                                            ':c_profilename' => $vProfileName,
                                            ':n_profiletype' => $vProfileType,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
										));
                return $vResultProfileRegister = $this->vDataBase->lastInsertId();
                $vResultProfileRegister->close();            
			}
    
		public function insertProfileDescription($vProfileCode, $vProfileDescription){
            
                $vProfileCode = (int) $vProfileCode;
                $vProfileDescription = (string) stripslashes(htmlentities($vProfileDescription));
                $vActive = 1;

                $vUserCreate = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

				$vResultInsertProfileDescription = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_profiledescription(n_codprofile, c_profile_description, n_active, c_usercreate, d_datecreate)
																VALUES(:n_codprofile, :c_profile_description, :n_active, :c_usercreate, NOW())")
								->execute(
										array(
                                            ':n_codprofile' => $vProfileCode,
                                            ':c_profile_description' => $vProfileDescription,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
										));
                return $vResultInsertProfileDescription = $this->vDataBase->lastInsertId();
                $vResultInsertProfileDescription->close();            
			}
    
		public function insertProfileProfession($vProfileCode, $vProfessionCode){
            
                $vProfileCode = (int) $vProfileCode;
                $vProfessionCode = (int) $vProfessionCode;
                $vActive = 1;

                $vUserCreate = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

				$vResultInsertProfileProfession = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_profileprofessions(n_codprofile, n_codprofession, n_active, c_usercreate, d_datecreate)
																VALUES(:n_codprofile, :n_codprofession, :n_active, :c_usercreate, NOW())")
								->execute(
										array(
                                            ':n_codprofile' => $vProfileCode,
                                            ':n_codprofession' => $vProfessionCode,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
										));
                return $vResultInsertProfileProfession = $this->vDataBase->lastInsertId();
                $vResultInsertProfileProfession->close();            
			}
    
		public function insertProfileImage($vProfileCode, $vImageCode, $vActive){
            
                $vProfileCode = (int) $vProfileCode;
                $vImageCode = (int) $vImageCode;
                $vActive = (int) $vActive;

                $vUserCreate = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

				$vResultInsertImage = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_profileimages(n_codprofile, n_codimage, n_active, c_usercreate, d_datecreate)
																VALUES(:n_codprofile, :n_codimage, :n_active, :c_usercreate, NOW())")
								->execute(
										array(
                                            ':n_codprofile' => $vProfileCode,
                                            ':n_codimage' => $vImageCode,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
										));
                return $vResultInsertImage = $this->vDataBase->lastInsertId();
                $vResultInsertImage->close();            
			}
    
		public function insertProjectProfile($vProfileCode, $vProjectName, $vActive){
            
                $vProfileCode = (int) $vProfileCode;
                $vProjectName = (string) $vProjectName;
                $vActive = (int) $vActive;

                $vUserCreate = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

				$vResultInsertProjectProfile = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_projects(n_codprofile, c_project_name, n_active, c_usercreate, d_datecreate)
																VALUES(:n_codprofile, :c_project_name, :n_active, :c_usercreate, NOW())")
								->execute(
										array(
                                            ':n_codprofile' => $vProfileCode,
                                            ':c_project_name' => $vProjectName,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
										));
                return $vResultInsertProjectProfile = $this->vDataBase->lastInsertId();
                $vResultInsertProjectProfile->close();            
			}
    
		public function insertContactProfile($vProfileCode, $vCountryContact, $vCityContact, $vWhatsapp, $vActive){
            
                $vProfileCode = (int) $vProfileCode;
                $vCountryContact = (string) $vCountryContact;
                $vCityContact = (string) $vCityContact;
                $vWhatsapp = (string) $vWhatsapp;
                $vActive = (int) $vActive;

                $vUserCreate = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

				$vResultInsertContactProfile = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_profilecontacts(n_codprofile, c_contact_country, c_contact_city, c_contact_whatsapp, n_active, c_usercreate, d_datecreate)
																VALUES(:n_codprofile, :c_contact_country, :c_contact_city, :c_contact_whatsapp, :n_active, :c_usercreate, NOW())")
								->execute(
										array(
                                            ':n_codprofile' => $vProfileCode,
                                            ':c_contact_country' => $vCountryContact,
                                            ':c_contact_city' => $vCityContact,
                                            ':c_contact_whatsapp' => $vWhatsapp,                                            
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
										));
                return $vResultInsertContactProfile = $this->vDataBase->lastInsertId();
                $vResultInsertContactProfile->close();            
			}    
        /* END INSERT STATEMENT QUERY  */
        
        /* BEGIN UPDATE STATEMENT QUERY  */
		public function updateProfileDescription($vProfileCode, $vProfileDescription){
                $vProfileCode = (int) $vProfileCode;
                $vProfileDescription = (string) stripslashes(htmlentities($vProfileDescription));

                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

                $vResultUpdateProfileDescription = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_profiledescription
                                                                        SET tb_enlaceme_profiledescription.c_profile_description = :c_profile_description,
                                                                            tb_enlaceme_profiledescription.c_usermod = :c_usermod,
                                                                            tb_enlaceme_profiledescription.d_datemod = NOW()
                                                                        WHERE tb_enlaceme_profiledescription.n_codprofile = :n_codprofile;")
                                ->execute(
                                            array(
                                                    ':c_profile_description'=>$vProfileDescription,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_codprofile'=>$vProfileCode
                                                 )
                                         );
                return $vResultUpdateProfileDescription;
                $vResultUpdateProfileDescription->close();
			}
    
		public function updateProfileStatus($vUserCode, $vProfileType, $vActive){
                $vUserCode = (int) $vUserCode;
                $vProfileType = (int) $vProfileType;
                $vActive = (int) $vActive;

                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email') == null){
                    $vUserMod = 'system['.date('d.m.Y h:m:s').']';
                } else {
                    $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                }

                $vResultUpdateProfileStatus = $this->vDataBase->prepare("UPDATE
                                                tb_enlaceme_profiles
                                            SET tb_enlaceme_profiles.n_active = :n_active,
                                                tb_enlaceme_profiles.c_usermod = :c_usermod,
                                                tb_enlaceme_profiles.d_datemod = NOW()
                                            WHERE tb_enlaceme_profiles.n_coduser = :n_coduser
                                                AND tb_enlaceme_profiles.n_profiletype = :n_profiletype;")
                                ->execute(
                                            array(
                                                    ':n_active'=>$vActive,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode,
                                                    ':n_profiletype'=>$vProfileType
                                                 )
                                         );
                return $vResultUpdateProfileStatus;
                $vResultUpdateProfileStatus->close();
			}
    
		public function updateProfileImageStatus($vProfileImageCode, $vProfileCode, $vActive){
                $vProfileImageCode = (int) $vProfileImageCode;
                $vProfileCode = (int) $vProfileCode;
                $vActive = (int) $vActive;

                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email') == null){
                    $vUserMod = 'system['.date('d.m.Y h:m:s').']';
                } else {
                    $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                }

                $vResultUpdateProfileImageStatus = $this->vDataBase->prepare("UPDATE
                                                tb_enlaceme_profileimages
                                            SET tb_enlaceme_profileimages.n_active = :n_active,
                                                tb_enlaceme_profileimages.c_usermod = :c_usermod,
                                                tb_enlaceme_profileimages.d_datemod = NOW()
                                            WHERE tb_enlaceme_profileimages.n_codprofileimage = :n_codprofileimage
                                                AND tb_enlaceme_profileimages.n_codprofile = :n_codprofile;")
                                ->execute(
                                            array(
                                                    ':n_active'=>$vActive,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_codprofileimage'=>$vProfileImageCode,
                                                    ':n_codprofile'=>$vProfileCode
                                                 )
                                         );
            
                return $vResultUpdateProfileImageStatus;
                $vResultUpdateProfileImageStatus->close();
			}
    
		public function updateProfileImagesStatus($vProfileCode, $vActive){
            
                $vProfileCode = (int) $vProfileCode;
                $vActive = (int) $vActive;

                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email') == null){
                    $vUserMod = 'system['.date('d.m.Y h:m:s').']';
                } else {
                    $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                }

                $vResultUpdateProfileImagesStatus = $this->vDataBase->prepare("UPDATE
                                                tb_enlaceme_profileimages
                                            SET tb_enlaceme_profileimages.n_active = :n_active,
                                                tb_enlaceme_profileimages.c_usermod = :c_usermod,
                                                tb_enlaceme_profileimages.d_datemod = NOW()
                                            WHERE tb_enlaceme_profileimages.n_codprofile = :n_codprofile;")
                                ->execute(
                                            array(
                                                    ':n_active'=>$vActive,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_codprofile'=>$vProfileCode
                                                 )
                                         );
            
                return $vResultUpdateProfileImagesStatus;
                $vResultUpdateProfileImagesStatus->close();
			}    
        /* END UPDATE STATEMENT QUERY  */
    
        /* BEGIN DELETE STATEMENT QUERY  */
		public function deleteProfileImage($vProfileImageCode, $vProfileCode, $vActive){
            
                $vProfileImageCode = (int) $vProfileImageCode;
                $vProfileCode = (int) $vProfileCode;
                $vActive = (int) $vActive;

                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email') == null){
                    $vUserMod = 'system['.date('d.m.Y h:m:s').']';
                } else {
                    $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                }
                
                $vResultDeleteProfileImage = $this->vDataBase->prepare("DELETE
                                                                            FROM tb_enlaceme_profileimages
                                                                                WHERE tb_enlaceme_profileimages.n_codprofileimage = :n_codprofileimage
                                                                                    AND tb_enlaceme_profileimages.n_codprofile = :n_codprofile;")
                                ->execute(
                                            array(
                                                    ':n_codprofileimage'=>$vProfileImageCode,
                                                    ':n_codprofile'=>$vProfileCode
                                                 )
                                         );
            
                return $vResultDeleteProfileImage;
                $vResultDeleteProfileImage->close();
			}    
        /* END DELETE STATEMENT QUERY  */
    }
