<?php

class registerModel extends IdEnModel
	{
		public function __construct()
			{
				parent::__construct();
			}
        
		public function registerUser($vEmail, $vPassword, $vRePassword, $vTnc, $vActive, $vUserCreate){
                $vEmail = (string) $vEmail;
                $vPassword = (string) IdEnHash::getHash('sha1',$vPassword,DEFAULT_HASH_KEY);
                $vRePassword = (string) IdEnHash::getHash('sha1',$vRePassword,DEFAULT_HASH_KEY);
                $vUserRole = (string) DEFAULT_USER_REGISTER;
                $vTnc = (int) $vTnc;
                $vActivationCode = (int) rand(11031982, 999999999);
                $vActive = (int) $vActive;
                $vUserCreate = (string) $vUserCreate;

				$this->vDataBase->prepare("INSERT INTO tb_enlaceme_users(c_username, c_pass1, c_pass2, c_email, c_userrole, n_tnc, n_activationcode, n_active, c_usercreate, d_datecreate)
																VALUES(:c_username, :c_pass1, :c_pass2, :c_email, :c_userrole, :n_tnc, :n_activationcode, :n_active, :c_usercreate, NOW())")
                                        ->execute(
                                                array(
                                                    ':c_username' => $vEmail,
                                                    ':c_pass1' => $vPassword,
                                                    ':c_pass2' => $vRePassword,
                                                    ':c_email' => $vEmail,
                                                    ':c_userrole' => $vUserRole,
                                                    ':n_tnc' => $vTnc,
                                                    ':n_activationcode' => $vActivationCode,
                                                    ':n_active' => $vActive,
                                                    ':c_usercreate' => $vUserCreate,
                                                ));            
            
                $vLastIdRegisterUser = $this->vDataBase->lastInsertId();
                return $vLastIdRegisterUser;
                $vLastIdRegisterUser->close();
			}
        
		public function registerUserData($vUserRegisterCode, $vFirstNames, $vLastNames, $vCountry, $vActive, $vUserCreate){
                $vUserRegisterCode = (int) $vUserRegisterCode;
                $vFirstNames = (string) $vFirstNames;
                $vLastNames = (string) $vLastNames;
                $vCountry = (string) $vCountry;
                $vActive = (int) $vActive;
                $vUserCreate = (string) $vUserCreate;

				$this->vDataBase->prepare("INSERT INTO tb_enlaceme_usernames(n_coduser, c_names, c_lastnames, c_country, n_active, c_usercreate, d_datecreate)
																VALUES(:n_coduser, :c_names, :c_lastnames, :c_country, :n_active, :c_usercreate, NOW())")
                                        ->execute(
                                                array(
                                                    ':n_coduser' => $vUserRegisterCode,
                                                    ':c_names' => $vFirstNames,
                                                    ':c_lastnames' => $vLastNames,
                                                    ':c_country' => $vCountry,
                                                    ':n_active' => $vActive,
                                                    ':c_usercreate' => $vUserCreate,
                                                ));            
            
                $vLastIdRegisterUserData = $this->vDataBase->lastInsertId();
                return $vLastIdRegisterUserData;
                $vLastIdRegisterUserData->close();
			}         
	}

?>
