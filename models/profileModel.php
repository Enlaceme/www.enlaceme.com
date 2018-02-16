<?php
class profileModel extends IdEnModel
	{
		public function __construct(){
				parent::__construct();
			}
        /* BEGIN SELECT STATEMENT QUERY  */
        public function getCodUserFromCodProfile($vCodProfile){
            $vCodProfile = (int) $vCodProfile;
            $vResultCodUserFromCodProfile = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_profiles.n_coduser
                                                                    FROM tb_enlaceme_profiles
                                                                        WHERE tb_enlaceme_profiles.n_codprofile = $vCodProfile;");
            return $vResultCodUserFromCodProfile->fetchColumn();
            $vResultCodUserFromCodProfile->close();            
        }
        public function getCodProfileFromCodUser($vCodUser, $vTypeProfile){
            $vCodUser = (int) $vCodUser;
            $vTypeProfile = (int) $vTypeProfile;
            $vResultCodProfile = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profiles.n_codprofile
                                                            FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_coduser = $vCodUser
                                                                    AND tb_enlaceme_profiles.n_profiletype = $vTypeProfile;");
            return $vResultCodProfile->fetchColumn();
            $vResultCodProfile->close();            
        }    
        public function getProfileNameToShow($vCodProfile, $vCodUser){
            $vCodProfile = (int) $vCodProfile;
            $vCodUser = (int) $vCodUser;
            $vResultProfileName = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profiles.c_profilename
                                                            FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_codprofile = $vCodProfile
                                                                    AND tb_enlaceme_profiles.n_coduser = $vCodUser;");
            return $vResultProfileName->fetchColumn();
            $vResultProfileName->close();            
        }
        public function getProfileNameFromCodProfile($vCodProfile){
            $vCodProfile = (int) $vCodProfile;
            $vResultProfileName = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profiles.c_profilename
                                                            FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_codprofile = $vCodProfile;");
            return $vResultProfileName->fetchColumn();
            $vResultProfileName->close();            
        }    
        public function getNames($vCodProfile){
            $vCodProfile = (int) $vCodProfile;
            $vResultNames = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profiles.c_name
                                                            FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_codprofile = $vCodProfile;");
            return $vResultNames->fetchColumn();
            $vResultNames->close();            
        }
        public function getLastNames($vCodProfile){
            $vCodProfile = (int) $vCodProfile;
            $vResultLastNames = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profiles.c_lastname
                                                            FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_codprofile = $vCodProfile;");
            return $vResultLastNames->fetchColumn();
            $vResultLastNames->close();            
        }
        public function getDateBirth($vCodProfile){
            $vCodProfile = (int) $vCodProfile;
            $vResultDateBirth = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profiles.d_datebirth
                                                            FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_codprofile = $vCodProfile;");
            return $vResultDateBirth->fetchColumn();
            $vResultDateBirth->close();            
        }
        public function getDescription($vCodProfile){
            $vCodProfile = (int) $vCodProfile;
            $vResultDescription = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profiles.c_description
                                                            FROM tb_enlaceme_profiles
                                                                WHERE tb_enlaceme_profiles.n_codprofile = $vCodProfile;");
            return $vResultDescription->fetchColumn();
            $vResultDescription->close();            
        }
        public function getLocation($vCodProfile, $vCodUser){
            $vCodProfile = (int) $vCodProfile;
            $vCodUser = (int) $vCodUser;
            $vResultLocation = $this->vDataBase->query("SELECT
                                                                COUNT(*)
                                                            FROM tb_enlaceme_profilelocation
                                                                WHERE tb_enlaceme_profilelocation.n_codprofile = $vCodProfile
                                                                    AND tb_enlaceme_profilelocation.n_coduser = $vCodUser;");
            return $vResultLocation->fetchColumn();
            $vResultLocation->close();            
        }
        public function getLocationId($vCodProfile, $vCodUser){
            $vCodProfile = (int) $vCodProfile;
            $vCodUser = (int) $vCodUser;
            $vResultLocationId = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profilelocation.n_codprofilelocation
                                                            FROM tb_enlaceme_profilelocation
                                                                WHERE tb_enlaceme_profilelocation.n_codprofile = $vCodProfile
                                                                    AND tb_enlaceme_profilelocation.n_coduser = $vCodUser;");
            return $vResultLocationId->fetchColumn();
            $vResultLocationId->close();            
        }
        public function getCountry($vCodProfile){
            $vCodProfile = (int) $vCodProfile;
            $vResultCountry = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profilelocation.c_country
                                                            FROM tb_enlaceme_profilelocation
                                                                WHERE tb_enlaceme_profilelocation.n_codprofile = $vCodProfile;");
            return $vResultCountry->fetchColumn();
            $vResultCountry->close();            
        }    
        public function getCity($vCodProfile){
            $vCodProfile = (int) $vCodProfile;
            $vResultCity = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profilelocation.c_city
                                                            FROM tb_enlaceme_profilelocation
                                                                WHERE tb_enlaceme_profilelocation.n_codprofile = $vCodProfile;");
            return $vResultCity->fetchColumn();
            $vResultCity->close();            
        }
        public function getAddress($vCodProfile){
            $vCodProfile = (int) $vCodProfile;
            $vResultAddress = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_profilelocation.c_address
                                                            FROM tb_enlaceme_profilelocation
                                                                WHERE tb_enlaceme_profilelocation.n_codprofile = $vCodProfile;");
            return $vResultAddress->fetchColumn();
            $vResultAddress->close();            
        }
        public function getPhones($vCodProfile, $vCodUser){
            $vCodProfile = (int) $vCodProfile;
            $vCodUser = (int) $vCodUser;
            $vResultPhones = $this->vDataBase->query("SELECT
                                                            tb_enlaceme_profilephones.n_codprofilephone,
                                                            tb_enlaceme_profilephones.n_type,
                                                            tb_enlaceme_profilephones.t_number,
                                                            tb_enlaceme_profilephones.n_active
                                                        FROM tb_enlaceme_profilephones
                                                            WHERE tb_enlaceme_profilephones.n_codprofile = $vCodProfile
                                                                AND tb_enlaceme_profilephones.n_coduser = $vCodUser;");
            return $vResultPhones->fetchAll();
            $vResultPhones->close();            
        }
        /* END SELECT STATEMENT QUERY  */
        /* BEGIN INSERT STATEMENT QUERY  */
		public function profileRegister($vUserCode, $vProfileName, $vName, $vLastName, $vProfileType, $vActive){
                $vUserCode = (int) $vUserCode;
                $vProfileName = (string) $vProfileName;
                $vName = (string) $vName;
                $vLastName = (string) $vLastName;
                $vProfileType = (int) $vProfileType;
                $vActive = (int) $vActive;
                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email') == null){
                    $vUserCreate = 'system['.date('d.m.Y h:m:s').']';
                } else {
                    $vUserCreate = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                }
                $vDateCreate = date("Y-m-d H:i:s", time());
				$vResultProfileRegister = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_profiles(n_coduser, c_profilename, c_name, c_lastname, n_profiletype, n_active, c_usercreate, d_datecreate)
																VALUES(:n_coduser, :c_profilename, :c_name, :c_lastname, :n_profiletype, :n_active, :c_usercreate, :d_datecreate)")
								->execute(
										array(
                                            ':n_coduser' => $vUserCode,
                                            ':c_profilename' => $vProfileName,
                                            ':c_name' => $vName,
                                            ':c_lastname' => $vLastName,
                                            ':n_profiletype' => $vProfileType,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
                                            ':d_datecreate' => $vDateCreate
										));
                return $vResultProfileRegister = $this->vDataBase->lastInsertId();
                $vResultProfileRegister->close();            
			}
		public function insertLocationProfile($vCodProfile, $vCodUser, $vCountry, $vCity, $vAddress, $vActive){
                $vCodProfile = (int) $vCodProfile;
                $vCodUser = (int) $vCodUser;
                $vCountry = (string) $vCountry;
                $vCity = (string) $vCity;
                $vAddress = (string) $vAddress;
                $vActive = (int) $vActive;
                $vUserCreate = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $vDateCreate = date("Y-m-d H:i:s", time());
				$vResultLocationRegister = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_profilelocation(n_codprofile, n_coduser, c_country, c_city, c_address, n_active, c_usercreate, d_datecreate)
																VALUES(:n_codprofile, :n_coduser, :c_country, :c_city, :c_address, :n_active, :c_usercreate, :d_datecreate)")
								->execute(
										array(
                                            ':n_codprofile' => $vCodProfile,
                                            ':n_coduser' => $vCodUser,
                                            ':c_country' => $vCountry,
                                            ':c_city' => $vCity,
                                            ':c_address' => $vAddress,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
                                            ':d_datecreate' => $vDateCreate
										));
                return $vResultLocationRegister = $this->vDataBase->lastInsertId();
                $vResultLocationRegister->close();            
			}
		public function insertPhonesProfile($vCodProfile, $vCodUser, $vTypePhone, $vNumberPhone, $vActive){
                $vCodProfile = (int) $vCodProfile;
                $vCodUser = (int) $vCodUser;
                $vTypePhone = (int) $vTypePhone;
                $vNumberPhone = (string) $vNumberPhone;
                $vActive = (int) $vActive;
                $vUserCreate = IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $vDateCreate = date("Y-m-d H:i:s", time());
				$vResultPhonesRegister = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_profilephones(n_codprofile, n_coduser, n_type, t_number, n_active, c_usercreate, d_datecreate)
																VALUES(:n_codprofile, :n_coduser, :n_type, :t_number, :n_active, :c_usercreate, :d_datecreate)")
								->execute(
										array(
                                            ':n_codprofile' => $vCodProfile,
                                            ':n_coduser' => $vCodUser,
                                            ':n_type' => $vTypePhone,
                                            ':t_number' => $vNumberPhone,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
                                            ':d_datecreate' => $vDateCreate
										));
                return $vResultPhonesRegister = $this->vDataBase->lastInsertId();
                $vResultPhonesRegister->close();            
			}     
        /* END INSERT STATEMENT QUERY  */
        /* BEGIN UPDATE STATEMENT QUERY  */
		public function updateAccountProfile($vCodProfile, $vCodUser, $vName, $vLastName, $vDateBirth, $vDescription)
            {            
                $vCodProfile = (int) $vCodProfile;
                $vCodUser = (int) $vCodUser;
                $vName = (string) $vName;
                $vLastName = (string) $vLastName;
                $vDateBirth = $vDateBirth;
                $vDescription = (string) $vDescription;
                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $vDateMod = date("Y-m-d H:i:s", time());
                $vResultUpdateAccount = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_profiles
                                                                        SET tb_enlaceme_profiles.c_name = :c_name,
                                                                            tb_enlaceme_profiles.c_lastname = :c_lastname,
                                                                            tb_enlaceme_profiles.c_description = :c_description,
                                                                            tb_enlaceme_profiles.d_datebirth = :d_datebirth,
                                                                            tb_enlaceme_profiles.c_usermod = :c_usermod,
                                                                            tb_enlaceme_profiles.d_datemod = :d_datemod
                                                                        WHERE tb_enlaceme_profiles.n_coduser = :n_coduser
                                                                            AND tb_enlaceme_profiles.n_codprofile = :n_codprofile;")
                                ->execute(
                                            array(
                                                ':c_name'=>$vName,
                                                ':c_lastname'=>$vLastName,
                                                ':c_description'=>$vDescription,
                                                ':d_datebirth'=>$vDateBirth,
                                                ':c_usermod'=>$vUserMod,
                                                ':d_datemod'=>$vDateMod,
                                                ':n_coduser'=>$vCodUser,
                                                ':n_codprofile'=>$vCodProfile
                                                 )
                                         );
                return $vResultUpdateAccount;
                $vResultUpdateAccount->close();
			}
		public function updateAccountProfileName($vCodProfile, $vCodUser, $vProfileName)
            {            
                $vCodProfile = (int) $vCodProfile;
                $vCodUser = (int) $vCodUser;
                $vProfileName = (string) $vProfileName;
                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $vDateMod = date("Y-m-d H:i:s", time());
                $vResultUpdateAccount = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_profiles
                                                                        SET tb_enlaceme_profiles.c_profilename = :c_profilename,
                                                                            tb_enlaceme_profiles.c_usermod = :c_usermod,
                                                                            tb_enlaceme_profiles.d_datemod = :d_datemod
                                                                        WHERE tb_enlaceme_profiles.n_coduser = :n_coduser
                                                                            AND tb_enlaceme_profiles.n_codprofile = :n_codprofile;")
                                ->execute(
                                            array(
                                                ':c_profilename'=>$vProfileName,
                                                ':c_usermod'=>$vUserMod,
                                                ':d_datemod'=>$vDateMod,
                                                ':n_coduser'=>$vCodUser,
                                                ':n_codprofile'=>$vCodProfile
                                                 )
                                         );
                return $vResultUpdateAccount;
                $vResultUpdateAccount->close();
			}    
		public function updateLocationProfile($vLocationId, $vCodProfile, $vCodUser, $vCountry, $vCity, $vAddress, $vActive)
            {            
                $vLocationId = (int) $vLocationId;
                $vCodProfile = (int) $vCodProfile;
                $vCodUser = (int) $vCodUser;
                $vCountry = (string) $vCountry;
                $vCity = (string) $vCity;
                $vAddress = (string) $vAddress;
                $vActive = (int) $vActive;
                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $vDateMod = date("Y-m-d H:i:s", time());
                $vResultUpdateLocation = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_profilelocation
                                                                        SET tb_enlaceme_profilelocation.c_country = :c_country,
                                                                            tb_enlaceme_profilelocation.c_city = :c_city,
                                                                            tb_enlaceme_profilelocation.c_address = :c_address,
                                                                            tb_enlaceme_profilelocation.c_usermod = :c_usermod,
                                                                            tb_enlaceme_profilelocation.d_datemod = :d_datemod
                                                                        WHERE tb_enlaceme_profilelocation.n_codprofilelocation = :n_codprofilelocation
                                                                            AND tb_enlaceme_profilelocation.n_codprofile = :n_codprofile
                                                                            AND tb_enlaceme_profilelocation.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                ':c_country'=>$vCountry,
                                                ':c_city'=>$vCity,
                                                ':c_address'=>$vAddress,
                                                ':c_usermod'=>$vUserMod,
                                                ':d_datemod'=>$vDateMod,
                                                ':n_codprofilelocation'=>$vLocationId,
                                                ':n_codprofile'=>$vCodProfile,
                                                ':n_coduser'=>$vCodUser
                                                 )
                                         );
                return $vResultUpdateLocation;
                $vResultUpdateLocation->close();
			}
		public function updatePhoneProfile($vCodProfile, $vCodUser, $vCodeModal, $vTypePhone, $vNumberPhone, $vActive)
            {            
                $vCodProfile = (int) $vCodProfile;
                $vCodUser = (int) $vCodUser;
                $vCodProfilePhone = (int) $vCodeModal;
                $vTypePhone = (string) $vTypePhone;
                $vNumberPhone = (string) $vNumberPhone;
                $vActive = (int) $vActive;
                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $vDateMod = date("Y-m-d H:i:s", time());
                $vResultUpdatePhone = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_profilephones
                                                                        SET tb_enlaceme_profilephones.n_type = :n_type,
                                                                            tb_enlaceme_profilephones.t_number = :t_number,
                                                                            tb_enlaceme_profilephones.c_usermod = :c_usermod,
                                                                            tb_enlaceme_profilephones.d_datemod = :d_datemod
                                                                        WHERE tb_enlaceme_profilephones.n_codprofilephone = :n_codprofilephone
                                                                            AND tb_enlaceme_profilephones.n_codprofile = :n_codprofile
                                                                            AND tb_enlaceme_profilephones.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                ':n_type'=>$vTypePhone,
                                                ':t_number'=>$vNumberPhone,
                                                ':c_usermod'=>$vUserMod,
                                                ':d_datemod'=>$vDateMod,
                                                ':n_codprofilephone'=>$vCodProfilePhone,
                                                ':n_codprofile'=>$vCodProfile,
                                                ':n_coduser'=>$vCodUser
                                                 )
                                         );
                return $vResultUpdatePhone;
                $vResultUpdatePhone->close();
			}    
        /* END UPDATE STATEMENT QUERY  */
        /* BEGIN DELETE STATEMENT QUERY  */
        /* END DELETE STATEMENT QUERY  */
    }
