<?php

class usersModel extends IdEnModel
	{
		public function __construct(){
				parent::__construct();
			}

        /* BEGIN SELECT STATEMENT QUERY  */
		public function getUserNamesComplete($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
                
				$vResult = $this->vDataBase->query("SELECT
                                                        CONCAT(tb_enlaceme_usernames.c_names,' ',tb_enlaceme_usernames.c_lastnames) AS c_namescomplete
                                                    FROM tb_enlaceme_usernames
                                                        WHERE tb_enlaceme_usernames.n_coduser = $vUserCode;");
				return $vResult->fetchColumn();
				$vResult->close();
			}
    
        public function getUserEmailFromUserCode($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
            
				$vResultUserEmailFromUserCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.c_email
                                                            FROM tb_enlaceme_users
                                                            WHERE tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vResultUserEmailFromUserCode->fetchColumn();
				$vResultUserEmailFromUserCode->close();
			}
    
        public function getUserDateCreateFromUserCode($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
            
				$vResultUserDateCreateFromUserCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.d_datecreate
                                                            FROM tb_enlaceme_users
                                                            WHERE tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vResultUserDateCreateFromUserCode->fetchColumn();
				$vResultUserDateCreateFromUserCode->close();
			}
    
        public function getUserNamesFromUserCode($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
            
				$vResultUserNamesFromUserCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_usernames.c_names
                                                            FROM tb_enlaceme_usernames
                                                            WHERE tb_enlaceme_usernames.n_coduser = $vUserCode;");
				return $vResultUserNamesFromUserCode->fetchColumn();
				$vResultUserNamesFromUserCode->close();
			}
    
        public function getUserLastNamesFromUserCode($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
            
				$vResultUserLastNamesFromUserCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_usernames.c_lastnames
                                                            FROM tb_enlaceme_usernames
                                                            WHERE tb_enlaceme_usernames.n_coduser = $vUserCode;");
				return $vResultUserLastNamesFromUserCode->fetchColumn();
				$vResultUserLastNamesFromUserCode->close();
			}
    
        public function getUserOtherNameFromUserCode($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
            
				$vResultUserOtherNameFromUserCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_usernames.c_othername
                                                            FROM tb_enlaceme_usernames
                                                            WHERE tb_enlaceme_usernames.n_coduser = $vUserCode;");
				return $vResultUserOtherNameFromUserCode->fetchColumn();
				$vResultUserOtherNameFromUserCode->close();
			}
    
        public function getUserDescriptionFromUserCode($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
            
				$vResultUserDescriptionFromUserCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_usernames.t_description
                                                            FROM tb_enlaceme_usernames
                                                            WHERE tb_enlaceme_usernames.n_coduser = $vUserCode;");
				return $vResultUserDescriptionFromUserCode->fetchColumn();
				$vResultUserDescriptionFromUserCode->close();
			}    
    
        public function getUserDateBirthFromUserCode($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
            
				$vResultUserDateBirthFromUserCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_usernames.d_birthdate
                                                            FROM tb_enlaceme_usernames
                                                            WHERE tb_enlaceme_usernames.n_coduser = $vUserCode;");
				return $vResultUserDateBirthFromUserCode->fetchColumn();
				$vResultUserDateBirthFromUserCode->close();
			}
    
        public function getUserCountryFromUserCode($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
            
				$vResultUserCountryFromUserCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_usernames.c_country
                                                            FROM tb_enlaceme_usernames
                                                            WHERE tb_enlaceme_usernames.n_coduser = $vUserCode;");
				return $vResultUserCountryFromUserCode->fetchColumn();
				$vResultUserCountryFromUserCode->close();
			}
    
        public function getUserCityFromUserCode($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
            
				$vResultUserCityFromUserCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_usernames.c_city
                                                            FROM tb_enlaceme_usernames
                                                            WHERE tb_enlaceme_usernames.n_coduser = $vUserCode;");
				return $vResultUserCityFromUserCode->fetchColumn();
				$vResultUserCityFromUserCode->close();
			}
    
		public function getUserEmailExists($vUserEmail)
			{
                $vUserEmail = (string) $vUserEmail;
            
				$vResultUserEmailExists = $this->vDataBase->query("SELECT
                                                                COUNT(*)
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.c_email = '$vUserEmail';");
				return $vResultUserEmailExists->fetchColumn();
				$vResultUserEmailExists->close();
			}
    
		public function getUserAccountStatus($vUserEmail)
			{
                $vUserEmail = (string) $vUserEmail;
            
				$vResultUserAccountStatus = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_users.n_active
                                                                    FROM tb_enlaceme_users
                                                                        WHERE tb_enlaceme_users.c_email = '$vUserEmail';");
				return $vResultUserAccountStatus->fetchColumn();
				$vResultUserAccountStatus->close();
			}
    
		public function getUserNameExists($vUserName)
			{
                $vUserName = (string) $vUserName;
            
				$vResultUserExists = $this->vDataBase->query("SELECT
                                                                COUNT(*)
                                                            FROM tb_enlaceme_users
                                                            WHERE tb_enlaceme_users.c_username = '$vUserName';");
				return $vResultUserExists->fetchColumn();
				$vResultUserExists->close();
			}
    
        public function getUserStatusAccount($vUserCode, $vProfileCode, $vProfileType)
			{
                $vUserCode = (int) $vUserCode;
                $vProfileCode = (int) $vProfileCode;
                $vProfileType = (int) $vProfileType;
            
				$vResultUserStatusAccount = $this->vDataBase->query("SELECT
                                                                    tb_enlaceme_users.n_active AS user_active,
                                                                    tb_enlaceme_usernames.n_active AS username_active,
                                                                    tb_enlaceme_profiles.n_active AS profile_active,
                                                                    tb_enlaceme_users.c_email
                                                                    FROM tb_enlaceme_users, tb_enlaceme_usernames, tb_enlaceme_profiles
                                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                                    AND tb_enlaceme_usernames.n_coduser = tb_enlaceme_profiles.n_coduser
                                                                    AND tb_enlaceme_profiles.n_coduser = $vUserCode
                                                                    AND tb_enlaceme_profiles.n_codprofile = $vProfileCode
                                                                    AND tb_enlaceme_profiles.n_profiletype = $vProfileType;");
				return $vResultUserStatusAccount->fetchAll();
				$vResultUserStatusAccount->close();
			}
    
		public function getUserState($vEmail)
			{
                $vEmail = (string) $vEmail;
            
				$vResultUserState = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.n_active
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.c_email = '$vEmail';");
				return $vResultUserState->fetchColumn();
				$vResultUserState->close();
			}
    
		public function getUserActivationCode($vEmail)
			{
                $vEmail = (string) $vEmail;
            
				$vResultUserActivationCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.n_activationcode
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.c_email = '$vEmail';");
				return $vResultUserActivationCode->fetchColumn();
				$vResultUserActivationCode->close();
			}    
    
		public function getUsers()
			{
				$vResultUsers = $this->vDataBase->query("SELECT
                                                        tb_enlaceme_users.n_coduser,
                                                        tb_enlaceme_users.c_username,
                                                        tb_enlaceme_users.c_pass1,
                                                        tb_enlaceme_users.c_pass2,
                                                        tb_enlaceme_users.c_email,
                                                        tb_enlaceme_users.c_userrole,
                                                        tb_enlaceme_users.n_activationcode,
                                                        tb_enlaceme_users.n_active,
                                                        tb_enlaceme_users.c_usercreate,
                                                        tb_enlaceme_users.d_datecreate,
                                                        tb_enlaceme_users.c_usermod,
                                                        tb_enlaceme_users.d_datemod
                                                    FROM tb_enlaceme_users;");
				return $vResultUsers->fetchAll();
				$vResultUsers->close();
			}
    
		public function getUsersActive()
			{
				$vResultUsersActive = $this->vDataBase->query("SELECT
                                                        tb_enlaceme_users.n_coduser,
                                                        tb_enlaceme_users.c_username,
                                                        tb_enlaceme_users.c_pass1,
                                                        tb_enlaceme_users.c_pass2,
                                                        tb_enlaceme_users.c_email,
                                                        tb_enlaceme_users.c_userrole,
                                                        tb_enlaceme_users.n_activationcode,
                                                        tb_enlaceme_users.n_active,
                                                        tb_enlaceme_users.c_usercreate,
                                                        tb_enlaceme_users.d_datecreate,
                                                        tb_enlaceme_users.c_usermod,
                                                        tb_enlaceme_users.d_datemod
                                                    FROM tb_enlaceme_users
                                                        WHERE tb_enlaceme_users.n_active = 1;");
				return $vResultUsersActive->fetchAll();
				$vResultUsersActive->close();
			}
    
		public function getUsersInActive()
			{
				$vResultUsersInActive = $this->vDataBase->query("SELECT
                                                        tb_enlaceme_users.n_coduser,
                                                        tb_enlaceme_users.c_username,
                                                        tb_enlaceme_users.c_pass1,
                                                        tb_enlaceme_users.c_pass2,
                                                        tb_enlaceme_users.c_email,
                                                        tb_enlaceme_users.c_userrole,
                                                        tb_enlaceme_users.n_activationcode,
                                                        tb_enlaceme_users.n_active,
                                                        tb_enlaceme_users.c_usercreate,
                                                        tb_enlaceme_users.d_datecreate,
                                                        tb_enlaceme_users.c_usermod,
                                                        tb_enlaceme_users.d_datemod
                                                    FROM tb_enlaceme_users
                                                        WHERE tb_enlaceme_users.n_active = 2;");
				return $vResultUsersInActive->fetchAll();
				$vResultUsersInActive->close();
			} 
    
		public function getUserCodeFromEmailActivationCode($vActivationCode, $vEmail)
			{
                $vActivationCode = (int) $vActivationCode;
                $vEmail = (string) $vEmail;
            
				$vResultUserCodeFromEmailActivationCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.n_coduser
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.n_activationcode = $vActivationCode
                                                                    AND tb_enlaceme_users.c_email = '$vEmail';");
				return $vResultUserCodeFromEmailActivationCode->fetchColumn();
				$vResultUserCodeFromEmailActivationCode->close();
			}     
    
		/*public function getUserName($vUserCode)
			{
                $vUserCode = (string) $vUserCode;
            
				$vResultUserName = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.c_username
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vResultUserName->fetchAll();
				$vResultUserName->close();
			}
    
		public function getUserEmailFromUserCode($vUserCode)
			{
                $vUserCode = (string) $vUserCode;
            
				$vResultUserEmailFromUserCode = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.c_email
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vResultUserEmailFromUserCode->fetchColumn();
				$vResultUserEmailFromUserCode->close();
			}    
    
		public function getUserEmail($vUserName)
			{
                $vUserName = (string) $vUserName;
            
				$vResultUserEmail = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.c_email
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vResultUserEmail->fetchAll();
				$vResultUserEmail->close();
			}    
    
    
        
       
        
        
    
		public function getUser($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
            
				$vResult = $this->vDataBase->query("SELECT
                                                        tb_enlaceme_users.n_coduser,
                                                        tb_enlaceme_users.c_username,
                                                        tb_enlaceme_users.c_pass1,
                                                        tb_enlaceme_users.c_pass2,
                                                        tb_enlaceme_users.c_email,
                                                        tb_enlaceme_users.c_userrole,
                                                        tb_enlaceme_users.n_activationcode,
                                                        tb_enlaceme_users.n_active,
                                                        tb_enlaceme_users.c_usercreate,
                                                        tb_enlaceme_users.d_datecreate,
                                                        tb_enlaceme_users.c_usermod,
                                                        tb_enlaceme_users.d_datemod
                                                    FROM tb_enlaceme_users
                                                        WHERE tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vResult->fetchAll();
				$vResult->close();
			}    

    

    

		public function getUserInfo($vUserCode)
			{
                $vUserCode = (int) $vUserCode;
                
				$vResult = $this->vDataBase->query("SELECT
                                                        tb_enlaceme_usernames.n_codusername,
                                                        tb_enlaceme_usernames.n_coduser,
                                                        tb_enlaceme_usernames.c_names,
                                                        tb_enlaceme_usernames.c_lastnames,
                                                        tb_enlaceme_usernames.c_othername,
                                                        tb_enlaceme_usernames.d_birthdate,
                                                        tb_enlaceme_usernames.c_country,
                                                        tb_enlaceme_usernames.c_city,
                                                        tb_enlaceme_usernames.n_active,
                                                        tb_enlaceme_usernames.c_usercreate,
                                                        tb_enlaceme_usernames.d_datecreate,
                                                        tb_enlaceme_usernames.c_usermod,
                                                        tb_enlaceme_usernames.d_datemod
                                                    FROM tb_enlaceme_usernames
                                                        WHERE tb_enlaceme_usernames.n_coduser = $vUserCode;");
				return $vResult->fetchAll();
				$vResult->close();
			}    
    
		public function getUsersInfo()
			{                
				$vResult = $this->vDataBase->query("SELECT
                                                        tb_enlaceme_usernames.n_codusername,
                                                        tb_enlaceme_usernames.n_coduser,
                                                        tb_enlaceme_usernames.c_names,
                                                        tb_enlaceme_usernames.c_lastnames,
                                                        tb_enlaceme_usernames.c_othername,
                                                        tb_enlaceme_usernames.d_birthdate,
                                                        tb_enlaceme_usernames.c_country,
                                                        tb_enlaceme_usernames.c_city,
                                                        tb_enlaceme_usernames.n_active,
                                                        tb_enlaceme_usernames.c_usercreate,
                                                        tb_enlaceme_usernames.d_datecreate,
                                                        tb_enlaceme_usernames.c_usermod,
                                                        tb_enlaceme_usernames.d_datemod
                                                    FROM tb_enlaceme_usernames;");
				return $vResult->fetchAll();
				$vResult->close();
			}*/    
        /* END SELECT STATEMENT QUERY  */
    
        /* BEGIN INSERT STATEMENT QUERY  */
		public function userRegister($vUsername, $vPassword1, $vPassword2, $vEmail, $vRole, $vActivationcode, $vActive){
            
                $vUsername = (string) $vUsername;
                $vPassword1 = (string) IdEnHash::getHash('sha1',$vPassword1,DEFAULT_HASH_KEY);
                $vPassword2 = (string) IdEnHash::getHash('sha1',$vPassword2,DEFAULT_HASH_KEY);
                $vEmail = (string) $vEmail;
                $vRole = (string) $vRole;
                $vActivationcode = (int) $vActivationcode;
                $vActive = (int) $vActive;
            
                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email') == null){
                    $vUserCreate = 'system['.date('d.m.Y h:m:s').']';
                } else {
                    $vUserCreate = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                }

				$vResultUserRegister = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_users(c_username, c_pass1, c_pass2, c_email, c_userrole, n_activationcode, n_active, c_usercreate, d_datecreate)
																VALUES(:c_username, :c_pass1, :c_pass2, :c_email, :c_userrole, :n_activationcode, :n_active, :c_usercreate, NOW())")
								->execute(
										array(
                                            ':c_username' => $vUsername,
                                            ':c_pass1' => $vPassword1,
                                            ':c_pass2' => $vPassword2,
                                            ':c_email' => $vEmail,
                                            ':c_userrole' => $vRole,
                                            ':n_activationcode' => $vActivationcode,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
										));
                return $vResultUserRegister = $this->vDataBase->lastInsertId();
                $vResultUserRegister->close();
			}
    
		public function userInfoRegister($vUserCode, $vNames, $vLastNames, $vOthername, $vBirthDate, $vCountry, $vCity, $vActive){
            
                $vUserCode = (int) $vUserCode;
                $vNames = (string) $vNames;
                $vLastNames = (string) $vLastNames;
                $vOthername = (string) $vOthername;
                $vBirthDate = $vBirthDate;
                $vCountry = (string) $vCountry;
                $vCity = (string) $vCity;
                $vActive = (int) $vActive;

                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email') == null){
                    $vUserCreate = 'system['.date('d.m.Y h:m:s').']';
                } else {
                    $vUserCreate = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                }

				$vResultUserInfoRegister = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_usernames(n_coduser, c_names, c_lastnames, c_othername, d_birthdate, c_country, c_city, n_active, c_usercreate, d_datecreate)
																VALUES(:n_coduser, :c_names, :c_lastnames, :c_othername, :d_birthdate, :c_country, :c_city, :n_active, :c_usercreate, NOW())")
								->execute(
										array(
                                            ':n_coduser' => $vUserCode,
                                            ':c_names' => $vNames,
                                            ':c_lastnames' => $vLastNames,
                                            ':c_othername' => $vOthername,
                                            ':d_birthdate' => $vBirthDate,
                                            ':c_country' => $vActivationcode,
                                            ':c_city' => $vCity,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
										));
                return $vResultUserInfoRegister = $this->vDataBase->lastInsertId();
                $vResultUserInfoRegister->close();            
			}
        /* END INSERT STATEMENT QUERY  */
        
        /* BEGIN UPDATE STATEMENT QUERY  */
		public function updateUserEmail($vUserCode, $vUserEmail){
                $vUserCode = (int) $vUserCode;
                $vUserEmail = (string) $vUserEmail;

                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

                $vResultUpdateUserLastNames = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_users
                                                                        SET tb_enlaceme_users.c_email = :c_email,
                                                                            tb_enlaceme_users.c_usermod = :c_usermod,
                                                                            tb_enlaceme_users.d_datemod = NOW()
                                                                        WHERE tb_enlaceme_users.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                    ':c_email'=>$vUserEmail,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode
                                                 )
                                         );
                return $vResultUpdateUserLastNames;
                $vResultUpdateUserLastNames->close();
			}
    
		public function updateUserOtherName($vUserCode, $vUserOtherName){
                $vUserCode = (int) $vUserCode;
                $vUserOtherName = (string) $vUserOtherName;

                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

                $vResultUpdateUserOtherName = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_usernames
                                                                        SET tb_enlaceme_usernames.c_othername = :c_othername,
                                                                            tb_enlaceme_usernames.c_usermod = :c_usermod,
                                                                            tb_enlaceme_usernames.d_datemod = NOW()
                                                                        WHERE tb_enlaceme_usernames.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                    ':c_othername'=>$vUserOtherName,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode
                                                 )
                                         );
                return $vResultUpdateUserOtherName;
                $vResultUpdateUserOtherName->close();
			}
    
		public function updateUserNames($vUserCode, $vUserNames){
                $vUserCode = (int) $vUserCode;
                $vUserNames = (string) $vUserNames;

                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

                $vResultUpdateUserNames = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_usernames
                                                                        SET tb_enlaceme_usernames.c_names = :c_names,
                                                                            tb_enlaceme_usernames.c_usermod = :c_usermod,
                                                                            tb_enlaceme_usernames.d_datemod = NOW()
                                                                        WHERE tb_enlaceme_usernames.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                    ':c_names'=>$vUserNames,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode
                                                 )
                                         );
                return $vResultUpdateUserNames;
                $vResultUpdateUserNames->close();
			}
    
		public function updateUserLastNames($vUserCode, $vUserLastNames){
                $vUserCode = (int) $vUserCode;
                $vUserLastNames = (string) $vUserLastNames;

                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

                $vResultUpdateUserLastNames = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_usernames
                                                                        SET tb_enlaceme_usernames.c_lastnames = :c_lastnames,
                                                                            tb_enlaceme_usernames.c_usermod = :c_usermod,
                                                                            tb_enlaceme_usernames.d_datemod = NOW()
                                                                        WHERE tb_enlaceme_usernames.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                    ':c_lastnames'=>$vUserLastNames,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode
                                                 )
                                         );
                return $vResultUpdateUserLastNames;
                $vResultUpdateUserLastNames->close();
			}
    
		public function updateUserBirthDate($vUserCode, $vUserDateBirth){
                $vUserCode = (int) $vUserCode;
                $vUserDateBirth = $vUserDateBirth;

                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

                $vResultUpdateUserBirthDate = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_usernames
                                                                        SET tb_enlaceme_usernames.d_birthdate = :d_birthdate,
                                                                            tb_enlaceme_usernames.c_usermod = :c_usermod,
                                                                            tb_enlaceme_usernames.d_datemod = NOW()
                                                                        WHERE tb_enlaceme_usernames.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                    ':d_birthdate'=>$vUserDateBirth,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode
                                                 )
                                         );
                return $vResultUpdateUserBirthDate;
                $vResultUpdateUserBirthDate->close();
			}
    
		public function updateUserCountry($vUserCode, $vUserCountry){
                $vUserCode = (int) $vUserCode;
                $vUserCountry = (string) $vUserCountry;

                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

                $vResultUpdateUserCountry = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_usernames
                                                                        SET tb_enlaceme_usernames.c_country = :c_country,
                                                                            tb_enlaceme_usernames.c_usermod = :c_usermod,
                                                                            tb_enlaceme_usernames.d_datemod = NOW()
                                                                        WHERE tb_enlaceme_usernames.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                    ':c_country'=>$vUserCountry,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode
                                                 )
                                         );
                return $vResultUpdateUserCountry;
                $vResultUpdateUserCountry->close();
			}
    
		public function updateUserCity($vUserCode, $vUserCity){
                $vUserCode = (int) $vUserCode;
                $vUserCity = (string) $vUserCity;

                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

                $vResultUpdateUserCity = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_usernames
                                                                        SET tb_enlaceme_usernames.c_city = :c_city,
                                                                            tb_enlaceme_usernames.c_usermod = :c_usermod,
                                                                            tb_enlaceme_usernames.d_datemod = NOW()
                                                                        WHERE tb_enlaceme_usernames.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                    ':c_city'=>$vUserCity,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode
                                                 )
                                         );
                return $vResultUpdateUserCity;
                $vResultUpdateUserCity->close();
			}
    
		public function updateUserDescription($vUserCode, $vUserDescription){
                $vUserCode = (int) $vUserCode;
                $vUserDescription = (string) stripslashes(htmlentities($vUserDescription));

                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
            
                $vResultUpdateUserCity = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_usernames
                                                                        SET tb_enlaceme_usernames.t_description = :t_description,
                                                                            tb_enlaceme_usernames.c_usermod = :c_usermod,
                                                                            tb_enlaceme_usernames.d_datemod = NOW()
                                                                        WHERE tb_enlaceme_usernames.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                    ':t_description'=>$vUserDescription,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode
                                                 )
                                         );
                return $vResultUpdateUserCity;
                $vResultUpdateUserCity->close();
			}    
    
		public function updateUserStatus($vUserCode, $vActive){
                $vUserCode = (int) $vUserCode;
                $vActive = (int) $vActive;

                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email') == null){
                    $vUserMod = 'system['.date('d.m.Y h:m:s').']';
                } else {
                    $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                }

                $vResultUpdateUserStatus = $this->vDataBase->prepare("UPDATE
                                                tb_enlaceme_users
                                            SET tb_enlaceme_users.n_active = :n_active,
                                                tb_enlaceme_users.c_usermod = :c_usermod,
                                                tb_enlaceme_users.d_datemod = NOW()
                                            WHERE tb_enlaceme_users.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                    ':n_active'=>$vActive,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode
                                                 )
                                         );
                return $vResultUpdateUserStatus;
                $vResultUpdateUserStatus->close();
			}    
        
		public function updateUserInfoStatus($vUserCode, $vActive){
                $vUserCode = (int) $vUserCode;
                $vActive = (int) $vActive;
            
                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email') == null){
                    $vUserMod = 'system['.date('d.m.Y h:m:s').']';
                } else {
                    $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                }

                $vResultUpdateUserInfoStatus = $this->vDataBase->prepare("UPDATE
                                                tb_enlaceme_usernames
                                            SET tb_enlaceme_usernames.n_active = :n_active,
                                                tb_enlaceme_usernames.c_usermod = :c_usermod,
                                                tb_enlaceme_usernames.d_datemod = NOW()
                                            WHERE tb_enlaceme_usernames.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                    ':n_active'=>$vActive,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode
                                                 )
                                         );
                return $vResultUpdateUserInfoStatus;
                $vResultUpdateUserInfoStatus->close();
			}
    
		public function updateUserPassword($vUserCode, $vPassword, $vRePassword){
            
                $vUserCode = (int) $vUserCode;
                $vPassword = (string) IdEnHash::getHash('sha1',$vPassword,DEFAULT_HASH_KEY);
                $vRePassword = (string) IdEnHash::getHash('sha1',$vRePassword,DEFAULT_HASH_KEY);            
            
                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

                $vResultUpdateUserPassword = $this->vDataBase->prepare("UPDATE
                                                tb_enlaceme_users
                                            SET tb_enlaceme_users.c_pass1 = :c_pass1,
                                                tb_enlaceme_users.c_pass2 = :c_pass2,
                                                tb_enlaceme_users.c_usermod = :c_usermod,
                                                tb_enlaceme_users.d_datemod = NOW()
                                            WHERE tb_enlaceme_users.n_coduser = :n_coduser
                                                AND tb_enlaceme_users.c_email = :c_email;")
                                ->execute(
                                            array(
                                                    ':c_pass1'=>$vPassword,
                                                    ':c_pass2'=>$vRePassword,
                                                    ':c_usermod'=>$vUserMod,
                                                    ':n_coduser'=>$vUserCode,
                                                    ':c_email'=>$vUserMod
                                                 )
                                         );
                return $vResultUpdateUserPassword;
                $vResultUpdateUserPassword->close();
			}
    
        
        /* END UPDATE STATEMENT QUERY  */
    }