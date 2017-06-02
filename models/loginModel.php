<?php

class loginModel extends IdEnModel
	{
		public function __construct()
			{
				parent::__construct();
			}
			
		public function getUserLoginStatus($vEmail, $vPass)
			{
				$vEmail = (string) $vEmail;
				$vPass = (string) IdEnHash::getHash('sha1',$vPass,DEFAULT_HASH_KEY);

				$vInfoUser = $this->vDataBase->query("SELECT
                                                            tb_enlaceme_users.n_coduser, tb_enlaceme_users.c_username,
                                                            tb_enlaceme_users.c_pass1, tb_enlaceme_users.c_pass2, tb_enlaceme_users.c_email,
                                                            tb_enlaceme_users.c_userrole,
                                                            tb_enlaceme_users.n_activationcode, tb_enlaceme_users.n_active,
                                                            tb_enlaceme_users.c_usercreate, tb_enlaceme_users.d_datecreate,
                                                            tb_enlaceme_profiles.n_codprofile, tb_enlaceme_profiles.n_profiletype, tb_enlaceme_profiles.n_active
                                                        FROM tb_enlaceme_users, tb_enlaceme_profiles
                                                    WHERE tb_enlaceme_users.c_email = '$vEmail'
                                                        AND tb_enlaceme_users.c_pass1 = '$vPass'
                                                        AND tb_enlaceme_users.c_pass2 = '$vPass'
                                                        AND tb_enlaceme_users.n_coduser = tb_enlaceme_profiles.n_coduser
                                                        AND tb_enlaceme_profiles.n_profiletype = 1
                                                        AND tb_enlaceme_profiles.n_active = 1;");
				return $vInfoUser->fetch();
				$vInfoUser->close();
			}
    
		public function getUserCompleteNames($vUserCode)
			{
				$vUserCode = (int) $vUserCode;

				$vUserNames = $this->vDataBase->query("SELECT
                                                            CONCAT(tb_enlaceme_usernames.c_names,' ',tb_enlaceme_usernames.c_lastnames) vUserNames
                                                        FROM tb_enlaceme_users, tb_enlaceme_usernames
                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                    AND tb_enlaceme_users.n_coduser = $vUserCode;");
				return $vUserNames->fetchColumn();
				$vUserNames->close();
			}    
    
		public function getVerifyEmail($vEmailRequest)
			{
				$vEmailRequest = (string) $vEmailRequest;

				$vVerifyEmailStatus = $this->vDataBase->query("SELECT
                                                                    COUNT(*)
                                                                FROM tb_enlaceme_users, tb_enlaceme_profiles
                                                            WHERE tb_enlaceme_users.c_email = '$vEmailRequest'
                                                                AND tb_enlaceme_users.n_coduser = tb_enlaceme_profiles.n_coduser
                                                                AND tb_enlaceme_profiles.n_profiletype = 1;");
				return $vVerifyEmailStatus->fetchColumn();
				$vVerifyEmailStatus->close();
			}         
	}

?>
