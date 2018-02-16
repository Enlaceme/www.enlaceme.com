<?php

class usersModel extends IdEnModel
	{
		public function __construct(){
				parent::__construct();
			}

        /* BEGIN SELECT STATEMENT QUERY  */
        public function getCodUserFromCodFacebookUser($vCodFacebookUser){
            $vCodFacebookUser = (string) $vCodFacebookUser;
            $vResultCodUser = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.n_coduser
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.n_codfacebookuser = $vCodFacebookUser;");
            return $vResultCodUser->fetchColumn();
            $vResultCodUser->close();            
        }
        public function getUserEmail($vCodUser){
            $vCodUser = (int) $vCodUser;
            $vResultUserEmail = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.c_email
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.n_coduser = $vCodUser;");
            return $vResultUserEmail->fetchColumn();
            $vResultUserEmail->close();            
        }    
        public function getUserRole($vCodUser){
            $vCodUser = (int) $vCodUser;
            $vResultUserRole = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.c_userrole
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.n_coduser = $vCodUser;");
            return $vResultUserRole->fetchColumn();
            $vResultUserRole->close();            
        }
        public function getFacebookProfileImage($vCodUser){
            $vCodUser = (int) $vCodUser;
            $vResultFacebookProfileImage = $this->vDataBase->query("SELECT
                                                                        tb_enlaceme_facebookusers.c_picture
                                                                    FROM tb_enlaceme_users, tb_enlaceme_facebookusers
                                                                        WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_facebookusers.n_codfacebookuser
                                                                            AND tb_enlaceme_users.n_coduser = $vCodUser;");
            return $vResultFacebookProfileImage->fetchColumn();
            $vResultFacebookProfileImage->close();            
        }
        public function getPassword($vCodUser){
            $vCodUser = (int) $vCodUser;
            $vResultPassword = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.c_pass1
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.n_coduser = $vCodUser;");
            return $vResultPassword->fetchColumn();
            $vResultPassword->close();            
        }
        public function getRePassword($vCodUser){
            $vCodUser = (int) $vCodUser;
            $vResultRePassword = $this->vDataBase->query("SELECT
                                                                tb_enlaceme_users.c_pass2
                                                            FROM tb_enlaceme_users
                                                                WHERE tb_enlaceme_users.n_coduser = $vCodUser;");
            return $vResultRePassword->fetchColumn();
            $vResultRePassword->close();            
        }    
        /* END SELECT STATEMENT QUERY  */
    
        /* BEGIN INSERT STATEMENT QUERY  */
		public function userRegister($vUserFacebookId, $vUsername, $vPassword1, $vPassword2, $vEmail, $vRole, $vActivationcode, $vActive){
            
                $vUserFacebookId = $vUserFacebookId;
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

				$vResultUserRegister = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_users(n_codfacebookuser, c_username, c_pass1, c_pass2, c_email, c_userrole, n_activationcode, n_active, c_usercreate, d_datecreate)
																VALUES(:n_codfacebookuser, :c_username, :c_pass1, :c_pass2, :c_email, :c_userrole, :n_activationcode, :n_active, :c_usercreate, NOW())")
								->execute(
										array(
                                            ':n_codfacebookuser' => $vUserFacebookId,
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
        /* END INSERT STATEMENT QUERY  */
        
        /* BEGIN UPDATE STATEMENT QUERY  */
		public function updateEmailProfile($vCodUser, $vEmail)
            {            
                $vCodUser = (int) $vCodUser;
                $vEmail = (string) $vEmail;
                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $vDateMod = date("Y-m-d H:i:s", time());
                $vResultUpdateAccount = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_users
                                                                        SET tb_enlaceme_users.c_email = :c_email,
                                                                            tb_enlaceme_users.c_usermod = :c_usermod,
                                                                            tb_enlaceme_users.d_datemod = :d_datemod
                                                                        WHERE tb_enlaceme_users.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                ':c_email'=>$vEmail,
                                                ':c_usermod'=>$vUserMod,
                                                ':d_datemod'=>$vDateMod,
                                                ':n_coduser'=>$vCodUser
                                                 )
                                         );
                return $vResultUpdateAccount;
                $vResultUpdateAccount->close();
			}
		public function updatePasswordProfile($vCodUser, $vPassword, $vRePassword)
            {            
                $vCodUser = (int) $vCodUser;
                $vPassword = (string) IdEnHash::getHash('sha1',$vPassword,DEFAULT_HASH_KEY);
                $vRePassword = (string) IdEnHash::getHash('sha1',$vRePassword,DEFAULT_HASH_KEY);            
                $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                $vDateMod = date("Y-m-d H:i:s", time());
                $vResultUpdatePassword = $this->vDataBase->prepare("UPDATE
                                                                            tb_enlaceme_users
                                                                        SET tb_enlaceme_users.c_pass1 = :c_pass1,
                                                                            tb_enlaceme_users.c_pass2 = :c_pass2,
                                                                            tb_enlaceme_users.c_usermod = :c_usermod,
                                                                            tb_enlaceme_users.d_datemod = :d_datemod
                                                                        WHERE tb_enlaceme_users.n_coduser = :n_coduser;")
                                ->execute(
                                            array(
                                                ':c_pass1'=>$vPassword,
                                                ':c_pass2'=>$vRePassword,
                                                ':c_usermod'=>$vUserMod,
                                                ':d_datemod'=>$vDateMod,
                                                ':n_coduser'=>$vCodUser
                                                 )
                                         );
                return $vResultUpdatePassword;
                $vResultUpdatePassword->close();
			}     
        /* END UPDATE STATEMENT QUERY  */
    }